<?php 

include("includes/config.php");
?>


<?php include("session.php"); ?>

<?php 

$message = NULL;
if(isset($_POST['submit'])) {
    //declare variables
    $userid = $row['id'];
    $firstname = $_POST['firstname'];
    $firstname = mysqli_real_escape_string($con, $firstname);
    

    $middlename = $_POST['middlename'];
    $middlename = mysqli_real_escape_string($con, $middlename);

    $lastname = $_POST['lastname'];
    $lastname = mysqli_real_escape_string($con, $lastname);

    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con, $address);

    $gender = $_POST['gender'];
  

    $date = $_POST['date'];

    $phonenumber = $_POST['phonenumber'];

    $specialist = $_POST['specialist'];

    $dateappointment = $_POST['dateappointment'];

    $condition = $_POST['condition'];

    if(empty($firstname) || empty($middlename) || empty($lastname) ||  empty($address) || empty($gender) || empty($date)  || empty($phonenumber) || empty($condition)) {
          echo "<script>alert('Fill the blank')</script>";
    }else {
        $sql = "INSERT INTO appointment(userid,firstname,middlename,lastname,address,gender,DOB,phonenumber,appointmentid,date,description) VALUES('$userid','$firstname', '$middlename', '$lastname', '$address','$gender','$date','$phonenumber','$specialist','$dateappointment','$condition')";
        $query = mysqli_query($con,$sql);
        if($query){
             echo "<script>alert('Patient Data Sent')</script>";
        }
    }

}



?>

<?php include("includes/header.php");
?>


<?php include("includes/sidebar.php"); ?>


<?php include("includes/navbar.php"); ?>

    <h2>Appointment Form</h2>
    <p class="mb-5 text-dark"></p>

    <div class="row">
      <div class="col-md-9">
          <div class="card bg-transparent border-secondary text-dark mb-5">
                        <div class="card-header">
                            Patient Infomation
                        </div>
                <div class="card-body">
                    <form action="" method="post">
                    <div class="form-row mb-5">
                            <div class="col">
                            <label for="">Firstname</label>
                            <input type="text" name="firstname" class="form-control bg-transparent border-secondary" placeholder="" required>
                            </div>
                            <div class="col">
                            <label for="">Middlename</label>
                            <input type="text" name="middlename" class="form-control bg-transparent border-secondary" placeholder="">
                            </div>

                            <div class="col">
                            <label for="">Lastname</label>
                            <input type="text" name="lastname" class="form-control bg-transparent border-secondary" placeholder="">
                            </div>
                    </div>

                    <div class="form-row mb-5">
                            <div class="col">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control bg-transparent border-secondary" placeholder="" required>
                            </div>
                            <div class="col">
                            <label for="">Gender</label>
                                    <select id="my-select" class="form-control  bg-transparent" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                    </div>
                            <div class="form-row">
                            <div class="col">
                                <label for="">Dirt of Birth</label>
                                <input type="date" name="date" class="form-control bg-transparent border-secondary" placeholder="" required>
                            </div>
                            <div class="col">
                                <label for="">Phonenumber</label>
                                <input type="text" name="phonenumber" class="form-control bg-transparent border-secondary" placeholder="">
                            </div>

                    </div>

                    </div>

                 
                            
                    
                    
                    
                </div>


                <div class="card bg-transparent border-secondary text-dark mb-5">
                    
                        <div class="card-header">
                            Appointment Infomation
                        </div>
            
                <div class="card-body">
                   

                    <div class="form-group">
                        <label for="my-select">Specialist</label>
                        <select id="my-select" class="form-control bg-transparent border-secondary" name="specialist">
                                    <option value="">Choose specialist</option>
                            <?php
                            
                                $sql = mysqli_query($con, "SELECT * FROM appointmenttype");
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
                        <label for="my-input">Date of Appointment</label>
                        <input id="my-input" class="form-control bg-transparent border-secondary" type="date" name="dateappointment">
                    </div>

                   <div class="form-group">
                       <label for="my-textarea">Patient Condition</label>
                       <textarea id="my-textarea" class="form-control bg-transparent border-secondary" name="condition" rows="3"></textarea>
                   </div>



                    
                   
                    
                </div>
          </div>

                <button type="submit" name="submit" class="btn btn-info">Submit</button>
                    </form>

                
          </div>
      </div>

      

      <div class="col-md-3">

      </div>
  </div>








<?php include("includes/footer.php"); ?>


<!-- 
    Developed by: @kevoocodes
 -->