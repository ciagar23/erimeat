<?php
$jf = new JobFunction;
$jf->readList();
$pt = new PositionType;
$pt->readList();
?>
<div class="row">
    <div class="col-md-12">
      <h2 class="text-center m-t-30 m-b-30">Submit Resume</h2>
      <div class="jumbotron center-page" style="width: 1140px;">
            <form id="default-wizard" action="process.php?action=submitApplication" method="POST" enctype="multipart/form-data" data-parsley-validate="">
                    <div class="row m-t-20">
                        <div class="col-sm-7 center-page">

                              <input type="hidden" name="jobId" value=<?=$_GET['id']?>>
                              <div class="form-group">
                                  <label for="firstname">Job Function <span style="color: red;">*</span></label>
                                  <select class="form-control" name="jobFunctionId" required>
                                    <option>Please Select</option>
                                    <?php foreach($jf->readList() as $row) {?>
                                      <option value="<?=$row->Id;?>"><?=$row->option;?></option>
                                    <?php } ?>
                                  </select>
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">First Name <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="firstName" required>
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Last Name <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="lastName" required>
                              </div>
                              </div>

                              <div class="clearfix"></div>

                              <div class="form-group">
                                  <label for="username">Email <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="email" required>
                              </div>

                              <div class="form-group">
                                  <label for="username">Phone Number <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="phoneNumber" required>
                              </div>


                          <div class="form-group">
                              <label for="username">Primary Address <span style="color: red;">*</span></label>
                              <input type="text" class="form-control" name="address1" required>
                          </div>

                          <div class="form-group">
                              <label for="username">Secondary Address</label>
                              <input type="text" class="form-control" name="address2">
                          </div>

                          <div>
                          <div class="form-group w-33-p pull-left p-r-10">
                              <label for="username">City <span style="color: red;">*</span></label>
                              <input type="text" class="form-control" name="city" required>
                          </div>

                          <div class="form-group w-33-p pull-left">
                              <label for="username">State <span style="color: red;">*</span></label>
                              <input type="text" class="form-control" name="state" required>
                          </div>

                          <div class="form-group w-33-p pull-right">
                              <label for="username">Postal Code <span style="color: red;">*</span></label>
                              <input type="text" class="form-control" name="zipCode" required>
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
