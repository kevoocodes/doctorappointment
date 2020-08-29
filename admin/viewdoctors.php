
<?php include("../includes/config.php"); ?>
<?php include("session.php") ?>
<?php include("includes/header.php");
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/navbar.php"); ?>


    <h2>All Doctors</h2>


  <div class="row">
      <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Firstname</th>
                  <th scope="col">Middlename</th>
                  <th scope="col">Lastname</th>
                  <th scope="col">Specialist</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               
                <?php
                        $sql = $con->query("SELECT * FROM doctors");

                        $cnt = 1;
                        while($row = mysqli_fetch_array($sql)) {
                                    $doctorspcialist = $row['specialisttype'];

                                    $sqlspecialist = $con->query("SELECT * FROM appointmenttype WHERE id = '$doctorspcialist'");
                                    $fetchspecialist = mysqli_fetch_array($sqlspecialist);
                            ?>
                                 <tr>
                                <td><?php echo $cnt; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['middlename']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $fetchspecialist['name']; ?></td>
                                <td><a href="updatedoctor.php?id= <?php echo $row['id']; ?>" class="btn btn-info">Update</a> <a href="deletedoctor.php?id= <?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Doctors?');">Delete</a></td>
                                </tr>
                            <?php
                            $cnt = $cnt + 1;
                        }
                    
                    
                    ?>
                
              </tbody>
            </table>
      </div>
          
  </div>



<?php include("includes/footer.php"); ?>