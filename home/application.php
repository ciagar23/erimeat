<?php

$jf = new JobFunction;
$jf->readList();

$pt = new PositionType;
$pt->readList();

?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">

            <form id="default-wizard" action="process.php?action=submitApplication" method="POST" enctype="multipart/form-data">
                    <legend>Submit Application</legend>
                    <div class="row m-t-20">
                        <div class="col-sm-6">

                              <input type="hidden" name="jobId" value="<?=$_GET['id'];?>">
                              <div class="form-group">
                                  <label for="firstname">Job Function</label>
                                  <select class="form-control" name="jobFunctionId">
                                    <?php foreach($jf->readList() as $row) {?>
                                      <option value="<?=$row->Id;?>"><?=$row->option;?></option>
                                    <?php } ?>
                                  </select>
                              </div>

                              <div class="form-group">
                                  <label for="username">First Name</label>
                                  <input type="text" class="form-control" name="firstName" placeholder="">
                              </div>

                              <div class="form-group">
                                  <label for="username">Last Name</label>
                                  <input type="text" class="form-control" name="lastName" placeholder="">
                              </div>

                              <div class="form-group">
                                  <label for="username">Email</label>
                                  <input type="text" class="form-control" name="email" placeholder="">
                              </div>

                              <div class="form-group">
                                  <label for="username">Phone Number</label>
                                  <input type="text" class="form-control" name="phoneNumber" placeholder="">
                              </div>

                        </div>

                        <div class="col-sm-6">


                          <div class="form-group">
                              <label for="username">Primary Address</label>
                              <input type="text" class="form-control" name="address1" placeholder="">
                          </div>

                          <div class="form-group">
                              <label for="username">Secondary Address</label>
                              <input type="text" class="form-control" name="address2" placeholder="">
                          </div>

                          <div class="form-group">
                              <label for="username">City</label>
                              <input type="text" class="form-control" name="city" placeholder="">
                          </div>

                          <div class="form-group">
                              <label for="username">State</label>
                              <input type="text" class="form-control" name="state" placeholder="">
                          </div>

                          <div class="form-group">
                              <label for="username">Zip Code</label>
                              <input type="text" class="form-control" name="zipCode" placeholder="">
                          </div>

                          <div class="form-group">
                              <label for="username">Upload Resume</label>
                                  <input type="file"  class="form-control" name="upload_file" required/>
                          </div>

                        </div>
                    </div>
                <button type="submit" class="btn btn-primary stepy-finish">Submit</button>
            </form>

        </div>
    </div>
</div>

<!-- End row -->
