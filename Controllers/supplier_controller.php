<?php
    require_once('base_controller.php');
    require_once('Models/Supplier.php');
    class SupplierController extends BaseController {
        public function __construct() {
            $this->name = 'supplier';
        }

        function managerSupplier() {
            if (isLogin() && getRole() == 3) {
                
                $supplier = Supplier::getSupplier();
                $this->render('managerSupplier', array('supplier' => $supplier), 'main_template');
            } else {
                redirect("?controller=home");
            }

        }

        function addSupplier() {
            if (isLogin() && getRole() == 3) {
                if (isset($_POST['btn_save'])) {
                    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
                    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
                    
                    Supplier::addSupplier($name, $address, $email, $phone);
                    redirect('?controller=supplier&action=managerSupplier');
                }
                
                $this->render('addSupplier');
            } else {
                redirect("?controller=home");
            }

        }
     

        function editSupplier() {
            if (isLogin() && getRole() == 3) {
                if (isset($_POST['btn_save'])) {
                    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
                    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
                    Supplier::editSupplier($id, $name, $address, $email, $phone);
                    redirect("?controller=supplier&action=managerSupplier");
                }
                if (isset($_GET['id'])) {
                    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                    $supplier = Supplier::getSupplierByID($id);
                    $this->render('editSupplier', array('supplier' => $supplier));
                }
            } else {
                redirect("?controller=home");
            }
        }

        function deleteSupplier() {
            if (isLogin() && getRole() == 3) {
                if (isset($_GET['id'])) {
                    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                    Supplier::deleteSupplier($id);
                    redirect("?controller=supplier&action=managerSupplier");
                }
            } else {
                redirect("?controller=home");
            }

        }
    }