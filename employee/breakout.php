<?php
  $conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', ''); 

$get_id=$_GET['id'];

$breakOut= date('h:i:sa');


$sql = "UPDATE dtr SET breakOut ='$breakOut' WHERE Id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Breakout!'); window.location='index.php'</script>";


?>

