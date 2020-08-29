
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

        $sql = $con->query("SELECT * FROM appointment WHERE id = '$id'");
        $fetchsql = mysqli_fetch_array($sql);
        $appointmentid = $fetchsql['appointmentid'];

        $sqlappointmenttype = $con->query("SELECT * FROM appointmenttype WHERE id = '$appointmentid'");
        $sqlapointmentfetch = mysqli_fetch_array($sqlappointmenttype);
        $appointmentname = $sqlapointmentfetch['name'];
    
    ?>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
        
                <div class="card-body">
                    <h5 class="card-title"><?php echo $fetchsql['firstname'] . " " . $fetchsql['middlename'] . " " . $fetchsql['lastname'];  ?></h5>
                    <p class="card-text"><label for="">Address:</label> <?php echo $fetchsql['address']; ?></p>
                    <p class="card-text"><label for="">Gender:</label> <?php echo $fetchsql['gender']; ?></p>
                    <p class="card-text"><label for="">Date of Birth:</label> <?php echo $fetchsql['DOB']; ?></p>
                    <p class="card-text"><label for="">Phonenumber:</label> <?php echo $fetchsql['phonenumber']; ?></p>
                    <p class="card-text"><label for="">Appointment Type:</label> <?php echo $appointmentname; ?></p>
                    <p class="card-text"><label for="">Date of Appointment:</label> <?php echo $fetchsql['date']; ?></p>
                    <p class="card-text"><label for="">Patient Description:</label> <?php echo $fetchsql['description']; ?></p>

                    
                </div>

                <div class="card-footer">
                    <a href="feedback.php?id= <?php echo $fetchsql['id']; ?>" class="btn btn-info">Feedback</a>
                </div>
              

            </div>
        </div>

        <div class="col-md-3">
            
        </div>
    </div>






<?php include("includes/footer.php"); ?>