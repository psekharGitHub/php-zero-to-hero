<?php

    function sumNumbers(int $a, int $b) {
    return $a + $b;
    }
    echo sumNumbers(5, 20);

    function add_some_extra($string) {
        $string .= 'Add something.';
    }

    $str = 'I have added this';
    add_some_extra($str);

    echo $str;   
    // outputs ‘Add something. I have added this'
    echo "Welcome to php tutorial on functions <br>";



    function processMarks($marksArr){
        $sum = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
        }
        return $sum;
    }
    echo "Sum using foreach $sum <br>";



    function avgMarks($marksArr){
        $sum = 0;
        $i = 1;
        foreach ($marksArr as $value) {
            $sum += $value;
            $i++;
        }
        return $sum/$i;
    }

    $rohanDas = [34, 98, 45, 12, 98, 93];
    // $sumMarks = processMarks($rohanDas);
    $sumMarks = avgMarks($rohanDas);

    $harry = [99, 98, 93, 94, 17, 100];
    // $sumMarksHarry = processMarks($harry);
    $sumMarksHarry = avgMarks($harry);
    echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
    echo "Total marks scored by Harry out of 600 is $sumMarksHarry";
?>