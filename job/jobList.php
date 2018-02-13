<?php

$obj = new Job;
$obj->readList();

?>

<div class="card-box">
<?php foreach($obj->readList() as $row) {?>
  <h4 class="header-title mt-0 m-b-20"><?=$row->position?></h4>
  <div class="">
      <div class="">
          <h5 class="text-custom m-b-5"><?=$row->JobTitle;?></h5>
          <p class="m-b-0"><?=$row->company;?></p>
          <p><b><?=$row->businessPhone;?></b></p>

          <p class="text-muted font-13 m-b-0">
            <?=$row->comment;?>
          </p>
      </div>
      <hr>
    </div>
<?php } ?>
</div>
