<?php
session_start();

if(isset($_SESSION['admin']) && !empty($_SESSION['admin']))
{
}else {
header("location:admin_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Admin Panel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
			
            <li><a href="orders.php">Orders </a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> User <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="user_add.php">Add User</a></li>
                <li><a href="user_list.php">List/Update/Delete User</a></li>
              </ul>
            </li>
			 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Driver <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="driver_add.php">Add Driver</a></li>
                <li><a href="driver_list.php">List/Update/Delete Driver</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Admin <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="admin_add.php">Add Admin</a></li>
                <li><a href="admin_list.php">List/Update/Delete Admin</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Menu <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="menu_add.php">Add Item</a></li>
                <li><a href="menu_list.php">List/Update/Delete Menu</a></li>
              </ul>
            </li>

                  <li><a href="logout.php">Logout</a></li>


              </ul>
            </li>
          </ul>


        </div><!-- /.navbar-collapse -->


      </div><!-- /.container-fluid -->
    </nav>

    <br><br>
