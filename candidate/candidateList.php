<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

$obj = new Resume;

?>

<div class="card-box">
<?php foreach($obj->readList($s) as $row) {?>
  <h4 class="header-title mt-0 m-b-20"><?=$row->jobFunctionId;?></h4>
  <div class="">
      <div class="">
          <h5 class="text-custom m-b-5"><?=$row->firstName;?>&nbsp;<?=$row->lastName;?></h5>
          <p class="m-b-0"><?=$row->phoneNumber;?></p>
          <p class="m-b-0"><?=$row->address1;?></p>
          <p class="m-b-0"><?=$row->address2;?></p>
          <p class="m-b-0"><?=$row->city;?>&nbsp;<?=$row->state;?>&nbsp;<?=$row->zipCode;?></p>
          <p><b><?=$row->email;?></b></p>

          <p class="text-muted font-13 m-b-0">
            <?=$row->owner;?>
          </p>
      </div>
      <hr>
    </div>
<?php } ?>
</div>
