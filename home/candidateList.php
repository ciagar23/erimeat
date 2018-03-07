<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';
$resumeList = resume()->all();

function getJobFunction($Id){
  $jf = job_function()->get("Id='$Id'");
  echo $job->option;
}
?>

<h2 class="text-center m-t-30 m-b-30">Candidate Search</h2>
<h2 class="text-center m-t-30 m-b-30">Find candidates for your open role or assignment.</h2>
    <div class="clearfix"></div>
    <!--Start 2 panels -->
    <div class="container-80 center-page">
    <div class="row">
      <form class="form-inline" >
        <div class="form-group center-page">
        <input type="text" id="" name="" class="form-control" placeholder="Job Title, Skills or Keywords" style="height: 67px;width:450px;" >
        <select class="form-control" style="height: 67px;width:200px;">
            <option>Select City</option>
        </select>
        <button type="button" class="btn waves-effect waves-light btn-success"><i class="fa fa-search "></i> Find Candidates</button>
        </div>
   </form>
    </div>
  </div>

<div class="container-fluid">
    <div align="center" class="m-t-50">
    <button class="btn btn-primary" style="width: 20%;">Call +61452 364 793</button>
    <button class="btn btn-primary" style="width: 20%;" onclick="location.href='../home/?view=inquiryForm'">Send an Email</button>
    </div>
    <div class="row">
        <div class="col-md-12">
          <?php foreach($resumeList as $row) {?>
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
</div>
