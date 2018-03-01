<?php
$jf = new JobFunction;
$jf->readList();
?>

<div class="row">
    <div class="col-md-12">
      <h2 class="text-center m-t-30 m-b-30">Client Request</h2>
      <div class="jumbotron center-page" style="width: 1140px;">
            <form id="default-wizard" action="process.php?action=clientRequest" method="POST">
                    <div class="row m-t-20">
                        <div class="col-sm-7 center-page">

                              <div class="form-group">
                                  <label for="firstname">Industry</label>
                                  <select class="form-control" name="jobFunctionId">
                                    <?php foreach($jf->readList() as $row) {?>
                                      <option value="<?=$row->Id;?>"><?=$row->option;?></option>
                                    <?php } ?>
                                  </select>
                              </div>

                              <div class="form-group">
                                <label for="username">Department</label>
                                <input type="text" class="form-control" name="department" placeholder="">
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                <label for="username">Company Name</label>
                                <input type="text" class="form-control" name="name" placeholder="">
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                <label for="username">Company ABN</label>
                                <input type="text" class="form-control" name="abn" placeholder="">
                              </div>
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="firstname">Client Contact Person</label>
                                  <input type="text" class="form-control" name="contactPerson"  placeholder="">
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                <label for="username">Client Email</label>
                                <input type="text" class="form-control" name="email" placeholder="">
                              </div>
                              </div>

                            <div class="form-group">
                                <label for="username">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="">
                            </div>

                            <div class="p-r-10 w-50-p pull-left">
                            <div class="form-group">
                              <label for="username">Phone Number</label>
                              <input type="text" class="form-control" name="phoneNumber" placeholder="">
                            </div>
                            </div>

                            <div class="p-l-10 w-50-p pull-left">
                            <div class="form-group">
                              <label for="username">Mobile Number</label>
                              <input type="text" class="form-control" name="mobileNumber" placeholder="">
                            </div>
                            </div>

                            <div class="form-group">
                              <label for="username">Description</label>
                              <input type="text" class="form-control" name="description" placeholder="">
                            </div>
                          </div>
                    <div class="text-center m-t-30">
                        <button type="submit" class="btn btn-primary stepy-finish"> SEND REQUEST </button>
                    </div>
            </form>
          </div>
    </div>
</div>

<!-- End row -->
