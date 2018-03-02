<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';
$obj = new Job;

function getPositionName($Id){
  $obj = new PositionType;
  $job = $obj->readOne($Id);
  echo $job->option;
}

?>

  <!-- Start Filter Panel and Results-->
  <div class="form-container container m-t-30">
    <?php foreach($obj->readList($s) as $row) {
      if ($row->isApproved==1){
    ?>
    <div class="row center-page job-list-row">
        <div class="col-lg-4 job-list-summary">
            <span class="job-list-title"><?=$row->position;?></span>
            <br>
            <span class="m-b-5"><?=$row->address;?></span>
            <br>
            <span class="">$27 - 32/hr</span>
            <br>
            <span class="m-b-5"><?=getPositionName($row->positionTypeId);?></span>
            <br>
            <span class="job-list-date">Posted <?=$row->createDate;?></span>
            <br>
        </div>

        <div class="col-lg-8 job-list-desc">
          <?=$row->comment;?>
          <br>
          <span>
            <a class="job-list-link" href="?view=jobDetail&id=<?=$row->Id;?>">Read More &gt;</a>
          </span>
        </div>
    </div>
<br>
<?php  } } ?>

  </div> <!-- End List Container -->
</div>
