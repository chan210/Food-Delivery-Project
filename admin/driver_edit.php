<?php include 'header.php'; ?>
<?php include('dbconnect.php'); ?>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];

}

$sql = "SELECT * FROM driver where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan='2'><u>Edit driver</u></th>
      </tr>
    </thead>
    <tbody>
<form method="post" action="">
<tr> <td> First Name: </td> <td><input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"></td></tr>
<tr> <td>Middle Name: </td> <td><input type="text" name="middlename" value="<?php echo $row['middlename']; ?>" ></td></tr>
<tr> <td>Last Name: </td> <td><input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" ></td></tr>
<tr> <td>Contact: </td> <td><input type="text" name="contact" value="<?php echo $row['contact']; ?>" ></td></tr>
<tr> <td>E-Mail ID: </td> <td><input type="text" name="email" value="<?php echo $row['email']; ?>" ></td></tr>
<tr> <td>Secret Word / Pin: </td> <td><input type="text" name="secret" value="<?php echo $row['secret']; ?>" ></td></tr>
<tr> <td>Password: </td> <td><input type="password" name="z" value="<?php echo $row['password']; ?>" ></td></tr>
<tr> <td>Submit : </td> <td><input type="submit" name="submit"></td></tr>

</form>
</tbody>
  </table>
</div>
<?php
}
}
?>
<?php if(isset($_POST['submit']))
{
  $firstname=$_POST["firstname"];
  $middlename=$_POST["middlename"];
  $lastname=$_POST["lastname"];
  $contact=$_POST["contact"];
  $email=$_POST["email"];
  $secret=$_POST["secret"];
  $z=$_POST["z"];

$sql = "UPDATE driver SET firstname='$firstname', middlename='$middlename', lastname='$lastname', contact='$contact', email='$email', secret='$secret', password='$z'WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1><a href='driver_list.php'> Updated successful, Click here to go to the list. </a></center></h1>";
} else {
    echo "Error updating record: " . $conn->error;
}

} ?>
<?php include 'footer.php'; ?>
