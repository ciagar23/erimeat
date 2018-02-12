<?php

require_once '../config/database.php';
require_once 'operation.php';

$action = $_GET['action'];

switch ($action) {

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

	$query = mysql_query("select * from user where username = '".$username."' and password = '".$password."'");

	if (mysql_num_rows($query) != 0)
	{

		$_SESSION['user_session'] = $username;

			header('Location: ../home/');

	}
	else
	{
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
	$obj->username = $_POST['username'];
	$obj->firstName = $_POST['firstName'];
	$obj->lastName = $_POST['lastName'];
	$obj->email = $_POST['email'];
	$obj->contact = $_POST['contact'];
	$obj->address = $_POST['address'];
	$obj->aboutMe = $_POST['aboutMe'];
	$obj->linkdin = $_POST['linkdin'];
	$obj->skype = $_POST['skype'];
	$obj->updateOne($_GET['Id']);

	header('Location: ../user/?view=profileDisplay');
}


?>
