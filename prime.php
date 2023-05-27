<?php
$num=15;
for($i=2; $i <= $num; $i++){
    if($num % $i == 0){
        if($i < $num){
            echo "Not a prime number";
            break;
        }else{
            echo "Prime number";
            break;
        }
        
    }
}

?>