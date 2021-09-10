<?php
     $showAlert = false;
     $showError = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include "./partials/_dbconnect.php";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $exists = false;
        $existSql = "SELECT * FROM `secured` WHERE username = '$username'";
        $result = mysqli_query($conn, $existSql);

        //Check if there already are entries by same username
        $numExistRows = mysqli_num_rows($result);
        
        if($numExistRows > 0){
            // $exists = true;
            $showError = "Username Already Exists";
        } else {
            // $exists = false;
            if ($password == $cpassword) {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `secured` (`username`, `password`,`date`)
                        VALUES ('$username', '$hash', current_timestamp())";
                $result = mysqli_query($conn, $sql);
          
                if($result){ 
                    $showAlert = true;
                }
            } else{
                echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            }
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Sign Up Page</title>
  </head>
  <body>
  <?php require "./partials/_nav.php"; ?>
  <?php 
        if ($showAlert == true) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Congratulations ' . $username .'!</strong> You have successfully signed up.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } 

        if ($showError == true) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>'. $showError.'</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } 
    ?>
  <div class="container my-4">
        <h1 class="text-center">Sign Up to our website</h1>

        <form action="/login-system/signup.php" method="POST">
            <div class="form-group mb-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>