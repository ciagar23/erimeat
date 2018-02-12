<?php
include_once("../config/database.php");
include_once("../config/function.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'login' :
		$content 	= 'login.php';
		$template	= '../include/template.php';
		break;
			
	default :
		$content 	= 'login.php';
		$template	= '../include/template_login.php';
}

require_once $template;

?>





