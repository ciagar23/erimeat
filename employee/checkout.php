<?php
  $conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', ''); 

$get_id=$_GET['id'];

$checkOut= date('h:i:sa');


$sql = "UPDATE dtr SET breakOut='00-00-00',breakIn='00-00-00',checkOut ='$checkOut' WHERE Id = '$get_id' ";

$conn->exec($sql);

	//logout.php
session_start();
session_destroy();
header('Location: index.php');
	exit;


?>

