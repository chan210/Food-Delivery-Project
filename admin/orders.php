<?php include 'header.php'; ?>
<?php include('dbconnect.php');?>
<div class="container">
  <center><u><h3>Your Orders</h3></u></center>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Invoice ID</th>
        <th>Date</th>
        <th>Amount</th>
		<th>Tracking</th>
		<th>Driver ID</th>
        <th>View Details</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
	
<?php
$sql = "SELECT * FROM invoice";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td> " . $row["id"]. " </td>
                  <td> " . $row["date"]. " </td>
                  <td> " . $row["amount"]. " </td>
                  <td> " . $row["tracking"]. " </td>
                  <td> " . $row["driver_id"]. " </td>
                  <td><a href='order_detail.php?id=".$row['id']."'>View Details</a></td>
				   <td><a href='order_edit.php?id=".$row['id']."'>Edit</a></td>				  
				   <td><a href='order_delete.php?id=".$row['id']."'>Delete</a></td>
                  </tr>";
    }
} else {
    echo "0 results";
}
?>
</tbody>
  </table>
</div>

<?php include 'footer.php'; ?>
