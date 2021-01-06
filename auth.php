<?php
require_once ('config.php');
require ('functions/login.php');


if (!empty($_SESSION['user_id'])){
    header('Location: /');
}
$errors = [];
$check = [];
$password = $_POST['password'];
$login = $_POST['login'];
if (!empty($_POST)) {
    $check = checkAuthForm($login,$password,$errors);
}
    if (empty($check)) {
        authUser($login, $password, $dbConn);
    }else{
        $errors = $check;
    }

include ('views/authorization.php');
