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
