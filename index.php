<?php
    session_start();
    require_once('configs.php');
    require_once('functions.php');
    $sp_controllers = array(
        'home' => array('index', 'error'),
        'account' => array('login', 'logout', 'profile', 'managerUsers', 'roles', 'addUser', 'changePassword', 'editUser', 'updateProfile', 'deleteUser'),
        'dashboard' => array('index', 'outStock', 'expired', 'managerMedicine', 'delete', 'update', 'add', 'analyze'),
        'payment' => array('customer', 'invoice', 'invoiceDetail', 'salary', 'saleStatistic'),
        'supplier' => array('managerSupplier','addSupplier','editSupplier','deleteSupplier')
    );

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = 'index';
        }
    } else {
        $controller = 'home';
        $action = 'index';
    }

    if (!array_key_exists($controller, $sp_controllers) || !in_array($action, $sp_controllers[$controller])) {
        $controller = 'home';
        $action = 'error';
    }

    require_once('Controllers/'. $controller . '_controller.php');
    $className = ucfirst($controller) . 'Controller';
    $obj = new $className();
    $obj->$action();

