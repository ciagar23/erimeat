<?php
$obj = new Profile;
$user = $obj->readOne($_SESSION['user_session']);
?>
<!-- Basic Form Wizard -->
<div class="row">
    <div class="col-md-12">
        <div class="card-box">

            <form id="default-wizard" action="process.php?action=update&Id=<?=$user->username;?>" method="POST">
                <fieldset title="1">
                    <legend>Basic Information</legend>

                    <div class="row m-t-20">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstName"  value="<?=$user->firstName;?>" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?=$user->username;?>" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname"  name="lastName" value="<?=$user->lastName;?>" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="emailaddress">Email Address</label>
                                <input type="email" class="form-control" id="emailaddress"  name="email" value="<?=$user->email;?>" placeholder="">
                            </div>
                        </div>
                    </div>

                </fieldset>

                <fieldset title="2">
                    <legend>About you</legend>

                    <div class="row m-t-20">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phonenumber">Phone Number</label>
                                <input type="text" class="form-control" id="phonenumber"  name="contact" value="<?=$user->contact;?>" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address"  name="address" value="<?=$user->address;?>" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="aboutme">About Me</label>
                                <textarea class="form-control" rows="5" name="aboutMe" id="aboutme"><?=$user->aboutMe;?></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset title="3">
                    <legend>Social Profiles</legend>

                    <div class="row m-t-20">
                        <div class="col-sm-6">


                            <div class="form-group">
                                <label>Linkdin</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-linkedin"></i></span>
                                    <input type="text" class="form-control" name="linkdin" value="<?=$user->linkdin;?>" placeholder="Linkdin url">
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label>Skype</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-skype"></i></span>
                                    <input type="text" class="form-control" name="skype" value="<?=$user->skype;?>" placeholder="Skype url">
                                </div>
                            </div>

                        </div>
                    </div>
                </fieldset>

                <button type="submit" class="btn btn-primary stepy-finish">Submit</button>
            </form>

        </div>
    </div>
</div>

<!-- End row -->
