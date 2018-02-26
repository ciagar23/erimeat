<?php
session_start();
require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'login' :
		login();
		break;

	case 'logout' :
		logout();
		break;

	case 'changepassword' :
		changepassword();
		break;

	case 'stampBreak' :
		stampBreak();
		break;

	case 'stampLunch' :
		stampLunch();
		break;

	case 'stampCheckIn' :
		stampCheckIn();
		break;

	case 'stampCheckOut' :
		stampCheckOut();
		break;

	default :
}

function login()
{
	// if we found an error save the error message in this variable

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = Profile::login($username, $password, 'employee');

	if ($result){
		session_start();
		$_SESSION['employee_session'] = $username;
		if ($password == 'temppassword'){
			header('Location: ?view=changepassword');
		}
		else{

		$checkDtr = DTR::readOne($username, date("Y-m-d"));
		if (!$checkDtr){
				$dtr = new DTR;
				$dtr->owner = $username;
				$dtr->createDate = 'NOW()';
				$dtr->checkIn = 'NOW()';
				$dtr->createOne($dtr);
			}

		header('Location: index.php');
		}
	}
	else {
			header('Location: index.php?error=User not found in the Database');
	}
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

			header('Location: index.php');
		}
		else{
			header('Location: index.php?view=changepassword&error=Invalid Password');
		}
	}
	else{
		header('Location: index.php?view=changepassword&error=Password not matched');
	}
}

function stampCheckIn(){

		$obj = new DTR;
		$dtr = $obj->readOne($_SESSION['employee_session'], date("Y-m-d"));

	if ($dtr->status == 1)
	{
		__breakIn();
	}

	if ($dtr->status == 2)
	{
		__lunchIn();
	}

}

function __breakIn(){

	$currentUser = $_SESSION['employee_session'];
	$currentDate = date("Y-m-d");
	$db = Database::connect();
	$pdo = $db->prepare("update dtr set breakIn=NOW(),
															status = '0'
															where owner='$currentUser'
															and createDate='$currentDate'
															");
	$pdo->execute();
	Database::disconnect();

	header('Location: index.php');
}

function __lunchIn(){

	$currentUser = $_SESSION['employee_session'];
	$currentDate = date("Y-m-d");
	$db = Database::connect();
	$pdo = $db->prepare("update dtr set lunchIn=NOW(),
															status = '0'
															where owner='$currentUser'
															and createDate='$currentDate'
															");
	$pdo->execute();
	Database::disconnect();

	header('Location: index.php');
}

function stampBreak(){

	$currentUser = $_SESSION['employee_session'];
	$currentDate = date("Y-m-d");
	$db = Database::connect();
	$pdo = $db->prepare("update dtr set breakOut=NOW(),
															status = '1'
															where owner='$currentUser'
															and createDate='$currentDate'
															");
	$pdo->execute();
	Database::disconnect();

	header('Location: index.php');
}


function stampLunch(){

	$currentUser = $_SESSION['employee_session'];
	$currentDate = date("Y-m-d");
	$db = Database::connect();
	$pdo = $db->prepare("update dtr set lunchOut=NOW(),
															status = '2'
															where owner='$currentUser'
															and createDate='$currentDate'
															");
	$pdo->execute();
	Database::disconnect();

	header('Location: index.php');
}


function stampCheckOut(){

	$currentUser = $_SESSION['employee_session'];
	$currentDate = date("Y-m-d");
	$db = Database::connect();
	$pdo = $db->prepare("update dtr set checkOut=NOW(),
															status = '3'
															where owner='$currentUser'
															and createDate='$currentDate'
															");
	$pdo->execute();
	Database::disconnect();

	header('Location: index.php');
}

function logout()

{
	//logout.php
session_start();
session_destroy();
header('Location: index.php');
	exit;
}

?>
