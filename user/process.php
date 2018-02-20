<?php
session_start();
require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'addExperience' :
		addExperience();
		break;

	case 'candidateSignup' :
		candidateSignup();
		break;

	case 'companySignup' :
		companySignup();
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

function candidateSignup()
{
	// if we found an error save the error message in this variable

	$obj = new Profile;
	$obj->username = $_POST['username'];
	$obj->firstName = $_POST['firstName'];
	$obj->lastName = $_POST['lastName'];
	$obj->password = $_POST['password'];
	$obj->level = 'employee';

	if ($_POST['password']==$_POST['confrimPassword']){
		$obj->createOne($obj);

		$obj1 = new Candidate;
		$obj1->username = $_POST['username'];
		$obj1->email = $_POST['email'];
		$obj1->contactNumber = $_POST['contactNumber'];
		$obj1->createOne($obj1);

		header('Location: ../home/');
	}else{
		header('Location: ../user/?view=signup&error=Password not match!');
	}

}

function companySignup()
{
	// if we found an error save the error message in this variable

	$obj = new Profile;
	$obj->username = $_POST['username'];
	$obj->firstName = $_POST['firstName'];
	$obj->lastName = $_POST['lastName'];
	$obj->password = $_POST['password'];
	$obj->level = 'employer';

	if ($_POST['password']==$_POST['confrimPassword']){
		$obj->createOne($obj);

		$obj1 = new Company;
		$obj1->username = $_POST['username'];
		$obj1->name = $_POST['name'];
		$obj1->description = $_POST['description'];
		$obj1->email = $_POST['email'];
		$obj1->contactPerson = $_POST['contactPerson'];
		$obj1->contactNumber = $_POST['contactNumber'];
		$obj1->address = $_POST['address'];
		$obj1->createOne($obj1);

		header('Location: ../home/');
	}else{
		header('Location: ../user/?view=signup&error=Password not match!');
	}

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
		header('Location: ../home/');
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
?>
