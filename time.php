<?php
echo date("d-m-Y h:i:s a e") ."<br>";
echo "Time Keywords: <br>";
echo date("h") ."<br>";
echo date("H") ."<br>";
echo date("g") ."<br>";
echo date("G") ."<br>";
echo date("i") ."<br>";
echo date("s") ."<br>";
echo date("a") ."<br>";
echo date("A") ."<br>";
echo date("e") ."<br>"; //for timezone
date_default_timezone_set("Asia/Kolkata");
echo date("h:i:s a e") ."<br>";

?>