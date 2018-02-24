<?php
include_once("../config/database.php");
include_once("../config/CRUD.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'home' :
		$content 	= 'home.php';
		$template	= '../include/dashboard.php';
		break;

	case 'addAccount' :
		$content 	= 'addAccount.php';
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
