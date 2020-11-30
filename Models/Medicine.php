<?php
    class Medicine {
        public $id;
        public $name;
        public $company;
        public $qty;
        public $expire;
        public $price;

        /**
         * Medicine constructor.
         * @param $id
         * @param $name
         * @param $company
         * @param $qty
         * @param $expire
         * @param $price
         */
        public function __construct($id, $name, $company, $qty, $expire, $price)
        {
            $this->id = $id;
            $this->name = $name;
            $this->company = $company;
            $this->qty = $qty;
            $this->expire = $expire;
            $this->price = $price;
        }

        public static function getAll() {
            $sql = "SELECT * FROM Medicine";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $arr[] = new Medicine($item['id'], $item['name'], $item['company'],
                    $item['qty'], $item['expire'], $item['price']);
            }
            return $arr;
        }

        public static function expired() {
            $sql = "SELECT * FROM Medicine WHERE expire < :dateTime";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $date = new DateTime();
            $stm->execute(array('dateTime' => date_format($date, 'Y-m-d')));
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $arr[] = new Medicine($item['id'], $item['name'], $item['company'],
                    $item['qty'], $item['expire'], $item['price']);
            }
            return $arr;
        }

        public static function outStock() {
            $sql = "SELECT * FROM Medicine WHERE qty < 20";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $arr[] = new Medicine($item['id'], $item['name'], $item['company'],
                    $item['qty'], $item['expire'], $item['price']);
            }
            return $arr;
        }

        public static function add($name, $company, $qty, $expire, $price) {
            $sql = "INSERT INTO Medicine(name, company, qty, expire, price) VALUES (:name, :company, :qty, :expire, :price)";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('name' => $name, 'company' => $company, 'qty' => $qty, 'expire' => $expire, 'price' => $price));
        }

        public static function deleteByID($id) {
            $sql = "DELETE FROM Medicine WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
        }

        public static function getByID($id) {
            $sql = "SELECT * FROM Medicine WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $item = $stm->fetch(PDO::FETCH_ASSOC);

            return new Medicine($item['id'], $item['name'], $item['company'],
                $item['qty'], $item['expire'], $item['price']);
        }

        public static function updateByID($id, $name, $company, $qty, $expire, $price) {
            $sql = "UPDATE Medicine SET name = :name, company = :company, qty = :qty, expire = :expire, price = :price WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id, 'name' => $name, 'company' => $company, 'qty' => $qty, 'expire' => $expire, 'price' => $price));
        }

        public static function count() {
            $sql = "SELECT COUNT(*) AS 'sum' FROM Medicine";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result['sum'];
        }
    }
