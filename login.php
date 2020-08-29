
<?php
include("includes/config.php");

$username = "";
$password = "";
$message = NULL;
if(isset($_POST['login'])) {
    //declare variables
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    
    if(mysqli_num_rows($query) > 0) {
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
    }else{
       $message = "**User username and password is incorrect";
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
                                    <label for="studentID" class="text-light">Username</label>
                                    <input type="text" name="username" value="" class="form-control bg-transparent  text-secondary btn-outline-primary" placeholder="Type Username">
                                </div>

                                <div class="form-group ">
                                    <label for="firstname" class="text-light">Password</label>
                                    <input type="password" name="password" class="form-control bg-transparent text-secondary btn-outline-primary" placeholder="****">
                                </div>

                                <input type="submit" name="login" value="Login" class="btn btn-danger col-12 mb-3">
                                <a href="register.php" class="text-light ">Don't have Account?Please Signup</a>
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