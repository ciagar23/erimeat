<?php

require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'create' :
		create();
		break;

	default :
}

function create()
{
	$obj = new Job;
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

	$obj->jobFunctionId = $_POST['username'];
	$obj->positionTypeId = $_POST['username'];
	$obj->position = $_POST['username'];
	$obj->company = $_POST['username'];
	$obj->comment = $_POST['username'];
	$obj->workEmail = $_POST['username'];
	$obj->jobTitle = $_POST['username'];
	$obj->businessPhone = $_POST['username'];
	$obj->owner = $_POST['username'];

	header('Location: ../user/?view=profileDisplay');
}


?>
