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
                    <div class="logo col-md-6">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Adminox-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.php" class="logo m-t-5 m-l-15">
                          <img src="../include/assets/images/teamire-logo.png">
                        </a>
                    </div>

                    <div class="navigation-menu col-md-6 " style="padding: 40px;">
                      <div class="pull-right">
                        <li>
                          <a class="m-l-5 m-r-15" href="extras-pricing.html">Investor Center</a>
                          <a class="m-l-5 m-r-15" href="../home/?view=logins">Timesheets</a>
                          <a class="m-l-5 m-r-15" href="../home/?view=contactUs">Contact Us</a>
                          <a class="m-l-5 m-r-15" href="../home/?view=hiringForm">Request Staff</a>
                        </li>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- End Logo container-->

                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0">

                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->
                    <div class="clearfix"></div>
                  </div>
                </div>

                    <div class="navbar-custom">
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
            
              
              <?php
                include $content;
              ?>
            
        </div>
        <!-- end wrapper -->
        <!-- Footer -->
        <footer class="footer-default">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2018 © Teamire
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
