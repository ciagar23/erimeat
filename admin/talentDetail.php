<?php
$obj = new Job;
$job = $obj->readOne($_GET['id']);
?>


<div class="row">
    <div class="col-md-12">
        <!-- Personal-Information -->
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-20">Job Detail</h4>
            <div class="panel-body">
                <div class="text-left">
                    <p class="text-muted font-13"><strong>Job Reference Number :</strong>
                      <span class="m-l-15"><?=$job->refNum;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Job Position :</strong>
                      <span class="m-l-15"><?=$job->position;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Work Email :</strong>
                      <span class="m-l-15"><?=$job->workEmail;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Job Title :</strong>
                      <span class="m-l-15"><?=$job->jobTitle;?></span>
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
        <div class="card-box">
          <button class="btn btn-default stepy-finish"><a href="process.php?action=jobRequest&result=approve&Id=<?=$job->Id;?>">Approve</a></button>
-          <button class="btn btn-default stepy-finish"><a href="process.php?action=jobRequest&result=deny&Id=<?=$job->Id;?>">Deny</a></button>
        </div>
    </div>
  </div>
