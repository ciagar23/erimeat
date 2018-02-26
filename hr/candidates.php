<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';
$obj = new Resume;

function getJobFunction($Id){
  $obj = new JobFunction;
  $job = $obj->readOne($Id);
  echo $job->option;
}
?>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Candidates Resume</b></h4>

            <table id="datatable" class="table table-bordered">
                <thead>
                <tr>
                    <th>Job Function</th>
                    <th>Full Name</th>
                    <th>City, State</th>
                    <th>Review</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($obj->readList($s) as $row) {
                ?>
                <tr>
                    <td><?=getJobFunction($row->jobFunctionId); ?></td>
                    <td><?=$row->firstName; ?> <?=$row->lastName; ?></td>
                    <td><?=$row->city; ?>, <?=$row->state; ?></td>
                    <td>
                        <button onclick="location.href='?view=candidateDetail&Id=<?=$row->Id;?>'" class="btn btn-primary">Review</button>
                    </td>
                </tr>

              <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
