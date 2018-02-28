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


    <body >
    <div style="border-bottom:5px solid #3399cc;">
<img src="../include/assets/images/branding.jpg" >

      </div>
        <!-- HOME -->
        <section>
           
                <div class="row">
                    <div class="col-md-12">

                        

                            <div class="account-pages">
                              <div class="login-left-box" >
                                <div class="account-box" style="background-color: #3399cc;box-shadow: 5px 10px #888888;border-style: solid;border-color: #3399cc;">
                                    <div class="account-logo-box">
                                     
                                        <h2 class="text-uppercase text-center" >
                                            <a href="index.html" class="login-font">
                                                <span style="color:#fff;">Enter your login information to access our Time Reporting and Approval System</span>
                                            </a>
                                        </h2>
                                        <p class="m-b-0">
                                                                                <?=$error?></p>
                                    </div>
                                    <div class="account-content">
                                        <form class="form-horizontal" action="process.php?action=login" method="POST">

                                            <div class="form-group m-b-0 row">
                                                <div class="col-12">
                                                    <label for="emailaddress" style="color:#fff;">Username</label>
                                                    <input class="form-control" type="text" id="emailaddress" name="username" required="" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-5">
                                                <div class="col-12">
                                                    <label for="password" style="color:#fff;">Password</label>
                                                    <input class="form-control" type="password" required="" id="password" name="password" placeholder="">
                                                </div>
                                            </div>

                                           
                                            <div class="form-group row text-center m-t-4">
                                                <div class="col-2 pull-left">
                                                    <button class="btn btn-sm btn-block btn-info waves-effect waves-light" type="submit">Sign In</button>
                                                    <br>
                                                    
                                                </div>
                                                
                                            </div>
                                            <center>
                                             <a href="page-recoverpw.html" class="text-muted" ><small style="color:#fff;">Don't recall your account information?</small></a>
                                             </center>
                                        </form>

                                                    
                                         

                                    </div>

                                </div>
                                 
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
