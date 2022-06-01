<?php
if (isset($_GET['action'] )) {
    if (!empty($_GET['title']) && !empty($_GET['message'])) {
        if ($_GET['action'] == 'green') {
            echo '<div class="alert alert-success" role="alert" style="margin: 10px;"><b>'.$_GET['title'].' </b>'.$_GET['message'].'</div>';
        } elseif ($_GET['action'] == 'red') {
            echo '<div class="alert alert-danger" role="alert" style="margin: 10px;"><b>'.$_GET['title'].' </b>'.$_GET['message'].'</div>';
        }
    }
}
?>