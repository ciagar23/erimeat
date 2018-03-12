<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

$jobList = job()->filter("isApproved='0' limit 1");
$company = company()->filter("isApproved='0' limit 1");
$adminList = admin()->filter("Id=Id limit 1");
$projectsList = projects()->filter("Id=Id limit 1");
$clientRequest = company()->filter("isApproved='1' limit 1");
$jobListApproved = job()->filter("isApproved='1' limit 1");


function getCount($Id){
  $job = job()->count("isApproved='0'");
  return $job;
}

function getCountCompany($Id){
  $company = company()->count("isApproved='0'");
  return $company;
}
function getCountAccount($Id){
  $admin = admin()->count("Id=Id");
  return $admin;
}
function getCountProject($Id){
  $projects = projects()->count("Id=Id");
  return $projects;
}
function getCountClientRequest($Id){
  $company = company()->count("isApproved='1'");
  return $company;
}
function getCountJobListApproved($Id){
  $job = job()->count("isApproved='1'");
  return $job;
}


?>
<div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="card-box widget-box-two widget-two-custom">
       <?php foreach($jobList as $row) {
            ?>
          <i class="mdi mdi-clipboard-text widget-two-icon"></i>
          <div class="wigdet-two-content">
              <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?=getCount($row->Id) ;?></span></h2>
             
              <p class="m-0">Talent Request</p>
          </div>
           <?php  
              }
          ?>
      </div>
    </div><!-- end col -->

    <div class="col-lg-3 col-md-6">
      <div class="card-box widget-box-two widget-two-custom">
      <?php foreach($company as $row) {
            ?>
          <i class="mdi mdi-account-network widget-two-icon"></i>
          <div class="wigdet-two-content">
              <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?=getCountCompany($row->Id) ;?></span></h2>
              <p class="m-0">Company</p>
          </div>
          <?php  
              }
          ?>
      </div>
    </div><!-- end col -->
<div class="col-lg-3 col-md-6">
  <div class="card-box widget-box-two widget-two-custom">
   <?php foreach($adminList as $row) {
            ?>
      <i class="mdi mdi-account widget-two-icon"></i>
      <div class="wigdet-two-content">
          <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?=getCountAccount($row->Id) ;?></span></h2>
          <p class="m-0">Accounts</p>
      </div>
      <?php  
              }
          ?>
  </div>
</div><!-- end col -->

<div class="col-lg-3 col-md-6">
  <div class="card-box widget-box-two widget-two-custom">
  <?php foreach($projectsList as $row) {
            ?>
      <i class="mdi mdi-clipboard-check widget-two-icon"></i>
      <div class="wigdet-two-content">
          <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?=getCountProject($row->Id) ;?></span></h2>
          <p class="m-0">Projects</p>
      </div>
       <?php  
              }
          ?>
  </div>
</div><!-- end col -->

</div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <h4 class="header-title m-t-0">Overview Statistics</h4>
                                            <div class="text-center">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <div class="m-t-20 m-b-20">
                                                            <?php foreach($clientRequest as $row) {?>
                                                            <h4 class="m-b-10"><?=getCountClientRequest($row->Id) ;?></h4>
                                                            <p class="text-uppercase m-b-5 font-13 font-600">Client Request</p>
                                                             <?php  } ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="m-t-20 m-b-20">
                                                            <?php foreach($clientRequest as $row) {?>
                                                            <h4 class="m-b-10"><?=getCountClientRequest($row->Id) ;?></h4>
                                                            <p class="text-uppercase m-b-5 font-13 font-600">Jobs Approved</p>
                                                             <?php  } ?>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div id="morris-bar-stacked" style="height: 310px;"></div>

                                        </div>

                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->


                              