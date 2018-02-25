<?php
$app = resume::readOne($_GET['Id']);
?>


<div class="row">
    <div class="col-md-12">
        <!-- Personal-Information -->
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-20">Set Interview Date</h4>
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
          <button class="btn btn-default stepy-finish"><a href="?view=setInterViewDate&Id=<?=$app->Id;?>">Set Interview Appointment</a></button>
          <button class="btn btn-default stepy-finish"><a href="process.php?action=denyResume&Id=<?=$app->Id;?>">Deny</a></button>
        </div>
    </div>
  </div>
