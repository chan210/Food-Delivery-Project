<?php include 'header.php'; ?>
<?php include('dbconnect.php');?>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$se=$_SESSION['user_id'];
$sql = "SELECT id from invoice";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      "<tr>
                  <td><b>" . $last_id=$row["id"]. " </b></td>
                  </tr>";
    }
} 
error_reporting(E_ALL ^ E_NOTICE);
$last_id=$last_id+1;


$sql = "SELECT * FROM menu where name='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$name=$row['name'];
		$price=$row['price'];
	}
$sql = "INSERT INTO temp (name,price,user_id,invoice_id)VALUES ('$id','$price','$se','$last_id')";
if (mysqli_query($conn, $sql)) {
	
} 
}}
?>
<div class="container">
  <center><h3>Items in Cart</h3></center>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
<?php
$se=$_SESSION['user_id'];
$sql = "SELECT * FROM temp where user_id='$se'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                  <td> " . $row["name"]. " </td>
                  <td> $" . $row["price"]. " </td>  
				   <td><a href='cart_delete.php?id=".$row['id']."'>Delete</a></td>
                  </tr>";
    }
} else {
    echo "<a href='menu.php'><center><h2>Your cart is empty, Click here to order</h2></center></a> ";
}
?>
</tbody>
  </table>
  </div>
  <div class="container">

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total Item's</th>
        <th>Total Price(Including Tax)</th>
		 <th>Checkout</th>

      </tr>
    </thead>
    <tbody>
	
	
<?php

$se=$_SESSION['user_id'];
$sql = "SELECT count(*) AS count, sum(price) AS total FROM temp where user_id='$se'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                  <td><b>" . $row["count"]. " </b></td>
                  <td><b> $" . $row["total"]. " </b></td>  
				   <td><a href='orderplace.php?id=".$se."'><b>Checkout</b></a></td>
                  </tr>";
    }
} else {
    echo "0 results";
}
?>
</tbody>
  </table>
  <br><br>
<a href='menu.php'><center><h2>Click here to order more from our menu.</h2></center></a>
</div>
<?php include 'footer.php'; ?>