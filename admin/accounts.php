<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

$accountList = admin()->all();

?>
     <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Accounts</h4>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
<div class="card-box">
  <div class="row">
    <div class="col-sm-12">
     <br>
    <div class="pull-right">
      <button type="button" class="btn btn-primary waves-effect waves-light btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add New</button>

    </div>
    <br>
      <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title"><b>List of Accounts</b></h4>
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Action</th>
            </tr>
          </thead>
          <tbody>
           <?php foreach($accountList as $row) {
            if ($row){
              ?>
              <tr>
                <td><?=$row->firstName;?> <?=$row->lastName;?> </td>
                <td><?=$row->username;?></td>
                <td><?=$row->password;?></td>
                <td><?=$row->level;?></td>
                <td>
                  <a href="edit_ay.php?ay_Id='.$id.'"  class=" btn btn-success btn-xs tooltips" title="Click To Edit"><span class="fa fa-edit"></span> Edit</a>
                </td>
              </tr>
          <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Add New Account</h4>
      </div>
      <div class="modal-body">
        <form id="default-wizard" action="process.php?action=addAccount" method="POST">
          <p class="m-b-0">
            <?=$error?>
          </p>
          <div class="row m-t-20">
            <div class="col-sm-12">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstName" placeholder="">
              </div>

              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastName" placeholder="">
              </div>

              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username"  placeholder="">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password"  placeholder="">
              </div>

              <div class="form-group">
                <label>Level</label>
                <select class="form-control select2" name="level">
                  <option>Select Position</option>
                  <option value="admin">Admin</option>
                  <option value="hr">HR</option>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary stepy-finish">Add Account</button>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- End row -->
