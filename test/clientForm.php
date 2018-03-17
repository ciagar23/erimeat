<?php
$Id = $_GET['Id'];
$company = company()->get("Id=$Id");
?>
<div class="row">
  <div class="col-md-12">
      <div class="text-center card-box">
          <div class="clearfix"></div>
          <div class="member-card">

            <form action="process.php?action=updateClient&Id=<?=$company->Id;?>" method="post">
              <?php
              foreach ($company as $key => $value) {
                if ($key == "Id" || $key == "username" || $key == "abn" || $key == "jobFunctionId" || $key == "isApproved"){}
                  else {
                ?>
                  <label><?=$key;?>:</label>
                  <input type="text" name="<?=$key;?>" value="<?=$value;?>"> <br>
                    <?php
                  }
                }
              ?>
              <br>
              <button onclick="location.href='?view=clientForm&Id=<?=$company->Id?>'">Update</button>
          </div>
      </div>
  </div> <!-- end col -->
</div>
