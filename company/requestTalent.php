 <?php
$jfList = job_function()->all();
?>



 <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Request Talent</h4>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
<div class="card-box">
  <div class="row">
    <div class="col-sm-12">
     <br>
    <div class="pull-right">
      <button type="button" class="btn btn-primary waves-effect waves-light btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Request Talent</button>

    </div>
    <br>
      <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title"><b>List of Request</b></h4>
     <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Company Name</th>
              <th>ABN</th>
              <th>Company Representative</th>
              <th>Work Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

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
        <h4 class="modal-title" id="myModalLabel">Send Talent Request</h4>
      </div>
      <div class="modal-body">
        <form id="default-wizard" action="process.php?action=addAccount" method="POST">
          <p class="m-b-0">

          </p>
          <div class="row m-t-20">
            <div class="col-sm-12">
              <div class="form-group">
                                  <label for="firstname">Industry <span style="color: red;">*</span></label>
                                  <select class="form-control" name="jobFunctionId" required>
                                    <option>Please Select</option>
                                    <?php foreach($jfList as $row) {?>
                                      <option value="<?=$row->Id;?>"><?=$row->option;?></option>
                                    <?php } ?>
                                  </select>
                              </div>

               <div class="form-group">
                                <label for="username">Department <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="department" required>
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                <label for="username">Company Name <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="name" >
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                <label for="username">Company ABN <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="abn" required>
                              </div>
                              </div>
                               <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="firstname">Company Representative <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="contactPerson" required>
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                <label for="username">Company Representative Email <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="email" required>
                              </div>
                              </div>

                            <div class="form-group">
                                <label for="username">Address <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="address" required>
                            </div>

                            <div class="p-r-10 w-50-p pull-left">
                            <div class="form-group">
                              <label for="username">Phone Number <span style="color: red;">*</span></label>
                              <input type="text" class="form-control" name="phoneNumber" required>
                            </div>
                            </div>

                            <div class="p-l-10 w-50-p pull-left">
                            <div class="form-group">
                              <label for="username">Mobile Number <span style="color: red;">*</span></label>
                              <input type="text" class="form-control" name="mobileNumber" placeholder="">
                            </div>
                            </div>

                            <div class="form-group">
                              <label for="username">Description <span style="color: red;">*</span></label>
                              <textarea id="message" class="form-control" name="description"
                                                data-parsley-trigger="keyup" data-parsley-minlength="20"
                                                data-parsley-maxlength="100"
                                                data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.."
                                                data-parsley-validation-threshold="10"></textarea>
                            </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary stepy-finish">Send Request</button>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- End row -->
