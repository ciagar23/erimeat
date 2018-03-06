
<h2 class="text-center m-t-30 m-b-30">Downloads</h2>

  
      <div class="clearfix"></div>
      <!--Start 2 panels -->
      <div class="container-80 center-page">
      <div class="row">
        <div class="col-lg-1">&nbsp;</div>
        <div class="col-12 col-lg-4 p-30">
          <p class="text-center mb20">Download Employee Contract</p>
          <?php
    // Array containing sample image file names
    $files = array("employeeContract.pdf");
    
    // Loop through array to create image gallery
    foreach($files as $file){
      
      ?>
          <div class="text-center m-b-10">
          <?php
echo '<a href="download.php?file=' . urlencode($file) . '" class="btn-small btn-primary container-100"><span class="fa fa-download"></span> Download</a>';
?>
          </div>
           <?php
       
    }
    ?>
        </div>
        <div class="col-lg-2">&nbsp;</div>
        <div class="col-12 col-lg-4 p-30">
          <p class="text-center mb20">Download Client Contract</p>
   <?php
    // Array containing sample image file names
    $files = array("clientContract.pdf");
    
    // Loop through array to create image gallery
    foreach($files as $file){
      
      ?>
          <div class="text-center m-b-10">
          <?php
echo '<a href="download.php?file=' . urlencode($file) . '" class="btn-small btn-primary container-100"><span class="fa fa-download"></span> Download</a>';
?>
          </div>
           <?php
       
    }
    ?>
         
        </div>
        <div class="col-lg-1">&nbsp;</div>
      </div>
    </div>
  
     

  
  

    