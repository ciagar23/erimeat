<?php
include_once("../config/database.php");
include_once("../config/CRUD.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'home' :
		$content 	= 'home.php';
		$template	= '../include/dashboard.php';
		break;

	case 'availableSkills' :
		$content 	= 'availableSkills.php';
		$template	= '../include/dashboard.php';
		break;

	case 'availablePosition' :
		$content 	= 'availablePosition.php';
		$template	= '../include/dashboard.php';
		break;

	case 'numberEmployee' :
		$content 	= 'numberEmployee.php';
		$template	= '../include/dashboard.php';
		break;

	case 'timekeeping' :
		$content 	= 'timekeeping.php';
		$template	= '../include/dashboard.php';
		break;

	case 'reports' :
		$content 	= 'reports.php';
		$template	= '../include/dashboard.php';
		break;

	default :
		$content 	= 'home.php';
		$template	= '../include/dashboard.php';
}

$headScript = 'headScript.php';
$footScript = 'footScript.php';
require_once $template;

?>
