<?php
include 'dbinfo.php'; 
?>  

<html>
<body style="background-color:#E3CCFF">
<center><h1><u><i><b>Login Page</b></u></i></h1></center>

<?php
//always start the session before anything else!!!!!! 
session_start(); 

if(isset($_POST['username']) and isset($_POST['password']))  { //check null
	$username = $_POST['username']; // text field for username 
	$password = $_POST['password']; // text field for password
	
// store session data
$_SESSION['username']=$username;

//connect to the db 

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

         //Our SQL Query
           $sql_query = "Select U.Username From user AS U, staff AS S Where U.Username = '$username' AND U.Password = '$password' AND U.Username = S.Username";  

         //Run our sql query
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
			if($result == false)
				{
				echo 'The query failed.';
				exit();
			}
			if(mysqli_num_rows($result) == 1){ 
			//the username and password matches the database 
			//move them to the page to which they need to go 
				header('Location: AdminSummary.php');	
				break;
			//Our SQL Query
			}
			
           $sql_query = "Select Username From user Where Username = '$username' AND Password = '$password'";  

            //Run our sql query
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
			if($result == false)
				{
				echo 'The query failed.';
				exit();
			}

			//this is where the actual verification happens 
			if(mysqli_num_rows($result) == 1){ 
			//the username and password matches the database 
			//move them to the page to which they need to go 
				header('Location: UserSummary.php');
			   
			}else{ 
			$err = 'Incorrect username or password' ; 
			} 
			//then just above your login form or where ever you want the error to be displayed you just put in 
			echo "$err";
    } 
	
?>	
<center>
<form action="" method="post">
<table>
<tr>
    <td>Username</td>
    <td><input type="text" name="username"  style="background-color:pink ; color:blue" required/></td>
</tr><br>
<tr>
    <td>Password</td>
    <td><input type="text" name="password" style="background-color:pink ; color:blue" required/></td>
</tr>
</table>
<br>
<input type="Submit" value="Login" style="background-color:yellow ; color:red"/>
</form>
<form action="NewUserRegistration.php" method="post">
<input type="Submit" value="Create Account" style="background-color:yellow ; color:red"/>
</form><br><br>


<mark> New user , must create his account first ,otherwise he cannot login.</mark> 
 </center>  
</body>
</html>