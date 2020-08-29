
<?php include("../includes/config.php"); ?>
<?php include("session.php") ?>
<?php include("includes/header.php");
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/navbar.php"); ?>


    <h2>Doctor Professinal</h2>

    <div class="row">
        <div class="col-md-6">

        <table class="table table-bordered table-secondary">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">name</th>
              <th scope="col">Desription</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
       
            <?php
            
                $sql = $con->query("SELECT * FROM appointmenttype");
                $cnt = 1;
                while($row = mysqli_fetch_array($sql)){

                    ?>
                    <tr>
                        <th scope="row"><?php echo $cnt; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><a href= "" class="btn btn-danger ">Delete</a></td>

                    <?php
                    $cnt = $cnt  + 1;
                }
            
            ?>

            </tr>
          </tbody>
        </table>
        </div>

        <div class="col-md-6">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            Add Doctor Professinal
                        </div>
                        <?php
                            $msg = NULL;
                            if(isset($_POST['submit'])){
                                //declare variables
                                $name = $_POST['name'];
                                $description = $_POST['description'];

                                $sql = "INSERT INTO appointmenttype(name,description) VALUES('$name', $description)";
                            
                                $fetchsql = mysqli_query($con,$sql);

                                if($fetchsql){
                                    $msg = "**Doctor Proffessinal Added";
                                }else{
                                    $msg = "Doctor Proffessinal Not added";
                                }

                            }
                        
                        ?>
                        <div class="card-body">
                            <small class="text-danger"><?php echo $msg; ?></small>
                            <form action="" method="post">
                                <div class="form-group">
                                  <label for="">Name</label>
                                  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
                                </div>

                                <div class="form-group">
                                  <label for="">Description</label>
                                  <textarea class="form-control" name="description" id="" rows="3" required></textarea>
                                </div>

                                <button type="submit" name="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>
                    </div>
                </form>
        </div>
    </div>





<?php include("includes/footer.php"); ?>