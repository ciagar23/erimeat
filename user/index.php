<?php
include_once("../config/database.php");
include_once("../config/CRUD.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'profileDisplay' :
		$content 	= 'profileDisplay.php';
		$template	= '../include/template.php';
		break;

	case 'profileForm' :
		$content 	= 'profileForm.php';
		$template	= '../include/template.php';
		break;

	default :
		$content 	= 'login.php';
		$template	= '../include/template_login.php';
}
require_once $template;

?>
