<?php 
if(!isset($_SESSION['id'])){
    header("location: index.php");

}
    $doctorid = $_SESSION['id'];
    $query = mysqli_query($con, "SELECT * FROM doctors WHERE id = '$doctorid'");
    $row = mysqli_fetch_array($query);
    $appointmenttype = $row['specialisttype'];
    $name = $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname'];

?>