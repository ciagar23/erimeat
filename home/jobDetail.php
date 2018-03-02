<?php
$obj = new Job;
$job = $obj->readOne($_GET['id']);

function getPositionName($Id){
  $obj = new PositionType;
  $job = $obj->readOne($Id);
  echo $job->option;
}
?>

<div class="container-fluid m-t-30">
  <div class="row center-page container-80">
  <!-- Start Job Detail -->
  <div class="col-md-9">
    <h1><?=$job->position;?></h1>
    <div class="col-md-8"></div>
    <div class="col-md-2 text-center">
      <h2>2</h2>
      <p>Applicants</p>
    </div>
    <div class="col-md-2 text-center">
      <h2>60</h2>
      <p>Views</p>
    </div>
    <a href="../home/?view=application&id=<?=$job->Id;?>"><button class="btn btn-primary" style="width: 50%;">Apply Now</button></a>
    <hr>
    <!-- Job Information -->
    <div class="row cleafix">
      <p class="col-lg-3 col-6 col-md-4 text-bold m-b-20">Salary:</p>
      <p class="col-lg-9 col-md-8 col-6">$17 - 22/hr</p>
    </div>
    <div class="row cleafix">
      <p class="col-lg-3 col-6 col-md-4 text-bold m-b-20">Location:</p>
      <p class="col-lg-9 col-md-8 col-6"><?=$job->address;?></p>
    </div>
    <div class="row cleafix">
      <p class="col-lg-3 col-6 col-md-4 text-bold m-b-20">Date Posted:</p>
      <p class="col-lg-9 col-md-8 col-6"><?=$job->createDate;?></p>
    </div>
    <div class="row cleafix">
      <p class="col-lg-3 col-6 col-md-4 text-bold m-b-20">Employment Type:</p>
      <p class="col-lg-9 col-md-8 col-6"><?=getPositionName($job->positionTypeId);?></p>
    </div>
    <div class="row cleafix">
      <p class="col-lg-3 col-6 col-md-4 text-bold m-b-20">Job Reference Number:</p>
      <p class="col-lg-9 col-md-8 col-6"><?=$job->refNum;?></p>
    </div>
    <div class="row cleafix">
      <p class="col-lg-3 col-6 col-md-4 text-bold m-b-20">Required Experience:</p>
      <p class="col-lg-9 col-md-8 col-6"><?=$job->requiredExperience;?></p>
    </div>
    <hr>
    <h2>Description</h2>
    <p>
      <?=$job->comment;?>
    </p>
    <h2>Requirements</h2>
    <p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor lorem ipsum dolor.
      Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor lorem ipsum dolor.
    </p>

    <hr>
    <div class="col-md-2 text-center">
      <h2>2</h2>
      <p>Applicants</p>
    </div>
    <div class="col-md-2 text-center m-b-30">
      <h2>60</h2>
      <p>Views</p>
    </div>
    <div class="clearfix"></div>
    <a href="../home/?view=application&id=<?=$job->Id;?>"><button class="btn btn-primary" style="width: 50%;">Apply Now</button></a>
    <hr>
    <div class="m-b-30">
    <h3><?=$job->address;?></h3>
    Lorem Ipsum
    <br>
    Lorem Ipsum
    <br>
    Lorem Ipsum
  </div>
  </div> <!-- End Job Detail -->


  <div class="col-md-3 job-detail-search-container">
    <h3>Search Jobs</h3>
    <hr style="border-top: 1px solid #c2c2c2;">
    <div>
      <form class="" action="javascript:void(0)" method="post" accept-charset="UTF-8">
        <fieldset class="m-b-20">
          <input placeholder="Job Title, Skills or Keywords" class="job-detail-search-form" type="text" id="edit-keywords"
          name="keywords" value="" size="60" maxlength="128">
        </fieldset>
        <fieldset class="m-b-20">
          <input placeholder="City or Zip" class="job-detail-search-form" type="text" id="edit-keywords"
          name="keywords" value="" size="60" maxlength="128">
        </fieldset>
        <a href="../home/?view=application&id=<?=$job->Id;?>"><button class="btn btn-primary" style="width: 100%; padding-left: 25%;">Apply Now</button></a>
      </form>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
</div>
