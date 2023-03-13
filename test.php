<?php

function add_subt($val1, $val2) {
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return array($add, $subt);
  }
//var_dump("$result_array");
  $result_array = add_subt(10,5);
  echo "Add: " . $result_array[0] ."\n";
  echo "Subt: " . $result_array[1] . "\n";

  list($add_result, $subt_result) = add_subt(20,7);
  echo "Add: " . $add_result . "\n";
  echo "Subt: " . $subt_result;