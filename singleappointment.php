<?php 

include("includes/config.php");
?>

<?php include("session.php"); ?>
<?php include("includes/header.php");
?>


<?php include("includes/sidebar.php"); ?>


<?php include("includes/navbar.php"); ?>

    <h2>Patient Dashboard</h2>
    <p class="mb-5 text-dark">

    <?php
    
        if(isset($_GET['id'])){
            $appointmentid = $_GET['id'];

            $sql = $con->query("SELECT * FROM feedback WHERE appointmentid = '$appointmentid'");
            $feedback = mysqli_fetch_array($sql);
            $doctorid = $feedback['doctorid'];

            $sqldoctor = $con->query("SELECT * FROM doctors WHERE id = '$doctorid'");
            $doctor = mysqli_fetch_array($sqldoctor);

            // if((mysqli_num_rows($sql) == 0)){
            //     echo "<p class='lead text-secondary'>No feedback for this Appointment</p>";
            // }else{
            //     echo ""
            // }
        }
    
    ?>

<?php echo" <p class='lead'>Doctor Name: " .  $doctor['firstname'] . " " . $doctor['middlename'] . " " . $doctor['lastname']; " </p>" ?>
        <p class="lead">Time of Meeting: <?php echo $feedback['appointmenttime']; ?></p>
        <p class="lead">Feedback: <?php echo $feedback['feedback']; ?></p>

      




<?php include("includes/footer.php"); ?>




<!-- 
    Developed by: @kevoocodes
 -->