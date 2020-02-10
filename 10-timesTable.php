<?php

for($row = 1; $row <= 15; $row += 1){
    $output = "";
    for($column = 1; $column <= 15; $column += 1){
        $data = $row * $column;
        $output .= "{$data}\t";
        if($column === 15){
            echo "{$output}\n";
        }
    }
}