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

	default :
		$content 	= 'home.php';
		$template	= '../include/template.php';
}

require_once $template;

?>
