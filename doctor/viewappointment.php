<?php
    include("../includes/config.php");
?>

<?php include ("session.php"); ?>

<?php include("includes/header.php");
?>

<?php include("includes/sidebar.php"); ?>


<?php include("includes/navbar.php"); ?>

    <h2>View Appointment</h2>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>

            <?php 
                 $appointmenttype = $row['specialisttype'];
                $query = mysqli_query($con, "SELECT * FROM appointment WHERE appointmentid = $appointmenttype");
                $cnt = 1;
                while($row = mysqli_fetch_array($query)) {
                    
        
        ?>
                 <td scope="row"><?php echo $cnt; ?></td>
                <td><?php echo $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname']; ?></td>
                <td><a class="btn btn-info" href="singleappointment.php?id= <?php echo $row['id']; ?>">Details</a></td>
            </tr>
            <?php
        
                 $cnt = $cnt+1; }
            ?>
        </tbody>
    </table>
  


<?php include("includes/footer.php"); ?>