<?php include 'header1.php'; ?>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan='2'><u>User Registration</u></th>
      </tr>
    </thead>
    <tbody>
<form method="post" action="user_entry.php">
<tr> <td> First Name: </td> <td><input type="text" required="required" name="firstname"></td></tr>
<tr> <td>Middle Name: </td> <td><input type="text" required="required"  name="middlename"></td></tr>
<tr> <td>Last Name: </td> <td><input type="text" required="required" name="lastname"></td></tr>
<tr> <td>Contact: </td> <td><input type="text" required="required" name="contact"></td></tr>
<tr> <td>Address: </td> <td><input type="text" required="required" name="address"></td></tr>
<tr> <td>Zipcode: </td> <td><input type="text" required="required" name="zipcode"></td></tr>
<tr> <td>E-Mail ID: </td> <td><input type="text" required="required" name="email"></td></tr>
<tr> <td>Secret Word / Pin: </td> <td><input type="text" required="required" name="secret"></td></tr>
<tr> <td>Password: </td> <td><input type="password" required="required" name="z"></td></tr>
<tr> <td>Submit : </td> <td><input type="submit" name="submit"></td></tr>
</form>
</tbody>
  </table>
</div>

<?php include 'footer.php'; ?>
