<?php
$app = DTR::readOne($_SESSION['employee_session'], date("Y-m-d"));

if ($app){

$login = 0;
$break = 1;
$break2 = 2;
$lunch = 3;
$logout = 4;

?>

<div class="card-box">
    <div class="row">
      <div class="col-sm-12">
        <center>
          <?php if ($app->status==$break) { ?>
                  <div class="alert alert-icon alert-warning alert-dismissible fade in" role="alert">
                      You are currently on first break
                  </div>
            <?php } else if ($app->status==$break2) { ?>
                  <div class="alert alert-icon alert-warning alert-dismissible fade in" role="alert">
                      You are currently on second break
                  </div>
            <?php } else if ($app->status==$lunch) { ?>
                  <div class="alert alert-icon alert-warning alert-dismissible fade in" role="alert">
                      You are currently on Lunch
                  </div>
            <?php } else if ($app->status==$logout) { ?>
                  <div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert">
                      You have already logged out!
                  </div>
            <?php } else { ?>
                  <div class="alert alert-icon alert-success alert-dismissible fade in" role="alert">
                      You are logged in!
                  </div>
            <?php } ?>
        <br>
        <?php if ($app->status == $break || $app->status == $break2 || $app->status == $lunch) {?>
              <a href="process.php?action=stampCheckIn" class="btn btn-primary"><span class="fa fa-clock-o"></span>Login</a>
        <?php } else { ?>
              <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span>Login</button>
        <?php } ?>
          |
        <?php if ((!$app->breakOut || !$app->breakOut2) && $app->status == $login) {?>
            <?php if (!$app->breakOut) {?>
              <a href="process.php?action=stampBreak" class="btn btn-warning"><span class="fa fa-clock-o"></span>Break</a>
            <?php } else { ?>
              <a href="process.php?action=stampBreak2" class="btn btn-warning"><span class="fa fa-clock-o"></span>Break</a>
            <?php } ?>
        <?php } else { ?>
              <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span>Break</button>
        <?php } ?>
          |
        <?php if (!$app->lunchOut && $app->status == $login) {?>
              <a href="process.php?action=stampLunch" class="btn btn-warning"><span class="fa fa-clock-o"></span>Lunch</a>
        <?php } else { ?>
              <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span>Lunch</button>
        <?php } ?>
          |
        <?php if (!$app->checkOut && $app->status == $login) {?>
              <a href="process.php?action=stampCheckOut" class="btn btn-danger"><span class="fa fa-clock-o"></span>Logout</a>
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
                        <th>First Break</th>
                        <th>Second Break</th>
                        <th>Lunch</th>
                        <th>Check Out</th>
                      </tr>
                    </thead>
              <tbody>
              <tr>
                <td><?=$app->createDate;?></td>
                <td><?=$app->checkIn;?></td>
                <td><?=$app->breakOut;?> - <?=$app->breakIn;?></td>
                <td><?=$app->breakOut2;?> - <?=$app->breakIn2;?></td>
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
                You have not logged in yet.
            </div>
                <a href="process.php?action=newCheckIn" class="btn btn-primary" name="breakOut"></span>Click here to log in</a>
          </center>
        </div>
      </div>
    </div>

<?php } ?>
