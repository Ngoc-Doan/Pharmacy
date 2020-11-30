<?php
    class Account {
        public $id;
        public $name;
        public $email;
        public $password;
        public $role;

        /**
         * Account constructor.
         * @param $id
         * @param $name
         * @param $email
         * @param $password
         * @param $role
         */

        public function __construct($id, $name, $email, $password, $role)
        {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }


        public static function checkLogin($email, $pwd) {
            $sql = "SELECT * FROM users WHERE email = :email";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('email' => $email));
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            if (password_verify($pwd, $result['password'])) {
                return new Account($result['id'], $result['name'], $result['email'],
                    $result['password'], $result['role']);
            } else {
                return null;
            }
        }

        public static function getAllUser($id) {
            $sql = "SELECT * FROM users WHERE id <> :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $arr = array();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result) {
                $arr[] = new Account($result['id'], $result['name'], $result['email'],
                    $result['password'], $result['role']);
            }
            return $arr;
        }

        public static function addUser($name, $password, $email, $role) {
            $sql = "INSERT INTO users(name, password, email, role) VALUES (:name, :password, :email, :role)";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('name' => $name, 'password' => $password, 'email' => $email, 'role' => $role));
        }

        public static function editUser($id, $name, $email, $role, $pwd) {
            $sql = "UPDATE users SET name = :name, email = :email, role = :role, password = :pwd WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id, 'name' => $name, 'email' => $email, 'role' => $role, 'pwd' => $pwd));
        }

        public static function updateProfile($id, $name, $email) {
            $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id, 'name' => $name, 'email' => $email));
        }

        public static function changePassword($id, $pwd) {
            $sql = "UPDATE users SET password = :password WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id, 'password' => $pwd));
        }

        public static function getUserByID($id) {
            $sql = "SELECT * FROM users WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return new Account($result['id'], $result['name'], $result['email'],
                    $result['password'], $result['role']);
        }

        public static function deleteUser($id) {
            $sql = "DELETE FROM users WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
        }

        public static function getRole($id) {
            $sql = "SELECT role FROM users WHERE id = :id";
            $db = DB::getDB();
            $stm = $db->prepare($sql);
            $stm->execute(array('id' => $id));
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result['role'];
        }

        public static function count() {
            $sql = "SELECT COUNT(*) AS 'sum' FROM users";
            $db = DB::getDB();
            $stm = $db->query($sql);
            $result = $stm->fetch(PDO::FETCH_ASSOC);
            return $result['sum'];
        }
    }