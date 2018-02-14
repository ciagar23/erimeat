<?php
include_once("../config/database.php");
include_once("../config/CRUD.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'submitResume' :
		$content 	= 'submitResume.php';
		$template	= '../include/template.php';
		break;

	case 'searchResume' :
		$content 	= 'searchResume.php';
		$template	= '../include/template.php';
		break;

	case 'CandidateList' :
		$content 	= 'CandidateList.php';
		$template	= '../include/template.php';
		break;

	default :
}
require_once $template;

?>
