<?php
$employee = $_GET['employee'];

$timesheetList = timesheet()->filter("employee='$employee'");
$resume = resume()->get("username='$employee'");
$employeeName = $resume ? $resume->firstName . " " . $resume->lastName : "Employee not found";

// Functions

function __setName($username){
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
          <h4 class="page-title"><?=$employeeName;?></h4><br>
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
