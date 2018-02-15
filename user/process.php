<?php

require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'addExperience' :
		addExperience();
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

	default :
}


function login()
{
	// if we found an error save the error message in this variable

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = Profile::login($username, $password);

	if ($result){

		$_SESSION['user_session'] = $username;
		header('Location: ../home/');
	}
	else {
			header('Location: index.php?error=User not found in the Database');
	}

}


function logout()

{
	if (isset($_SESSION['user_session'])) {
		unset($_SESSION['user_session']);
	}
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

function addExperience()
{
	$obj = new Experience;
	$obj->position = $_POST['position'];
	$obj->company = $_POST['company'];
	$obj->start = '2015';
	$obj->end = '2018';
	$obj->description = $_POST['description'];
	$obj->owner = $_SESSION['user_session'];
	$obj->createOne($obj);

	header('Location: ../user/?view=profileDisplay');
}


?>
