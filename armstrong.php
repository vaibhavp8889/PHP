<?php
$a =371;
$b = $a;
$sum=0;
for ($i=0;$i<$a;$i++){
    $c=$a%10;
    $sum=$sum+pow($c,3);
    $a=($a/10);

}
if($sum ==$b){
    echo "Armstrong";
}else{
    echo "not";
}
?>