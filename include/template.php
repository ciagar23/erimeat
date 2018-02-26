<!DOCTYPE html>
<html>
    <head>
        <?php include_once($headScript);?>
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
                        <div class="padding-xs">
                        <a href="index.php" class="logo">
                          <img src="../include/assets/images/teamire-logo.png" width=75% height=75%>
                        </a>
                      </div>
                    </div>
                    <!-- End Logo container-->
                    <!-- end menu-extras -->
                    <div class="navbar-top">
                    <div class="navbar-line"></div>
                        <div class="container">
                            <?php
                              include 'navVisitor.php';
                            ?>
                        </div> <!-- end container -->
                    </div> <!-- end navbar-custom -->
                    <div class="clearfix"></div>
                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

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
        <footer class="footer-default">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2018 © Hyndrance - hyndrance.com
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <?php
          include_once($footScript);
        ?>
    </body>
</html>
