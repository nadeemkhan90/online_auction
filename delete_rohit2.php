<body>
<html>
<div align="center">
<?php

$UserId = filter_input(INPUT_GET, "UserId");

//make the database connection
$conn = mysql_connect("localhost", "root") or die (mysql_error());
mysql_select_db("my_auction", $conn);
$sql = ("Delete from user where UserId='$_GET[UserId]' " );
print  " '$_GET[UserId]' is successfully deleted";

?> 
	
</body>
</html>
