<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';
$obj = new Resume;

function getJobFunction($Id){
  $obj = new JobFunction;
  $job = $obj->readOne($Id);
  echo $job->option;
}
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

          <?php foreach($obj->readList($s) as $row) {?>
          <div class="card-box">
            <div class="col-md-10">
              <h4 class="header-title mt-0 m-b-20"><?=getJobFunction($row->jobFunctionId); ?></h4>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-success btn-rounded w-md waves-effect waves-light">View</button>
            </div>
            <div class="clearfix"></div>
            <div class="">
                <div class="">
                    <h5 class="text-custom m-b-5"><?=$row->firstName;?>&nbsp;<?=$row->lastName;?></h5>
                    <p class="m-b-0"><i class="mdi mdi-map-marker m-r-5"></i><?=$row->address1;?></p>
                    <p class="m-b-0"><i class="mdi mdi-map-marker m-r-5"></i><?=$row->address2;?></p>
                    <p class="m-b-0"><i class="mdi mdi-google-maps m-r-5"></i><?=$row->city;?>&nbsp;<?=$row->state;?>&nbsp;<?=$row->zipCode;?></p>

                    <hr>
                </div>
              </div>
          </div>
        <?php } ?>
        </div>
</div>
