<?php
$obj = new Company;
$company = $obj->readOne($_GET['Id']);
?>


<div class="row">
    <div class="col-md-12">
        <!-- Personal-Information -->
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-20">Company Detail</h4>
            <div class="panel-body">
                <div class="text-left">
                    <p class="text-muted font-13"><strong>Company Name :</strong>
                      <span class="m-l-15"><?=$company->name;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Username :</strong>
                      <span class="m-l-15"><?=$company->username;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Description :</strong>
                      <span class="m-l-15"><?=$company->description;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Email :</strong>
                      <span class="m-l-15"><?=$company->email;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Contact Person :</strong>
                      <span class="m-l-15"><?=$company->contactPerson;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Phone Number :</strong>
                      <span class="m-l-15"><?=$company->phoneNumber;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Mobile Number :</strong>
                      <span class="m-l-15"><?=$company->mobileNumber;?></span>
                    </p>
                    <p class="text-muted font-13"><strong>Address :</strong>
                      <span class="m-l-15"><?=$company->address;?></span>
                    </p>
                </div>
            </div>
        </div>

        <div class="card-box">
          <button>Update</button>
          <button onclick="location.href='process.php?action=removeCompany&Id=<?=$company->Id;?>'">Remove</button>
        </div>

    </div>
  </div>
