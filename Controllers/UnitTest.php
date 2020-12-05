<?php
    class UnitTest {
        # Lấy tất cả các role hiện tại trong bảng roles
        public function Test_01() {
            require_once('Models/Roles.php');

            $roles = array(new Roles(1, 'Manager'),
                new Roles(2, 'Salesman'),
                new Roles(3, 'Warehouse Staff'));


            $test = Roles::getAllRoles();

            $state = true;
            for ($i = 0; $i < 3; $i++) {
                if ($roles[$i] != $test[$i]) {
                    $state = false;
                }
            }

            if ($state == true) {
                echo "Testcase 1 : Pass";
            } else {
                echo "Testcase 1 : Fail";
            }

            echo '<br>';
        }

        # Lấy tất cả thông tin có id là 1 ở bảng users trong CSDL
        public function Test_02() {
            require_once('Models/Account.php');
            $acc = new Account(1, 'admin', 'admin@gmail.com', '$2y$10$ypqQBxk19sJgLAbhpJtsJehAUYcW.k0ORQw28t5GLV3HKV0hSw3d6', 1);
            $test = Account::getUserByID(1);

            if ($acc == $test) {
                echo "Testcase 2 : Pass";
            } else {
                echo "Testcase 2 : Fail";
            }

            echo '<br>';
        }

        public function Test_03() {
            require_once('Models/Medicine.php');

            $name = 'Augmentin 625mg';
            $test = Medicine::getByID(1);

            if ($name === $test->name) {
                echo "Testcase 3 : Pass";
            } else {
                echo "Testcase 3 : Fail";
            }

            echo '<br>';
        }

        # Tìm thuốc dựa theo tên trong bảng Medicine
        public function Test_04() {
            require_once('Models/Medicine.php');

            $price = 1800;
            $test = Medicine::getPriceByName("Augmentin 625mg");

            if ($price == $test) {
                echo "Testcase 4 : Pass";
            } else {
                echo "Testcase 4 : Fail";
            }

            echo '<br>';
        }

        # Tìm Invoice dựa theo id trong bảng invoice
        public function Test_05() {
            require_once('Models/Invoice.php');

            $invoice = new Invoice(1, '2020-07-22', 1, 150000);
            $test = Invoice::getByID(1);

            if ($invoice == $test) {
                echo "Testcase 5 : Pass";
            } else {
                echo "Testcase 5 : Fail";
            }

            echo '<br>';
        }

        # Lấy role dựa theo id
        public function Test_06() {
            require_once('Models/Account.php');

            $role = 1;
            $test = Account::getRole(1);

            if ($role == $test) {
                echo "Testcase 6 : Pass";
            } else {
                echo "Testcase 6 : Fail";
            }

            echo '<br>';
        }

        public function Test_07() {
            require_once('Models/Supplier.php');

            $supplier = new Supplier(2, 'Cty ABC', '23 Pastel', 'abc@gmail.com', '11511156546');
            $test = Supplier::getSupplierByID(2);

            if ($supplier == $test) {
                echo "Testcase 7 : Pass";
            } else {
                echo "Testcase 7 : Fail";
            }

            echo '<br>';
        }

        public function Test_08() {
            require_once('Models/Supplier.php');

            $count = 2;
            $test = Supplier::count();

            if ($count == $test) {
                echo "Testcase 8 : Pass";
            } else {
                echo "Testcase 8 : Fail";
            }

            echo '<br>';
        }

        public function Test_09() {
            require_once('Models/Customer.php');

            $customer = array(new Customer(1, 'Nguyễn Văn Chánh', '+84391234567', 'TP. Hồ Chính Minh'),
                            new Customer(2, 'Nguyễn Thị Mỹ Linh', '+8439123473', 'Hà Nội'));
            $test = Customer::getAll();
            
            if ($customer == $test) {
                echo "Testcase 9 : Pass";
            } else {
                echo "Testcase 9 : Fail";
            }
            
            echo '<br>';
        }

        public function Test_10() {
            require_once('Models/Customer.php');

            $customer = new Customer(1, 'Nguyễn Văn Chánh', '+84391234567', 'TP. Hồ Chính Minh');
            $test = Customer::getCustomerByID(1);

            if ($customer == $test) {
                echo "Testcase 10 : Pass";
            } else {
                echo "Testcase 10 : Fail";
            }
            
            echo '<br>';
        }
    }
