<?php
session_start();
// print_r($_SESSION);
session_unset();
// session_destroy();
header("Location:index.php");
// echo "session expired";
// echo"please login again";
?>
<!-- <div><a href="index.php">login</a></div> -->