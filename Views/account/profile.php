<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row mb-1">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Profile</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#">Profile</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <!-- Form control repeater section start -->
            <section id="form-control-repeater">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="tel-repeater">User Profile</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">

                                    <form action="?controller=account&action=updateProfile" method="POST" autocomplete="OFF" enctype="multipart/form-data" >
                                        <div class="form-group col-12 mb-2">
                                            <input type="text" class="form-control" placeholder="Name" name="Name" value="<?= $user->name ?>">
                                        </div>
                                        <div class="form-group col-12 mb-2">
                                            <input type="text" class="form-control" placeholder="E-mail" name="email" value="<?= $user->email ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="btn-update">Save Changes</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="tel-repeater">Update Password</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">

                                    <form name="frm1" action="?controller=account&action=changePassword" method="POST" autocomplete="OFF">
                                        <div class="form-group col-12 mb-2">
                                            <input type="password" class="form-control" name="password" placeholder="Enter new password">
                                        </div>
                                        <div class="form-group col-12 mb-2">
                                            <input type="password" class="form-control" name="confirm" placeholder="Confirm new password">
                                        </div>
                                        <button onclick="return val_a();" type="submit" name="btn_save" class="btn btn-primary btn-block">Save Changes</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Form control repeater section end -->
        </div>
    </div>
</div>
<!-- END: Content-->