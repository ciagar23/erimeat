<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';
$jobList = job()->all();

function getPositionName($Id){
  $job = position_type()->get("Id='$Id'");
  echo $job->option;
}

function getJobFunction($Id){
    $job = job_function()->get("Id='$Id'");
  echo $job->option;
}

?>
<div align="center" class="m-t-50">
<button class="btn btn-primary" style="width: 20%;">Call +61452 364 793</button>
<button class="btn btn-primary" style="width: 20%;" onclick="location.href='../home/?view=inquiryForm'">Send an Email</button>
</div>
  <!-- Start Filter Panel and Results-->
  <div class="form-container container m-t-30">
    <?php foreach($jobList as $row) {
      if ($row->isApproved==1){
    ?>
    <div class="row center-page job-list-row">
        <div class="col-lg-4 job-list-summary">
            <span class="job-list-title"><?=$row->position;?></span>
            <br>
            <span class="m-b-5"><?=getJobFunction($row->jobFunctionId);?></span>
            <br>
            <span class="m-b-5"><?=$row->refNum;?></span>
            <br>
            <span class="m-b-5"><?=$row->address;?></span>
            <br>
            <span class="m-b-5"><?=$row->zipCode;?></span>
            <br>
            <span class="m-b-5"><?=getPositionName($row->positionTypeId);?></span>
            <br>
            <span class="job-list-date">Posted <?=$row->createDate;?></span>
            <br>
        </div>

        <div class="col-lg-8 job-list-desc">
          <?=$row->comment;?>
          <br>
          <span>
            <a class="job-list-link" href="?view=jobDetail&id=<?=$row->Id;?>">Read More &gt;</a>
          </span>
        </div>
    </div>
<br>
<?php  } } ?>

  </div> <!-- End List Container -->
</div>
