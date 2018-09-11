<!DOCTYPE HTML>
<html>
<head>
<title>Comment</title>
</head>
<body>
<h1>Type a Comment</h1>
<br>
<form method="get" action="index.php">
<table>
	<tr>
		<th>Enter Id:</th>
		<td><input type="number" name='uid'></td>
	</tr>
	<tr>
		<th>Comment:</th>
		<td><textarea name="m" rows="5" cols="40"></textarea></td>
	</tr>
</table>
<button name="submit" type="submit">Comment</button>
</form>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','smss');
if(isset($_GET['submit']))
{
	
	$message = $_GET['m'];
	$uid=$_GET['uid'];
$qry="INSERT INTO `comments`(`uid`,`message`) VALUES ('$uid','$message')";
$run=mysqli_query($con,$qry);
}
?>