<!DOCTYPE html>
<html>
    <head>
        <?php include_once("headScripts.php");?>
    </head>
    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">
                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Adminox-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.php" class="logo">
                            <img src="../include/assets/images/logo_dark.png" alt="" height="24" class="logo-lg">
                            <img src="../include/assets/images/logo_sm.png" alt="" height="24" class="logo-sm">
                        </a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras topbar-custom">
                        <?php include_once("mainToolBar.php");?>
                    </div>
                    <!-- end menu-extras -->
                    <div class="clearfix"></div>
                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->
            <div class="navbar-custom">
                <div class="container">
                    <?php include 'navigation.php';?>
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
        <div class="wrapper">
            <div class="container">
              <br>
              <?php
                include $content;
              ?>
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2017 © Adminox - Coderthemes.com
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <?php include_once("footScripts.php");?>
    </body>
</html>
