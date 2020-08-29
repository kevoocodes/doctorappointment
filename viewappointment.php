<?php 

include("includes/config.php");
?>

<?php include("session.php"); ?>
<?php include("includes/header.php");
?>


<?php include("includes/sidebar.php"); ?>


<?php include("includes/navbar.php"); ?>

    <h2>View Appointment Feedback</h2>
    <p class="mb-5 text-dark"></p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Middlename</th>
          <th scope="col">Lastname</th>
          <th>Action</th>
        </tr>
        </thead>
      <tbody>
    <?php 
        $userid = $row['id'];
        $sql = $con->query("SELECT * FROM appointment WHERE userid = '$userid'");
        $cnt = 1;
        while($appoitnment = mysqli_fetch_array($sql)) {


            ?>

        
        <tr>
          <th scope="row"><?php echo $cnt; ?></th>
          <td><?php echo $appoitnment['firstname']; ?></td>
          <td><?php echo $appoitnment['middlename']; ?></td>
          <td><?php echo $appoitnment['lastname']; ?></td>
          <td><a href="singleappointment.php?id= <?php echo $appoitnment['id']; ?>" class="btn btn-info text-light">Feedback</a></td>

            <?php
            $cnt = $cnt + 1;
        }
        
    
    ?>

 
     
        </tr>
      </tbody>
    </table>




<?php include("includes/footer.php"); ?>




<!-- 
    Developed by: @kevoocodes
 -->