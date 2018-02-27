<?php
$obj = new Job;
$job = $obj->readOne($_GET['id']);
?>

<div class="row">
    <div class="col-md-12">
        <!-- Personal-Information -->
        <div class="card-box">
          <div class="col-md-10">
            <h4 class="header-title mt-0 m-b-20">Job Detail</h4>
          </div>
          <div class="col-md-1" style="margin-left: 75px;">
            <button class="btn btn-default stepy-finish"><a href="../home/?view=application&id=<?=$job->Id;?>">Apply Now</a></button>
          </div>
          <div class="clearfix"></div>
            <div class="panel-body">
                <div class="text-left">
                    <p class="text-muted font-13"><strong>Job Position :</strong>
                      <span class="m-l-15"><?=$job->position;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Work Email :</strong>
                      <span class="m-l-15"><?=$job->workEmail;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Business Phone :</strong>
                      <span class="m-l-15"><?=$job->businessPhone;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Address :</strong>
                      <span class="m-l-15"><?=$job->address;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Required Experience :</strong>
                      <span class="m-l-15"><?=$job->requiredExperience;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Comment :</strong>
                      <span class="m-l-15"><?=$job->comment;?></span>
                    </p>
                </div>
            </div>
        </div>
        <!-- Personal-Information -->

    </div>
  </div>
