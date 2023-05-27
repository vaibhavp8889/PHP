<?php
$number=434;
$sum = 0;
$copy_num=$number;
for($i=1;$i<=$number;$i++){
    $temp = $number % 10;
    $number = $number / 10;
    $sum = ($sum *10) + $temp;
}
if($copy_num==$sum){
    echo "Palindrom";
}else{
    echo "not palindrom";
}
?>