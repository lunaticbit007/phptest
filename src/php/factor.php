<?php

function factorial( $n ) {
  // Base case
  if ( $n <= 1 && $n >=0 ) { 
    return 1;
  }
  elseif($n < 0 ) // For negetive values
  {
    return "undefined";
  }
  // Recursion
  $result = ( $n * factorial( $n-1 ) );
  
  return $result;
}

echo "The factorial of 5 is: " . factorial( 5 );

?>
