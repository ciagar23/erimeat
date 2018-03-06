<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

$obj = new Job;

function getJobFunction($Id){
  $obj = new JobFunction;
  $job = $obj->readOne($Id);
  echo $job->option;
}

function getPositionType($Id){
  $obj = new PositionType;
  $pos = $obj->readOne($Id);
  echo $pos->option;
}

?>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Talent Request</b></h4>

            <table id="datatable" class="table table-bordered">
                <thead>
                <tr>
                    <th>Job Category</th>
                    <th>Employment Type</th>
                    <th>Job Classification</th>
                    <th>Representative Email</th>
                    <th>Company Name</th>
                    <th>Company ABN</th>
                    <th>Review</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($obj->readList($s) as $row) {
                  if ($row->isApproved==0){
                ?>
                <tr>
                    <td><?=getJobFunction($row->jobFunctionId);?></td>
                    <td><?=getPositionType($row->positionTypeId);?></td>
                    <td><?=$row->position;?></td>
                    <td><?=$row->workEmail;?></td>
                    <td><?=$row->company;?></td>
                    <td><?=$row->abn;?></td>
                    <td><a href="?view=jobDetail&Id=<?=$row->Id;?>"  class=" btn btn-success btn-xs tooltips" title="Click To Edit"><span class="fa fa-eye"></span> Review</a>
                    </td>
                </tr>

              <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
