<?php
include 'dbinfo.php'; 
?>  
<?php
//always start the session before anything else!!!!!! 
session_start(); 
//connect to the db 
$username = $_SESSION['username'];
unset($_SESSION['isbn']);
unset($_SESSION['copyid']);	
?> 
<html>
<body style="color:red; background-color:pink">
<center><h1><u><i><b>User Summary</b></i></u></h1>

<form action="SearchBooks.php" method="post">
<input type="submit" value="Search Books" style="color:red; background-color:yellow"/>
</form>

<form action="TrackBookLocation.php" method="post">
<input type="submit" value="Track Book Location" style="color:red; background-color:yellow" style="color:red; background-color:yellow"/>
</form>

<form action="BookCheckout.php" method="post">
<input type="submit" value="Checkout Book" style="color:red; background-color:yellow"/>
</form>

<form action="FutureHoldRequestforaBook.php" method="post">
<input type="submit" value="Future Hold Request" style="color:red; background-color:yellow"/>
</form>

<form action="RequestExtensionOnaBook.php" method="post">
<input type="submit" value="Extension Request" style="color:red; background-color:yellow"/>
</form>

<form action="ReturnBook.php" method="post">
<input type="submit" value="Return Book" style="color:red; background-color:yellow"/>
</form>

<form action="Login.php" method="post">
<input type="submit" value="Close" style="color:red; background-color:yellow"/>
</form></center>

</body>
</html>