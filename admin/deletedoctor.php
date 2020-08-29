<?php
include("../includes/config.php");

if(isset($_GET['id'])){
    $doctorid = $_GET['id'];
    // echo $doctorid;
    $sql = $con->query("DELETE FROM doctors WHERE id = '$doctorid'");

    if($sql){
        header("location: viewdoctors.php");
    }else{
        echo "<script>alert('Doctor Not Deleted')</script>";
    }
}



?>