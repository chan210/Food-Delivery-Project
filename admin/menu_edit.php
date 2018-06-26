<?php include 'header.php'; ?>
<?php include('dbconnect.php'); ?>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];

}

$sql = "SELECT * FROM menu where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan='2'><u>Edit Item in Menu</u></th>
      </tr>
    </thead>
    <tbody>
<form method="post" action="">
<tr> <td>Name </td> <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td></tr>
<tr> <td>price </td> <td><input type="text" name="price" value="<?php echo $row['price']; ?>" ></td></tr>
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
  $name=$_POST["name"];
  $price=$_POST["price"];



$sql = "UPDATE menu SET name='$name', price='$price' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1><a href='menu_list.php'> Updated successful, Click here to go to the list. </a></center></h1>";
} else {
    echo "Error updating Menu: " . $conn->error;
}

} ?>
<?php include 'footer.php'; ?>
