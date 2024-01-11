<?php 
/**
 * Data Type
 * Bool
 *Int
 * Float
 * String
 * gettype() this is function build-in language to return datatype to variable
 */
 echo gettype(10.1);
 echo'<br>';
 echo gettype(true);
 echo'<br>';
 echo gettype(10);
 echo'<br>';
 echo gettype('it is night beautiful'); 
 echo'<br>';
 echo gettype(array("lang1" => "php", "lang2" => "javaScript"));
 echo'<br>';
 echo gettype(array( "php",  "javaScript"));
 echo'<br>';
 echo gettype([ "php",  "javaScript"]);
?>