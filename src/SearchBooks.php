<html>
<?php
include 'dbinfo.php'; 
?>  
<?php
//always start the session before anything else!!!!!! 
session_start(); 
//connect to the db 
$username = $_SESSION['username'];
?> 
<body style="background-color:#A6A6FF">
<h1><u>Search Books</u></h1>

<form action="HoldRequestforaBook.php" method="post">
<table style="background-color:pink">
<tr>
    <td>ISBN</td>
    <td><input type="text" name="isbn"/></td>
</tr>

<tr>
    <td>Title</td>
    <td><input type="text" name="title"/></td>
</tr>


<tr>
    <td>Author</td>
    <td><input type="text" name="author"/></td>
</tr>

</table><br>
<input type="submit" value="Search" style="background-color:red"/>

</form>

<form action="UserSummary.php" method="post">
<input type="submit" value="Back" style="background-color:red"/>
</form>

<form action="Login.php" method="post">
<input type="submit" value="Close" style="background-color:red"/>
</form>

</body>
</html>