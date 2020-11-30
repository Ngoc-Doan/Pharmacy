<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row mb-1">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Users</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Users
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
                                <h4 class="card-title"><a href="?controller=account&action=addUser" class="btn btn-primary "><i class="la la-plus"></i> Add New</a>&nbsp;<a href="?controller=account&action=roles" class="btn btn-primary "><i class="la la-eye"></i> Roles</a></h4>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Control</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($users as $value) {
                                                ?>
                                                <tr>
                                                    <td><?=$value->id?></td>
                                                    <td><?=$value->name?></td>
                                                    <td><?=$value->email?></td>
                                                    <td><?=$value->role?></td>
                                                    <td>
                                                        <a title="Edit" href="?controller=account&action=editUser&id=<?= $value->id ?>" class="btn btn-icon btn-primary mr-1 mb-1"><i class="la la-edit"></i></a>
                                                        <a title="Delete" href="?controller=account&action=deleteUser&id=<?= $value->id ?>" class="btn btn-icon btn-danger mr-1 mb-1"><i class="la la-trash"></i></a>
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
</div>
<!-- END: Content-->