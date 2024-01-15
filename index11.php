<?php 

/**
 * assign variable by reference  
 * by default variables  are always assigned by value 
 * assigned by reference make variable alias or point to another
 * 
 * search    // 
 *  reference are not Pointers
 * 
 */


 $name = "anas";
 $name1 = &$name;
 $name1 = "anasAli";
 $name = "anasAlhie";

 echo $name;
 echo "<br>";
 echo $name1



?>