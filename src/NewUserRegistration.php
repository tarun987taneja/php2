<?php
include 'dbinfo.php'; 
?>  

<?php
session_start(); 
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['confirmpassword']))  {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$_SESSION['confirmpassword']=$confirmpassword;
	
	if($password == $confirmpassword) {
		$insertStatement = "INSERT INTO user (Username, Password) VALUES ('$username', '$password')";
		$result = mysqli_query ($link, $insertStatement)  or die(mysqli_error($link)); 
		if($result == false) {
			echo 'The query failed.';
			exit();
		} else {
			header('Location: CreateProfile.php');
		}
	} else {
		echo 'password not consistent';
	}
}
?>

<html>
<head>
	<style>
	body {
    background-color: lightblue;
}


	</style>
</head>
<body> 
<center><h1><u>New User Registration</u></h1></center>

<center><form action="" method="post">
<table style="background-color:orange">
<tr >
    <td>Username</td>
    <td><input type="text" name="username" required/></td>
</tr><br>
<tr>
    <td>Password</td>
    <td><input type="text" name="password" required/></td>
</tr>

<tr>
    <td>Confirm Password</td>
    <td><input type="text" name="confirmpassword" required/></td>
</tr>
</table>
<br><br>

<input type="submit" value="Register" style="background-color:yellow"/>
</form>

<form action="UserSummary.php" method="post">
<input type="submit" value="Back" style="background-color:pink"/>
</form></center>

</body>
</html>