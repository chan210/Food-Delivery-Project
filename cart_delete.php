<?php include 'header.php'; ?>
<?php
include('dbconnect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql = "DELETE FROM temp WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<center> <h2><a href='cart.php'> Delete successful, Click here to go to Cart. </a></h2></center>";
} else {
    echo "Error deleting record: " . $conn->error;
}

}
?>
<?php include 'footer.php'; ?>
