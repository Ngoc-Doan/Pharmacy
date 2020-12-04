<?php
    class Invoice {
        public $id;
        public $date;
        public $customer_id;
        public $total;

        /**
         * Invoice constructor.
         * @param $id
         * @param $date
         * @param $customer_id
         * @param $total
         */
        public function __construct($id, $date, $customer_id, $total)
        {
            $this->id = $id;
            $this->date = $date;
            $this->customer_id = $customer_id;
            $this->total = $total;
        }

        public static function getAll() {
            $sql = "SELECT * FROM invoice";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $arr[] = new Invoice($item['id'], $item['date'], $item['customer_id'], $item['total']);
            }
            return $arr;
        }

        public static function addInvoice($date, $customer_id, $total) {
            $sql = "INSERT INTO invoice(date, customer_id, total) VALUES (:date, :customer_id, :total)";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('date' => $date, 'customer_id' => $customer_id, 'total' => $total));
        }

        public static function count() {
            $sql = "SELECT COUNT(*) AS 'sum' FROM invoice";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result['sum'];
        }

    }
