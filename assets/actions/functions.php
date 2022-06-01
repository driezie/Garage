<?php

require_once '../../../config.php';
require_once '../database/dbh.php';

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
   // use pdo
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
                    // $_SESSION['session_id'] = $user['klnr'];
                    // $_SESSION['session_email'] = $user['email'];
                    // $_SESSION['session_role'] = $user['role'];
                    alert('green', '⚠️ Goed!','Gegevens kloppen.', '../../dashboard/');
        } else {
            echo 'fout';
            alert('red', '⚠️ Fout!','Gegevens kloppen niet.', '../../login.php');
        }
    } else {
        echo 'fout';
        alert('red', '⚠️ Fout!','Gegevens kloppen niet.', '../../login.php');
    }
        
    
}



echo '$POST';
echo '<pre>'; print_r($_POST); echo '</pre>';
echo '<br>';
echo '$GET';
echo '<pre>'; print_r($_GET); echo '</pre>';
echo '<br>';
echo '$SESSION';
echo '<pre>'; print_r($_SESSION); echo '</pre>';

?>