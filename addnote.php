<!DOCTYPE HTML>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1 align="center">Notes</h1>
	<br>
	<form method="post" align="center">
		
				<center><label>Note Id</label>
				<input type="number" name="notid" placeholder="Enter your note id">
				<br>
				<br>
				<label>User Id</label>	
				<input type="number" name="useid" placeholder="Enter your user id">
				<br>
				<br>
				<center><lable>Note Name</lable>
				<input type="text" name='notename' placeholder="Enter note name">
				</center>
				<br>
				<textarea name="m" rows="20" cols="40" placeholder="content"></textarea>
			<center><button name="submit" type="submit">Save</button></center>
	</form>
	<h3 align="center"><a href="index.php">Back</a></h3>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','bvm');
if(isset($_POST['submit']))
{
	$notid=$_POST['notid'];
	$useid = $_POST['useid'];
	$name=$_POST['notename'];	
	$note = $_POST['m'];
$qry="INSERT INTO `note`(`noteid`,`userid`, `notename`, `note`) VALUES ('$notid','$useid','$name','$note')";
$run=mysqli_query($con,$qry);
}
?>
