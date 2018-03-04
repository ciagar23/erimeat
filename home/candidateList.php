<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';
$obj = new Resume;

function getJobFunction($Id){
  $obj = new JobFunction;
  $job = $obj->readOne($Id);
  echo $job->option;
}
?>

<div class="container-fluid">
    <div align="center" class="m-t-50">
    <button class="btn btn-primary" style="width: 20%;">Call +61452 364 793</button>
    <button class="btn btn-primary" style="width: 20%;" onclick="location.href='../home/?view=inquiryForm'">Send an Email</button>
    </div>
    <div class="row">
        <div class="col-md-12">
          <?php foreach($obj->readList($s) as $row) {?>
          <div class="card-box">
            <div class="col-md-10">
              <h4 class="header-title mt-0 m-b-20"><?=getJobFunction($row->jobFunctionId); ?></h4>
            </div>
            <div class="col-md-2">
              <button type="button" class="" onclick="location.href='../home/?view=candidateDetail&Id=<?=$row->Id;?>'">View</button>
            </div>
            <div class="clearfix"></div>
            <div class="">
                <div class="">
                    <h5 class="text-custom m-b-5"><?=$row->firstName;?>&nbsp;<?=$row->lastName;?></h5>
                    <p class="m-b-0"><i class="mdi mdi-map-marker m-r-5"></i><?=$row->address1;?></p>
                    <p class="m-b-0"><i class="mdi mdi-map-marker m-r-5"></i><?=$row->address2;?></p>
                    <p class="m-b-0"><i class="mdi mdi-google-maps m-r-5"></i><?=$row->city;?>&nbsp;<?=$row->state;?>&nbsp;<?=$row->zipCode;?></p>

                    <hr>
                </div>
              </div>
          </div>
        <?php } ?>
        </div>
</div>
