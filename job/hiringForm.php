<div class="row">
    <div class="col-md-12">
        <div class="card-box">

            <form id="default-wizard" action="process.php?action=create" method="POST">
                    <legend>Hiring Request Form</legend>

                    <div class="row m-t-20">
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label for="firstname">Job Function</label>
                                <input type="text" class="form-control" id="firstname" name="jobFunctionId"  placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Position Type</label>
                                <input type="text" class="form-control" id="username" name="positionTypeId" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Position Hiring For</label>
                                <input type="text" class="form-control" id="username" name="position" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Company</label>
                                <input type="text" class="form-control" id="username" name="company" placeholder="">
                            </div>

                        </div>
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label for="firstname">Work Email</label>
                                <input type="text" class="form-control" id="firstname" name="workEmail"  placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Job Title</label>
                                <input type="text" class="form-control" id="username" name="jobTitle" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Business Phone</label>
                                <input type="text" class="form-control" id="username" name="businessPhone" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Comment</label>
                                <textarea class="form-control" name="comment"></textarea>
                            </div>

                        </div>
                    </div>
                <button type="submit" class="btn btn-primary stepy-finish">Send Request</button>
            </form>

        </div>
    </div>
</div>

<!-- End row -->
