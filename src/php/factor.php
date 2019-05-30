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
  elseif($n < 0) { // check for negetive values
    $result = 'Undefined';  
  }
 
  return $result; 
}

echo "The factorial of 5 is: " . factorial( 5 ); // Call the function and print the factorial value

?>
