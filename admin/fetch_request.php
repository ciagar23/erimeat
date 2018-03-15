<?php
include_once("../config/database.php");
include_once("../config/Models.php");
$action = $_POST['action'];
switch($action){
	case 'getRequest':
	$id = $_POST['id'];
	$job = job()->filter("Id=".$id);
foreach($job as $row) {
?>
<?php $data = array('Id'=>$row->Id,'position'=>$row->position,'name'=>$row->name,'abn'=>$row->abn);?>
<?php
 }
    echo json_encode($data);
  }
?>
