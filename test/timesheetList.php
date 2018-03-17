<?php
$jobId = $_GET['jobId'];

$timesheetList = timesheet()->filter("jobId='$jobId'");
$job = job()->get("Id=$jobId");

// Functions

function __getName($username){
    $get = resume()->get("username='$username'");
    return $get ? $get->firstName . " " . $get->lastName : "Name not in database";
}

function __setStatus($s){
  switch($s){
      case '0':
          return "Pending";
          break;
      case '1':
          return "Verified";
          break;
      case '2':
          return "Disputed";
          break;
      case '3':
          return "Approved";
          break;
  }
}

?>
<div class="row">
  <div class="col-sm-12">
    <div class="card-box table-responsive">
        <h4 class="page-title"><?=$job->position;?></h4><br>
      <table id="datatable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($timesheetList as $row) {
          ?>

          <tr>
            <td><a href="?view=timesheetDetail&tsId=<?=$row->Id;?>"><?=$row->name;?></a></td>
            <td><?=__setStatus($row->status);?></td>
            <?php
              }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
