<?php
// نحن مو بحاجة نحدد نوع البيانات php  في
// automatic type conversion 
echo 1+'3';
echo '<br>';
echo gettype(1+'3');
echo '<br>';
echo 1+'2 room'; //3 =>warning
echo '<br>';
echo gettype(1+'2 room');
echo '<br>';
echo True;  //1
echo '<br>';
echo gettype(true); // boolean
echo '<br>';
echo true + true; //2
echo '<br>';
echo gettype(true + true); // Integer
echo '<br>';
echo 12 + 12.5; //24.5
echo '<br>';
echo gettype(12 + 12.5); //double =>float


?>