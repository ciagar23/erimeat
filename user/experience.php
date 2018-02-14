<?php
$obj = new Experience;
?>

<div class="card-box">
  <div class="text-right">
    <button type="button"
        onclick="location.href='?view=addExperience'"
        class="btn btn-success waves-effect waves-light">
         New Experience
    </button>
</div>
    <h4 class="header-title mt-0 m-b-20">Experience</h4>

    <div class="">


      <?php foreach($obj->readList($_SESSION['user_session']) as $row) {?>
        <div class="">
            <div class="">
                <h5 class="text-custom m-b-5"><?=$row->position?></h5>
                <p class="m-b-0"><?=$row->company;?></p>
                <p><b><?=$row->start;?>-<?=$row->end;?></b></p>

                <p class="text-muted font-13 m-b-0">
                  <?=$row->description;?>
                </p>
            </div>
            <hr>
          </div>
      <?php } ?>

    </div>
</div>
