<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row mb-1">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Update Medicine</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Update Medicine
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form-horizontal" action="?controller=dashboard&action=update" method="post" enctype="multipart/form-data" novalidate>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>ID <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mID" value="<?= $item->id ?>" class="form-control mb-1" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Name <span class="required"></span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mName" value="<?= $item->name ?>" class="form-control mb-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Company <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mCompany" value="<?= $item->company ?>" class="form-control mb-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Quantity <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input type="number" name="mQty" value="<?= $item->qty ?>" class="form-control mb-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Date Expiry <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mExpire" value="<?= $item->expire ?>" class="form-control mb-1" placeholder="Ex: 2020-06-20">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <h5>Price <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input type="number" name="mPrice" value="<?= $item->price ?>" class="form-control mb-1">
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit" name="btn_save" class="btn btn-success">Update</button>
                                                    <a href="users" class="btn btn-danger">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Input Validation end -->
        </div>
    </div>
</div>
<!-- END: Content-->