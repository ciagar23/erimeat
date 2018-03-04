<?php
require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'create' :
		create();
		break;

	case 'clientRequest' :
		clientRequest();
		break;

	case 'submitResume' :
		submitResume();
		break;

	case 'submitApplication' :
		submitApplication();
		break;

	case 'sendInquiry' :
		sendInquiry();
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
	$obj->refNum = round(microtime(true));
	$obj->jobFunctionId = $_POST['jobFunctionId'];
	$obj->positionTypeId = $_POST['positionTypeId'];
	$obj->contactName = $_POST['contactName'];
	$obj->position = $_POST['position'];
	$obj->company = $_POST['company'];
	$obj->abn = $_POST['abn'];
	$obj->comment = $_POST['comment'];
	$obj->address = $_POST['address'];
	$obj->workEmail = $_POST['workEmail'];
	$obj->jobTitle = $_POST['jobTitle'];
	$obj->businessPhone = $_POST['businessPhone'];
	$obj->zipCode = $_POST['zipCode'];
	$obj->requiredExperience = $_POST['requiredExperience'];
	$obj->createOne($obj);

	// Send email
	$content = __talentRequestEmailMessage();
	sendEmail($obj->workEmail, $content);

	header('Location: ../company/');
}

function clientRequest()
{

	// This is if you want to get the last 6 digits
	/*
substr(round(microtime(true)), -6)

	*/

	$obj = new Company;
	$obj->username = '';
	$obj->jobFunctionId = $_POST['jobFunctionId'];
	$obj->department = $_POST['department'];
	$obj->name = $_POST['name'];
	$obj->abn = $_POST['abn'];
	$obj->contactPerson = $_POST['contactPerson'];
	$obj->email = $_POST['email'];
	$obj->address = $_POST['address'];
	$obj->phoneNumber = $_POST['phoneNumber'];
	$obj->mobileNumber = $_POST['mobileNumber'];
	$obj->description = $_POST['description'];
	$obj->createOne($obj);

	// Send email
	$content = __clientRequestEmailMessage();
	/* should also send email to hr and admin */
	sendEmail($obj->email, $content);

	header('Location: ../home/?view=success');
}

function submitResume(){

		$uploadResume = uploadFile($_FILES['upload_file']);
		$uploadSpecs = uploadFile($_FILES['upload_specs']);
		if ($uploadResume or $uploadSpecs)
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
			$obj->speedtest = $_POST["speedtest"];
			$obj->uploadedResume = $uploadResume;
			$obj->uploadedSpecs = $uploadSpecs;
			$obj->createOne($obj);

			// Send email
			$content = __submitResumeEmailMessage();
			/* should also send email to hr and admin */
			sendEmail($obj->email, $content);

			header('Location: ../home/?view=success');
		}
		else{
			header('Location: ../home/?error=Not uploaded');
		}
}

function submitApplication()
{
		$upload = uploadFile($_FILES['upload_file']);
		if ($upload)
		{
			$obj = new Resume;
			$obj->jobId = $_POST["jobId"];
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
			$obj->createOne($obj);

			// Send Email
			$content = __submitApplicationEmailMessage();
			/* should also send email to hr and admin */
			sendEmail($obj->email, $content);

			header('Location: ../home/?view=success');

		}
		else{
			header('Location: ../home/?error=Not uploaded');
		}

}

function sendInquiry()
{
		$obj = new Inquiry;
		$obj->firstName = $_POST["firstName"];
		$obj->lastName = $_POST["lastName"];
		$obj->phoneNumber = $_POST["phoneNumber"];
		$obj->jobFunctionId = $_POST["jobFunctionId"];
		$obj->workEmail = $_POST["workEmail"];
		$obj->zipCode = $_POST["zipCode"];
		$obj->message = $_POST["message"];
		$obj->createOne($obj);

		header('Location: ../home/?view=success');
}


/* ======================== Email Messages ==============================*/

function __talentRequestEmailMessage(){
	return "We have receieved your request. Thank you for showing interest in our company in looking for your candidate.<br>
					Please be informed that we are in the midst of processing your request and shall get<br>
					in touch with you again if your request have meet our condition.<br><br>
					Teamire";
}

function __submitResumeEmailMessage(){
	return "Thank you for submiting your resume to Teamire. As of now, we are still reviewing your documents.<br>
					If we find any of our current opportunities that match your qualifications, we will contact you with the<br>
					next steps of your application.<br><br>
					We look forward to assisting you with your job search!<br><br>
					Teamire";
}

function __submitApplicationEmailMessage(){
	return "We have recieved your application. Thank you for the interest shown in our company.<br><br>
					Please be informed that we are in the midst of processing the applications and shall get<br>
					in touch with you again if you are shortlisted for an interview.<br><br>
					Teamire";
}

function __clientRequestEmailMessage(){
	return "We have recieved your request. Thank you for the interest shown in our company.<br><br>
					Please be informed that we are in the midst of processing your request and shall get<br>
					in touch with you again once you've meet our requirements.<br><br>
					Teamire";
}
?>
