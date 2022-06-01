<?php

require_once '../../../config.php';
require_once '../database/dbh.php';

$dbh = getDB();

function alert($type, $message) {
    echo '<div class="'.$type.'" role="alert">' . $message . '</div>';
}

function use_query($query) {
   // use pdo
    global $dbh;
    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function try_login($location) {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = use_query($query);
        if (count($result) > 0) {
            $user = $result[0];
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                header('Location: '.$location);
            } else {
                alert('danger', 'Gebruikersnaam of wachtwoord is incorrect');
            }
        } else {
            alert('danger', 'Gebruikersnaam of wachtwoord is incorrect');
        }
    }
}






?>