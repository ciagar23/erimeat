<?php
session_start();
require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'submitResume' :
		submitResume();
		break;

	default :
}

function submitResume()
{
		$upload = uploadFile($_FILES['upload_file']);
		if ($upload)
		{
			$obj = new Resume;
			$obj->jobId = "0";
			$obj->jobFunctionId = $_POST["jobFunctionId"];
			$obj->firstName = $_POST["firstName"];
			$obj->lastName = $_POST["lastName"];
			$obj->email = $_POST["email"];
			$obj->phoneNumber = $_POST["phoneNumber"];
			$obj->address1 = $_POST["address1"];
			$obj->address2 = $_POST["address2"];
			$obj->city = $_POST["city"];
			$obj->state = $_POST["state"];
			$obj->zipCode = $_POST["zipCode"];
			$obj->uploadedResume = $upload;
			$obj->owner = $_SESSION['user_session'];
			$obj->createOne($obj);
			header('Location: ../user/?view=profileDisplay');
		}
		else{
			header('Location: ../category/?error=Not uploaded');
		}

}

?>
