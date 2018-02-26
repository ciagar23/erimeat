<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

$obj = new Job;

?>

<div class="container-fluid">

  <div class="row">
      <div class="col-md-4">
          <div class="card-box">
              <h4 class="header-title m-t-0 m-b-20">Lorem Ipsum</h4>
              <p>Lorem Ipsum</p>

              <select class="form-control select2">
                  <option>Select</option>
                  <optgroup label="Lorem">
                      <option value="AK">Lorem</option>
                      <option value="HI">Lorem</option>
                  </optgroup>
                  <optgroup label="Ipsum">
                      <option value="CA">Ipsum</option>
                      <option value="NV">Ipsum</option>
                      <option value="OR">Ipsum</option>
                  </optgroup>
                  <optgroup label="Dolor">
                      <option value="AZ">Dolor</option>
                      <option value="CO">Dolor</option>
                      <option value="ID">Dolor</option>
                  </optgroup>
              </select>

              <p class="m-t-30">Lorem Ipsum<p>
                <select class="form-control select2">
                    <option>Select</option>
                    <optgroup label="Lorem">
                        <option value="AK">Lorem</option>
                        <option value="HI">Lorem</option>
                    </optgroup>
                    <optgroup label="Ipsum">
                        <option value="CA">Ipsum</option>
                        <option value="NV">Ipsum</option>
                        <option value="OR">Ipsum</option>
                    </optgroup>
                    <optgroup label="Dolor">
                        <option value="AZ">Dolor</option>
                        <option value="CO">Dolor</option>
                        <option value="ID">Dolor</option>
                    </optgroup>
                </select>
          </div>
      </div>

      <div class="col-md-8">

        <?php foreach($obj->readList($s) as $row) {
          if ($row->isApproved==1){
        ?>
        <div class="card-box">

            <div class="col-md-10">
              <h4 class="header-title mt-0 m-b-20"><?=$row->position;?></h4>
            </div>
            <div class="col-md-2">
              <a href="?view=jobDetail&id=<?=$row->Id;?>">
                <button type="button" class="btn btn-success btn-rounded w-md waves-effect waves-light">View</button>
              </a>
            </div>
              <div class="clearfix"></div>
              <div class="">
                  <h5 class="text-custom m-b-5"><?=$row->JobTitle;?></h5>
                  <p class="m-b-10">
                    <i class="mdi mdi-worker"></i> <?=$row->requiredExperience;?>
                    <i class="mdi mdi-google-maps m-l-15"></i> <?=$row->address;?>
                  </p>
                  <p>
                    <i class="mdi mdi-cellphone m-r-5"></i><b><?=$row->businessPhone;?></b>
                  </p>
                  <hr>
                  <p class="text-muted font-13 m-b-0">
                    <?=$row->comment;?>
                  </p>
              </div>
        </div>
        <?php  } } ?>

      </div> <!-- end col -->

  </div>


</div>
