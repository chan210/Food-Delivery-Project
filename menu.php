<?php include 'header.php'; ?>
<?php include('dbconnect.php');?>
<div class="container">
  <center><u><h3>On our Menu</h3></u></center>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
		<th>Cart</th>

      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                  <td> " . $row["name"]. " </td>
                  <td> $" . $row["price"]. " </td>  
				    <td><a href='cart.php?id=".$row['name']."'>Add To Cart</a></td>
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
