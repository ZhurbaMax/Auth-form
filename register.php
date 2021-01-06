<?php
require_once ('config.php');
require ('functions/addition.php');

if (!empty($_SESSION['user_id'])){
    header('Location: /');
}
$errors = [];
$check = [];
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$country = $_POST['country'];
$city = $_POST['city'];
if (!empty($_POST)){
   $check = checkRegistrationForm($email,$password,$login,$country,$city,$errors);
}
if (empty($check)){
    additionUser($email,$password,$login,$country,$city,$dbConn);
}else{
    $errors = $check;
}
include ('views/registration.php');





