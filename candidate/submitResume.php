<?php

$jf = new JobFunction;
$jf->readList();

$pt = new PositionType;
$pt->readList();

?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">

            <form id="default-wizard" action="process.php?action=submitResume" method="POST" enctype="multipart/form-data">
                    <legend>Submit Resume</legend>
                    <div class="row m-t-20">
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="username">Cover Letter</label>
                                  <textarea class="form-control" name="coverLetter"></textarea>
                              </div>
                        </div>

                        <div class="col-sm-6">

                          <h4 class="header-title m-t-0">Upload your resume here</h4>
                          <p class="text-muted font-14 m-b-10">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                          <div class="p-20 p-b-0">
                              <div class="form-group clearfix">
                                  <div class="col-sm-12 padding-left-0 padding-right-0">
                                      <input type="file" name="upload_file"/>
                                  </div>
                              </div>
                          </div>

                        </div>
                    </div>
                <button type="submit" class="btn btn-primary stepy-finish">Submit</button>
            </form>

        </div>
    </div>
</div>

<!-- End row -->
