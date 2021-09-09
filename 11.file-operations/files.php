<?php
    //Readfile and output the contents
    //$a = readfile('my-file.txt');

    $fptr = fopen("my-file.txt", "r");   //file pointer
    if (!$fptr) {
        echo var_dump($fptr);
    }
    $content = fread($fptr, filesize("my-file.txt"));
    echo $content;

    echo "<br>";
    echo fgets($fptr);
    
    while ($c = fgetc($fptr)) {
        echo $c;
        if ($c == '.') {
            break;
        }
    }

    fclose($fptr);
?>