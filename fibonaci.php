<?php
$a =0;
$b=1;
$n=15;
echo $a . " ";
for($i = 0; $i<$n; $i++){
    $c = $a + $b;
    $a= $b;
    $b=$c;
    echo $c ." ";
}
?>