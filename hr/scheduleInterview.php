<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';
$obj = new Resume;

function getJobName($Id){
  $obj = new Job;
  $job = $obj->readOne($Id);
    echo $job->position;
}

function getInterviewDate($Id){
  $obj = new interviewDate;
  $job = $obj->readOne($Id);
  echo $job->date;
}

function getInterviewTime($Id){
  $obj = new interviewDate;
  $job = $obj->readOne($Id);
  echo $job->time;
}
?>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Applicants Schedule</b></h4>

            <table id="datatable" class="table table-bordered">
                <thead>
                <tr>
                    <th>Applying For</th>
                    <th>Full Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($obj->readList($s) as $row) {
                  if ($row->jobId!=0 && $row->isApproved==1 && $row->isHired==0) {?>
                <tr>
                    <td><?=getJobName($row->jobId); ?></td>
                    <td><?=$row->firstName; ?> <?=$row->lastName; ?></td>
                    <td><?=getInterviewDate($row->Id); ?></td>
                    <td><?=getInterviewTime($row->Id); ?></td>
                    <td>
                        <a href="?view=hiringApplicant&Id=<?=$row->Id;?>&jobId=<?=$row->jobId;?>"  class=" btn btn-success btn-xs tooltips" title="Click To Edit"><span class="fa fa-eye"></span> View Applicant </a>
                    </td>
                </tr>

              <?php } } ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
