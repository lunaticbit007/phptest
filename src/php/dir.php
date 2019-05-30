<?php
/*
@this class use for read the directory and files of the directory and sort it
@read function read the file and put it in array
@sort function sort the array which we provide

*/
class ReadDirectory {

  // read the directory
    public function read($dirName) {
     
        $directoriesArray = array(); // Define array
        //
        if(is_dir($dirName)) {
            if ($dh = opendir($dirName)) {
      
                //Open a directory, and read its contents
                while (($file = readdir($dh)) !== false) {
                    $directoriesArray[] = $file;
                }
                closedir($dh);
            }
        }
        return $directoriesArray;
    }
    /* Use Insertion sort method for sorting the array 
       $sortingData is array 
    */
    public function sort($sortingData) {
        
        $n=count($sortingData); // Count the value of array
        $next=null; //definde the default value of next variable
        //Outer Loop
        for($i=1; $i<$n; $i++) {
            $next=$sortingData[$i]; // Assigned the value of ith index of array
            //Inner loop
            for($j=$i-1; $j>=0; $j--){
                // Check the values
                if( $sortingData[$j] > $next ) {
                    $sortingData[$j+1]=$sortingData[$j]; // 
                }
                else
                {
                break; // break the inner loop
                }
            }
            $sortingData[$j+1]=$next; // insert the next value to the correct postion of the already sorted elements
        }
        return $sortingData;
    }
}

$dirName = readline("Enter Directory Path : "); // For Insert the direcotry path
$object = new ReadDirectory();                  // Create Object of the class
$directories = $object->read($dirName);         //Call Method For Read the File and Sort It
$sortedName = $object->sort($directories);      // For sort the array

print_r($sortedName); // Print All files and directories in sorted way
