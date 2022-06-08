<?php
require_once '/xampp/htdocs/Projecten/Garage/config.php';
session_start();




function getDB()
{
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



// Alert function
function alert($type, $title,  $message, $location)
{
    // check if location is not empty
    if (!empty($location)) {
        header('Location: ' . $location . '?action=' . $type . '&message=' . $message . '&title=' . $title);
    } else {
        return '⚠️ There is no location to alert!';
    }
}



// Login function
function try_login()
{
    global $dbh;
    $dbh = getDB();

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
            alert('green', '🥳 Logged in!', 'You logged in successfully!', 'customer');
        } else {
            alert('red', '⚠️ Error!', 'Data is incorrect!', 'login.php');
        }
    } else {
        alert('red', '⚠️ Error!', 'Data is incorrect!', 'login.php');
    }
}
// Logout
function try_logout()
{
    session_destroy();
    alert('green', '🥳 Logged out!', 'You logged out successfully!', '/Projecten/Garage/public/login.php');
}

// Nav bar stuff
function createnavbar($array)
{
?>
    <div id="navbar" class="sticky">
        <ul id="navfunction">
            <?php
            echo '<li><p><b class="title">' . $array['title'] . '</b></p></li>';
            foreach ($array['nav'] as $nav) {
                if ($nav[2] == 'special') {
                    echo '<li><a class="' . $nav[2] . '" href="' . $nav[1] . '">' . $nav[0] . '</a></li>';
                } elseif ($nav[2] == 'disabled') {
                    echo '<li><a class="' . $nav[2] . '" href="#">' . $nav[0] . '</a></li>';
                } elseif ($nav[2] == 'normal') {
                    echo '<li><a href="' . $nav[1] . '">' . $nav[0] . '</a></li>';
                }
            }
            ?>
        </ul>
    </div>
<?php
}

// Alert notification function
function alert_session()
{
    if (isset($_GET['action'])) {
        if (!empty($_GET['title']) && !empty($_GET['message'])) {
            if ($_GET['action'] == 'green') {
                echo '<div class="alert alert-success" role="alert" style="margin: 10px;"><b>' . $_GET['title'] . ' </b>' . $_GET['message'] . '</div>';
            } elseif ($_GET['action'] == 'red') {
                echo '<div class="alert alert-danger" role="alert" style="margin: 10px;"><b>' . $_GET['title'] . ' </b>' . $_GET['message'] . '</div>';
            }
        }
    }
}
