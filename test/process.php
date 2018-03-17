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

	case 'updateClient' :
		updateClient();
		break;

	case 'updateJob' :
		updateJob();
		break;

	default :
}

function login()
{
	// if we found an error save the error message in this variable

	$username = $_POST['username'];
	$password = $_POST['password'];

		$result = user()->get("username='$username' and password = '$password' and level='company'");

	if ($result){
		$_SESSION['company_session'] = $username;
		$_SESSION['user_session'] = $username;
		if ($password == 'temppassword'){
			header('Location: index.php?view=changepassword');
		}
		else{
			header('Location: index.php');
		}
	}
	else {
			header('Location: index.php?error=User not found in the Database');
	}
}

function updateClient(){
	$Id = $_GET['Id'];

	$company = company();
	$company->obj['name'] = $_POST['name'];
	$company->obj['description'] = $_POST['description'];
	$company->obj['email'] = $_POST['email'];
	$company->obj['contactPerson'] = $_POST['contactPerson'];
	$company->obj['phoneNumber'] = $_POST['phoneNumber'];
	$company->obj['mobileNumber'] = $_POST['mobileNumber'];
	$company->obj['address'] = $_POST['address'];
	$company->obj['department'] = $_POST['department'];
	$company->update("Id=$Id");

	header('Location: index.php?view=clientDetail&Id='.$Id);
}

function updateJob(){
	$Id = $_GET['Id'];

	$job = job();
	$job->obj['position'] = $_POST['position'];
	$job->obj['workEmail'] = $_POST['workEmail'];
	$job->obj['jobTitle'] = $_POST['jobTitle'];
	$job->obj['businessPhone'] = $_POST['businessPhone'];
	$job->obj['zipCode'] = $_POST['zipCode'];
	$job->obj['address'] = $_POST['address'];
	$job->obj['requiredExperience'] = $_POST['requiredExperience'];
	$job->obj['comment'] = $_POST['comment'];
	$job->obj['contactName'] = $_POST['contactName'];
	$job->update("Id=$Id");

	header('Location: index.php?view=jobDetail&Id='.$Id);
}


function logout()

{
	//logout.php
session_start();
session_destroy();
header('Location: ../home/?view=logins');
	exit;
}

?>
