<?php
session_start();
require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'jobRequest' :
		jobRequest();
		break;

	case 'login' :
		login();
		break;

	case 'logout' :
		logout();
		break;

	default :
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
		__createLogin($_GET['Id']);
	}
	else{
		$result = -1;
	}

	$obj = new Job;
	$newObj = $obj->readOne($_GET['Id']);
	$newObj->isApproved = $result;
	$obj->updateOne($newObj);

	header('Location: index.php?view=talentRequest');
}

function __createLogin($Id){
	// Get Detail
	$job = new Job;
	$job = $job->readOne($Id);

	// Create account
	$obj = new Profile;
	$obj->username = "C" . $job->refNum;
	$obj->password = "temppassword";
	$obj->firstName = $job->firstName;
	$obj->lastName = $job->lastName;
	$obj->level = "company";
	$obj->createOne($obj);

}
?>
