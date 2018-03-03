<?php
$app = DTR::readOne($_SESSION['employee_session'], date("Y-m-d"));

if ($app){
?>

<div class="card-box">
    <div class="row">
      <div class="col-sm-12">
        <center>
          <?php if ($app->status==1) { ?>
                  <div class="alert alert-icon alert-warning alert-dismissible fade in" role="alert">
                      You are currently On break
                  </div>
            <?php } else if ($app->status==2) { ?>
                  <div class="alert alert-icon alert-warning alert-dismissible fade in" role="alert">
                      You are currently on Lunch
                  </div>
            <?php } else if ($app->status==3) { ?>
                  <div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert">
                      You have already logged out!
                  </div>
            <?php } else { ?>
                  <div class="alert alert-icon alert-success alert-dismissible fade in" role="alert">
                      You have are logged in!
                  </div>
            <?php } ?>
        <br>
        <?php if ($app->status == 1 || $app->status == 2) {?>
              <a href="process.php?action=stampCheckIn" class="btn btn-primary" name="breakOut"><span class="fa fa-clock-o"></span>Login</a>
        <?php } else { ?>
              <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span>Login</button>
        <?php } ?>
          |
        <?php if (!$app->breakOut && $app->status == 0) {?>
              <a href="process.php?action=stampBreak" class="btn btn-warning" name="breakOut"><span class="fa fa-clock-o"></span>Break</a>
        <?php } else { ?>
              <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span>Break</button>
        <?php } ?>
          |
        <?php if (!$app->lunchOut && $app->status == 0) {?>
              <a href="process.php?action=stampLunch" class="btn btn-warning" name="breakOut"><span class="fa fa-clock-o"></span>Lunch</a>
        <?php } else { ?>
              <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span>Lunch</button>
        <?php } ?>
          |
        <?php if (!$app->checkOut && $app->status == 0) {?>
              <a href="process.php?action=stampCheckOut" class="btn btn-danger" name="breakOut"><span class="fa fa-clock-o"></span>Logout</a>
        <?php } else { ?>
              <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span>Logout</button>
        <?php } ?>

</center>
<br>
<br>
         <div class="card-box table-responsive">
            <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Check In</th>
                        <th>Break</th>
                        <th>Lunch</th>
                        <th>Check Out</th>
                      </tr>
                    </thead>
              <tbody>
              <tr>
                <td><?=$app->createDate;?></td>
                <td><?=$app->checkIn;?></td>
                <td><?=$app->breakOut;?> - <?=$app->breakIn;?></td>
                <td><?=$app->lunchOut;?> - <?=$app->lunchIn;?></td>
                <td><?=$app->checkOut;?></td>
              </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

    </div>  <!-- end row -->
</div>

<?php } else {?>

  <div class="card-box">
      <div class="row">
        <div class="col-sm-12">
          <center>
            <div class="alert alert-icon alert-warning alert-dismissible fade in" role="alert">
                You have not checked in yet.
            </div>
                <a href="process.php?action=newCheckIn" class="btn btn-primary" name="breakOut"></span>Click here to check in</a>
          </center>
        </div>
      </div>
    </div>

<?php } ?>
