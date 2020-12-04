<?php
    require_once('Models/Medicine.php');
    require_once('Models/Account.php');
    require_once('Models/Roles.php');
    require_once('Models/Customer.php');
    require_once('Models/Invoice.php');
    require_once('Models/InvoiceDetail.php');
    require_once('Models/Salary.php');
    require_once('Models/SaleStatistic.php');
    require_once('Models/Supplier.php');
    class BaseController {
        protected $name;

        public function render($view, $data = array(), $template = 'main_template') {
            ob_start();
            extract($data);
            include_once("Views/" . $this->name . "/" . $view . ".php");
            $content = ob_get_clean();
            require_once("Views/layout/" . $template . ".php");
        }
    }