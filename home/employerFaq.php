<?php
$faqList = faq()->list("level='employer'");
?>

  <h2 class="text-center m-t-30 m-b-30">Employer FAQs</h2>
  <p class="text-center mb20">Looking for a job? <a href="../home?view=jobseekerFaq" class="text-primary">See job seekers FAQs.</a></p>
      <div class="clearfix"></div>

    <!-- Start Form Container -->
    <?php
      foreach($faqList as $row){
        if($row->isDeleted==0){
    ?>
    <div class="container-80 center-page">
      <h3 class="form-container">Q: <?=$row->question;?></h3>
      <div class="container center-page">
        <p class="m-b-30">
          <?=$row->answer;?>
        </p>
      </div>
      </div> <!-- End Form Container -->
    <?php }}?>
