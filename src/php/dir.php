<?php
class ReadDirectory
 {
  public function read($dirName)
   {
       $directoriesArray = array();
    if(is_dir($dirName))
    {
     if ($dh = opendir($dirName))
     {
	    //Open a directory, and read its contents
      while (($file = readdir($dh)) !== false)
      {
       $directoriesArray[] = $file;
      }
       closedir($dh);
     }
    }
    return $directoriesArray;
   }

   public function sort($sortingData)
   {
    $n=count($sortingData);
    $next=null;
    for($i=1; $i<$n; $i++)//outer loop
    {
        $next=$sortingData[$i];
        for($j=$i-1; $j>=0; $j--)//inner loop
        {
            if( $sortingData[$j]>$next ) 
            {
                $sortingData[$j+1]=$sortingData[$j];
            }
            else
            {
                break;
            }
        }
        $sortingData[$j+1]=$next; // insert the next value to the correct postion of the already sorted elements
 
    
    }
    return $sortingData;
   }
 }

$dirName = readline("Enter Directory Path : ");
$object = new ReadDirectory(); 
$directories = $object->read($dirName); //Call Method For Read the File and Sort It
$sortedName = $object->sort($directories); // For sort the array

print_r($sortedName);
