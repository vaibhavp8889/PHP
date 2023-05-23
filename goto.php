<?php
for($i=0;$i<10;$i++){
    echo $i."<br>";
    if($i==3){
        goto abc;
    }
}
echo "hello friends";
abc:
echo "hello goto";
?>