
<?php include("../includes/config.php"); ?>
<?php include("session.php") ?>
<?php include("includes/header.php");
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/navbar.php"); ?>


    <h2>All Users</h2>


  <div class="row">
      <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                </tr>
              </thead>
              <tbody>
               
                <?php
                        $sql = $con->query("SELECT * FROM users ");

                        $cnt = 1;
                        while($row = mysqli_fetch_array($sql)) {
                            ?>
                                 <tr>
                                <td><?php echo $cnt; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
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