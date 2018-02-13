
<div class="row">
    <div class="col-md-4">
        <!-- Personal-Information -->
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-20">Personal Information</h4>
            <div class="panel-body">
                <p class="text-muted font-13">
                    <?=$user->aboutMe;?>
                </p>

                <hr/>

                <div class="text-left">
                    <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15"><?=$user->firstName;?> <?=$user->lastName;?></span></p>

                    <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15"><?=$user->contact;?></span></p>

                    <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"><?=$user->email;?></span></p>

                </div>

                <ul class="social-links list-inline m-t-20 m-b-0">
                    <li class="list-inline-item">
                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Linkdin"><i class="fa fa-skype"></i></a>
                      </li>
                      <li class="list-inline-item">
                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-linkedin"></i></a>
                      </li>
                </ul>
            </div>
        </div>
        <!-- Personal-Information -->

        <div class="card-box ribbon-box">
            <div class="ribbon ribbon-primary">Messages</div>
            <div class="clearfix"></div>
            <div class="inbox-widget">
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="../include/assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author">Tomaslau</p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                        <p class="inbox-item-date m-t-10">
                            <button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-success"> Reply </button>
                        </p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="../include/assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author">Stillnotdavid</p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                        <p class="inbox-item-date m-t-10">
                            <button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-success"> Reply </button>
                        </p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="../include/assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author">Kurafire</p>
                        <p class="inbox-item-text">Nice to meet you</p>
                        <p class="inbox-item-date m-t-10">
                            <button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-success"> Reply </button>
                        </p>
                    </div>
                </a>

                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="../include/assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author">Shahedk</p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                        <p class="inbox-item-date m-t-10">
                            <button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-success"> Reply </button>
                        </p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="../include/assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author">Adhamdannaway</p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                        <p class="inbox-item-date m-t-10">
                            <button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-success"> Reply </button>
                        </p>
                    </div>
                </a>
            </div>
        </div>

    </div>
