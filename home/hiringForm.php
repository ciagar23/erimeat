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
                                  <label for="firstname">Job Category</label>
                                  <select class="form-control" name="jobFunctionId">
                                    <?php foreach($jf->readList() as $row) {?>
                                      <option value="<?=$row->Id;?>"><?=$row->option;?></option>
                                    <?php } ?>
                                  </select>
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Employment Type</label>
                                  <select class="form-control" name="positionTypeId">
                                    <?php foreach($pt->readList() as $row) {?>
                                      <option value="<?=$row->Id;?>"><?=$row->option;?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Job Classification</label>
                                  <input type="text" class="form-control" name="position" placeholder="">
                              </div>
                              </div>

                              <div class="form-group">
                                  <label for="username">Contact Person</label>
                                  <input type="text" class="form-control" name="contactPerson" placeholder="">
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Client Email</label>
                                  <input type="text" class="form-control" name="workEmail" placeholder="">
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Job Title</label>
                                  <input type="text" class="form-control" name="jobTitle" placeholder="">
                              </div>
                              </div>

                              <div class="p-r-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Business Phone</label>
                                  <input type="text" class="form-control" name="businessPhone" placeholder="">
                              </div>
                              </div>

                              <div class="p-l-10 w-50-p pull-left">
                              <div class="form-group">
                                  <label for="username">Postal Code</label>
                                  <input type="text" class="form-control" name="zipCode" placeholder="">
                              </div>
                              </div>

                              <div class="form-group">
                                  <label for="username">Company</label>
                                  <input type="text" class="form-control" name="name" placeholder="">
                              </div>

                              <div class="form-group">
                                  <label for="username">Comment</label>
                                  <input type="text" class="form-control" name="comment" placeholder="">
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
