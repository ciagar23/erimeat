<div class="row">
    <div class="col-md-12">
        <div class="card-box">

            <form id="default-wizard" action="process.php?action=addAccount" method="POST">
                    <legend>Add Account</legend>

                    <div class="row m-t-20">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="firstName" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastName" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username"  placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password"  placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control select2" name="level">
                                    <option>Select Position</option>
                                    <option value="admin">Admin</option>
                                    <option value="hr">HR</option>
                                </select>
                            </div>
                        </div>
                <button type="submit" class="btn btn-primary stepy-finish">Add Account</button>
            </form>

        </div>
    </div>
</div>

<!-- End row -->
