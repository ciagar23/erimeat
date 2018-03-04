<?php
$s = (isset($_GET['s']) && $_GET['s'] != '') ? $_GET['s'] : '';
$obj = new Resume;
?>

<div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Candidates</h4>
                                  
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
<div class="card-box">
  <div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title"><b>List of Candidates</b></h4>
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Candidate Name</th>
              <th>Candidate Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($obj->readList($s) as $row) {
              if ($row->isApproved==1){
            ?>
            <tr>
              <td><?=$row->firstName;?> <?=$row->lastName;?></td>
              <td><?=$row->email;?></td>
              <td>
                <a href="?view=candidatesDetail&Id=<?=$row->Id;?>"  class=" btn btn-success btn-xs tooltips" title="Click To Edit"><span class="fa fa-eye"></span> View Details</a>
              </td>
            </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
