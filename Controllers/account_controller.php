<?php
    require_once('base_controller.php');
    require_once('Models/Account.php');
    class AccountController extends BaseController {
        public function __construct() {
            $this->name = 'account';
        }

        function login() {
            if (!isLogin()) {
                $username = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                $pwd = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                $res = Account::checkLogin($username, $pwd);

                if ($res) {
                    $_SESSION['account'] = serialize($res);
                    redirect('?controller=dashboard&action=index');
                } else {
                    redirect('?controller=home');
                }
            } else {
                redirect('?controller=dashboard');
            }

        }

        function logout() {
            if (isLogin()) {
                unset($_SESSION['account']);
            }
            redirect('?controller=home');
        }

        function profile() {
            if (isLogin()) {
                $user = Account::getUserByID(getUserInfo()->id);
                $this->render('profile', array('user' => $user), 'main_template');
            } else {
                redirect("?controller=home");
            }
        }

        function managerUsers() {
            if (isLogin() && getRole() == 1) {
                $users = Account::getAllUser(getUserInfo()->id);
                $this->render('managerUsers', array('users' => $users), 'main_template');
            } else {
                redirect("?controller=home");
            }

        }

        function roles() {
            if (isLogin() && getRole() == 1) {
                $roles = Roles::getAllRoles();
                $this->render('roles', array('roles' => $roles), 'main_template');
            } else {
                redirect("?controller=home");
            }

        }

        function addUser() {
            if (isLogin() && getRole() == 1) {
                if (isset($_POST['btn_save'])) {
                    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                    $role = filter_input(INPUT_POST, 'group_id', FILTER_SANITIZE_STRING);
                    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                    $pwd = password_hash($password, PASSWORD_DEFAULT);
                    Account::addUser($name, $pwd, $email, $role);
                    redirect('?controller=account&action=managerUsers');
                }
                $roles = Roles::getAllRoles();
                $this->render('addUser', array('roles' => $roles));
            } else {
                redirect("?controller=home");
            }

        }

        function updateProfile() {
            if (isset($_POST['btn-update'])) {
                $id = getUserInfo()->id;
                $name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                Account::updateProfile($id, $name, $email);
                redirect("?controller=account&action=profile");
            }
        }

        function changePassword() {
            if (isLogin()) {
                if (isset($_POST['btn_save'])) {
                    $pwd = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                    $confirm = filter_input(INPUT_POST, 'confirm', FILTER_SANITIZE_STRING);
                    if ($pwd == $confirm) {
                        $user = getUserInfo();
                        $pass = password_hash($pwd, PASSWORD_DEFAULT);
                        Account::changePassword($user->id, $pass);
                        redirect("?controller=account&action=profile");
                    }
                }
            } else {
                redirect("?controller=home");
            }
        }

        function editUser() {
            if (isLogin() && getRole() == 1) {
                if (isset($_POST['btn_save'])) {
                    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                    $uName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                    $uEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                    $uRole = filter_input(INPUT_POST, 'group_id', FILTER_SANITIZE_STRING);
                    $uPass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                    $pwd = password_hash($uPass, PASSWORD_DEFAULT);
                    Account::editUser($id, $uName, $uEmail, $uRole, $pwd);
                    redirect("?controller=account&action=managerUsers");
                }
                if (isset($_GET['id'])) {
                    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                    $user = Account::getUserByID($id);
                    $roles = Roles::getAllRoles();
                    $this->render('editUser', array('user' => $user, 'roles' => $roles));
                }
            } else {
                redirect("?controller=home");
            }
        }

        function deleteUser() {
            if (isLogin() && getRole() == 1) {
                if (isset($_GET['id'])) {
                    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                    Account::deleteUser($id);
                    redirect("?controller=account&action=managerUsers");
                }
            } else {
                redirect("?controller=home");
            }

        }
    }