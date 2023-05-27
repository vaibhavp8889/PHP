<?php
session_start();
session_reset();
session_destroy();
echo "session delete successfully";
?>