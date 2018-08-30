<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Pharmacist Details</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="profile">
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="logout.php">Log Out</a></b>
	</div>
	<br><br><br>
	<form method="get" action="www.sdcep.org.uk/wp-content/uploads/2013/03/Patients+Personal+Details+Form+1.pdf"><b>Patient details</b>
    <button type="submit">.PDF</button>
</form>
	 <br><br>
	 <form method="POST" action="uploadFile" enctype="multipart/form-data">
		 <strong><font color=" #110C51">Upload Patient's details:</font></strong> 
<input type="file" name="file" />
	 </form>
</body>
</html>