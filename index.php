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
<button name="edit">Edit</button>
</form><?php
$con=mysqli_connect('localhost','root','','smss');
if(!$con){
	die("Connection Failed:" .mysqli_connect_error());
}
if(isset($_GET['submit']))
{
	
	$message = $_GET['m'];
	$uid=$_GET['uid'];
	$run=mysqli_query($con,"INSERT INTO `comments`(`uid`,`message`) VALUES ('$uid','$message')");
}	
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>id</th>
          <th>comment</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $con=mysqli_connect('localhost','root','','smss');
        $result = mysqli_query($con,"SELECT * FROM comments ");
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['uid']}</td>
              <td>{$row['message']}</td> 
            </tr>";
          }
        ?>
      </tbody>
    </table>
</body>
</html>
