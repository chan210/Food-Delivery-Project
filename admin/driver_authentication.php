<?php include 'header.php'; ?>
<?php include('dbconnect.php');?>
<?php


if(isset($_POST["email"], $_POST["password"]))
    {

     $email = $_POST["email"];
     $password = $_POST["password"];

      $sql = "SELECT email, password FROM driver WHERE email = '".$email."' AND  password = '".$password."'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
					echo "<center><h1><a href='index.php'> Welcome, Click here to browse the driver Panel. </a></center></h1>";

          $_SESSION['driver'] =$email;


          }
      } else {
          echo "<center><h1><a href='driver_login.php'> Invalid details, Click here to try again. </a></center></h1>";
      }

}
?>
<?php include 'footer.php'; ?>
