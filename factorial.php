<?php
function factorial($a){
    if($a == 0){
        return 1;
}else{
    return $a * factorial($a - 1);
}
}

$b = factorial(6);
echo $b;
?>