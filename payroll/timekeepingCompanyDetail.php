<?php
$jobId = (isset($_GET['Id']) && $_GET['Id'] != '') ? $_GET['Id'] : '';
$obj = new Employee;

function get_fullname($username){
  $prf = Profile::readOne($username);
  return $prf->firstName . " " . $prf->lastName;
}

?>
<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Timekeeping for: <?=$jobId;?></h4>

            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="col-sm-12">
  <div class="card-box table-responsive">
    <h4 class="m-t-0 header-title"><b>List of Employees</b></h4>
    <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Username</th>
          <th>Name</th>
          <th width="10%">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($obj->readList() as $row) {
          if ($row->jobId==$jobId){
        ?>
        <tr>
          <td><?=$row->username;?> </td>
          <td><?=get_fullname($row->username);?> </td>
          <td>
            <a href="?view=timesheets&user=<?=$row->username;?>"
              class=" btn btn-success btn-xs tooltips"
              title="Click To Edit">
              <span class="fa fa-eye"></span>
              View Timekeeping
            </a>
          </td>
        </tr>
        <?php
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
