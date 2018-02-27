<?php
$app = resume::readOne($_GET['Id']);
$jobId = $_GET['jobId'];
?>


<div class="row">
    <div class="col-md-12">
        <!-- Personal-Information -->
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-20">Resume Detail</h4>
            <div class="panel-body">
                <div class="text-left">
                    <p class="text-muted font-13"><strong>First Name :</strong>
                      <span class="m-l-15"><?=$app->firstName;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Last Name :</strong>
                      <span class="m-l-15"><?=$app->lastName;?></span>
                    </p>
                </div>
            </div>
        </div>
        <!-- Personal-Information -->
        <div class="card-box">
          <button class="btn btn-default"><a href="process.php?action=hireApplicant&result=approve&Id=<?=$app->Id;?>&jobId=<?=$jobId;?>">Hire</a></button>
          <button class="btn btn-default"><a href="process.php?action=hireApplicant&result=deny&Id=<?=$app->Id;?>">Deny</a></button>
        </div>
    </div>
  </div>
