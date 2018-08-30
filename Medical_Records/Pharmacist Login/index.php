<?php
include('login.php'); 
if(isset($_SESSION['login_user']))
{
header("location: profile.php"); 
}
?> 

<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist Login</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1><center><font color="#16017C">$$$ Pharmacist's Login $$$</font></center></h1>
	<br><br><br><br><br>
 <div id="login">
  <h2>Login Form</h2>
  <form action="" method="post">
   <label>UserName :</label>
   <input id="name" name="username" placeholder="username" type="text">
   <label>Password :</label>
   <input id="password" name="password" placeholder="**********" type="password"><br><br>
   <input name="submit" type="submit" value=" Login ">
   <span><?php echo $error; ?></span>
 </div>
</body>
</html>