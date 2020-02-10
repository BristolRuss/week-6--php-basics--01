<?php

for ($i = 1; $i <= 117; $i += 1){
    if($i % 3 === 0 || $i % 7 === 0){
        $runningTotal = $runningTotal + $i;
        var_dump($runningTotal);
    }
}