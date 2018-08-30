<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Medical Details</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="profile">
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="logout.php">Log Out</a></b>
 </div>
	<br><br><br>
	<form method="get" action="medical.pdf"><b><font color="#FFFFFF">Patient details</font></b>
    <button type="submit">.PDF</button>
</form>
	 <br><br>
	 <form method="POST" action="uploadFile" enctype="multipart/form-data">
		 <strong><font color=" #FFFFFF">Upload Patient's details:</font></strong> 
<input type="file" name="file" />
	 </form>
</body>
</html>