
 <?php 

    if(!isset($_SESSION['username'])) {          
        header("location: index.php");
    } 

    $username = $_SESSION['username'];
    // $query = mysqli_query($con, "SELECT * FROM admin");
    // $row = mysqli_fetch_array($query);
    // $username = $row['username'];

 ?>