<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

$obj = new Resume;

?>

<div class="card-box">
<?php foreach($obj->readList($s) as $row) {?>
  <h4 class="header-title mt-0 m-b-20">Sample title of job</h4>
  <div class="">
      <div class="">
          <h5 class="text-custom m-b-5">Position for the company</h5>
          <p class="m-b-0">contact information</p>
          <p><b>Date time available</b></p>

          <p class="text-muted font-13 m-b-0">
            <?=$row->coverLetter;?>
          </p>
      </div>
      <hr>
    </div>
<?php } ?>
</div>
