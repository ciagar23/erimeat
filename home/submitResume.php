<?php
$jf = new JobFunction;
$jf->readList();
$pt = new PositionType;
$pt->readList();
?>
<div class="row">
    <div class="col-md-12">
      <h2 class="text-center m-t-30 m-b-30">Submit Resume</h2>
      <div class="jumbotron center-page jumbotron-w">
            <form id="default-wizard" action="process.php?action=submitResume" method="POST" enctype="multipart/form-data">
                    <div class="row m-t-20">
                        <div class="col-sm-7 center-page">

                              <div class="form-group">
                                  <label for="firstname">Job Function</label>
                                  <select class="form-control" name="jobFunctionId">
                                    <?php foreach($jf->readList() as $row) {?>
                                      <option value="<?=$row->Id;?>"><?=$row->option;?></option>
                                    <?php } ?>
                                  </select>
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">First Name</label>
                                  <input type="text" class="form-control" name="firstName" placeholder="">
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Last Name</label>
                                  <input type="text" class="form-control" name="lastName" placeholder="">
                              </div>
                              </div>

                              <div class="form-group">
                                  <label for="username">Email</label>
                                  <input type="text" class="form-control" name="email" placeholder="">
                              </div>

                              <div class="form-group">
                                  <label for="username">Phone Number</label>
                                  <input type="text" class="form-control" name="phoneNumber" placeholder="">
                              </div>


                          <div class="form-group">
                              <label for="username">Primary Address</label>
                              <input type="text" class="form-control" name="address1" placeholder="">
                          </div>

                          <div class="form-group">
                              <label for="username">Secondary Address</label>
                              <input type="text" class="form-control" name="address2" placeholder="">
                          </div>

                          <div>
                          <div class="form-group w-33-p pull-left p-r-10">
                              <label for="username">City</label>
                              <input type="text" class="form-control" name="city" placeholder="">
                          </div>

                          <div class="form-group w-33-p pull-left">
                              <label for="username">State</label>
                              <input type="text" class="form-control" name="state" placeholder="">
                          </div>

                          <div class="form-group w-33-p pull-right">
                              <label for="username">Postal Code</label>
                              <input type="text" class="form-control" name="zipCode" placeholder="">
                          </div>
                          </div>
                          <div class="text-center"><h3>Attach Resume</h3>
                          <p>Choose one of the following options:</p></div>
                          <div class="col-sm-3">
                            <div class="pull-right text-center form-icon">
                              <i class="fa fa-file-text-o fa-2x text-white p-t-10" name></i>
                            </div>
                          </div>
                          <div class="col-md-8">
                          <h4>Upload Your Resume</h4>
                          <p>Supported File Types: pdf, txt, .doc, .docx</p>
                        </div>
                          <div class="form-group">
                              <input type="file"  class="form-control" name="upload_file" required/>
                          </div>
                    </div>
                  <div class="text-center m-t-30">
                      <button type="submit" class="btn btn-primary stepy-finish"> SUBMIT RESUME </button>
                  </div>
            </form>
          </div>
    </div>
</div>

<!-- End row -->
