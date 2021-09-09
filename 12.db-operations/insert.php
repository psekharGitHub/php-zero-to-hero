<?php

    // Variables to be inserted into the table
    $name = "Vikrant";
    $destination = "Russia";

    // Sql query to be executed
    $sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
    $result = mysqli_query($conn, $sql);

    // Add a new trip to the Trip table in the database
    if($result){
        echo "The record has been inserted successfully successfully!<br>";
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
?>

