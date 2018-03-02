<!DOCTYPE html>
<html>
    <head>
        <?php include_once($headScript);?>
    </head>
    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
              <?php
                include 'navVisitor.php';
              ?>
              <div class="clearfix"></div>
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
        <footer style="padding: 0; padding-left: 0 !important; color: #FFFFFF; background-color: #4A555C;">
            <div class="container-fluid m-b-30 " style="padding: 30px 60px 45px 45px; color: #FFFFFF; background-color: #4a555c; bottom: 0;">
                <div class="row center-page container">
                  <div class="container-fluid col-12 col-lg-3">
                    <h4 class="text-white">ABOUT US</h4>
                    <p>How we do this</p>
                    <p>Our Purpose</p>
                    <p>Our Objectives</p>
                  </div>
                  <div class="container-fluid col-12 col-lg-3">
                    <h4 class="text-white">RESOURCES</h4>
                    <p>Our Services</p>
                    <p>Projects</p>
                  </div>
                  <div class="container-fluid col-12 col-lg-3">
                    <h4 class="text-white">LEGAL</h4>
                    <p>Lorem</p>
                    <p>Lorem</p>
                    <p>Lorem</p>
                    <p>Lorem</p>
                  </div>
                  <div class="container-fluid col-12 col-lg-3">
                    <h4 class="text-white">FOLLOW US</h4>
                    <p>Facebook</p>
                    <p>LinkedIn</p>
                    <p>Twitter</p>
                    <p>Youtube</p>
                    <p>Instagram</p>
                    <p>Glassdoor</p>
                  </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div style="border: none;" class="container-80 center-page">
              <div class="col-md-8"><h4 class="text-white">+61452 364 793</h4>
              <p>© 2018 Teamire. Catalyst in Continuous Improvement</p></div>
              <div class="col-md-4 text-center">Lorem ipsum</div>
              <div class="clearfix"></div>
            </div>

            <div style="padding: 30px 0; margin-top: 0; bottom: 0; background-color: #394249; flex: 0 0 100%; max-width: 100%;">
                <p style="font-size: 40px;" class="text-center"><a href="#" class="text-white">
                  IT'S TIME WE ALL WORK HAPPY.
                </a></p>
            </div>
        </footer>
        <!-- End Footer -->
        <?php
          include_once($footScript);
        ?>
    </body>
</html>
