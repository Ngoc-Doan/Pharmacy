<?php
    class SaleStatistic {
        public $id;
        public $month;
        public $total;

        /**
         * SaleStatistic constructor.
         * @param $id
         * @param $month
         * @param $total
         */
        public function __construct($id, $month, $total)
        {
            $this->id = $id;
            $this->month = $month;
            $this->total = $total;
        }

        public static function monthly($beg, $end) {
            $sql = "SELECT * FROM sale_statistics WHERE month >= :beg AND month <= :end";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('beg' => $beg, 'end' => $end));
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $arr[] = new SaleStatistic($item['id'], $item['month'], $item['total']);
            }
            return $arr;
        }

        public static function quarterly($beg, $end) {
            $sql = "SELECT SUM(total) AS 'Sum' FROM sale_statistics WHERE month >= :beg AND month <= :end";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('beg' => $beg, 'end' => $end));
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result['Sum'];
        }
    }