<?php

resolve_part_1();
resolve_part_2();

function resolve_part_1(){
    $input_lines = file("input");
    foreach($input_lines as $line){
        $values = explode("   ", $line);
        $left_values[] = intval($values[0]);
        $right_values[] = intval($values[1]);
    }
    sort($left_values, SORT_NUMERIC);
    sort($right_values, SORT_NUMERIC);
    $sum = 0;
    for($i=0;$i<sizeof($left_values);$i++){
        $distance[] = abs($left_values[$i]-$right_values[$i]);
        $sum += $distance[$i];
    }
    echo "sum = $sum\n";    
}

function resolve_part_2(){
    $input_lines = file("input");
    foreach($input_lines as $line){
        $values = explode("   ", $line);
        $left_values[] = intval($values[0]);
        $right_values[] = intval($values[1]);
    }
    $right_values_counted = array_count_values($right_values);

    $similarity_score = 0;
    foreach($left_values as $left_value){
        $similarity_score += (isset($right_values_counted[$left_value])) ? ($left_value * $right_values_counted[$left_value]) : 0;
    }
    echo "similarity_score = $similarity_score\n";    
}

?>