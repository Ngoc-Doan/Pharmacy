<?php
    class Supplier {
        public $id;
        public $name;
        public $address;
        public $email;
        public $phone;

        /**
         * Medicine constructor.
         * @param $id
         * @param $name
         * @param $address
         * @param $email
         * @param $phone
         */
       

        public function __construct($id, $name, $address, $email, $phone)
        {
            $this->id = $id;
            $this->name = $name;
            $this->address = $address;
            $this->email = $email;
            $this->phone = $phone;
        }

        public static function getSupplier() {
            $sql = "SELECT * FROM supplier";
            $db = DB::getDB();
            $stm = $db->prepare($sql);     
            $stm -> execute();  
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result) {
                $arr[] = new Supplier($result['id'], $result['name'], $result['address'],
                    $result['email'], $result['phone']);
            }
            return $arr;
        }

        public static function addSupplier($name, $address, $email, $phone) {
            $sql = "INSERT INTO supplier(name, address, email, phone) VALUES (:name, :address, :email, :phone)";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('name' => $name, 'address' => $address, 'email' => $email, 'phone' => $phone));
        }

        public static function editSupplier($id, $name, $address, $email, $phone) {
            $sql = "UPDATE supplier SET name = :name, email = :email, address = :address, phone = :phone WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id, 'name' => $name, 'address' => $address, 'email' => $email, 'phone' => $phone));
        }

        public static function getSupplierByID($id) {
            $sql = "SELECT * FROM supplier WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return new Supplier($result['id'], $result['name'], $result['address'],
                    $result['email'], $result['phone']);
        }

        public static function deleteSupplier($id) {
            $sql = "DELETE FROM supplier WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
        }

        public static function count() {
            $sql = "SELECT COUNT(*) AS 'sum' FROM supplier";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result['sum'];
        }
    }