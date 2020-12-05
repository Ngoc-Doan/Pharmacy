<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/uploads/settings/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="assets/admin/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/vendors/css/ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/vendors/css/forms/selects/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="assets/admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/colors.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="assets/admin/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/admin/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/vendors/css/extensions/sweetalert.css">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="index.php"><img class="brand-logo" alt="modern admin logo" src="assets/images/logo.jpg">
                            <h3 class="brand-text">Pharmacy Management</h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">Hi! <?= getUserInfo()->name ?></span><span class="avatar avatar-online">
                        <img src="assets/images/user.png" alt="avatar"><i></i>
                        </span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="?controller=account&action=profile"><i class="ft-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="?controller=account&action=logout"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a class="dropdown-toggle nav-link" href="index.php"><i class="la la-home"></i><span>Dashboard</span></a>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="" data-toggle="dropdown"><i class="la la-medkit"></i><span>Medicinals</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="?controller=dashboard&action=outStock" data-toggle=""><i class="la la-archive"></i><span>Out Stock</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="?controller=dashboard&action=expired" data-toggle=""><i class="la la-exclamation-circle"></i><span>Expired</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="dropdown-toggle nav-link" href="?controller=payment&action=invoice"><i class="la la-rupee"></i><span>Invoices</span></a>
                </li>
                <li class="nav-item"><a class="dropdown-toggle nav-link" href="?controller=payment&action=customer"><i class="la la-users"></i><span>Customers</span></a>
                </li>
                <li class="nav-item"><a class="dropdown-toggle nav-link" href="?controller=account&action=managerUsers"><i class="la la-user-plus"></i><span>Users</span></a>
                </li>
                <li class="nav-item"><a class="dropdown-toggle nav-link" href="?controller=payment&action=salary"><i class="la la-money"></i><span>Salary</span></a>
                </li>
                <li class="nav-item"><a class="dropdown-toggle nav-link" href="?controller=supplier&action=managerSupplier"><i class="la la-archive"></i><span>Suplliers</span></a>
                </li>
                <li class="nav-item"><a class="dropdown-toggle nav-link" href="?controller=payment&action=saleStatistic"><i class="la la-medkit"></i><span>Statistics</span></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->