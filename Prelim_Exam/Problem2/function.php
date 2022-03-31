<?php
    $guess = $_POST['guess'];
    $answer = "";

    function random($result,$guess){
        for ($int = 1 ; $int <=10; $int++){
            $answer =  rand(1,10);

            if ($guess == $answer){
                $result = "Good guess! Matched number is " . $guess . "<br>";
            } else {
                $result = "Sorry! Didn`t match with the number " . $answer . "<br>";
            }
            echo $result;
        }
    }

    echo "Your Guess Number: " . $guess . "<br>";
    echo "<br>";
    echo "Generated Numbers: " . $answer ."<br>";
    $result =  random($answer,$guess);
?>