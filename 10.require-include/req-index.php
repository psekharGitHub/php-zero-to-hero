<?php
    // include '_dbconnect.php';
    require './_dbconnect.php';

    $sql = "SELECT * FROM `trip`";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "" . mysqli_num_rows($result) . " results found in database. <br>";
    }
?>