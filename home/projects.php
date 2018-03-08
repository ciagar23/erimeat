<?php
  $projectList = projects()->all();
?>
<div class="m-t-30 container-80 container-fluid m-b-30">

  <!-- Start About Us Content -->
  <div class="center-page container-80">
  <?php
    foreach($projectList as $row){
  ?>
  <div class="row">
    <div class="col-md-3">
      <img class="img-thumbnail" src=../media/<?=$row->uploadedImage;?>>
    </div>
    <div class="col-md-9">
      <h4><?=$row->title;?></h4>
      <p><?=$row->content;?></p>
      <p><a href="../home/?view=projectDetail&Id=<?=$row->Id;?>" class="text-primary">Read More</a></p><p>Posted last <?=$row->createDate;?></p>
    </div>
  </div>

  <hr class="m-b-30 m-t-30" width="100%">
  <?php }?>

</div>
      <div class="row form-container container-80 center-page">
          <div class="col-md-12 center-page">
              <div class="input-group m-t-5">
                  <input type="text" id="" class="form-control form-lg" style="height: 67px;" value="Search Jobs">
                  <span class="input-group-btn">
                      <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search m-r-5"></i> Search Jobs</button>
                  </span>
              </div>
          </div>
      </div>
</div>
