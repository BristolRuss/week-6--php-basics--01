<?php

for ($i = 1; $i <= 100; $i += 1){
    $answer = "";
    if ($i % 3 === 0){
        $answer .= "fizz";
    }
    if ($i % 5 === 0){
        $answer .= "buzz";
    }
    if ($answer === "") {
        $answer = $i;
    }
    echo "{$answer}\n";
}