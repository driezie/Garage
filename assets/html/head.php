<?php
// requires
// require_once '/xampp/htdocs/Projecten/Garage/public/assets/actions/functions.php';
// require_once '/xampp/htdocs/3-leerjaar-2/projecten/6%20-%20garage/public/assets/actions/functions.php';
require_once '/xampp/htdocs/3-leerjaar-2/projecten/6 - garage/public/assets/actions/functions.php';


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'logout') {
        try_logout();
    }
}

?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<meta name="keywords" content=SITE_KEYWORDS />
<meta name="description" content=SITE_DESCRIPTION />
<meta name="author" content=SITE_AUTHOR />



<?php

