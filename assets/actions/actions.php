<?php
require_once './functions.php';


// if action is set
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        try_login('./login.php');
    }
}

?>