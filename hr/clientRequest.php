<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

function getJobFunction($Id){
  $obj = new JobFunction;
  $job = $obj->readOne($Id);
  echo $job->option;
}

$obj = new Company;


?>

<div class="card-box">
<?php foreach($obj->readList($s) as $row) {
  if ($row->isApproved==0){
  ?>
  <div class="">
      <h4 class="header-title mt-0 m-b-20"><a href="?view=clientDetail&id=<?=$row->Id;?>"><?=$row->name;?></a></h4>
      <div class="">
          <h5 class="text-custom m-b-5"><?=$row->abn;?></h5>
          <h5 class="text-custom m-b-5"><?=getJobFunction($row->jobFunctionId); ?></h5>
          <p><b><?=$row->email;?></b></p>
          <p><b><?=$row->contactPerson;?></b></p>
          <p><b><?=$row->phoneNumber;?></b></p>
          <p><b><?=$row->mobileNumber;?></b></p>
          <p><b><?=$row->address;?></b></p>
          <p><b><?=$row->department;?></b></p>

          <p class="text-muted font-13 m-b-0">
            <?=$row->description;?>
          </p>
      </div>
      <hr>
    </div>
<?php } } ?>
</div>
