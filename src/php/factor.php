<?php

function factorial( $n ) {

  // Base case
  if ( $n == 0 ) {
    return 1;
  }

  // Recursion
  $result = ( $n * factorial( $n-1 ) );
  return $result;
}

echo "The factorial of 5 is: " . factorial( 5 );

?>
