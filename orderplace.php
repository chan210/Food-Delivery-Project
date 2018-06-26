<?php include 'header.php'; ?>
<?php include('dbconnect.php');?>

<?php
if(isset($_GET['id']))
{
$se=$_SESSION['user_id'];
$id=$_GET['id'];
$sql = "SELECT sum(price) As price,invoice_id FROM temp where user_id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$invoice_id=$row['invoice_id'];
		$amount=$row['price'];
	}
$sql = "INSERT INTO invoice(id,amount,date,user_id) VALUES ('$invoice_id','$amount',curdate(),$id)";
if (mysqli_query($conn, $sql)) {
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	}
}
$sql = "INSERT INTO purchase (name,price,user_id,invoice_id)
SELECT name,price,user_id,invoice_id FROM temp";
if (mysqli_query($conn, $sql)) {
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	}
	$sql = "DELETE FROM temp where user_id='$se'";
if (mysqli_query($conn, $sql)) {
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	}
}



?>
<a href='orders.php'><center><h1> Thank you for placing your order. <br>Kindly Pay using cash or credit/debit card on delivery. <br>Click here to go to your order list</h1></center></a>
<?php include 'footer.php'; ?>