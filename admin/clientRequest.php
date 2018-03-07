<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

function getJobFunction($Id){
  $job = job_function()->get("Id='$Id'");
  echo $job->option;
}

$compList = company()->all();


?>

  <div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
        <h4 class="page-title">Client Request</h4><br>
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Company Name</th>
              <th>ABN</th>
              <th>Company Representative</th>
              <th>Work Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           <?php foreach($compList as $row) {
  if ($row->isApproved==0){
  ?>
            <tr>
              <td><?=$row->name;?> </td>
              <td><?=$row->abn;?> </td>
              <td><?=$row->contactPerson;?> </td>
              <td><?=$row->email;?> </td>
              <td>
                <a href="?view=clientDetail&id=<?=$row->Id;?>"  class=" btn btn-success btn-xs tooltips" title="Click To Edit"><span class="fa fa-eye"></span> View Details</a>
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
