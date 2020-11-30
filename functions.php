<?php
    function getRole() {
        if (isset($_SESSION['account'])) {
            $user = unserialize($_SESSION['account']);
            return Account::getRole($user->id);
        } else {
            return null;
        }
    }

    function getUserInfo() {
        if (isset($_SESSION['account'])) {
            return unserialize($_SESSION['account']);
        } else {
            return null;
        }
    }

    function redirect($url) {
        header("Location: $url");
    }

    function isLogin() {
        if (isset($_SESSION['account'])) {
            return true;
        } else {
            return false;
        }
    }

    function message($msg) {
        $_SESSION['msg'] = $msg;
    }

    function removeMsg() {
        unset($_SESSION['msg']);
    }
