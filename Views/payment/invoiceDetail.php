<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
                <div class="content-header row mb-1">
                    <div class="content-header-left col-md-6 col-12 mb-2">
                        <h3 class="content-header-title">Invoices Detail</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Invoices Detail
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
                            <h4 class="card-title"><button onclick="window.print()" class="btn btn-primary "><i class="la la-print"></i> Print Invoice</a>&nbsp;
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
                                                <th>Medicine</th>
                                                <th>Amount</th>
                                                <th>Cost</th>
                                                <th>Customer ID</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($invoiceDetail as $value) {
                                                $medicine = Medicine::getByID($value->id);
                                                ?>
                                                <tr>
                                                    <td><?=$value->id?></td>
                                                    <td><?=$medicine->name?></td>
                                                    <td><?=$value->amount?></td>
                                                    <td><?=$value->cost?></td>
                                                    <td><?=$value->customer_id?></td>
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