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
       <i class="mdi mdi-account widget-two-icon"></i>
          <div class="wigdet-two-content">
          <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span>
            <span data-plugin="counterup"><?=resume()->count("isApproved=0");?></span></h2>
              <p class="m-0">Applicants</p>
          </div>

      </div>
    </div><!-- end col -->
<div class="col-lg-3 col-md-6">
    <div class="card-box widget-box-two widget-two-custom">
     <i class="mdi mdi-account widget-two-icon"></i>
        <div class="wigdet-two-content">
        <h2 class="font-600"><span><i class="mdi mdi-arrow-up"></i></span>
          <span data-plugin="counterup"><?=resume()->count();?></span></h2>
            <p class="m-0">Candidate</p>
        </div>

    </div>
</div><!-- end col -->
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Lorem Ipsum</h4>

            <div class="text-center">
                <h5 class="font-normal text-muted">Lorem ipsum dolor sit amet lorem ipsum</h5>
            </div>

            <div class="chart-container">
                <div class="" style="height:280px" id="platform_type_dates_donut"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Lorem Ipsum</h4>

            <div class="text-center">
                <h5 class="font-normal text-muted">Lorem ipsum dolor sit amet lorem ipsum</h5>
            </div>

            <div class="chart-container">
                <div class="" style="height:280px" id="user_type_bar"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Lorem Ipsum</h4>

            <div class="text-center">
                <h5 class="font-normal text-muted">Lorem ipsum dolor sit amet lorem ipsum</h5>
            </div>

            <div class="chart-container">
                <div class="chart has-fixed-height" style="height:280px" id="page_views_today"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
