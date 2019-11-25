<?php
$array = array(1,2,3,4,5,6);
function median($array){
  rsort($array);
  $middle = round(count($array) / 2);
  $median = $array[$middle-1];
  return $median;
  }

  function mean($array){
    $count = count($array);
    $sum = array_sum($array);
    $mean = $sum / $count;
    return $mean;
    }
    
// Median = The middle value after the numbers are sorted smallest to largest
echo 'Median: '.median($array).'<br>';
echo 'Mean: '.mean($array).'<br>';
?>
