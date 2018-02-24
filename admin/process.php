<?php
session_start();
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

	case 'changepassword' :
		changepassword();
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
		session_start();
		$_SESSION['user_session'] = $username;
		if ($password == 'temppassword'){
			header('Location: ../user/?view=changepassword');
		}
		else{
			header('Location: ../account/');
		}
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
header('Location: ../user/');
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
?>
