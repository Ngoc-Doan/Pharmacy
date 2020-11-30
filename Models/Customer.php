<?php
    class Customer {
        public $id;
        public $name;
        public $phoneNumber;
        public $address;

        /**
         * Customer constructor.
         * @param $id
         * @param $name
         * @param $phoneNumber
         * @param $address
         */
        public function __construct($id, $name, $phoneNumber, $address)
        {
            $this->id = $id;
            $this->name = $name;
            $this->phoneNumber = $phoneNumber;
            $this->address = $address;
        }

        public static function getAll() {
            $sql = "SELECT * FROM customers";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $arr[] = new Customer($item['id'], $item['name'], $item['phoneNumber'], $item['address']);
            }
            return $arr;
        }

        public static function count() {
            $sql = "SELECT COUNT(*) AS 'sum' FROM customers";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result['sum'];
        }
    }