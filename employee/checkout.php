<?php
  $conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', ''); 

$get_id=$_GET['id'];

$checkOut= date('h:i:sa');


$sql = "UPDATE dtr SET breakOut='00-00-00',breakIn='00-00-00',checkOut ='$checkOut' WHERE Id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Checkout!'); window.location='index.php'</script>";


?>

