
<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

$downloadList = downloads()->all();

?>

  <h2 class="text-center m-t-30 m-b-30">Downloads</h2>
      <div class="clearfix"></div>
      <!--Start 2 panels -->
      <div class="container-80 center-page">
        <div class="row">
        <table class="table table-striped table-bordered table-colored table-primary">
        <thead>
          <th>File Name</th>
          <th>Action</th>
        </thead>
        <tbody>
          
    
                <?php foreach($downloadList as $row) {

            if ($row){
               $files = array($row->uploadedFile);
              ?>
                 <tr>
                <td><?=$row->fileName;?></td>

         <?php
                 foreach($files as $file){

      ?>

          <td>
          <?php
echo '<a href="forceDownloadFunc.php?file=' . urlencode($file) . '" class="btn-sm btn-warning container-100"><span class="fa fa-download"></span> Download</a>';
?>
</td>
 </tr>
           <?php

    }
    ?>
      <?php
              }
            }
            ?>
         
        </tbody>
          
        </table>

         </div>
      </div>
  </div> <!-- End Form Container -->