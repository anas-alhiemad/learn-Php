<?php
/**
 * Type Casting 
 * 
 * 
 * search settype
 * 
 */
echo '<br>';
echo 3+ (int) "3 room";
echo '<br>';
echo gettype(3+ (int) "3 room");
echo '<br>';
echo 15 + 15.5;
echo '<br>';
echo 15 + (int) 15.5;
echo '<br>';
echo gettype(15 + 15.5);
echo '<br>';
echo gettype(15 + (int) 15.5);
echo '<br>';
echo 15.5 + 15.5;
echo '<br>';
echo gettype(15.5 + 15.5);
echo '<br>';
echo (int)(15.5 + 15.5);//31
echo '<br>';
echo (int) 15.5  + (int) 15.5; //30

?>