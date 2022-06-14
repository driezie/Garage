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
function alert($type, $title,  $message, $location, $link_prefix = '?')
{
    // check if location is not empty

    if (!empty($location)) {
        header('Location: ' . $location . $link_prefix . 'action=' . $type . '&message=' . $message . '&title=' . $title);
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
    $_SESSION = NULL;
    session_destroy();
    alert('green', '🥳 Logged out!', 'You logged out successfully!', '/Projecten/Garage/public/login.php');
}


function try_register()
{
    global $dbh;
    $dbh = getDB();

    // $fname = $_POST['fname'];
    // $lname = $_POST['lname'];
    // $email = $_POST['email'];
    // $phonenumber = $_POST['phonenumber'];
    // $password = $_POST['password'];
    // $password2 = $_POST['password2'];

    $array = array(
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'email' => $_POST['email'],
        'phonenumber' => $_POST['phonenumber'],
        'password' => $_POST['password'],
        'password2' => $_POST['password2'],

        'street' => $_POST['street'],
        'streetnumber' => $_POST['streetnumber'],
        'location' => $_POST['zipcode'],
    );

    $hassed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $_SESSION['data'] = $array;

    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['phonenumber']) || empty($_POST['password']) || empty($_POST['password2'])) {
        alert('red', '⚠️ Error!', 'Please fill in all the fields!', 'register.php');
        // If the email is not alreay in use, we can continue.
    } elseif (getFromDB('*', 'users', "email = '$_POST[email]'") !== NULL) {
        alert('red', '⚠️ Error!', 'This email is alreay in use!', 'register.php');
    } else {
        if ($_POST['password'] !== $_POST['password2']) {
            alert('red', '⚠️ Error!', 'Passwords are not the same!', 'register.php');
        } else {
            // Save to database using PDO fname lname email phonenumber password street streetnumber zipcode
            $sql = "INSERT INTO users (first_name, last_name, email, phonenumber, password, plaats, adres) VALUES (:fname, :lname, :email, :phonenumber, :password, :street, :location)";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':fname', $_POST['fname']);
            $stmt->bindParam(':lname', $_POST['lname']);
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->bindParam(':phonenumber', $_POST['phonenumber']);
            $stmt->bindParam(':password', $hassed_password);
            $stmt->bindParam(':street', $_POST['street']);
            $stmt->bindParam(':location', $_POST['zipcode']);
            $stmt->execute();
            // alert('green', '🥳 Registered!', 'You registered successfully!', 'login.php');





            // $_SESSION['session_id'] = $dbh->lastInsertId();
            // $_SESSION['session_email'] = $_POST['email'];
            // $_SESSION['session_role'] = 'customer';
            alert('green', '🥳 Success!', 'You registered successfully!', 'register.php');
        }
    }
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


// Check if the user is logged in
function isLoggedIn()
{
    if (isset($_SESSION['session_id']) && isset($_SESSION['session_email']) && isset($_SESSION['session_role'])) {
        return true;
    } else {
        return false;
    }
}

// Progress step function
function progress_step($step)
{

    if ($step == 1) {
        if (isLoggedIn()) {
            $_SESSION['order']['user'] = $_SESSION['session_id'];
        }
    }


    //     $_SESSION['order']['brand'] = $_POST['brand'];
    //     $_SESSION['order']['model'] = $_POST['model'];

    //     $_SESSION['order']['date'] = '';
    //     $_SESSION['order']['time'] = '';
    //     $_SESSION['order']['service'] = array();

    //     // Account information
    //     if (!isset($_SESSION['email'])) {
    //         // laat webpage zien waar je kunt inloggen
    //     } else {
    //         // skip step met message of vraag of diegene wilt inloggen met een nieuw account of doorgaan
    //         // alert('green', '🥳 Already logged in!', 'You have skipped the firt step becuae your already logged in', 'register.phpstep=2');
    //     }
    // }
    if ($step = 2) {
        // Invoer kenteken etc
        if(isset($_POST['numberplate'])){
            $_SESSION['order']['numberplate'] = $_POST['numberplate'];
        } else{
            echo 'no';
        }
    }
    if ($step = 3) {
        // type of issue in array
    }
    // if ($step = 4) {
    //     // date and time
    // }
}
