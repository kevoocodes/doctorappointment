<?php 
session_start(); //start a session
session_unset();  //insert a session
session_destroy();   //destroy a session
header('location: index.php'); //location after session destroyed
?>



<!-- 
    developed by: @kevoocodes
 -->