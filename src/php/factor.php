<?php

function factorial( $n ) {
 
   $result = 1;
 //check is it greater than zero 
  if ( $n > 0 ) {
    for ($x=$n; $x>=1; $x--)   
    {  
    $result = $result * $x;  
    }  
  }
 elseif($n < 0) // check negetive values
 {
  $result = 'Undefined';
 }
 
  return $result;
}

echo "The factorial of 5 is: " . factorial( 5 );

?>
