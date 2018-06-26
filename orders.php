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
        <th>View Details</th>
      </tr>
    </thead>
    <tbody>
	
<?php
$se=$_SESSION['user_id'];
$sql = "SELECT * FROM invoice where user_id='$se'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td> " . $row["id"]. " </td>
                  <td> " . $row["date"]. " </td>
                  <td> " . $row["amount"]. " </td>
                  <td> " . $row["tracking"]. " </td>

                  <td><a href='order_detail.php?id=".$row['id']."'>View Details</a></td>
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
