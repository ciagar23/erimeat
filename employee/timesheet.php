<?php
/*$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';*/
$user = $_SESSION['employee_session'];
$obj = new DTR;
?>
<div class="card-box">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Login</th>
                            <th>Break</th>
                            <th>Lunch</th>
                            <th>Logout</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php foreach($obj->readList($user) as $row) {?>
                          <tr>
                            <td> <?=$row->createDate;?></td>
                            <td> <?=$row->checkIn;?></td>
                            <td> <?=$row->breakOut;?> - <?=$row->breakIn;?></td>
                            <td> <?=$row->lunchOut;?> - <?=$row->lunchIn;?></td>
                            <td> <?=$row->checkOut;?></td>
                         </tr>
                  <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>


    </div>  <!-- end row -->
</div>
