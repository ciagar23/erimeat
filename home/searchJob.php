<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';
$jobList = job()->all();

function getPositionName($Id){
  $job = position_type()->get("Id='$Id'");
  echo $job->option;
}
?>

<div class="container-fluid">
  <div class="container-80 center-page">
  <div class="col-md-10 center-page p-b-30">
    <h2 class="m-b-30 m-t-20 text-center">Search Jobs</h2>
    <form method="GET">
    <div class="input-group">
      <input type="hidden" name="view" value="jobList">
      <input type="text" id="example-input2-group2" name="s" class="form-control form-control-lg" placeholder="Job Title, Skills or Keywords">
          <span class="input-group-btn">
          <button type="submit" class="btn waves-effect waves-light btn-primary">Search</button>
          </span>
    </div>
  </form>
  </div>
</div>
  <div class="clearfix"></div>

  <!-- Start Filter Panel and Results-->
  <div class="form-container container m-t-30">

    <div class="row center-page job-list-row">
      <?php foreach($jobList as $row) {
        if ($row->isApproved==1){
      ?>
        <div class="col-lg-4 job-list-summary">
              <a href="#" class="job-list-title"><?=$row->position;?></a>
            <br>
            <span class="m-b-5"><?=$row->address;?></span>
            <br>
            <span class="m-b-5"><?=getPositionName($row->positionTypeId);?></span>
            <br>
            <span class="job-list-date"><?=$row->createDate;?></span>
            <br>
        </div>

        <div class="col-lg-8 job-list-desc">
          <?=$row->comment;?>
          <br>
          <span>
            <a class="job-list-link" href="#">Read More &gt;</a>
          </span>
        </div>
    </div>
    <?php  } } ?>
<br>

  </div> <!-- End List Container -->
</div>
