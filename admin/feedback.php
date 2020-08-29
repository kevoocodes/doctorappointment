<?php include("../includes/config.php"); ?>
<?php include("session.php") ?>
<?php include("includes/header.php");
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/navbar.php"); ?>


    <!-- <h2>Single Appointment</h2> -->

    <?php
        if(isset($_GET['id']));
        $id = $_GET['id'];
        // echo $id;

        $sqlfeedback = $con->query("SELECT * FROM feedback WHERE appointmentid = '$id'");
        $fetchfeedback = mysqli_fetch_array($sqlfeedback);
        $appointmentid = $fetchfeedback['appointmentid'];
        $doctorid = $fetchfeedback['doctorid'];

        $sqldoctor = $con->query("SELECT * FROM doctors WHERE id = '$doctorid'");
        $doctorfetch = mysqli_fetch_array($sqldoctor);
        $doctorname = $doctorfetch['firstname'] . " " . $doctorfetch['middlename'] . " " . $doctorfetch['lastname'];

        $sqlappointmenttype = $con->query("SELECT * FROM appointmenttype WHERE id = '$appointmentid'");
        $fetchappointmenttype = mysqli_fetch_assoc($sqlappointmenttype); 
    
    ?>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
        
                <div class="card-body">
                 
                    <p class="card-text"><label for="">Doctor Name:  </label> <?php echo $doctorname; ?></p>
                    <p class="card-text"><label for="">Appointment Date:  </label> <?php echo $fetchfeedback['appointmenttime']; ?></p>
                    <p class="card-text"><label for="">Doctor Description:  </label> <?php echo $fetchfeedback['feedback']; ?></p>

                    
                </div>

        
              

            </div>
        </div>

        <div class="col-md-3">
            
        </div>
    </div>