
<?php

$jf = new JobFunction;
$jf->readList();

$pt = new PositionType;
$pt->readList();

?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">

            <form id="default-wizard" action="process.php?action=addExperience" method="POST">
                    <legend>Add Your New Experience</legend>

                        <div class="row m-t-20">
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="username">Position</label>
                                <input type="text" class="form-control" id="username" name="position" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Company</label>
                                <input type="text" class="form-control" id="username" name="company" placeholder="">
                            </div>



                        </div>




                        <div class="col-sm-6">

                            <div class="form-group">
                                <label for="username">Job Description</label>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <textarea class="form-control" name="description"></textarea>
                            </div>

                        </div>
                    </div>
                <button type="submit" class="btn btn-primary stepy-finish">Send Request</button>
            </form>

        </div>
    </div>
</div>

<!-- End row -->
