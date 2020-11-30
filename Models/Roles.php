<?php
    class Roles {
        public $id;
        public $role;

        /**
         * Roles constructor.
         * @param $id
         * @param $role
         */
        public function __construct($id, $role)
        {
            $this->id = $id;
            $this->role = $role;
        }

        public static function getAllRoles() {
            $sql = "SELECT * FROM roles";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $arr[] = new Roles($item['id'], $item['role']);
            }
            return $arr;
        }

    }