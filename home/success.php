<?php
$Id = (isset($_GET['Id']) && $_GET['Id'] != '') ? $_GET['Id'] : '';
$comp = company()->get("Id='$Id'");
$res = resume()->get("Id='$Id'");
?>

<?php
  if($comp!=null){
?>
  <div class="container-80 container-fluid text-center m-t-30 m-b-30">
    <h3>Thank You for your interest, <?=$comp->name;?></h3>
    <p>We've sent a confirmation email to <?=$comp->email;?>.
  </div>
<?php
}else if($res!=null){
?>
  <div class="container-80 container-fluid text-center m-t-30 m-b-30">
    <h3>Thank You for your interest, <?=$res->firstName;?></h3>
    <p>We've sent a confirmation email to <?=$res->email;?>.
  </div>
<?php
}else{
?>
  <div class="container-80 container-fluid text-center m-t-30 m-b-30">
    <h3>Thank You. We appreciate your feedback.</h3>
  </div>
<?php
}
?>
