<?php include 'header.php'; ?>
<?php include('dbconnect.php');?>
<?php


if(isset($_POST["email"], $_POST["password"]))
    {

     $email = $_POST["email"];
     $password = $_POST["password"];

      $sql = "SELECT id,email, password FROM driver WHERE email = '".$email."' AND  password = '".$password."'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
					echo "<center><h1><a href='index.php'> Welcome, Click here to proceed. </a></center></h1>";
$id=$row['id'];
          $_SESSION['driver_id']=$id;


          }
      } else {
          echo "<center><h1><a href='driver_login.php'> Invalid details, Click here to try again. </a></center></h1>";
      }

}
?>
<?php include 'footer.php'; ?>
