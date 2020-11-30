<?php
    require_once('base_controller.php');
    class DashboardController extends BaseController {
        public function __construct() {
            $this->name = 'dashboard';
        }

        public function index() {
            if (isLogin()) {
                $out = Medicine::getAll();
                $countUser = Account::count();
                $cMedicine = Medicine::count();
                $cInvoice = Invoice::count();
                $cCustomer = Customer::count();
                $this->render('index', array('medicine' => $out, 'cUser' => $countUser, 'cMedicine' => $cMedicine, 'cInvoice' => $cInvoice, 'cCustomer' => $cCustomer), 'main_template');
            } else {
                redirect("?controller=home&action=error");
            }
        }

        public function outStock() {
            if (getRole() == 3) {
                $out = Medicine::outStock();
                $this->render('outStock', array('out' => $out));
            } else {
                redirect("?controller=home");
            }
        }

        public function expired() {
            if (getRole() == 3) {
                $expired = Medicine::expired();
                $this->render('expired', array('expired' => $expired));
            } else {
                redirect("?controller=home");
            }

        }

        public function add() {
            if (getRole() == 3) {
                if (isset($_POST['btn_save'])) {
                    $mName = filter_input(INPUT_POST, 'mName', FILTER_SANITIZE_STRING);
                    $mCompany = filter_input(INPUT_POST, 'mCompany', FILTER_SANITIZE_STRING);
                    $mQty = filter_input(INPUT_POST, 'mQty', FILTER_SANITIZE_NUMBER_INT);
                    $mExpire = filter_input(INPUT_POST, 'mExpire', FILTER_SANITIZE_STRING);
                    $mPrice = filter_input(INPUT_POST, 'mPrice', FILTER_SANITIZE_NUMBER_INT);

                    Medicine::add($mName, $mCompany, $mQty, $mExpire, $mPrice);
                    redirect('?controller=dashboard');
                }
                $this->render('add');
            } else {
                redirect("?controller=home");
            }

        }

        public function delete() {
            if (getRole() == 3) {
                if (isset($_GET['id'])) {
                    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                    Medicine::deleteByID($id);
                    redirect('?controller=dashboard&action=index');
                }
            } else {
                redirect("?controller=home");
            }

        }

        public function update() {
            if (getRole() == 3) {
                if (isset($_POST['btn_save'])) {
                    $mID = filter_input(INPUT_POST, 'mID', FILTER_SANITIZE_NUMBER_INT);
                    $mName = filter_input(INPUT_POST, 'mName', FILTER_SANITIZE_STRING);
                    $mCompany = filter_input(INPUT_POST, 'mCompany', FILTER_SANITIZE_STRING);
                    $mQty = filter_input(INPUT_POST, 'mQty', FILTER_SANITIZE_NUMBER_INT);
                    $mExpire = filter_input(INPUT_POST, 'mExpire', FILTER_SANITIZE_STRING);
                    $mPrice = filter_input(INPUT_POST, 'mPrice', FILTER_SANITIZE_NUMBER_INT);

                    Medicine::updateByID($mID, $mName, $mCompany, $mQty, $mExpire, $mPrice);
                    redirect('?controller=dashboard');
                }
                if (isset($_GET['id'])) {
                    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                    $item = Medicine::getByID($id);
                    $this->render('update', array('item' => $item));
                }
            } else {
                redirect("?controller=home");
            }
        }

        public function analyze() {
            $this->render('analyze');
        }
    }
