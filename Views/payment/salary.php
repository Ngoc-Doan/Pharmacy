<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
                <div class="content-header row mb-1">
                    <div class="content-header-left col-md-6 col-12 mb-2">
                        <h3 class="content-header-title">Salary</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Salary
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
                                                <th>Employee</th>
                                                <th>Start Day</th>
                                                <th>End Day</th>
                                                <th>Amount</th>
                                                <th>Control</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($salary as $value) {
                                                $name = Account::getUserByID($value->emp_id);
                                                ?>
                                                <tr>
                                                    <td><?=$value->id?></td>
                                                    <td><?=$name->name?></td>
                                                    <td><?=date('d-m-Y', strtotime($value->begin))?></td>
                                                    <td><?=date('d-m-Y', strtotime($value->end))?></td>
                                                    <td><?=$value->amount?></td>
                                                    <td>
                                                        <a href="#" <button type="button" class="btn btn-icon btn-danger mr-1 mb-1 cancel-button" id=><i class="la la-trash"></i></button>
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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
        </button>

    </div>
    <!-- END: Content-->

