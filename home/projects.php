<?php
$jobFunctionList = job_function()->list("isDeleted=0");
$projectList = projects()->list();

function getPositionName($Id){
  $job = position_type()->get("Id='$Id'");
  echo $job->option;
}

function formatDate($val){
  $date = date_create($val);
  return date_format($date, "F d, Y g:i A");
}
?>
<div class="m-t-30 container-80 container-fluid m-b-30">

  <!-- Start About Us Content -->
  <div class="center-page container-80">
  <?php
    foreach($projectList as $row){
      if($row->isDeleted==0){
  ?>
  <div class="row">
    <div class="col-lg-12">
      <h3 class="text-primary"><?=$row->title?></h3>
      <p class="font-13" style="margin-top: -">Posted last <?=formatDate($row->createDate);?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3">
      <img class="img-thumbnail" src=../media/<?=$row->uploadedImage;?>>
    </div>
    <div class="col-lg-9" style="height: 150px;">
      <div class="truncate">
        <p><?=$row->content;?></p>
      </div>
    <button onclick="location.href='../home/?view=projectDetail&Id=<?=$row->Id;?>'" style="width: 20%; bottom: 0; position: absolute;"
    class="btn btn-sm btn-block btn-warning waves-effect waves-light" type="submit">READ MORE</button>
    </div>
  </div>

  <hr class="m-b-30 m-t-30" width="100%">
<?php }}?>



</div>
</div>

<div class="container-fluid m-b-30">
<div class="row">
    <div class="container-80 center-page">
        <div class="col-md-10 center-page p-b-30">
                <form class="form-inline" method="GET">
                <div class="form-group">
                  <input type="hidden" name="view" value="searchJob">
                  <input type="text" name="s" class="form-control" placeholder="Job Title, Skills or Keywords" style="height: 67px;width:350px;">
                  <select name="c" class="form-control" style="height: 67px; width:300;" required>
                    <option value="">Select Category</option>
                    <?php foreach($jobFunctionList as $row){ ?>
                      <option value="<?=$row->Id;?>"><?=$row->option;?></option>
                    <?php } ?>
                  </select>
                      <button type="submit" class="btn waves-effect waves-light btn-primary" style="margin-top: -1px;"><i class="fa fa-search m-r-5"></i>Search</button>

                </div>
              </form>
              </div>
          </div>
      </div>
</div>
