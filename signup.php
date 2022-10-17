<?php

$showAlert = false;
$showPassError = false;
$showUError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require_once 'partials/_dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $exists = false;
    $existsSQL = "SELECT * from `users` where `username` = '$username'";
    $result = mysqli_query($conn, $existsSQL);   
    $numExistsRows = mysqli_num_rows($result);
    if($numExistsRows > 0){
        $exists = true;
        $showUError = true;
    } else {
        $exists = false;

        if (($password == $confirm_password)) {
            // $hash = password_hash($password, PASSWORD_DEFAULT);
            // $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ( '$username', '$hash', current_timestamp())";
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        }
        else {
            $showPassError = true;
        }
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>
    <?php require 'partials/_nav.php';

    if ($showAlert) {
        // echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> Your Account is created.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

        sleep(1.5);
        header("location: login.php");
    }

    if ($showPassError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Error!</strong> Passwords do not match <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
    if ($showUError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Error!</strong> Username already exists <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
    ?>

    <div class="container my-4">

        <h1 class="text-center">Sign Up to our website</h1>

        <form method="post" action="/login_sys/signup.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" maxlength="10">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" maxlength="20">
            </div>
            <div class="form-group">
                <label for="confrim_password">Confirm Password</label>
                <input type="password" class="form-control" id="confrim_password" placeholder="Confirm Password" name="confirm_password">
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>