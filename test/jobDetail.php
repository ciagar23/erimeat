<?php
$Id = $_GET['Id'];
$job = job()->get("Id=$Id");
?>
<div class="row">
  <div class="col-md-7">
      <div class="text-center card-box">
          <div class="clearfix"></div>
          <div class="member-card">

              <?php
              foreach ($job as $key => $value) {
                echo $key . ": " . $value . "<br>";
              }
              ?>
              <br>
              <button onclick="location.href='?view=jobForm&Id=<?=$job->Id?>'">Update</button>
          </div>
      </div>
  </div> <!-- end col -->

  <div class="col-md-5">
      <div class="text-center card-box">
          <h4>Detail</h4>
          <button onclick="location.href='?view=employeeList&jobId=<?=$job->Id?>&status=1'">
              View <?=employee()->count("jobId=$job->Id and status=1");?> employees
          </button>
          <button onclick="location.href='?view=timesheetList&jobId=<?=$job->Id?>'">
              View <?=timesheet()->count("jobId=$job->Id");?> timesheets
          </button>
          <button onclick="location.href='?view=resumeList&jobId=<?=$job->Id?>&isApproved=0'">
              View <?=resume()->count("jobId=$job->Id and isApproved=0");?> applicants
          </button>
      </div>
  </div>
</div>
