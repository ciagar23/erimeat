<?php
session_start();
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
	$obj->jobFunctionId = $_POST['jobFunctionId'];
	$obj->positionTypeId = $_POST['positionTypeId'];
	$obj->position = $_POST['position'];
	$obj->company = $_POST['company'];
	$obj->comment = $_POST['comment'];
	$obj->workEmail = $_POST['workEmail'];
	$obj->jobTitle = $_POST['jobTitle'];
	$obj->businessPhone = $_POST['businessPhone'];
	$obj->zipCode = $_POST['zipCode'];
	$obj->requiredExperience = $_POST['requiredExperience'];
	$obj->owner = $_SESSION['user_session'];
	$obj->createOne($obj);

	header('Location: ../user/?view=profileDisplay');
}


?>
