<div class="row">
    <div class="col-lg-3 col-md-6">
      <div class="card-box widget-box-two widget-two-custom">
       <i class="mdi mdi-clipboard-text widget-two-icon"></i>
          <div class="wigdet-two-content">
          <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span>
            <span data-plugin="counterup"><?=job()->count("isApproved=0");?></span></h2>
              <p class="m-0">Talent Requests</p>
          </div>

      </div>
    </div><!-- end col -->

    <div class="col-lg-3 col-md-6">
      <div class="card-box widget-box-two widget-two-custom">
       <i class="mdi mdi-account-network widget-two-icon"></i>
          <div class="wigdet-two-content">
              <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span>
              <span data-plugin="counterup"><?=company()->count();?></span></h2>
              <p class="m-0">Companies</p>
          </div>
      </div>
    </div><!-- end col -->
<div class="col-lg-3 col-md-6">
  <div class="card-box widget-box-two widget-two-custom">
   <i class="mdi mdi-account widget-two-icon"></i>
      <div class="wigdet-two-content">
          <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span>
            <span data-plugin="counterup"><?=admin()->count();?></span></h2>
          <p class="m-0">Accounts</p>
      </div>
  </div>
</div><!-- end col -->

<div class="col-lg-3 col-md-6">
  <div class="card-box widget-box-two widget-two-custom">
    <i class="mdi mdi-clipboard-check widget-two-icon"></i>
       <div class="wigdet-two-content">
          <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span>
            <span data-plugin="counterup"><?=projects()->count("isDeleted=0");?></span></h2>
          <p class="m-0">Projects</p>
      </div>
  </div>
</div><!-- end col -->

</div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="header-title m-t-0">Overview Statistics</h4>
                <div class="text-center">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="m-t-20 m-b-20">
                                <h4 class="m-b-10"><?=employee()->count();?></h4>
                                  <p class="text-uppercase m-b-5 font-13 font-600">Employees</p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="m-t-20 m-b-20">
                                <h4 class="m-b-10"><?=job()->count("isApproved=1");?></h4>
                                <p class="text-uppercase m-b-5 font-13 font-600">Jobs Approved</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="morris-bar-stacked" style="height: 310px;"></div>
            </div>

        </div><!-- end col -->

    </div>
    <!-- end row -->
