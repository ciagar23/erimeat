
<div class="card-box">
    <div class="row">

       
                            <div class="col-sm-12">
                            <center>
                            <form method="POST">
                               
  <button type="submit" class="btn btn-primary" name="checkIn"><span class="fa fa-clock-o"></span> Check In</button>

   <input type="hidden" name="employee_name" value="John Doe  ">
  <input type="hidden" name="dtr_date" value="<?php echo date('Y-m-d')?>">
  <input type="hidden" name="checkIn" value="<?php echo date('h:i:sa')?>">
</form>
<?php
                 $conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', ''); 
                $result = $conn->prepare("SELECT * FROM dtr ORDER BY dtr_date ASC LIMIT 1");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                $id=$row['Id'];
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
                       <a href="checkout.php<?php echo '?id='.$id; ?>" class="btn btn-danger" name="breakOut"><span class="fa fa-clock-o"></span> Check out</a> 
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
                                         <!-- <th>Name</th> -->
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
              <!-- <td> <?php echo $row ['employee_name']; ?></td> -->
                <td> <?php echo date('Y-m-d')?></td>
                <td> <?php echo date('h:i:sa')?></td>
                <td> <?php echo date('h:i:sa')?></td>
                <td> <?php echo date('h:i:sa')?></td>

                <td> <?php echo date('h:i:sa')?></td>
                <td>

                <?php
                if ($row ['checkIn']==TRUE && $row ['breakOut']==FALSE && $row['breakIn']==FALSE &&  $row ['checkOut']==FALSE) {
                  echo '<span class="btn btn-success">Checked In</span>';
                }

                else if($row ['checkIn']==TRUE && $row ['breakOut']==TRUE && $row['breakIn']==FALSE &&  $row ['checkOut']==FALSE){
                    echo '<span class="btn btn-warning">Break Out</span>';
                }

                else if($row ['checkIn']==TRUE && $row ['breakOut']==TRUE && $row['breakIn']==TRUE &&  $row ['checkOut']==FALSE){
                    echo '<span class="btn btn-info">Break In</span>';
                }

                 else if($row ['checkIn']==TRUE && $row ['breakOut']==TRUE && $row['breakIn']==TRUE &&  $row ['checkOut']==TRUE){
                    echo '<span class="btn btn-danger">Checked Out</span>';
                }
               ?>

               

                
               
                   
                </td>
                  </tr>
<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                     
    </div>  <!-- end row -->
</div>


<?php
     $conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', ''); 
extract($_POST);
if (isset($checkIn)) {
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO dtr (employee_name, dtr_date, checkIn)
VALUES ('$employee_name', '$dtr_date', '$checkIn')";

$conn->exec($sql);
echo "<script>alert('successfully added!'); window.location='index.php'</script>";
}

?>

