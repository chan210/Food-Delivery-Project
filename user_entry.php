<?php include 'header1.php'; ?>
<?php
$firstname=$_POST["firstname"];
$middlename=$_POST["middlename"];
$lastname=$_POST["lastname"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$secret=$_POST["secret"];
$z=$_POST["z"];
$address=$_POST["address"];
$zipcode=$_POST["zipcode"];
?>

<?php include 'dbconnect.php'; ?>
<?php

$sql = "INSERT INTO user (id , firstname, middlename,lastname,contact,email,secret,password,address,zipcode)
VALUES ('','$firstname','$middlename','$lastname','$contact','$email','$secret','$z','$address','$zipcode')";

if (mysqli_query($conn, $sql)) {
    echo "<center> <h2><a href='user_login.php'> Thank You For Registering, Click Here To Login. </h2> </center></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
<?php include 'footer.php'; ?>
