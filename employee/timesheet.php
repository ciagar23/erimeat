<?php $username = $_SESSION['employee_session'];?>
<div class="card-box">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>                
                            <th>Date</th>              
                            <th>Check In</th>
                            <th>Break Out</th>
                            <th>Break In</th>
                            <th>Check Out</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php                       
                    $conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', ''); 
                    $result = $conn->prepare("SELECT * FROM dtr WHERE employee_name='$username'");
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                    $id=$row['Id'];
                    ?>
                          <tr>
                            <td> <?php echo $row['dtr_date']?></td>
                            <td> <?php echo $row['checkIn']?></td>
                            <td> <?php echo $row['breakOut']?></td>
                            <td> <?php echo $row['breakIn']?></td>
                            <td> <?php echo $row['checkOut']?></td>
                         </tr>
                  <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                     
    </div>  <!-- end row -->
</div>


