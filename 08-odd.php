<?php

for ($i = 1; $i <= 50; $i += 1){
    if($i % 2 !== 0){
        $runningTotal = $runningTotal + $i;
        var_dump($runningTotal);
    }
}