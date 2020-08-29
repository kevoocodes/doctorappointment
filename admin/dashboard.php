
<?php include("../includes/config.php"); ?>
<?php include("session.php") ?>
<?php include("includes/header.php");
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/navbar.php"); ?>


    <h2>Admin Dashboard</h2>


  <div class="row">
      <div class="col-md-3">
          <div class="card bg-danger text-light mb-5">
              <div class="card-header">
              <?php 
              
              $query = mysqli_query($con, "SELECT * FROM users");
              $users = mysqli_num_rows($query);
              
              ?>
              <h1 class="text-light"><?php echo $users; ?></h1>
             
                    <p class="lead">Users</p>
              </div>
              <div class="card-footer">
              <a href="users.php" class="small-box-footer text-light">See all <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="card bg-primary text-light mb-5">
              <div class="card-header">
                <?php
                    $sql = mysqli_query($con, "SELECT * FROM doctors");
                    $doctor = mysqli_num_rows($sql);
                ?>
            
                    <h1 class="text-light"><?php echo $doctor; ?></h1>
                    <p class="lead">Doctors</p>
              </div>
              <div class="card-footer">
              <a href="viewdoctors.php" class="small-box-footer text-light">View All <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="card bg-success text-light mb-5">
              <div class="card-header">
              <?php
                    $sql = mysqli_query($con, "SELECT * FROM appointment");
                    $patients = mysqli_num_rows($sql);
                ?>
            
                    <h1 class="text-light"><?php echo $patients; ?></h1>
                    <p class="lead">Appointment</p>
              </div>
              <div class="card-footer">
              <a href="viewappointment.php" class="small-box-footer text-light">View All <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
      </div>

      <div class="col-md-3">
          <div class="card bg-info text-light mb-5 ">
              <div class="card-header">
              <?php
                    $sql = mysqli_query($con, "SELECT * FROM feedback");
                    $appointment = mysqli_num_rows($sql);
                ?>
            
                    <h1 class="text-light"><?php echo $appointment; ?></h1>
                    <p class="lead">Feedback</p>
              </div>
              <div class="card-footer">
              <a href="#" class="small-box-footer text-light">view all <i class="fas fa-arrow-circle-right text-light"></i></a>
              </div>
          </div>
      </div>
  </div>



<?php include("includes/footer.php"); ?>