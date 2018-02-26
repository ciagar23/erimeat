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

		$conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', '');

		$dtr_date = date('Y-m-d');
		$checkIn = date('h:i:sa');

		$sql = "INSERT INTO dtr (employee_name, dtr_date, checkIn)
		VALUES ('$username', '$dtr_date', '$checkIn')";
		$conn->exec($sql);
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

function logout()

{
	//logout.php
session_start();
session_destroy();
header('Location: index.php');
	exit;
}

?>
