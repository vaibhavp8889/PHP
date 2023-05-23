<?php
function swap(&$a,&$b){
    $a += $b;
    $b = $a - $b;
    $a = $a - $b;
}
function swaps($a,$b){
    $a += $b;
    $b = $a - $b;
    $a = $a - $b;
}
$a = 1;
$b = 2;
swaps($a,$b);
echo $a." ".$b;

?>