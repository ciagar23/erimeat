<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';

$obj = new Job;

?>

<div class="card-box">
<?php foreach($obj->readList($s) as $row) {
  if ($row->isApproved==1){
?>
  <div class="">
      <h4 class="header-title mt-0 m-b-20"><a href="?view=companyDetail&Id=<?=$row->Id;?>"><?=$row->company;?></a></h4>
      <hr>
    </div>
<?php
  }
}
?>
</div>
