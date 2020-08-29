<?php 

if(!isset($_SESSION['username'])) {
    header("location: login.php");
}

$username = $_SESSION['username'];
$query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
$row = mysqli_fetch_array($query);
$userid = $row['id'];

?>