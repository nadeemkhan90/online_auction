f<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>




<body onload="checkCookie()">
<title>online shopping cart</title>
<script type="text/javascript" src="jquery.js"></script>
<style type="text/css">
@import url(css.css);
</style>
<script type="text/javascript" src="js.js"></script>

<script type="text/javascript">
        var GB_ROOT_DIR = ".//greybox//";
    </script>

    <script type="text/javascript" src="greybox/AJS.js"></script>
    <script type="text/javascript" src="greybox/AJS_fx.js"></script>
    <script type="text/javascript" src="greybox/gb_scripts.js"></script>
    <link href="greybox/gb_styles.css" rel="stylesheet" type="text/css"  />
<link type = "text/css"
rel = "stylesheet"
href = "sheet.css">
</head>
<body>
    <div id="wrapper">
    <h1>ajax ... nettuts</h1>
<body style="background-color:black ">

<h1>Welcome seller</h1>
<p>
<?php
$flag =0;
$Id = filter_input(INPUT_GET, "user");
$pass = filter_input(INPUT_GET, "password");

$conn = mysql_connect("localhost", "root") or die (mysql_error());
mysql_select_db("my_auction", $conn);
$sql = "(SELECT `UserId`  FROM `my_auction`.`user`)";
$result = mysql_query($sql, $conn) or die(mysql_error());


 

$sql2 = "(Select * FROM `my_auction`.`user` WHERE `UserId`='$Id')";
$result = mysql_query($sql2, $conn) or die(mysql_error());
$check2 = mysql_num_rows($result);
	if ($check2 == 0) 
	{
	die('<html><title>lOGIN FAILED</title><body background="./images/register_form/paperbg.jpg"></body><h3 align=center><br><br><br><br><br><br><br><br>USER NAME DOES NOT EXIST<br><h4 align=center>redirecting you IN 3 seconds</h4></h3><meta http-equiv="refresh" content=3;url="login.html#login"></HTML>');
	}
	
	
while($row = mysql_fetch_assoc($result)){
if ( $pass != $row[password]) {

die('<html><title>lOGIN FAILED</title><body background="./images/register_form/paperbg.jpg"></body><h3 align=center><br><br><br><br><br><br><br><br>USER NAME DOES AND PASSWORD DOES NOT MATCH<br><h4 align=center>redirecting you IN 3 seconds</h4></h3></HTML>');
}
if ($row[post]=="seller")
print "Since you have a seller so <br/><h3><b>you can</b><ul>
<li><a href = \"register.php\"> insert new product for bidding</li>

</ul> ";
else

{
print " <b>you are a buyer so you can </b></br><a href= \"search.php\">search the products</a> ";
}
} 




/*else
{
print "<h3>passworrd is wrong!!</h3>";
}
else

{
print "<h3>the Id does not exist!!</h3>";
}*/
?>
</p>
</body>
</html>