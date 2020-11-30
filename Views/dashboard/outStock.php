<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
                <div class="content-header row mb-1">
                    <div class="content-header-left col-md-6 col-12 mb-2">
                        <h3 class="content-header-title">Out Of Stocks</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Out Of Stocks
                                    </li>
                                </ol>
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
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $i=1;
                                            foreach ($out as $value) {
                                                $d = strtotime($value->expire);
                                                ?>
                                                <tr>
                                                    <td><?=$i?></td>
                                                    <td><?=$value->name?></td>
                                                    <td><?=$value->company?></td>
                                                    <td><?=number_format($value->price)?> VND</td>
                                                    <td><?=$value->qty?></td>
                                                    <td><?=date('d-m-Y', $d)?></td>
                                                </tr>
                                                <?php $i++; } ?>
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