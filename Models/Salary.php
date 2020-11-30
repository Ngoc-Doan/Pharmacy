<?php
    class Salary {
        public $id;
        public $emp_id;
        public $begin;
        public $end;
        public $amount;

        /**
         * Salary constructor.
         * @param $id
         * @param $emp_id
         * @param $begin
         * @param $end
         * @param $amount
         */
        public function __construct($id, $emp_id, $begin, $end, $amount)
        {
            $this->id = $id;
            $this->emp_id = $emp_id;
            $this->begin = $begin;
            $this->end = $end;
            $this->amount = $amount;
        }


        public static function getAll() {
            $sql = "SELECT * FROM salary";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $arr[] = new Salary($item['id'], $item['emp_id'], $item['begin'], $item['end'], $item['amount']);
            }
            return $arr;
        }

    }