<?php
include_once("../config/database.php");
include_once("../config/CRUD.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'home' :
		$content 	= 'home.php';
		$template	= '../include/template.php';
		break;

	case 'aboutUs' :
		$content 	= 'aboutUs.php';
		$template	= '../include/template.php';
		break;

	case 'contactUs' :
		$content 	= 'contactUs.php';
		$template	= '../include/template.php';
		break;

	case 'services' :
		$content 	= 'services.php';
		$template	= '../include/template.php';
		break;

	case 'availableSkills' :
		$content 	= 'availableSkills.php';
		$template	= '../include/template.php';
		break;

	case 'availablePosition' :
		$content 	= 'availablePosition.php';
		$template	= '../include/template.php';
		break;

	case 'numberEmployee' :
		$content 	= 'numberEmployee.php';
		$template	= '../include/template.php';
		break;

	case 'timekeeping' :
		$content 	= 'timekeeping.php';
		$template	= '../include/template.php';
		break;

	case 'reports' :
		$content 	= 'reports.php';
		$template	= '../include/template.php';
		break;

	default :
		$content 	= 'home.php';
		$template	= '../include/template.php';
}

$headScript = 'headScript.php';
$footScript = 'footScript.php';
require_once $template;

?>
