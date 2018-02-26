<?php
session_start();
require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'jobRequest' :
		jobRequest();
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
		__createLogin($_GET['Id']);
	}
	else{
		$result = -1;
	}

	$obj = new Job;
	$newObj = $obj->readOne($_GET['Id']);
	$newObj->isApproved = $result;
	$obj->updateOne($newObj);

	if ($result==-1){
		// Send email
		$content = "We apologized we have denied your requiest as it did not match our requirements.<br><br>
								Teamire";
		sendEmail($newObj->workEmail, $content);

	}

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

	// Send email
	$content = "We have approved your request. Please use the credentials we have created for you.<br>
							Username: $obj->username <br>
							Password: $obj->password <br><br>
							To login to our website. Please click the link below:<br>
							<a href='www.bandbajabaraath.kovasaf.com/company/index.php?view=changepassword'>www.bandbajabaraath.kovasaf.com</a><br><br>
							Teamire";
	sendEmail($job->workEmail, $content);
}
?>
