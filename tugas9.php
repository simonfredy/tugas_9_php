<?php
$a = 0;
$b = 1;

echo "$a $b";
for ($i = 0; $i < 20 ; $i++) {
    $hsl = $b + $a; 
    echo " $hsl";

    $a = $b;
    $b = $hsl;
}
?>