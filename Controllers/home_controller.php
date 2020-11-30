<?php
    require_once('base_controller.php');
    class HomeController extends BaseController {
        function __construct() {
            $this->name = 'home';
        }

        function index() {
            if (isLogin()) {
                redirect('?controller=dashboard');
            }
            $this->render('index', array(), 'home_template');
        }

        function settings() {
            $this->render('settings', array());
        }

        function error() {
            $this->render('error', array(), 'error');
        }
    }