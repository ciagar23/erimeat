<?php
require_once '../config/database.php';
require_once '../config/CRUD.php';

$action = $_GET['action'];

switch ($action) {

	case 'create' :
		create();
		break;

	case 'submitResume' :
		submitResume();
		break;

	case 'submitApplication' :
		submitApplication();
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

	require_once "../email/swift/lib/swift_required.php";

	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
										->setUsername('samplehr2k18@gmail.com')
										->setPassword('smpl2k18');

	$mailer = Swift_Mailer::newInstance($transport);

	$message = Swift_Message::newInstance("No Reply")
										->setFrom(array('samplehr2k18@gmail.com' => 'Teamire'))
										->setTo(array($obj->workEmail));

	$message->setBody("We have accepted your request. We will get back to you.", 'text/html');

	if(!empty($targetpath)) {
		 $message->attach(Swift_Attachment::fromPath($targetpath));
	}

	if (!$mailer->send($message, $errors)) {
		echo "Error:";
		print_r($errors);
	}

	header('Location: ../home/?view=success');
}

function submitResume(){

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
			$obj->createOne($obj);
			header('Location: ../home/?view=success');

			require_once "../email/swift/lib/swift_required.php";

			$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
												->setUsername('samplehr2k18@gmail.com')
												->setPassword('smpl2k18');

			$mailer = Swift_Mailer::newInstance($transport);

			$message = Swift_Message::newInstance("No Reply")
												->setFrom(array('samplehr2k18@gmail.com' => 'Teamire'))
												->setTo(array($obj->email));

			$message->setBody("We have accepted your resume. We will get back to you.", 'text/html');

			if(!empty($targetpath)) {
				 $message->attach(Swift_Attachment::fromPath($targetpath));
			}

			if (!$mailer->send($message, $errors)) {
				echo "Error:";
				print_r($errors);
			}
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

			header('Location: ../home/?view=success');

			require_once "../email/swift/lib/swift_required.php";

			$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
												->setUsername('samplehr2k18@gmail.com')
												->setPassword('smpl2k18');

			$mailer = Swift_Mailer::newInstance($transport);

			$message = Swift_Message::newInstance("No Reply")
												->setFrom(array('samplehr2k18@gmail.com' => 'Teamire'))
												->setTo(array($obj->email));

			$message->setBody("We have accepted your application. We will get back to you.", 'text/html');

			if(!empty($targetpath)) {
				 $message->attach(Swift_Attachment::fromPath($targetpath));
			}

			if (!$mailer->send($message, $errors)) {
				echo "Error:";
				print_r($errors);
			}
		}
		else{
			header('Location: ../home/?error=Not uploaded');
		}

}

?>
