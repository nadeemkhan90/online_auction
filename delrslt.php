<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>add</title>
<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>

<a href = "home.php" class="left">logout</a>
<img src="1.jpg">

<body>
<p class = "result">
<?php
$counter = $_SESSION["counter"];
print $counter;
$flag=0;
$id = filter_input(INPUT_GET, "UserId");
//make the database connection
$conn = mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("ph_6", $conn);
$sql = "SELECT `UserId` 
FROM `my_auction`.`user`";
$result = mysql_query($sql, $conn) or die(mysql_error());
while($row = mysql_fetch_assoc($result)){
foreach ($row as $name => $value){
if($UserId==$value)
$flag =1;
} // end foreach
} // end while
if($flag==1)
{
$sql = "DELETE FROM `my_auction`.`user` WHERE `UserId` LIKE '$UserId';";
$result = mysql_query($sql, $conn) or die(mysql_error());
if($result ==1)
print "User by UserId $UserId is successfully removed";
}
else
print "$UserId doesn't exist";
?>
</p>
</body>
</html>