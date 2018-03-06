<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'login' :
	login();
	break;

	case 'logout' :
	logout();
	break;

	case 'addExperience' :
		addExperience();
		break;

	case 'jobRequest' :
		jobRequest();
		break;

	case 'clientRequest' :
		clientRequest();
		break;

	case 'changepassword' :
		changepassword();
		break;

	case 'denyResume' :
		denyResume();
		break;

	case 'hireApplicant' :
		hireApplicant();
		break;

	case 'setInterViewDate' :
		setInterViewDate();
		break;

	case 'approveTimesheet' :
		approveTimesheet();
		break;

	default :
}

function login()
{
	// if we found an error save the error message in this variable

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = admin()->get("username='$username' and password = '$password'");

	if ($result){
		$_SESSION['hr_session'] = $username;
		header('Location: index.php');
	}
	else {
			header('Location: index.php?error=User not found in the Database');
	}
}

function logout()

{
	//logout.php
session_start();
session_destroy();
header('Location: index.php');
	exit;
}

function denyResume()
{
	$resume = resume();
	$resume->obj['isApproved'] = "-1";
	$resume->update("$_GET['Id']");

	header('Location: index.php?view=applicants');
}

function approveTimesheet()
{
	$timesheet = timesheet();
	$timesheet->status = "1";
	$timesheet->update("$_GET['Id']");

	header('Location: index.php?view=timekeepingCompanyList');
}

function setInterviewDate()
{
	$email = $_POST['email'];

	$intDate = interview_date();
	$intDate->resumeId = "$_POST['resumeId']";
	$intDate->date = "$_POST['date']";
	$intDate->time = "$_POST['time']";
	$intDate->create();

	$resume = resume();
	$resume->isApproved = "1";
	$resume->update("$_POST['resumeId']");

	$content = "We have considered your application. Please be available on the schedule below<br>
							for your interview.<br><br>
							Date = $intDate->date<br>
							Time = $intDate->time<br><br>
							Teamire";
	sendEmail($email, $content);

	header('Location: index.php?view=applicants');
}

function hireApplicant()
{
	if ($_GET['result']=="approve"){
		$result = '1';
		__createEmployeeLogin($_GET['Id'], $_GET['jobId']);
	}
	else{
		$result = '-1';
	}

	$obj = new Resume;
	$newObj = $obj->readOne($_GET['Id']);
	$newObj->isHired = $result;
	$obj->updateOne($newObj);

	header('Location: index.php?view=scheduleInterview');
}

function __createEmployeeLogin($Id, $jobId){

	$resume = new Resume;
	$resume = $resume->readOne($Id);

	// Create account
	$obj = new Profile;
	$obj->username =  "E" . round(microtime(true));
	$obj->password = "temppassword";
	$obj->firstName = $resume->firstName;
	$obj->lastName = $resume->lastName;
	$obj->level = "employee";
	$obj->createOne($obj);

	$emp = new Employee;
	$emp->jobId = $jobId;
	$emp->username = $obj->username;
	$emp->createDate = 'NOW()';
	$emp->createOne($emp);

	// Send email
	$content = "Congratulations!<br><br>
							You are hired. We have approved your application. Please use the credentials we have created for you.<br>
							Username: $obj->username <br>
							Password: $obj->password <br><br>
							To login to our website. Please click the link below:<br>
							<a href='www.bandbajabaraath.kovasaf.com/employee/index.php?view=changepassword'>www.bandbajabaraath.kovasaf.com</a><br><br>
							Teamire";
	sendEmail($resume->email, $content);
}

function clientRequest()
{
	$result = 1;
	__createClientLogin($_GET['Id']);

	$obj = new Company;
	$newObj = $obj->readOne($_GET['Id']);
	$newObj->isApproved = $result;
	$obj->updateOne($newObj);

	header('Location: index.php?view=clientRequest');
}

function __createClientLogin($Id){
	// Get Detail
	$comp = new Company;
	$comp = $comp->readOne($Id);

	// Create account
	$obj = new Profile;
	$obj->username = "C" . $comp->abn;
	$obj->password = "temppassword";
	$obj->firstName = $comp->contactPerson;
	$obj->lastName = $comp->name;
	$obj->level = "company";
	$obj->createOne($obj);

	// Update Company
	$comp = new Company;
	$newComp = $comp->readOne($Id);
	$newComp->username = $obj->username;
	$comp->updateOne($newComp);

	// Send email
	$content = "We have approved your request. Please use the credentials we have created for you.<br>
							Username: $obj->username <br>
							Password: $obj->password <br><br>
							To login to our website. Please click the link below:<br>
							<a href='www.bandbajabaraath.kovasaf.com/company/index.php?view=changepassword'>www.bandbajabaraath.kovasaf.com</a><br><br>
							Teamire";
	sendEmail($newComp->email, $content);
}

function changepassword()
{
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	if($password == $password2){
		if($password != 'temppassword'){
			$obj = new Profile;
			$newObj = $obj->readOne($_POST['username']);
			$newObj->password = $password;
			$obj->updateOne($newObj);

			header('Location: ../account/');
		}
		else{
			header('Location: index.php?view=changepassword&error=Invalid Password');
		}
	}
	else{
		header('Location: index.php?view=changepassword&error=Password not matched');
	}
}

function jobRequest()
{
	if ($_GET['result']=="approve"){
		$result = 1;
	}
	else{
		$result = -1;
	}

	$obj = new Job;
	$newObj = $obj->readOne($_GET['Id']);
	$newObj->isApproved = $result;
	$obj->updateOne($newObj);

	if ($result==1){
	// Send email
	$content = __approvedJobRequestEmailMessage();
	sendEmail($newObj->workEmail, $content);
}else{
	// Send email
	$content = __deniedJobRequestEmailMessage();
	sendEmail($newObj->workEmail, $content);
}

	header('Location: index.php?view=talentRequest');
}

/* ======================== Email Messages ==============================*/

function __approvedJobRequestEmailMessage(){
	return "We have approved your request.<br><br>
					Teamire";
}

function __deniedJobRequestEmailMessage(){
	return "We apologized we have denied your request as it did not match our requirements.<br><br>
					Teamire";
}
?>
