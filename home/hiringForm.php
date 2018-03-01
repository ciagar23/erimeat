<?php
$jf = new JobFunction;
$jf->readList();
$pt = new PositionType;
$pt->readList();
?>
<div class="row">
    <div class="col-md-12">
      <div class="hiring-form-header center-page">
      <h2 class="text-center m-t-30 m-b-30 text-white">Talent Request</h2>
      <p class="text-center text-white">We will help you build the workforce you desire – quickly</p>
    </div>
      <div class="jumbotron center-page" style="width: 1140px;">
            <form id="default-wizard" action="process.php?action=create" method="POST">
                    <div class="row m-t-20">
                        <div class="col-sm-7 center-page">

                              <div class="form-group">
                                  <label for="firstname">Job Category <span style="color: red;">*</span></label>
                                  <select class="form-control" name="jobFunctionId" required>
                                    <?php foreach($jf->readList() as $row) {?>
                                      <option value="<?=$row->Id;?>"><?=$row->option;?></option>
                                    <?php } ?>
                                  </select>
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Employment Type <span style="color: red;">*</span></label>
                                  <select class="form-control" name="positionTypeId" required>
                                    <?php foreach($pt->readList() as $row) {?>
                                      <option value="<?=$row->Id;?>"><?=$row->option;?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Job Classification <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="position" required>
                              </div>
                              </div>

                              <div class="form-group">
                                  <label for="username">Contact Person <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="contactPerson" required>
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Client Email <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="workEmail" required>
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Job Title <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="jobTitle" required>
                              </div>
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Business Phone <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="businessPhone" required>
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Postal Code <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="zipCode" required>
                              </div>
                              </div>

                              <div class="form-group">
                                  <label for="username">Company <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" name="name" required>
                              </div>

                              <div class="form-group">
                                  <label for="username">Comments</label>
                                  <input type="text" class="form-control" name="comment" placeholder="">
                              </div>
                    </div>
                  <div class="text-center m-t-30">
                      <button type="submit" class="btn btn-primary stepy-finish"> SEND REQUEST </button>
                  </div>
                  <div class="text-center m-t-30">
                    <p style="color: #000000;">Or call us at <strong style="color: #4489e4;">+61452 364 793</strong></p>
                  </div>
            </form>
          </div>
    </div>
</div>

<!-- End row -->
