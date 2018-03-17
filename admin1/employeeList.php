<?php
$employeeList = employee()->list($params);
$employee = employee()->get($params . " LIMIT 1");
$job = job()->get("Id='$employee->jobId'");

// Functions

function __getName($username){
    $get = resume()->get("username='$username'");
    return $get ? $get->firstName . " " . $get->lastName : "Name not in database";
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
              <th>Timesheets</th>
              <th>Terminate</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($employeeList as $row) {
            ?>
            <tr>
              <td><a href="?view=employeeDetail&username=<?=$row->username;?>"><?=__getName($row->username);?></a></td>
              <td><button onclick="location.href='?view=employeeTimesheetList&employee=<?=$row->username;?>'">View Timesheets</button></td>
              <td><button>Terminate</button></td>
            </tr>
              <?php
                }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
