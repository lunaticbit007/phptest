<?php
    // function to get factorial  
function factorial( $n ) {
 
  $result = 1; //Assigned default value 1 
      
    //check is it greater than zero  
  if ( $n > 0 ) {
    for ( $x=$n ; $x>=1 ; $x-- ) {  // Loop for getting factorial data
        $result = $result * $x;  
    }  
  } 
  elseif($n < 0) { // check for negative values
    $result = 'Undefined';  
  }
 
  return $result; 
}

echo "The factorial of 5 is: " . factorial( 5 ); // Call the function and print the factorial value

/*
NOTE : Use condition ($n < 0) for negative values because factorial of negative value is infinite, if we don't check this condition than our browser or terminal will get hang due to improper logic
*/

?>
