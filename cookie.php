<?php
$cookie_name = "user";
$cookie_value = "save info";

setcookie($cookie_name, $cookie_value, time() + (60), "/");

?>
<html>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "There is no cookie";
    }else{
        echo $_COOKIE[$cookie_name];
    }
    ?>
</body>

</html>