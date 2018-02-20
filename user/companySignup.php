<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Teamire - Insert System Name</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../include/assets/images/favicon.ico">

        <!-- App css -->
        <link href="../include/../include/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../include/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../include/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../include/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../include/assets/js/modernizr.min.js"></script>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="index.html" class="text-success">
                                                <span>Teamire</span>
                                            </a>
                                        </h2>
                                        <h5 class="text-uppercase font-bold m-b-5 m-t-50">Sign Up as Company</h5>
                                        <p class="m-b-0">
																				<?=$error?></p>
                                    </div>
                                    <div class="account-content">
                                        <form class="form-horizontal" action="process.php?action=companySignup" method="POST">

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="username">Username</label>
                                                    <input class="form-control" type="text" name="username">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="firstName">First Name</label>
                                                    <input class="form-control" type="text" name="firstName">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="lastName">Last Name</label>
                                                    <input class="form-control" type="text" name="lastName">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="name">Company Name</label>
                                                    <input class="form-control" type="text" name="name">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="description">Description</label>
                                                    <input class="form-control" type="text" name="description">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="email">Email</label>
                                                    <input class="form-control" type="text" name="email">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="contactPerson">Contact Person</label>
                                                    <input class="form-control" type="text" name="contactPerson">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="contactNumber">Contact Number</label>
                                                    <input class="form-control" type="text" name="contactNumber">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="address">Address</label>
                                                    <input class="form-control" type="text" name="address">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" name="password">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">Confirm Password</label>
                                                    <input class="form-control" type="password" name="confrimPassword">
                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign Up</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../include/assets/js/jquery.min.js"></script>
        <script src="../include/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="../include/assets/js/bootstrap.min.js"></script>
        <script src="../include/assets/js/metisMenu.min.js"></script>
        <script src="../include/assets/js/waves.js"></script>
        <script src="../include/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="../include/assets/js/jquery.core.js"></script>
        <script src="../include/assets/js/jquery.app.js"></script>

    </body>
</html>
