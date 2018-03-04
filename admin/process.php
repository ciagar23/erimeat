<?php
session_start();
require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'jobRequest' :
		jobRequest();
		break;

	case 'clientRequest' :
		clientRequest();
		break;

	case 'addAccount' :
		addAccount();
		break;

	case 'login' :
		login();
		break;

	case 'logout' :
		logout();
		break;

	case 'removeCompany' :
		removeCompany();
		break;

	default :
}

function addAccount()
{

	$obj = new Admin;
	$newObj = $obj->readOne($_POST['username']);

	if($newObj->username == 1){
		header('Location: ../admin/?view=accounts&error=User already exist!');
	}
	else{
		$obj->firstName = $_POST['firstName'];
		$obj->lastName = $_POST['lastName'];
		$obj->username = $_POST['username'];
		$obj->password = $_POST['password'];
		$obj->level = $_POST['level'];
		$obj->createOne($obj);

		header('Location: ../admin/?view=success');
	}
}

function login()
{
	// if we found an error save the error message in this variable

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = Admin::login($username, $password, 'admin');

	if ($result){
		session_start();
		$_SESSION['admin_session'] = $username;
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

function clientRequest()
{
	$result = 1;
	__createLogin($_GET['Id']);

	$obj = new Company;
	$newObj = $obj->readOne($_GET['Id']);
	$newObj->isApproved = $result;
	$obj->updateOne($newObj);

	header('Location: index.php?view=clientRequest');
}

function __createLogin($Id){
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

function removeCompany()
{
	$obj = new Company;
	$newComp = $obj->deleteOne($_GET['Id']);

	header('Location: ../admin/?view=companies&message=Succesfully Deleted');
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
