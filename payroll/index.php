<?php
session_start();
include_once("../config/database.php");
include_once("../config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

 $headScript = 'headScript.php';
 $footScript = 'footScript.php';

switch ($view) {

	case 'login' :
		$content 	= 'login.php';
		$template	= '../include/template_login.php';
		break;

	case 'timekeeping' :
		$currentSession = isset($_SESSION["payroll_session"]);
		$content 	= 'timekeeping.php';
		$template	= '../include/dashboard.php';
		break;

	case 'timekeepingCompanyDetail' :
		$currentSession = isset($_SESSION["payroll_session"]);
		$content 	= 'timekeepingCompanyDetail.php';
		$template	= '../include/dashboard.php';
		break;

	case 'timesheets' :
		$currentSession = isset($_SESSION["payroll_session"]);
		$content 	= 'timesheets.php';
		$template	= '../include/dashboard.php';
		break;

	case 'timesheetDetail' :
		$currentSession = isset($_SESSION["payroll_session"]);
		$content 	= 'timesheetDetail.php';
		$template	= '../include/dashboard.php';
		break;

	case 'invoice' :
		$currentSession = isset($_SESSION["payroll_session"]);
		$content 	= 'invoice.php';
		$template	= '../include/dashboard.php';
		break;

	case 'archive' :
		$currentSession = isset($_SESSION["payroll_session"]);
		$content 	= 'archive.php';
		$template	= '../include/dashboard.php';
		break;

	default :
		$currentSession = isset($_SESSION["payroll_session"]);
		$content 	= 'main.php';
		$template	= '../include/dashboard.php';
}
$navigation = '../include/navPayroll.php';
require_once $template;
?>
