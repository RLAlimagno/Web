<?php

    $name = $_POST['name'];
    $prelim = $_POST['prelim'];
    $midterm = $_POST['midterm'];
    $prefinal = $_POST['prefinal'];
    
    echo "Hello " . $name;
    echo "<br>";
    echo "Your Prelim Grade is " . $prelim;
    echo "<br>";
    echo "Your Midterm Grade is " . $midterm;
    echo "<br>";
    echo "Your Pre-final Grade is " . $prefinal;

    function calcfingrade($prelim,$midterm,$prefinal) {
        $fingrade = ($prelim * .3) + ($midterm * .3) + ($prefinal * .4);
        return $fingrade;
    }

    echo "<br>";

    $calfingrade = calcfingrade($prelim,$midterm,$prefinal);

    function gradecategory($grdcat){
       if ($grdcat < 60){
            $result = "Failed";
        } 
        else if ($grdcat >= 60 && $grdcat <= 79) {
            $result = "Passed";
        } 
        else if ($grdcat >= 80 && $grdcat <= 89) {
            $result = "Average Grade";
        } 
        else if ($grdcat >= 90) {
            $result = "High Grade";
        } 

        return  " Your Grade : " . $result;
    }
    
    echo "<br>";
    echo gradecategory($calfingrade);

?>