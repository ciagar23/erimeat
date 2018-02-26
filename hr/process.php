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

	case 'denyResume' :
		denyResume();
		break;

	case 'setInterViewDate' :
		setInterViewDate();
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

function setInterviewDate()
{
	$email = $_POST['email'];

	$obj1 = new interviewDate;
	$obj1->resumeId = $_POST['resumeId'];
	$obj1->date = $_POST['date'];
	$obj1->time = $_POST['time'];
	$obj1->createOne($obj);

	$obj = new Resume;
	$newObj = $obj->readOne($_POST['resumeId']);
	$newObj->isApproved = 1;
	$obj->updateOne($newObj);

	$content = "We have considered your application. Please be available on the schedule below<br>
							for your interview.<br><br>
							Date = $obj1->date<br>
							Time = $obj1->time<br><br>
							Teamire";
	sendEmail($email, $content);

	header('Location: index.php?view=applicants');
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
