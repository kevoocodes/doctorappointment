<?php
    include("../includes/config.php");
?>

<?php include ("session.php"); ?>


<?php


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = mysqli_query($con, "SELECT * FROM appointment WHERE id = '$id'");
        $single = mysqli_fetch_array($sql);
        $appointmentid = $single['id'];
    }


?>

<?php include("includes/header.php");
?>

<?php include("includes/sidebar.php"); ?>


<?php include("includes/navbar.php"); ?>

    <h2>Doctor Dashboard</h2>

    <div class="row">
        <div class="col-md-6">
           <div class="card mb-5">
               <div class="card-header">
                    Patient Appointment
               </div>
               <div class="card-body text-dark">
                    <p>Name: <?php  echo $single['firstname'] . " " . $single['middlename'] . " " . $single['lastname']; ?></p>
                    <p>Address: <?php echo $single['address']; ?></p>
                    <p>Gender: <?php echo $single['gender']; ?></p>
                    <p>Date of Birth: <?php echo $single['DOB']; ?></p>
                    <p>Phonenumber: <?php echo $single['phonenumber']; ?></p>
                    <p>Date of Appointment: <?php echo $single['date']; ?></p>
                    <p>Patient Condition: <?php echo $single['description']; ?></p>
                </div>
           </div>

           <div class="card bg-transparent">
                <div class="card-header bg-info text-light">
                    Feedback Form
                </div>

                <?php
                
                    if(isset($_POST['submit'])) {

                        $doctorid = $_SESSION['id']; //doctor id
                        $time = $_POST['time'];
                        $feedback = mysqli_real_escape_string($con,$_POST['feedback']);


                        $sqlappointment = mysqli_query($con, "SELECT * FROM feedback WHERE appointmentid = '$appointmentid'");
                        
                        if(mysqli_num_rows($sqlappointment) > 0) {
                            echo "<script>alert('This Appointment Answered')</script>";
                        }else{

                            $sql = "INSERT INTO feedback(appointmentid,doctorid,appointmenttime,feedback) VALUES('$appointmentid','$doctorid','$time','$feedback')";
                            $query = mysqli_query($con, $sql);
    
                            if($query){
                                echo "<script>alert('Feedback information sent')</script>";
                            }else{
                                echo "<script>alert('Feedback information not sent')</script>";
                            }

                        }

                      
                        
                        

                    }
                
                
                ?>
                <div class="card-body bg-transparent">
                            <form action="" method="post">
                            <div class="form-group">
                            <label for="">Time of Appointment</label>
                            <input type="time" name="time" id="" class="form-control bg-transparent border-secondary" placeholder="Enter Time of Appointment" aria-describedby="helpId" required>
                            <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>

                            <div class="form-group ">
                                <label for="my-textarea">Feedback</label>
                                <textarea id="my-textarea" class="form-control bg-transparent border-secondary" name="feedback" rows="3" placeholder="Enter Feedback" required></textarea>
                            </div>

                            <button type="submit" name="submit" class="btn btn-info">Submit</button>
                        </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <?php
                    $doctorid = $_SESSION['id'];
                    $sqlfeedback = mysqli_query($con,"SELECT * FROM feedback WHERE appointmentid = '$appointmentid' AND doctorid = '$doctorid'");
                    $fetchfeedback = mysqli_fetch_array($sqlfeedback);
            ?>
              <div class="card">
                  <div class="card-header">
                      Appointment Answered
                  </div>
                  <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text">Your Time of Appointment: <strong class="text-dark"><?php echo $fetchfeedback['appointmenttime']; ?></strong></p>
                      <p class="card-text">Your Feedbackcontent: <strong class="text-dark"><?php echo $fetchfeedback['feedback']; ?></strong></p>
                  </div>
              </div>
        </div>
    </div>


  


<?php include("includes/footer.php"); ?>