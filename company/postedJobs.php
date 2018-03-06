<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

$jobList = job()->all();

$username = $_SESSION['company_session'];
$company = company()->get("username='$username'");

function getJobFunction($Id){
  $jf = job_function()->get("Id='$Id'");
  return $jf->option;
}

?>
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
            <?php foreach($jobList as $row) {
              if ($row->isApproved==0 && $row->abn==$company->abn){
            ?>
            <tr>
              <td><?=getJobFunction($row->jobFunctionId);?></td>
              <td><?=$row->company;?> </td>
              <td>
                <?php if($row->isApproved) {?>
                <div class=" btn btn-success btn-xs tooltips" title="Click To Edit">Approved</div>
              <?php } else {?>
              <div class=" btn btn-warning btn-xs tooltips" title="Click To Edit">Pending</div>
            <?php }?>

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
