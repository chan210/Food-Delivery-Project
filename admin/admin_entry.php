<?php include 'header.php'; ?>
<?php
$firstname=$_POST["firstname"];
$middlename=$_POST["middlename"];
$lastname=$_POST["lastname"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$secret=$_POST["secret"];
$z=$_POST["z"];

?>

<?php include 'dbconnect.php'; ?>
<?php

$sql = "INSERT INTO admin (id , firstname, middlename,lastname,contact,email,secret,password)
VALUES ('','$firstname','$middlename','$lastname','$contact','$email','$secret','$z')";

if (mysqli_query($conn, $sql)) {
    echo "<center> <h2><a href='admin_list.php'> Thank You For Registering, Click Here To Go To List. </h2> </center></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
<?php include 'footer.php'; ?>
