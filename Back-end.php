<?php

if (isset($_REQUEST['submit'])) {
    echo "Marksheet <br><br><br>";
    $sub1 = $_REQUEST['subject1'];
    $sub2 = $_REQUEST['subject2'];
    $sub3 = $_REQUEST['subject3'];
    $sub4 = $_REQUEST['subject4'];
    $sub5 = $_REQUEST['subject5'];

    echo "Subject 1 Marks: $sub1 <br>";
    echo "Subject 2 Marks: $sub2 <br>";
    echo "Subject 3 Marks: $sub3 <br>";
    echo "Subject 4 Marks: $sub4 <br>";
    echo "Subject 5 Marks: $sub5 <br>";

    $totalMarks = 500;
    echo "Total Marks: $totalMarks <br/>";

    $obtainMarks  = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;

    echo "obtain marks: $obtainMarks <br/>";

    $percentage = ($obtainMarks / $totalMarks) * 100;
    echo "Percentage: $percentage <br/>";

    if ($sub1 < 40 || $sub2 < 40 || $sub3 < 40 || $sub4 < 40 || $sub5 < 40) {
        echo "you have failed";
    } else {
        if ($percentage >= 0 && $percentage < 40) {
            echo "Grade F";
        } elseif ($percentage >= 40 && $percentage <= 50) {
            echo "Grade D";
        } elseif ($percentage >= 50 && $percentage <= 60) {
            echo "Grade C";
        } elseif ($percentage >= 60 && $percentage <= 80) {
            echo "Grade B";
        } elseif ($percentage >= 80 && $percentage <= 90) {
            echo "Grade A";
        } else if ($percentage >= 90 && $percentage <= 100) {
            echo " Grade A+";
        }
    }
}

// Calculator Code Start.
if (isset($_REQUEST['addition'])) {
    echo "Calculator <br/> <br/>";
    $num = $_REQUEST['number1'];
    $num2 = $_REQUEST['number2'];
    $sum = $num + $num2;
    echo "Sum: $sum ";
} elseif (isset($_REQUEST['subtraction'])) {
    $num = $_REQUEST['number1'];
    $num2 = $_REQUEST['number2'];
    $sub = $num - $num2;
    echo "Subs: $sub ";
} elseif (isset($_REQUEST['multiplication'])) {
    $num = $_REQUEST['number1'];
    $num2 = $_REQUEST['number2'];
    $mul = $num * $num2;
    echo "Multi: $mul ";
} elseif (isset($_REQUEST['division'])) {
    $num = $_REQUEST['number1'];
    $num2 = $_REQUEST['number2'];
    $div = $num / $num2;
    echo "Div: $div ";
}
// Calculator Code End.
