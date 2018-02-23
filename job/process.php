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

	// This is if you want to get the last 6 digits
	/*
substr(round(microtime(true)), -6)

	*/


	$obj = new Job;
	$obj->refNum = substr(round(microtime(true)), -6);
	$obj->jobFunctionId = $_POST['jobFunctionId'];
	$obj->positionTypeId = $_POST['positionTypeId'];
	$obj->firstName = $_POST['firstName'];
	$obj->lastName = $_POST['lastName'];
	$obj->position = $_POST['position'];
	$obj->company = $_POST['company'];
	$obj->comment = $_POST['comment'];
	$obj->address = $_POST['address'];
	$obj->workEmail = $_POST['workEmail'];
	$obj->jobTitle = $_POST['jobTitle'];
	$obj->businessPhone = $_POST['businessPhone'];
	$obj->zipCode = $_POST['zipCode'];
	$obj->requiredExperience = $_POST['requiredExperience'];
	$obj->createOne($obj);

	header('Location: ../job/?view=success');
}

?>
