<div class="card-box">
    <div class="row">
      <div class="col-sm-12">
        <center>
            <?php
              $conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', ''); 
              $username = $_SESSION['employee_session'];
              $result = $conn->prepare("SELECT * FROM dtr WHERE employee_name='$username' ORDER BY dtr_date DESc LIMIT 2");
              $result->execute();
              for($i=0; $row = $result->fetch(); $i++){
                  $id=$row['Id'];
                  extract($row);
                  $checkout_date = $dtr_date;
                  if($row['dtr_date']==TRUE && $row ['checkIn']==TRUE && $row ['breakOut']==TRUE && $row['breakIn']==TRUE &&  $row ['checkOut']==TRUE){
          ?>
            <div class="alert alert-icon alert-success alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="mdi mdi-check-all"></i>
                <strong><?php echo $dtr_date;?></strong> Already Checkout
            </div>

      <?php
        }
          else{
        ?>
        <br>
              <?php
                if ($row ['breakOut']==TRUE) {
                  echo ' <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span> Break out</button> |';
                }
                else{
                  ?>
                     <a href="breakout.php<?php echo '?id='.$id; ?>" class="btn btn-warning" name="breakOut"><span class="fa fa-clock-o"></span> Break out</a> |
                  <?php
                }
                ?>
                


                    <?php
                if ($row ['breakIn']==TRUE) {
                  echo ' <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span> Break in</button> |';
                }
                else  if ($row ['breakOut']==FALSE) {
                  echo ' <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span> Break in</button> |';
                }
                else{
                  ?>
                     <a href="breakin.php<?php echo '?id='.$id; ?>" class="btn btn-success" name="breakOut"><span class="fa fa-clock-o"></span> Break in</a> | 
                  <?php
                }
                ?>
                  <?php
                 if($row ['checkIn']==TRUE && $row ['breakOut']==FALSE && $row['breakIn']==FALSE){
                  ?>
                       <a href="checkout.php<?php echo '?id='.$id; ?>" class="btn btn-danger" name="breakOut"><span class="fa fa-clock-o"></span> Check out</a> |
                  <?php
                }

                 else if ($row ['breakIn']==FALSE) {
                  echo ' <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span> Check out</button>';
                }
                  else if ($row ['checkIn']==TRUE && $row ['breakOut']==TRUE && $row['breakIn']==TRUE &&  $row ['checkOut']==FALSE) {
                    ?>
                       <a href="checkout.php<?php echo '?id='.$id; ?>" class="btn btn-danger" name="breakOut"><span class="fa fa-clock-o"></span> Check out</a> |

                    <?php
   
                }

                   else{
                  echo ' <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span> Check out</button> |';
                }
                ?>
                
        <a href="checkout.php<?php echo '?id='.$id; ?>" class="btn btn-info" name="breakOut"><span class="fa fa-clock-o"></span> Remarks</a>
</center>
<br>
<br>
         <div class="card-box table-responsive">
            <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Check In</th>
                        <th>Break Out</th>
                        <th>Break In</th>
                        <th>Check Out</th>
                        <th>Status</th>
                      </tr>
                    </thead>
              <tbody>                   
              <tr>
                <td> <?php echo date('Y-m-d')?></td>
                <td> <?php echo date('h:i:sa')?></td>
                <td> <?php echo date('h:i:sa')?></td>
                <td> <?php echo date('h:i:sa')?></td>
                <td> <?php echo date('h:i:sa')?></td>
                  <?php
                  if ($row ['checkIn']==TRUE && $row ['breakOut']==FALSE && $row['breakIn']==FALSE &&  $row ['checkOut']==FALSE) {
                    echo '<td style="background-color:#3399cc;color:#fff;">Checked In</td>';
                  }

                  else if($row ['checkIn']==TRUE && $row ['breakOut']==TRUE && $row['breakIn']==FALSE &&  $row ['checkOut']==FALSE){
                      echo '<td style="background-color:#ffa91c;color:#fff;">Break Out</td>';
                  }

                  else if($row ['checkIn']==TRUE && $row ['breakOut']==TRUE && $row['breakIn']==TRUE &&  $row ['checkOut']==FALSE){
                      echo '<td style="background-color:#32c861;color:#fff;">Break In</td>';
                  }

                   else if($row ['checkIn']==TRUE && $row ['breakOut']==TRUE && $row['breakIn']==TRUE &&  $row ['checkOut']==TRUE){
                      echo '<td style="background-color:#d43f3a;color:#fff;">Checked Out</td>';
                  }
                 ?>
              </tr>
<?php 
  }
} 
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

    </div>  <!-- end row -->
</div>

