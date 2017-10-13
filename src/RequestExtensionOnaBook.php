<?php
include 'dbinfo.php'; 
?>  
<?php
//always start the session before anything else!!!!!! 
session_start(); 
//connect to the db 
$username = $_SESSION['username'];
?> 
<html>
<body style ="background-color:yellow">
<h1><u>Request Extension On a Book</u></h1>

<form action="ExtensionResult.php" method="post">
<table>
<tr>
    <td>Enter your issue ID</td>
    <td><input type="text" name="issueid" required/></td>
</tr>
</table><br>
<input type="submit" value="submit" style="background-color:red"/>

</form><br>
<form action="UserSummary.php" method="post">
<input type="submit" value="Back" style="background-color:red"/>
</form>
</body>
</html>