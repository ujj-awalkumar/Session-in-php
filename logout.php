<?php
session_start();
print_r($_SESSION);

session_destroy();
echo "session expired";
echo"please login again";
?>
<div><a href="index.php">login</a></div>