<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

$obj = new Job;

?>

<div class="card-box">
<?php foreach($obj->readList($s) as $row) {
  if ($row->isApproved==1){
?>
  <div class="">
      <h4 class="header-title mt-0 m-b-20"><a href="?view=jobDetail&id=<?=$row->Id;?>"><?=$row->position;?></a></h4>
      <div class="">
          <h5 class="text-custom m-b-5"><?=$row->JobTitle;?></h5>
          <p class="m-b-0">
              <i class="mdi mdi-worker"></i> <?=$row->requiredExperience;?>
              <i class="mdi mdi-google-maps"></i> <?=$row->address;?>
          </p>
          <p><b><?=$row->businessPhone;?></b></p>

          <p class="text-muted font-13 m-b-0">
            <?=$row->comment;?>
          </p>
      </div>
      <hr>
    </div>
<?php  } } ?>
</div>
