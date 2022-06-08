<?php
require_once '../../../config.php';

function getDB() {
    $host = DB_HOST;
    $dbname = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    // echo $host.$dbname.$user.$pass; 


    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
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