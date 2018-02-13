<?php
$obj = new Profile;
$user = $obj->readOne($_SESSION['user_session']);
?>

<?php include_once("message.php");?>
<?php include_once("personalInformation.php");?>
<div class="col-md-8">
      <?php include_once("experience.php");?>
      <?php include_once("todo.php");?>
</div>
