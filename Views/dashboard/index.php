<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
<!--        <div class="content-header row mb-1">-->
<!--            <div class="content-header-left col-md-6 col-12 mb-2">-->
<!--                <h3 class="content-header-title">Out Of Stocks</h3>-->
<!--                <div class="row breadcrumbs-top">-->
<!--                    <div class="breadcrumb-wrapper col-12">-->
<!--                        <ol class="breadcrumb">-->
<!--                            <li class="breadcrumb-item"><a href="index">Home</a>-->
<!--                            </li>-->
<!--                            <li class="breadcrumb-item active">Suppliers-->
<!--                            </li>-->
<!--                        </ol>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="row">
            <div class="col-12">
                <div class="card-group card-counter">
                    <div class="card col-3" style="margin-right: 20px; background: #F2C047; border-radius: 5px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 30px; color: #fff">Users</h5>
                            <p class="card-text" style="font-size: 20px; color: #fff""><?= $cUser ?>.</p>
                        </div>
                    </div>
                    <div class="card col-3" style="margin-right: 20px; background: #C7D35E; border-radius: 5px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 30px; color: #fff">Medicines</h5>
                            <p class="card-text" style="font-size: 20px; color: #fff""><?= $cMedicine ?>.</p>
                        </div>
                    </div>
                    <div class="card col-3" style="margin-right: 20px; background: #DF7D81; border-radius: 5px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 30px; color: #fff">Invoices</h5>
                            <p class="card-text" style="font-size: 20px; color: #fff""><?= $cInvoice ?>.</p>
                        </div>
                    </div>
                    <div class="card col-3" style="margin-right: 20px; background: #8FCDDA; border-radius: 5px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 30px; color: #fff">Customers</h5>
                            <p class="card-text" style="font-size: 20px; color: #fff""><?= $cCustomer ?>.</p>
                        </div>
                    </div>
                    <div class="card col-3" style="background: #B980AE; border-radius: 5px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 30px; color: #fff">Suppliers</h5>
                            <p class="card-text" style="font-size: 20px; color: #fff""><?= $cSupplier ?>.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <?php if (getRole() == 3) {?>
                                    <h4 class="card-title">
                                        <a href="?controller=dashboard&action=add" class="btn btn-primary ">
                                            <i class="la la-plus"></i> Add Medicine</a>
                                    </h4>
                                <?php } ?>

                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Brand Name</th>
                                                <th>Company</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Expire</th>
                                                <th>Control</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($medicine as $value) {
                                                $d = strtotime($value->expire);
                                                ?>
                                                <tr>
                                                    <td id="mID"><?=$value->id?></td>
                                                    <td><?=$value->name?></td>
                                                    <td><?=$value->company?></td>
                                                    <td><?=number_format($value->price)?> VND</td>
                                                    <td><?=$value->qty?></td>
                                                    <td><?=date('d-m-Y', $d)?></td>
                                                    <td>
                                                        <a title="Edit" href="?controller=dashboard&action=update&id=<?= $value->id ?>" class="btn btn-icon btn-primary mr-1 mb-1"><i class="la la-edit"></i></a>
                                                        <button type="button" class="btn btn-icon btn-danger mr-1 mb-1 cancel-button" id=><i class="la la-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- DOM - jQuery events table -->
        </div>

</div>
<!-- END: Content-->