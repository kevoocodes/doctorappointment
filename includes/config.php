<?php 
    session_start();
    //declare variables
     $db_name = 'appointment';
     $db_user = 'root';
     $db_pass = '';
     $db_host = 'localhost';

    //  connection to the database
     $con = new mysqli($db_host,$db_user,$db_pass,$db_name);

    //Test connection
    if(!$con) {
        echo"Not connected";
    }

?>