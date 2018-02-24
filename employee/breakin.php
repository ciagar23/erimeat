<?php
  $conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', ''); 

$get_id=$_GET['id'];

$breakIn= date('h:i:sa');


$sql = "UPDATE dtr SET breakIn ='$breakIn' WHERE Id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Breakin!'); window.location='index.php'</script>";


?>

