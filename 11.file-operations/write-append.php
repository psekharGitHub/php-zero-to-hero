<?php
    //Writing a file
    //  $fptr = fopen("my-file-1.txt", "w");
    //  fwrite($fptr, "This is written explicitely by fwrite()");
    //  readfile('my-file-1.txt');
    //  fclose($fptr);

     //Appending a file
     $fptr = fopen("my-file-1.txt", "a");
     fwrite($fptr, "This is begin appended to the file");
     fclose($fptr);
?>

