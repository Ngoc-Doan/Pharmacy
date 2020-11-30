<?php
    require_once('Controllers/base_controller.php');
    class PaymentController extends BaseController {
        public function __construct()
        {
            $this->name = 'payment';
        }

        function customer() {
            if (getRole() == 2) {
                $customers = Customer::getAll();
                $this->render('customer', array('customer' => $customers));
            } else {
                redirect("?controller=home");
            }
        }

        function invoice() {
            if (getRole() == 2 || getRole() == 1) {
                $invoices = Invoice::getAll();
                $this->render('invoice', array('invoice' => $invoices));
            } else {
                redirect("?controller=home");
            }
        }

        function invoiceDetail() {
            if (getRole() == 2 || getRole() == 1) {
                if (isset($_GET['id'])) {
                    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                    $invoiceDetail = InvoiceDetail::getInvoiceByID($id);
                    $this->render('invoiceDetail', array('invoiceDetail' => $invoiceDetail));
                }
            } else {
                redirect("?controller=home");
            }

        }

        function salary() {
            if (getRole() == 1) {
                $salary = Salary::getAll();
                $this->render('salary', array('salary' => $salary));
            } else {
                redirect("?controller=home");
            }
        }

        function saleStatistic() {
            if (getRole() == 1) {
                $hy1 = SaleStatistic::quarterly(1, 6);
                $hy2 = SaleStatistic::quarterly(7, 12);
                $q1 = SaleStatistic::quarterly(1, 3);
                $q2 = SaleStatistic::quarterly(4, 6);
                $q3 = SaleStatistic::quarterly(7, 9);
                $q4 = SaleStatistic::quarterly(10, 12);
                $month = SaleStatistic::monthly(1, 12);
                $quarterly = array($q1, $q2, $q3, $q4);
                $this->render('statistic', array('hy1' => $hy1, 'hy2' => $hy2, 'quarterly' => $quarterly, 'month' => $month));
            } else {
                redirect("?controller=home");
            }
        }
    }