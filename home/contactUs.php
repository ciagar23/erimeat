<?php
$jf = new JobFunction;
$jf->readList();
?>

  <h2 class="text-center m-t-30 m-b-30">Contact Us</h2>
  <h3 class="text-center m-t-30 m-b-30">Enter your city or ZIP code to find an office near you.</h3>
      <div class="col-md-9 center-page">
          <div class="input-group m-t-5">
              <input type="text" id="" name="" class="form-control" style="height: 70px; border-color: #727B80;" placeholder="Job Title, Skills or Keywords">
              <span class="input-group-btn">
                  <button type="button" class="btn stepy-finish waves-light btn-primary"><i class="fa fa-search"></i> SEARCH </button>
              </span>
          </div>
      </div>
      <div class="clearfix"></div>
      <!--Start 2 panels -->
      <div class="container-80 center-page">
      <div class="row">
        <div class="col-lg-1">&nbsp;</div>
        <div class="col-12 col-lg-4 p-30">
          <h2 class="text-center mt30 mb25">Employers</h2>
          <p class="text-center mb20">Looking for the right candidate?</p>
          <div class="text-center m-b-10"><button class="btn-small btn-primary container-100" onclick="location.href='../home/?view=hiringForm'" role="button">REQUEST TALENT</button></div>
          <div class="text-center m-b-10"><button class="btn-small btn-primary container-100" onclick="location.href='../home/?view=searchResume'" role="button">SEARCH CANDIDATE</button></div>
          <div class="text-center m-b-10"><button class="btn-small btn-primary container-100" href="#" role="button">EMPLOYERS FAQ</button></div>
        </div>
        <div class="col-lg-2">&nbsp;</div>
        <div class="col-12 col-lg-4 p-30">
          <h2 class="text-center mt30 mb25">Job Seekers</h2>
          <p class="text-center mb20">Looking for a job? We can help.</p>
          <div class="text-center m-b-10"><button class="btn-small btn-primary container-100" onclick="location.href='../home/?view=submitResume'" role="button">SUBMIT YOUR RESUME</button></div>
          <div class="text-center m-b-10"><button class="btn-small btn-primary container-100" onclick="location.href='../home/?view=searchJob'" role="button">SEARCH JOB</button></div>
          <div class="text-center m-b-10"><button class="btn-small btn-primary container-100" href="#" role="button">JOB SEEKER FAQ</button></div>
        </div>
        <div class="col-lg-1">&nbsp;</div>
      </div>
    </div>

    <!-- Start Form Container -->
    <div class="form-container container-80 center-page">
      <h3 class="text-center m-b-30">Still have questions?</h3>
      <h3 class="text-center">Payroll and time reporting assistance</h3>
      <div class="row">
        <div class="col-lg-1">&nbsp;</div>
        <div class="col-12 col-lg-5">
          <p class="text-center">For Employers</p>
          <p class="text-center"><a href="#">hr@teamire.com</a></p>
          <p class=" text-center">or <a href="#">+61452 364 793</a></p>
        </div>
        <div class="col-12 col-lg-5">
          <p class="text-center">For Job Seekers</p>
          <p class="text-center"><a href="#">payroll@teamire.com</a></p>
          <p class=" text-center">or <a href="#">+61452 364 793</a></p>
        </div>
        <div class="col-lg-1">&nbsp;</div>
      </div>
      <hr class="h-line m-b-30 m-t-30" width="90%">
      <div class="col-12 col-lg-6 col-lg-offset-3">
        <h4 class="text-center m-b-15">Labor law Information</h4>
        <p class="text-center m-b-30" id="">We've made federal and state labor law posters available for our remote workers, which you can <a href="#">view here.</a></p>
      </div>
      <hr class="h-line m-b-30 m-t-30" width="90%">

      <h3 class="text-center">Send us an email</h3>
      <div class="col-md-8 center-page">
        <div class="row">
            <!-- Start Dropdown-->
            <div class="pull-left w-50-p p-r-10">
            <div class="form-group">
                <label for="firstname">Job Category <span style="color: red;">*</span></label>
                <select class="form-control" name="jobFunctionId" required>
                  <?php foreach($jf->readList() as $row) {?>
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
          </div>
            <!-- End Dropdown -->
            <div class="row">
              <label>Brief Description <span style="color: red;">*</span></label>
              <textarea style="width: 100%;" id="" maxlength="1000" name="description" required></textarea>
            </div>
            <div class="row">
            <div class="p-r-10 w-50-p pull-left">
              <div class="form-group">
                  <label for="username">Full Name</label>
                  <input type="text" class="form-control form-control-sm" style="height: 30px;" name="contactPerson" placeholder="">
              </div>
            </div>

            <div class="p-l-10 w-50-p pull-left">
              <div class="form-group">
                  <label for="username">Office you work with, if any</label>
                  <input type="text" class="form-control form-control-sm"name="lastName" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="p-r-10 w-50-p pull-left">
              <div class="form-group">
                  <label for="username">Email Address <span style="color: red;">*</span></label>
                  <input type="text" class="form-control form-control-sm" style="height: 30px;" name="email" required>
              </div>
            </div>

            <div class="p-l-10 w-50-p pull-left">
              <div class="form-group">
                  <label for="username">Business Phone</label>
                  <input type="text" class="form-control form-control-sm" style="height: 30px;" name="phoneNumber" placeholder="">
              </div>
            </div>
          </div>
            <p>This information will not be transferred, disclosed, or shared with a third party, or used for marketing purposes.</p>
            <div class="text-center m-t-30 m-b-30">
                <button type="submit" class="btn btn-primary stepy-finish"> SUBMIT </button>
            </div>
          </div>
        </div> <!-- End Form -->
  </div> <!-- End Form Container -->
