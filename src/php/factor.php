<?php

function factorial( $n ) {
 
   $result = 1;
 
  if ( $n != 0 ) {
    for ($x=$n; $x>=1; $x--)   
    {  
    $result = $result * $x;  
    }  
  }
  return $result;
}

echo "The factorial of 5 is: " . factorial( 5 );

?>
