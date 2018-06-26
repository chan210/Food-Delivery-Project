<?php include 'header.php'; ?>
<?php include('dbconnect.php');?>
<div class="container">
  <center><u><h3>User's List</h3></u></center>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Contact</th>
		<th>Address</th>
		<th>Zipcode</th>
		<th>City</th>
		<th>Country</th>
        <th>E-Mail</th>
        <th>Secret</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td> " . $row["id"]. " </td>
                  <td> " . $row["firstname"]. " </td>
                  <td> " . $row["middlename"]. " </td>
                  <td> " . $row["lastname"]. " </td>
                  <td> " . $row["contact"]. " </td>
				  <td> " . $row["address"]. " </td>
                  <td> " . $row["zipcode"]. " </td>
                  <td> " . $row["city"]. " </td>
                  <td> " . $row["country"]. " </td>		
                  <td> " . $row["email"]. " </td>
                  <td> " . $row["secret"]. " </td>
                  <td> " . $row["password"]. " </td>
                  <td><a href='user_edit.php?id=".$row['id']."'>Edit</a></td>
                  <td><a href='user_delete.php?id=".$row['id']."'>Delete</a></td>
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
