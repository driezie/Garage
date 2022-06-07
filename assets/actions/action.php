<?php
require_once './functions.php';
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        try_login();
    }
    if ($_GET['action'] == 'logout') {
        try_logout();
    }
}
?>