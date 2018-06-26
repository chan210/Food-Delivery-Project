<?php include 'header.php'; ?>
<?php include('dbconnect.php'); ?>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];

}

$sql = "SELECT id,tracking FROM invoice where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan='2'><u>Edit Tracking</u></th>
      </tr>
    </thead>
    <tbody>
<form method="post" action="">

<tr> <td>Invoice ID: </td> <td> <?php echo $row['id']; ?></td></tr>
<tr> <td>Tracking: </td> <td><select name="tracking">
  <option value="Ready For Pickup">Ready For Pickup</option>
  <option value="On the Way">On The Way</option>
  <option value="Delivered">Delivered</option>
  <option value="Rejected">Rejected</option>
    <option value="Unable to Deliver">Unable To Deliver</option>
</select></td></tr>

<tr> <td>Submit : </td> <td><input type="submit" name="submit"></td></tr>
</form>
</tbody>
  </table>
</div>
<?php
}
}
?>
<?php if(isset($_POST['submit']))
{
  $tracking=$_POST["tracking"];

$sql = "UPDATE invoice SET tracking='$tracking' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1><a href='index.php'> Updated successful, Click here to go to the list. </a></center></h1>";
} else {
    echo "Error updating record: " . $conn->error;
}

} ?>
<?php include 'footer.php'; ?>
