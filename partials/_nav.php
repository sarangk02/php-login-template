<?php
$loggedin = false;

if (isset($_SESSION['loggedin'])) {
    $loggedin = true;
} 
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="/login_sys">Login-SignUp System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="/login_sys/wlcm.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php
            if ($loggedin == false) {
                echo '
                <li class="nav-item">
                <a class="nav-link" href="/login_sys/login.php">Log In</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/login_sys/signup.php">Sign Up</a>
                </li>';
            } else {
                echo '
                <li class="nav-item">
                <a class="nav-link" href="/login_sys/logout.php">Log Out</a>
                </li>';
            }
            ?>
        </ul>
    </div>

</nav>