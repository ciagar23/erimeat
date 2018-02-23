<div class="card-box">
    <div class="row">

       
                            <div class="col-sm-12">
                            <div class="pull-right">
                            <form method="POST">
  <button type="submit" class="btn btn-primary" name="checkIn"><span class="fa fa-clock-o"></span> Check In</button> 
    <input type="hidden" name="employee_name" value="<?=$profile->firstName;?> <?=$profile->lastName;?>">
  <input type="hidden" name="dtr_date" value="<?php echo date('Y-m-d')?>">
  <input type="hidden" name="checkIn" value="<?php echo date('h:i:sa')?>"">
</form>






</div>
<br>
<br>

     
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>List of Time Submitted</b></h4>
                                   

                                         <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                        
                                            <th>Check In</th>
                                            <th>Break Out</th>
                                            <th>Break In</th>
                                            <th>Check Out</th>

                                          <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                    <?php
                 $conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', ''); 
                $result = $conn->prepare("SELECT * FROM dtr ORDER BY employee_name ASC");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                $id=$row['Id'];
              ?>
              <tr>
                <td> <?php echo $row ['employee_name']; ?></td>
                <td> <?php echo $row ['dtr_date']; ?></td>
                <td> <?php echo $row ['checkIn']; ?></td>
                <td> <?php echo $row ['breakOut']; ?></td>
                <td> <?php echo $row ['breakIn']; ?></td>

                <td> <?php echo $row ['checkOut']; ?></td>
                <td>
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
                       <a href="checkout.php<?php echo '?id='.$id; ?>" class="btn btn-danger" name="breakOut"><span class="fa fa-clock-o"></span> Check out</a> 

                    <?php
   
                }

                   else{
                  echo ' <button  class="btn btn-default"  disabled><span class="fa fa-clock-o"></span> Check out</button>';
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

