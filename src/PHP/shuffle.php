<?php
function shuffle_array(&$array)
{ 
  //Assumes array is 0-based integer keys 
  //Initialize the random number generator once, and only once, 
  //Even if we call shuffle function twice in one script. 
   
  if (!isset($randinit)){ 
    srand((double) microtime() * 1000000); 
    static $randinit = 1; 
  } 
   
  //Start at the end and work our way forward, 
  //always swapping a randomly selected item 
  //with the current 'last' one. 
  $last = count($array)-1; 
  while ($last > 1){ 
     
    //Earlier versions of PHP had different args for rand(). 
    $random = rand(0, $last); 
     
    //Swap the randomly selected element with the last element. 
    $temp = $array[$random]; 
    $array[$random] = $array[$last]; 
    $array[$last] = $temp; 
     
    //Move 'forward' in array 
    $last--; 
  } 
  return 1; 
}
?>