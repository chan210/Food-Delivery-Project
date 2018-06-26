<?php include 'header.php'; ?>
<?php include('dbconnect.php');?>
<div class="container">
  <center><u><h3>Order List</h3></u></center>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Invoice ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Zipcode</th>
        <th>City</th>
        <th>Amount</th>		
		<th>Tracking</th>
        <th>Update Tracking</th>
      </tr>
    </thead>
    <tbody>
<?php
$se=$_SESSION['driver_id'];
$sql = "SELECT invoice.id AS id,user.firstname AS firstname,user.lastname AS lastname,user.contact AS contact,user.address AS address,user.zipcode AS zipcode,user.city AS city,invoice.amount AS amount, invoice.tracking AS tracking FROM user INNER JOIN invoice ON user.id=invoice.user_id where driver_id='$se'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td> " . $row["id"]. " </td>
                  <td> " . $row["firstname"]. " </td>
                  <td> " . $row["lastname"]. " </td>
                  <td> " . $row["contact"]. " </td>
                  <td> " . $row["address"]. " </td>
                  <td> " . $row["zipcode"]. " </td>				 
                  <td> " . $row["city"]. " </td>	
                  <td> " . $row["amount"]. " </td>					  
                  <td> " . $row["tracking"]. " </td>
                  <td><a href='driver_edit.php?id=".$row['id']."'>Update Tracking</a></td>
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


<?php include 'footer.php'; ?>
