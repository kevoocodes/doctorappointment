
<?php include("../includes/config.php"); ?>

<?php 

$message = NULL;
if(isset($_POST['submit'])) {
    $doctorid = $_GET['id'];

    //declare variables
    $firstname = $_POST['firstname'];
    $firstname = mysqli_real_escape_string($con, $firstname);
    

    $middlename = $_POST['middlename'];
    $middlename = mysqli_real_escape_string($con, $middlename);

    $lastname = $_POST['lastname'];
    $lastname = mysqli_real_escape_string($con, $lastname);

    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con, $email);

    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con, $address);

    $specialisttype = $_POST['specialist'];
  

    $password = md5($_POST['password']);
    $password = mysqli_real_escape_string($con, $password);

    $phonenumber = $_POST['phonenumber'];
    $phonenumber = mysqli_real_escape_string($con, $phonenumber);

    if(empty($firstname) || empty($middlename) || empty($lastname) || empty($email) || empty($address) || empty($password  || empty($phonenumber))) {
          echo "<script>alert('Fill the blank')</script>";
    }else {
        // $sql = "INSERT INTO doctors(firstname,middlename,lastname,specialisttype,email,password,address,phonenumber) VALUES('$firstname', '$middlename', '$lastname', '$specialisttype','$email','$password','$address','$phonenumber')";
        $sql = "UPDATE doctors SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname',specialisttype = '$specialisttype',email = '$email',address = '$address', phonenumber = '$phonenumber' WHERE id = '$doctorid'";
        $query = mysqli_query($con,$sql);
        if($query){
            // echo "<script>alert('Doctor added')</script>";
            header("location: viewdoctors.php");
        }
    }

}



?>
<?php include("session.php") ?>
<?php include("includes/header.php");
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/navbar.php"); ?>


    <h2>Update Doctors</h2>


  <div class="row">
        <?php
            if(isset($_GET['id'])) {
                $doctorid = $_GET['id'];
                // echo $doctorid;

                $sqldoctor = $con->query("SELECT * FROM doctors WHERE id = '$doctorid'");
                $doctorfetch = mysqli_fetch_array($sqldoctor);
                $specialistid = $doctorfetch['specialisttype'];
            }
        
        ?>


<div class="col-md-9">
          <div class="card bg-transparent border-secondary text-dark mb-5">
                <div class="card-body">
                    <form action="" method="post">
                    <div class="form-group">
                        <label for="my-input">First Name</label>
                        <input id="my-input" class="form-control bg-transparent border-secondary" value="<?php echo $doctorfetch['firstname']; ?>" type="text" name="firstname">
                    </div>

                    <div class="form-group">
                        <label for="my-input">Middle Name</label>
                        <input id="my-input" class="form-control bg-transparent border-secondary" type="text" value="<?php echo $doctorfetch['middlename']; ?>" name="middlename">
                    </div>

                    <div class="form-group">
                        <label for="my-input">Lastname</label>
                        <input id="my-input" class="form-control bg-transparent border-secondary" type="text" value="<?php echo $doctorfetch['lastname']; ?>" name="lastname">
                    </div>

                    <div class="form-group">
                        <label for="my-select">Specialist</label>
                        <select id="my-select" class="form-control bg-transparent border-secondary" name="specialist">
                                  
                            <?php
                            
                                $sql = mysqli_query($con, "SELECT * FROM appointmenttype WHERE id = '$specialistid'");
                                while($row = mysqli_fetch_array($sql)) {
                                    
                                    // $name = $row['name'];
                                    $specialistid =  $row['id'];
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php
                                }
                            ?>

                            ?>
                            
                           
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="my-input">Email</label>
                        <input id="my-input" class="form-control bg-transparent border-secondary" value="<?php echo $doctorfetch['email']; ?>" type="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="my-input">Address</label>
                        <input id="my-input" class="form-control bg-transparent border-secondary" value="<?php echo $doctorfetch['address']; ?>" type="text" name="address">
                    </div>

                    <div class="form-group">
                        <label for="my-input">Phonenumber</label>
                        <input id="my-input" class="form-control bg-transparent border-secondary" value="<?php echo $doctorfetch['phonenumber']; ?>" type="text" name="phonenumber">
                    </div>

                    
                    <button type="submit" name="submit" class="btn btn-info">Submit</button>
                    </form>
                    
                </div>
          </div>
      </div>

      

      <div class="col-md-3">

      </div>


  </div>



<?php include("includes/footer.php"); ?>