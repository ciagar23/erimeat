<?php

$jf = new JobFunction;
$jf->readList();

?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">

            <form id="default-wizard" action="process.php?action=clientRequest" method="POST">
                    <legend>Client Request Form</legend>

                    <div class="row m-t-20">
                        <div class="col-sm-6">
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

                            <div class="form-group">
                                <label for="username">Company Name</label>
                                <input type="text" class="form-control" name="name" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Company ABN</label>
                                <input type="text" class="form-control" name="abn" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="firstname">Client Contact Person</label>
                                <input type="text" class="form-control" name="contactPerson"  placeholder="">
                            </div>

                        </div>
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label for="firstname">Client Email</label>
                                <input type="text" class="form-control" id="firstname" name="email"  placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="firstname">Address</label>
                                <input type="text" class="form-control" name="address"  placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="username">Phone Number</label>
                                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Mobile Number</label>
                                <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Description</label>
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
