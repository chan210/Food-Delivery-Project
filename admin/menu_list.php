<?php include 'header.php'; ?>
<?php include('dbconnect.php');?>
<div class="container">
  <center><u><h3>Menu List</h3></u></center>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td> " . $row["id"]. " </td>
                  <td> " . $row["name"]. " </td>
                  <td> $ " . $row["price"]. " </td>
                  <td><a href='menu_edit.php?id=".$row['id']."'>Edit</a></td>
                  <td><a href='menu_delete.php?id=".$row['id']."'>Delete</a></td>
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
