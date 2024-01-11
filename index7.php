<?php
/**
 * String and Escaping 
 * 
 * Escaping all code
 * => Heredoc
 * => Nowdoc
 */

// Escaping and parsing

$name="Anas";
echo<<<"Here"
hello php in world ''''' $$$$$ \\\\
hi my name is $name
Here;

echo'<br>';

// Only Escaping 
echo<<<'Now'
hello php in world ''''' $$$$$ \\\\
hi my name is $name
Now;

echo'<br>';

echo "<ul>";
    echo "<li>".$name."</li>";
    echo "<li>".$name."</li>";
    echo "<li>".$name."</li>";
    echo "<li>".$name."</li>";
echo "</ul>";

echo'<br>';
echo<<<"navlinks"
<ul>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
</ul>
navlinks;

echo'<br>';


?>