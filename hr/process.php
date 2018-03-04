<?php
session_start();
require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'addExperience' :
		addExperience();
		break;

	case 'jobRequest' :
		jobRequest();
		break;

	case 'clientRequest' :
		clientRequest();
		break;

	case 'login' :
		login();
		break;

	case 'update' :
		update();
		break;

	case 'logout' :
		logout();
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

	$result = Admin::login($username, $password, 'hr');

	if ($result){
		session_start();
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

function update()
{
	$obj = new Profile;
	$newObj = $obj->readOne($_GET['Id']);
	$newObj->username = $_POST['username'];
	$newObj->firstName = $_POST['firstName'];
	$newObj->lastName = $_POST['lastName'];
	$newObj->email = $_POST['email'];
	$newObj->contact = $_POST['contact'];
	$newObj->address = $_POST['address'];
	$newObj->aboutMe = $_POST['aboutMe'];
	$newObj->linkdin = $_POST['linkdin'];
	$newObj->skype = $_POST['skype'];
	$obj->updateOne($newObj);

	header('Location: ../user/?view=profileDisplay');
}

function denyResume()
{
	$obj = new Resume;
	$newObj = $obj->readOne($_GET['Id']);
	$newObj->isApproved = -1;
	$obj->updateOne($newObj);

	header('Location: index.php?view=applicants');
}

function approveTimesheet()
{
	$obj = new Timesheet;
	$newObj = $obj->readOne($_GET['Id']);
	$newObj->status = 1;
	$obj->updateOne($newObj);

	header('Location: index.php?view=timekeepingCompanyList');
}

function setInterviewDate()
{
	$email = $_POST['email'];

	$intObj = new interviewDate;
	$intObj->resumeId = $_POST['resumeId'];
	$intObj->date = $_POST['date'];
	$intObj->time = $_POST['time'];
	$intObj->createOne($intObj);

	$obj = new Resume;
	$newObj = $obj->readOne($_POST['resumeId']);
	$newObj->isApproved = 1;
	$obj->updateOne($newObj);

	$content = "We have considered your application. Please be available on the schedule below<br>
							for your interview.<br><br>
							Date = $intObj->date<br>
							Time = $intObj->time<br><br>
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
		/* internal notification */
	}
	else{
		$result = -1;
		/* internal notification */
	}

	$obj = new Job;
	$newObj = $obj->readOne($_GET['Id']);
	$newObj->isApproved = $result;
	$obj->updateOne($newObj);

	header('Location: index.php?view=talentRequest');
}
?>
