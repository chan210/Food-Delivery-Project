<?php include 'header1.php'; ?>
<?php include('dbconnect.php');?>
<?php
if(isset($_POST["email"], $_POST["pin"]))
    {

     $email = $_POST["email"];
     $secret = $_POST["pin"];

      $sql = "SELECT email, secret FROM driver WHERE email = '".$email."' AND  secret = '".$secret."'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {

            $password=$_POST["password"];


          $sql = "UPDATE driver SET password='$password' where email='".$email."' ";
          if ($conn->query($sql) === TRUE) {
              echo "<center><h1><a href='driver_login.php'> Password Reset successful, Click here to login. </a></center></h1>";
          } else {
              echo "Error updating record: " . $conn->error;
          }
          }
      } else {
          echo "<center><h1><a href='forgot_password.php'> Invalid details, Click here to try again. </a></center></h1>";
      }

}
?>
<?php include 'footer.php'; ?>
