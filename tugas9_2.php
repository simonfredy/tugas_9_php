<?php
for ($i=0; $i <= 200; $i++) { 
    $t = 0;

    for ($j=1; $j <= $i; $j++) { 
        if ($i % $j == 0) {
            $t++;
        }
    }

    if ($t == 2) {
        echo "  ". $i, ",";
    }
}
?>