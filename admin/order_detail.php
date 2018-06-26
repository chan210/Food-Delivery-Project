<?php include 'header.php'; ?>
<?php include('dbconnect.php');?>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
?>

<div class="container">
  <center><h3>Order Details</h3></center>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Invoice ID</th>
        <th>Date</th>
		<th>Tracking</th>
      </tr>
    </thead>
    <tbody>
	
<?php
$sql = "SELECT * FROM invoice where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td> " . $row["id"]. " </td>
                  <td> " . $row["date"]. " </td>
                  <td> " . $row["tracking"]. " </td>
                  </tr>";
    }
} else {
    echo "0 results";
}
?>
</tbody>
  </table>
   

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total Item</th>
        <th>Total Price(Including Tax)</th>

      </tr>
    </thead>
    <tbody>
	
	
<?php

$sql = "SELECT count(*) AS count, sum(price) AS total FROM purchase where invoice_id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                  <td><b>" . $row["count"]. " </b></td>
                  <td><b> $" . $row["total"]. " </b></td>  
                  </tr>";
    }
} else {
    echo "0 results";
}
?>
</tbody>
  </table>



  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name Of Items</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT * FROM purchase where invoice_id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                  <td> " . $row["name"]. " </td>
                  <td> $" . $row["price"]. " </td>  

                  </tr>";
    }
} else {
    echo "<a href='menu.php'><center><h2>Error, Click here to order</h2></center></a> ";
}
}
?>
</tbody>
  </table>
  </div>
<br>
  <?php include 'footer.php'; ?>