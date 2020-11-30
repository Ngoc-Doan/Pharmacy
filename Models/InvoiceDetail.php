<?php
    class InvoiceDetail {
        public $id;
        public $medicine;
        public $amount;
        public $cost;
        public $customer_id;

        /**
         * InvoiceDetail constructor.
         * @param $id
         * @param $medicine
         * @param $amount
         * @param $cost
         * @param $customer_id
         */
        public function __construct($id, $medicine, $amount, $cost, $customer_id)
        {
            $this->id = $id;
            $this->medicine = $medicine;
            $this->amount = $amount;
            $this->cost = $cost;
            $this->customer_id = $customer_id;
        }

        public static function getInvoiceByID($id) {
            $sql = "SELECT * FROM invoice_detail WHERE customer_id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $arr[] = new InvoiceDetail($item['id'], $item['medicine'], $item['amount'], $item['cost'], $item['customer_id']);
            }
            return $arr;
        }

    }