<?php include 'header.php'; ?>
<?php
if (isset($_POST['submit']))    
{
echo $name=$_POST["i_name"];
echo $price=$_POST["price"];
}

?>

<?php include 'dbconnect.php'; ?>
<?php

$sql = "INSERT INTO menu (id,name,price)
VALUES ('','$name','$price')";

if (mysqli_query($conn, $sql)) {
    echo "<center> <h2><a href='menu_list.php'> Successfully Added, Click Here To Go To List. </h2> </center></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
<?php include 'footer.php'; ?>
