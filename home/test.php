
<?php
//All
$userAll = user()->all();
  foreach($userAll as $item) { ?>
    <?=$item->username;?> <br>
<?php } ?>
<br><br><br>

<?php
//Filter
$userFilter = user()->filter("level='employee'");
  foreach($userFilter as $item) { ?>
    <?=$item->username;?> <br>
<?php } ?>
<br><br><br>


<?php
//get
$username = "E1520175205";
$password = "ZXasqw1212";
$userGet = user()->get("username='$username' and password='$password'");

echo "get: " . $userGet->username;

 ?>
<br><br><br>

<?php
//create

$user = user();
$user->obj['username'] = "haller";
$user->obj['password'] = "bbbb";
$user->create();


 ?>
<br><br><br>

<?php
//update

$user = user();
$user->obj['username'] = "hallddfdfer";
$user->obj['password'] = "bbbb";
$user->update("Id='1'");


 ?>

 <?php
 //delete

 user()->delete("Id='1'");


  ?>
