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
<body style="background-color:skyblue">
<h1><b><i><u><mark>Future Hold Request for a Book</mark></b></i></u></h1><br>

<form action="FutureHoldRequestResult.php" method="post">
<table>
<tr>
    <u><td>ISBN</td></u>
    <td><input type="text" name="isbn" required/></td>
</tr>
</table><br>
<input type="submit" value="Request" style="color:red"/>
</form>

<form action="UserSummary.php" method="post">
<input type="submit" value="Back" style="color:red"/>
</form>


</body>
</html>