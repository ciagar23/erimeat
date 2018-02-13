<div class="row">
    <div class="col-sm-12">
        <div class="profile-bg-picture" style="background-image:url('../include/assets/images/bg-profile.jpg')">
            <span class="picture-bg-overlay"></span><!-- overlay -->
        </div>
        <!-- meta -->
        <div class="profile-user-box">
            <div class="row">
                <div class="col-sm-6">
                    <span class="pull-left m-r-15"><img src="../include/assets/images/users/avatar-1.jpg" alt="" class="thumb-lg rounded-circle"></span>
                    <div class="media-body">
                        <h4 class="m-t-5 m-b-5 font-18 ellipsis"><?=$user->firstName;?> <?=$user->lastName;?></h4>
                        <p class="font-13"> User Experience Specialist</p>
                        <p class="text-muted m-b-0"><small><?=$user->address;?> </small></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-right">
                        <button type="button"
                            onclick="location.href='../user/update'"
                            class="btn btn-success waves-effect waves-light">
                            <i class="mdi mdi-account-settings-variant m-r-5"></i> Edit Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--/ meta -->
    </div>
</div>
<!-- end row -->
