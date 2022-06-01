<div class="primary-header flex">

    <!-- Logo -->
    <div class="logo">
        <a href="index.php">

            <img src="../img/logo.png" alt="Logo" class="logo">
        </a>
    </div>

    <button class="mobile-nav-toggle flex" aria-controls="primary-navigation" aria-expanded="false">
        <span class="sr-only">Menu</span>

        <!-- Burger -->
        <div class="burger-container flex">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
        </div>

    </button>

    <!-- Nav menu -->
    <nav>
        <ul id="primary-navigation" data-visible="false" class="primary-navigation flex">

            <li class="nav-link">
                <a href="index.php" class="link-nav <?php if($page == 'Home') { echo "active";} ?>">
                    Home
                </a>
            </li>
            <?php if (isset($_SESSION['user'])) { ?>
                <li class="nav-link">
                    <a href="dashboard.php"  class="link-nav <?php if($page == 'Dashboard') { echo "active";} ?>">
                        Dashboard
                    </a>
                </li>
                <li class="nav-link">
                    <a href="shares.php"  class="link-nav <?php if($page == 'Shares') { echo "active";} ?>">
                        Shared
                    </a>
                </li>
                <li class="nav-link">
                    <a href="upload.php"  class="link-nav <?php if($page == 'Upload') { echo "active";} ?>">
                        Upload
                    </a>
                </li>
            <?php } else { ?>
                <li class="nav-link">
                    <a href="register.php"  class="link-nav <?php if($page == 'Register') { echo "active";} ?>">
                        Registreren
                    </a>
                </li>
            <?php } ?>
            <?php if (!isset($_SESSION['user'])) { ?>
            <li class="nav-link">
                <a href="login.php" class="link-nav <?php if($page == 'Login') { echo "active";} ?>"> Login </a>
            </li>
            <?php } ?>
            <?php if (isset($_SESSION['user'])) {
                
                ?>
                <li class="nav-link drop-down-link">


                    <div class="container">

                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $users[0]['email'] ?>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="?logout">Uitloggen</a></li>
                                <li><a class="dropdown-item <?php if($page == 'Profile') { echo "active";} ?>" href="profile.php">Mijn profiel</a></li>
                                <li><a class="dropdown-item dark-mode-toggle" href="#" aria-controls="dark-mode">☀️</a></li>
                            </ul>
                        </div>

                    </li>

                    </div>
                <?php } else{ ?>
                    <li><a class="nav-link dark-mode-toggle" href="#" aria-controls="dark-mode">☀️</a></li>
                <?php } ?>

        </ul>
    </nav>
</div>