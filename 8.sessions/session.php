<?php
// What is a session?
// Used to manage information across difference pages

// Verify the user login info
session_start();
$_SESSION['username'] = "Mike";
$_SESSION['favCat'] = "Gloves";
echo "We have saved your session";
?>
