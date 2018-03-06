<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';
$obj = new Job;

$com = new Company;
$company = $com->readOneByUsername($_SESSION['company_session']);


function getJobFunction($Id){
  $obj = new JobFunction;
  $job = $obj->readOne($Id);
  echo $job->option;
}

function getCount($val){
  $obj = new Employee;
  $emp = $obj->countEmployee();
  print_r($emp->fetchAll());
}
?>
count=<?=getCount($company->Id);?>
     <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Jobs</h4>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<div class="card-box">
  <div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title"><b>List of Jobs</b></h4>
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Job Category</th>
              <th>Company Name</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($obj->readList($s) as $row) {
              if ($row->isApproved==1 && $row->abn == $company->abn){
            ?>
            <tr>
              <td><?=getJobFunction($row->jobFunctionId);?></td>
              <td><?=$row->company;?> </td>
              <td>
              <?php
                if($row->isApproved) {
              ?>
                <div class=" btn btn-success btn-xs tooltips" title="Click To Edit">Approved</div>
              <?php }
                else {
              ?>
              <div class=" btn btn-warning btn-xs tooltips" title="Click To Edit">Pending</div>
              <?php
                }
              ?>

              </td>
              <td>
                <a href="?view=jobDetail&id=<?=$row->Id;?>"  class=" btn btn-success btn-xs tooltips" title="Click To Edit"><span class="fa fa-eye"></span> View Details</a>
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
  </div>
</div>
