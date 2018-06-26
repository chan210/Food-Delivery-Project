<?php include 'header.php'; ?>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan='2'><u>Menu</u></th>
      </tr>
    </thead>
    <tbody>
<form method="post" action="">

<tr> <td>Name : </td> <td><input type="text" required="required"  name="i_name"></td></tr>
<tr> <td>Price: </td> <td><input type="text" required="required"  name="price"></td></tr>
<tr> <td>Submit : </td> <td><input type="submit" name="submit"></td></tr>
</form>
</tbody>
  </table>
</div>
<?php include 'dbconnect.php'; ?>
<?php
if (isset($_POST['submit']))    
{
$name=$_POST["i_name"];
$price=$_POST["price"];


$sql = "INSERT INTO menu (id,name,price)
VALUES ('','$name','$price')";

if (mysqli_query($conn, $sql)) {
    echo "<center> <h2><a href='menu_list.php'> Successfully Added, Click Here To Go To List. </h2> </center></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
<?php include 'footer.php'; ?>
