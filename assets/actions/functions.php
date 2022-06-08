<?php

// require_once '../../../config.php';
require_once './database/dbh.php';

session_start();
$dbh = getDB();

function alert($type, $title,  $message, $location) {
    // check if location is not empty
    if (!empty($location)) {
        header('Location: '.$location . '?action='.$type. '&message='.$message.'&title='.$title);
    } else {
        return '⚠️ There is no location to alert!';
    }
}

function use_query($query) {
    global $dbh;
    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function try_login() {
        global $dbh;

        $email = $_POST['email'];
        $password = $_POST['password'];
        $stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                    $_SESSION['session_id'] = $user['klnr'];
                    $_SESSION['session_email'] = $user['email'];
                    $_SESSION['session_role'] = $user['role'];
                    alert('green', '🥳 Logged in!','You logged in successfully!', '../../customer/');
        } else {
            alert('red', '⚠️ Error!','Data is incorrect!', '../../login.php');
        }
    } else {
        alert('red', '⚠️ Error!','Data is incorrect!', '../../login.php');
    }
}

function try_logout(){
    session_destroy();
    alert('green', '🥳 Logged out!','You logged out successfully!', '../../login.php');
}

// Data uit de database halen met deze handige functie. 
function getFromDB($what = "*", $table = "users", $where = "1", $debug = FALSE)
{
    try {
        $db = getDB();

        // If the $what is an array, we need to implode it with a comma.
        if (is_array($what)) {
            $what = implode(', ', $what);
        }

        // query
        $sql = "SELECT $what FROM $table WHERE $where";

        // debug
        if ($debug) {
            echo $sql;
        }

        // prepare and execute query. Then fetch all the results and retype them as an array
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    } catch (PDOException $e) {
        echo 'Database gegevens ophalen error: ' . $e->getMessage();
    }
}

?>