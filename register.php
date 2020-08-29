<?php
include("includes/config.php");  //connect to the database

$message = NULL;


if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($con, $sql_u);
    $res_e = mysqli_query($con, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
      $message = "**Sorry... username already taken"; 	
    }else if(mysqli_num_rows($res_e) > 0){
      $message = "**Sorry... email already taken"; 	
    }else{
         $query = "INSERT INTO users (username, email, password) 
                  VALUES ('$username', '$email', '$password')";
         $results = mysqli_query($con, $query);
         if($results){
             $username = $_SESSION['username'];
             header('location: dashboard.php');
         }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Kelvin Aron Msindai" content="Fullstack Developer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment</title>
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="section">

        <h1 class="display-4 text-light text-center mt-5">Doctor Appintment</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4 mt-5">
                     <div class="card bg-transparent">
                         <div class="card-header bg-primary text-light">
                                User Login
                         </div>
                         <div class="card-body">
                            <form action=""method="POST">
                                    <small class="text-danger">
                                        <?php echo $message; ?>
                                    </small>
                                <div class="form-group">
                                    <label for="studentID" class="text-light">Email</label>
                                    <input type="text" name="email" value="" class="form-control bg-transparent  text-secondary btn-outline-primary" placeholder="Type Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="studentID" class="text-light">Username</label>
                                    <input type="text" name="username" value="" class="form-control bg-transparent  text-secondary btn-outline-primary" placeholder="Type Username" required>
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="text-light">Password</label>
                                    <input type="password" name="password" class="form-control bg-transparent text-secondary btn-outline-primary" placeholder="****" required>
                                </div>

                                <input type="submit" name="register" value="Register" class="btn btn-danger col-12 mb-3">
                                <a href="login.php" class="text-light ">Have Account?Please Login</a>
                            </form>
                         </div>
                     </div>
                </div>
                <div class="col-md-4"> 
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<!-- 
    DEVELOPED BY: @kevoocodes
 -->