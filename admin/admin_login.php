<?php include 'header1.php'; ?>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan='2'><u>Admin Login</u></th>
      </tr>
    </thead>
    <tbody>
      <form method="post" action="admin_authentication.php">
      <tr> <td> E-Mail ID: </td> <td><input type="text" required="required" name="email"></td></tr>
      <tr> <td>Password: </td> <td><input type="password" required="required" name="password"></td></tr>
      <tr> <td>Submit : </td> <td><input type="submit" name="submit"></td></tr>

     
      </form>
      </tbody>
        </table>
      </div>
<?php include 'footer.php'; ?>
