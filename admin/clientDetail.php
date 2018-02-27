<?php
$obj = new Company;
$comp = $obj->readOne($_GET['id']);

function getJobFunction($Id){
  $obj = new JobFunction;
  $job = $obj->readOne($Id);
  echo $job->option;
}
?>


<div class="row">
    <div class="col-md-12">
        <!-- Personal-Information -->
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-20">Client Detail</h4>
            <div class="panel-body">
                <div class="text-left">
                    <p class="text-muted font-13"><strong>Company Name :</strong>
                      <span class="m-l-15"><?=$comp->name;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Company ABN :</strong>
                      <span class="m-l-15"><?=$comp->abn;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Industry :</strong>
                      <span class="m-l-15"><?=getJobFunction($comp->jobFunctionId);?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Department :</strong>
                      <span class="m-l-15"><?=$comp->department;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Contact Person :</strong>
                      <span class="m-l-15"><?=$comp->contactPerson;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Client Email :</strong>
                      <span class="m-l-15"><?=$comp->email;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Address :</strong>
                      <span class="m-l-15"><?=$comp->address;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Phone Number :</strong>
                      <span class="m-l-15"><?=$comp->phoneNumber;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Mobile Number :</strong>
                      <span class="m-l-15"><?=$comp->mobileNumber;?></span>
                    </p>
                </div>
            </div>
        </div>
        <!-- Personal-Information -->
        <div class="card-box">
          <button class="btn btn-default stepy-finish"><a href="process.php?action=clientRequest&Id=<?=$comp->Id;?>">Approve</a></button>
        </div>
    </div>
  </div>
