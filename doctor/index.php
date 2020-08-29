
<?php 
include ("../includes/config.php"); //connect to the database


if(isset($_POST['login']))
						{
							$email=$_POST['email']; 
							$password=md5($_POST['password']);
						{
							$result = mysqli_query($con,"SELECT * FROM doctors WHERE email = '$email' and password='$password'");
							$count = mysqli_num_rows($result);				
								if ($count == 0) 
									{
									echo "<script>alert('Please check your email and password!'); window.location='index.php'</script>";
									} 
								else if ($count > 0)
									{
                                        $row = mysqli_fetch_array($result);
                                        $doctorid = $row['id'];
										$_SESSION['id'] = $doctorid;
										header("location:dashboard.php");
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

        <h1 class="display-4 text-light text-center mt-5">Doctor Appontment</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4 mt-5">
                     <div class="card bg-transparent">
                         <div class="card-header bg-primary text-light">
                                Doctor Login
                         </div>
                         <div class="card-body">
                         <small class="text-danger">
                                               
                                    </small>
                            <form action=""method="POST">
                                <div class="form-group">
                                    <label for="studentID" class="text-light">Email</label>
                                    <input type="text" name="email"  value="" class="form-control bg-transparent  text-secondary btn-outline-primary" placeholder="Type Doctor Email">
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="text-light">Password</label>
                                    <input type="password" name="password" class="form-control bg-transparent text-secondary btn-outline-primary" placeholder="****">
                                </div>

                                <input type="submit" value="Login" name="login" class="btn btn-danger col-12">
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