<!DOCTYPE html>
<html>

<head>


    <?php
    require_once '../assets/html/head.php';
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nav.css">

</head>

<body>
    <?php require_once '../assets/html/bottom_of_file.php'; ?>

    <?php

    if (isset($_POST['order_step_2'])) {
        progress_step(2);
    } elseif (isset($_POST['order_step_3'])) {
        progress_step(3);
    }



    ?>




    <?php
    $array = array(
        // (Button name , Button link , Button type)
        // class types: "normal", "special", "disabled",
        'title' => 'van Franken Car Service',
        'nav' => array(
            array('Return to Home', '../', 'normal'),

        ),
    );
    createnavbar($array);
    ?>

    <div class="container" style="margin-top: 100px">
        <!-- breadcrumbs -->
        <div class="container">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="../" class="active">Home</a></li>
                    <?php if (($_GET['step'] == 1)) { ?>
                        <li class="active">Schedule your appointment - Step 1: My Account</li>
                    <?php } elseif (($_GET['step'] == 2)) { ?>
                        <li class="active">Schedule your appointment - Step 2: Vehicle Information</li>
                    <?php } elseif (($_GET['step'] == 3)) { ?>
                        <li class="active">Schedule your appointment - Step 3: Sort problem</li>
                    <?php } elseif (($_GET['step'] == 4)) { ?>
                        <li class="active">Schedule your appointment - Step 4: Date and time</li>
                    <?php } elseif (($_GET['step'] == 5)) { ?>
                        <li class="active">Schedule your appointment - Step 5: Finish</li>
                    <?php } ?>
                </ol>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <?php
        if (isset($_SESSION['order'])) {

            echo '<div class="alert alert-success" role="alert" style="margin: 10px;">';
            echo '<b>Data:</b>';
            echo '<pre>';

            print_r($_SESSION['order']);
            echo '</pre>';
            echo '</div>';
        }

        ?>



        <!-- Start step 1 -->
        <?php if (($_GET['step'] == 1)) {

            if (!isLoggedIn()) {
                $_SESSION['order']['numberplate'] = '';
                progress_step(1); ?>

                <div class="col-12 col-lg-7">
                    <h2 class="h3 header">Step 1: My Account</h2>

                    <p class="container__text">Please login using your account. Have no account? Create one <a href="../register">here</a>.</p>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary" onclick="window.location.href='../login.php?order=true'">Log in</button>
                        <button type="submit" class="btn btn-primary" onclick="window.location.href='../register.php'">Create a new account</button>
                    </div>
                </div>
            <?php } else {
                progress_step(1);
                alert('green', '🥳 Already logged in!', 'You are already logged in so you skipped step 1', '?step=2', '&');
            }
        } elseif (($_GET['step'] == 2)) {  ?>
            <?php
            alert_session();
            ?>
            <div class="col-12 col-lg-7">
                <h2 class="h3 header">Step 2: Vehicle Information</h2>
                <div class="form-row" style="max-width: 400px; margin-bottom: 10px;">
                    <form action="index.php?step=3" method="post">
                        <label for="firstname">Please enter your valid lincense plate</label>
                        <input type="text" class="form-control" name='numberplate' id="name" placeholder="Enter lincense plate" maxlength="7" required>
                        <div class="form-row">
                            <button type="submit" name="order_step_2" class="btn btn-primary">Next Step</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Einde step 2 | Start step 3 -->
        <?php } elseif (($_GET['step'] == 3)) {  
            ?>

            <div class="col-12 col-lg-7">
                <h2 class="h3 header">Step 3: Sort problem</h2>
                <!-- create a list with issues  -->
                <form action="index.php?step=4" method="post" class='service_form'>
                    <ul>
                    <li>
                            <input checked class="form-check-input" type="checkbox" name="service[]" value="1" disabled>
                            <label class="form-check-label" for="service[]">Basic service (required)</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" name="service[]" value="1">
                            <label class="form-check-label" for="service[]">Vehicle is broken</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" name="service[]" value="2">
                            <label class="form-check-label" for="service[]">Vehicle is not working</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" name="service[]" value="3">
                            <label class="form-check-label" for="service[]">Vehicle is not working</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" name="service[]" value="4">
                            <label class="form-check-label" for="service[]">Vehicle is not working</label>
                        </li>
                    </ul>
                    <div class="form-row">
                        <button type="submit" name="order_step_3" class="btn btn-primary">Next Step</button>
                    </div>
                </form>


            </div>
            <!-- Einde step 3 | Start step 4 -->
        <?php } elseif (($_GET['step'] == 4)) { ?>
            <?php progress_step(4); ?>
            <div class="col-12 col-lg-7">
                <h2 class="h3 header">Step 4: Date and time</h2>
                <form action="index.php?step=5" method="post" class='service_form'>
                    <div class="form-row">
                        <label for="firstname">Date</label>
                        <input min="<?= date('Y-m-d') ?>" type="text" name="date" class="datepicker" id="txtdate" value="Select Date Here" required>
                    </div>
                    <label for="firstname">Time</label>
                    <input type="time" class="form-control" name='time' id="time" placeholder="Enter time" required>

                    <button type="submit" name="order_step_4"  class="btn btn-primary">Create appointment</button>
                </form>
            </div>

        <?php } elseif (($_GET['step'] == 5)) { ?>
            <?php progress_step(4); ?>
            <div class="col-12 col-lg-7">
                <h2 class="h3 header">Created appointment!</h2>
                <p>Your appointment has been created!</p>
            <?php progress_step(5); ?>


                <a class="btn btn-primary" href="../">Back to home</a>
            </div>

            </form>

        <?php } ?>

        <!-- Einde step 4 -->

        <div class="col-12 col-lg-5">
            <h2 class="h3 header">Steps:</h2>
            <?php if (($_GET['step'] == 1)) { ?>
                <p class="container__text"><b>Step 1: My Account</b></p>
                <p class="container__text">Step 2: Vehicle Information</p>
                <p class="container__text">Step 3: Sort problem</p>
                <p class="container__text">Step 4: Date and time</p>
                <p class="container__text">Step 5: Finish</p>
            <?php } elseif (($_GET['step'] == 2)) { ?>
                <p class="container__text">Step 1: My Account</p>
                <p class="container__text"><b>Step 2: Vehicle Information</b></p>
                <p class="container__text">Step 3: Sort problem</p>
                <p class="container__text">Step 4: Date and time</p>
                <p class="container__text">Step 5: Finish</p>
            <?php } elseif (($_GET['step'] == 3)) { ?>
                <p class="container__text">Step 1: My Account</p>
                <p class="container__text">Step 2: Vehicle Information</p>
                <p class="container__text"><b>Step 3: Sort problem</b></p>
                <p class="container__text">Step 4: Date and time</p>
                <p class="container__text">Step 5: Finish</p>
            <?php } elseif (($_GET['step'] == 4)) { ?>
                <p class="container__text">Step 1: My Account</p>
                <p class="container__text">Step 2: Vehicle Information</p>
                <p class="container__text">Step 3: Sort problem</p>
                <p class="container__text"><b>Step 4: Date and time</b></p>
                <p class="container__text">Step 5: Finish</p>
            <?php } elseif (($_GET['step'] == 5)) { ?>
                <p class="container__text">Step 1: My Account</p>
                <p class="container__text">Step 2: Vehicle Information</p>
                <p class="container__text">Step 3: Sort problem</p>
                <p class="container__text">Step 4: Date and time</p>
                <p class="container__text"><b>Step 5: Finish</b></p>
            <?php } ?>

            </p>
        </div>
    </div>
    </div>
    </div>

</body>

<script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>
<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css' media="screen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript"></script>
<script>
    $(function() {
        var selectedDates = [];
        datePicker = $('[id*=txtdate]').datepicker({
            startDate: new Date(),
            minDate: 0,
            multidate: false,
            format: "mm/dd/yyyy",
            daysOfWeekHighlighted: "0,6",
            language: 'en',
            daysOfWeekDisabled: [0, 6]
        });
        datePicker.on('changeDate', function(e) {
            if (e.dates.length <= 1) {
                selectedDates = e.dates;
            } else {
                datePicker.data('datepicker').setDates(selectedDates);
                alert('You can only select 1 dates.');
            }
        });
    });
</script>
</script>


</html>