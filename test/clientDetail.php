<?php
$Id = $_GET['Id'];
$company = company()->get("Id=$Id");
?>
<div class="row">
  <div class="col-md-7">
      <div class="text-center card-box">
          <div class="clearfix"></div>
          <div class="member-card">

              <?php
              foreach ($company as $key => $value) {
                echo $key . ": " . $value . "<br>";
              }
              ?>
              <br>
              <button onclick="location.href='?view=clientForm&Id=<?=$company->Id?>'">Update</button>
          </div>
      </div>
  </div> <!-- end col -->

  <div class="col-md-5">
      <div class="text-center card-box">
          <h4>Jobs</h4><button onclick="location.href='?view=jobList&abn=<?=$company->abn;?>&isApproved=1'">
            Approved:<br> <?=job()->count("abn=$company->abn and isApproved=1")?>
          </button>
          <button onclick="location.href='?view=jobList&abn=<?=$company->abn;?>&isApproved=-1'">
            Denied:<br> <?=job()->count("abn=$company->abn and isApproved=-1")?>
          </button>
          <button onclick="location.href='?view=jobList&abn=<?=$company->abn;?>&isApproved=0'">
            Requests:<br> <?=job()->count("abn=$company->abn and isApproved=0")?>
          </button>
      </div>
  </div>
</div>
