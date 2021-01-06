<?php

function authUser($loginUser,$passwordUser,$dbConnect){
    $passwordUserSalt = sha1($passwordUser . SALT);
    $result2 = $dbConnect->prepare("SELECT id FROM users WHERE login = :loginUser and password = :passwordUserSalt");
    $result2->bindParam(':passwordUserSalt', $passwordUserSalt);
    $result2->bindParam(':loginUser', $loginUser);
    $result2->execute();
    $id = $result2->fetchColumn();
    if (!empty($id)){
        echo 'вы авторизованы';
        $_SESSION['user_id'] = $id;

    }else{
        echo 'вы не авторизованы';
    }
}

function checkAuthForm($checkLogin,$checkPassword,$checkErrors){
    if (empty($checkLogin)) {
        $checkErrors[] = '* please enter login';
    }
    if (empty($checkPassword)) {
        $checkErrors[] = '* please enter password';
    }
    return $checkErrors;
}

