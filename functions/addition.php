<?php
function additionUser($emailUser,$passwordUser,$loginUser,$countryUser,$cityUser,$dbConnect){
    $passwordUserSalt = sha1($passwordUser . SALT);
    $result = $dbConnect->prepare("INSERT INTO users (email,password,login,country,city) VALUES (:emailUser,:passwordUserSalt,:loginUser,:countryUser,:cityUser)");
    $result->bindParam(':emailUser', $emailUser);
    $result->bindParam(':passwordUserSalt', $passwordUserSalt);
    $result->bindParam(':loginUser', $loginUser);
    $result->bindParam(':countryUser', $countryUser);
    $result->bindParam(':cityUser', $cityUser);
    $result->execute();
}

function checkRegistrationForm($checkEmail,$checkPassword,$checkLogin,$checkCountry,$checkCity,$checkErrors){

        if (empty($checkEmail)){
            $checkErrors[] = '* please enter email';
        }
        if (empty($checkPassword)){
            $checkErrors[] = '* please enter password';
        }
        if (empty($checkLogin)){
            $checkErrors[] = '* please enter login';
        }
        if (empty($checkCountry)){
            $checkErrors[] = '* please enter country';
        }
        if (empty($checkCity)){
            $checkErrors[] = '* please enter city';
        }
        if (strlen($checkEmail) > 90){
            $checkErrors[] = '* you have exceeded the limit of 90 characters';
        }
        if (strlen($checkPassword) < 6){
            $checkErrors[] = ' * you have not entered enough characters, please enter more than 6';
        }
        if (strlen($checkLogin) > 100){
            $checkErrors[] = '* you have exceeded the limit of 100 characters';
        }
        if (strlen($checkCountry) > 100){
            $checkErrors[] = '* you have exceeded the limit of 100 characters';
        }
        if (strlen($checkCity) > 100){
            $checkErrors[] = '* you have exceeded the limit of 100 characters';
        }
    return $checkErrors;
        /*
        if (empty($checkErrors)){
            $email = $checkEmail;
            $password = sha1($checkPassword.SALT);
            $login = $checkLogin;
            $country = $checkCountry;
            $city = $checkCity;
            additionUser($email,$password,$login,$country,$city,$checkDbConn);
            header('Location: /auth.php');
        }
        */
}
