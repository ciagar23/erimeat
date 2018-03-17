<?php
session_start();
include_once("../config/database.php");
include_once("../config/Models.php");

// Set which view is needed
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

// Other $_GET
$params = "";
$jobId = isset($_GET['jobId']) ? "jobId=" . $_GET['jobId'] . " and " : "";
$status = isset($_GET['status']) ? "status=" . $_GET['status'] . " and " : "";
$endParam = " and Id>0";

switch ($view) {

	case 'login' :
		$content 	= 'login.php';
		$template	= '../include/template_login.php';
		break;

	case 'talentRequest' :
		$currentSession = isset($_SESSION["admin_session"]);
		$title = "Talent Requests";
		$content 	= 'jobList.php';
		$template	= '../include/dashboard.php';
		break;

	case 'employeeList' :
		$params = "jobId=" . $_GET['jobId'] . " and status=" . $_GET['status'];
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'employeeList.php';
		$template	= '../include/dashboard.php';
		break;


		// this is old
	case 'jobList' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'jobList.php';
		$template	= '../include/dashboard.php';
		break;

	case 'jobDetail' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'jobDetail.php';
		$template	= '../include/dashboard.php';
		break;

	case 'resumeList' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'resumeList.php';
		$template	= '../include/dashboard.php';
		break;

	case 'accountList' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'accountList.php';
		$template	= '../include/dashboard.php';
		break;

	case 'clientList' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'clientList.php';
		$template	= '../include/dashboard.php';
		break;

	case 'employeeList' :
		$params = $jobId . $status . $endParam;
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'employeeList.php';
		$template	= '../include/dashboard.php';
		break;

	case 'employeeDetail' :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'employeeDetail.php';
		$template	= '../include/dashboard.php';
		break;


	default :
		$currentSession = isset($_SESSION["admin_session"]);
		$content 	= 'main.php';
		$template	= '../include/dashboard.php';
}
$headScript = 'headScript.php';
$footScript = 'footScript.php';
$navigation = '../include/navAdmin.php';
require_once $template;
?>
