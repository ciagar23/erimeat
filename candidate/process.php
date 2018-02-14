<?php

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
			$obj = new Application;
			$obj->jobId = "0";
			$obj->coverLetter = $_POST['coverLetter'];
			$obj->resume = $upload;
			$obj->owner = $_SESSION['user_session'];
			$obj->createOne($obj);
			header('Location: ../user/?view=profileDisplay');
		}
		else{
			header('Location: ../category/?error=Not uploaded');
		}

}

?>
