<html>
<head>
<title>online Auctioning portal</title>
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

 </head>

 <body>
    <div id="wrapper">
    <h1>ajax ... nettuts</h1>
    <ul id="nav">
        <li><a href="index.html">welcome</a></li>
        <li><a href="policies.html">Our Policies</a></li>
        <li><a href="login.html">login</a></li>
        <li><a href="contactus.html">contact us</a></li>
		<li><a href="admin.html">admin</a></li>
    </ul>
    <div id="content">
        <h2>login</h2>
        <div align="center"><p>Beaware of phishing. check the link first
		<form action="data.php" method="get" >
   <table><tr><td><p>User id:</p></td> 
   <td> <input type="text" name="user"></td></tr>
   <tr><td><p>password:</p></td>
   <td> <input type="password" name="password"></td></tr>
   <tr><td></td><input type="submit" name="submit" value="Login"></tr>
   </table> </form>
     
	 
	 </p><b>if you are not registered yet then register <a href="insert.php" >here</a></b></div>
     </div>
<div id="foot">Copyright © 2010 All Rights Reserved</div>
</div>
   
    
</body>
</html>

<?php
$flag =0;
$Id = filter_input(INPUT_GET, "user");
$pass = filter_input(INPUT_GET, "password");
//make the database connection
$conn = mysql_connect("localhost", "root") or die (mysql_error());
mysql_select_db("my_auction1", $conn);
$sql = "SELECT `post` 
FROM `my_auction1`.`user`";
$result = mysql_query($sql, $conn) or die(mysql_error());
while($row = mysql_fetch_assoc($result)){
foreach ($row as $name => $value){
if($Id==$value)
$flag =1;
} // end foreach
} // end while
if($flag==1){
$sql = "(SELECT `password`
FROM `my_auction1`.`user`
WHERE `UserId` LIKE '$Id')";
$result = mysql_query($sql, $conn) or die(mysql_error());
while($row = mysql_fetch_assoc($result)){
foreach ($row as $name => $value){
if($pass==$value)
$flag =1;
else
$flag =0;
} // end foreach
} // end while
if($flag==1){
$sql  = "SELECT `post`
FROM `my_auction1`.`user`
WHERE `UserId` LIKE '$Id'";
$result = mysql_query($sql, $conn) or die(mysql_error());
while($row = mysql_fetch_assoc($result)){
foreach ($row as $name => $value){
if($value=="seller")
$flag =1;
else
$flag =0;
} // end foreach
} // end while
if ($flag==1)
print "Since you have a post of seller so <br/><h3>you can<ul>
<li><a href = \"insert.php\"> insert employee</li>
<li><a href = \"delete.php\">delete employee</li>
<li><a href = \"search.php\">search employee</li>
</ul> ";
else
print "sorry! you can not insert new products</br> but as a buyer u can <a href= \"search.php\">search</a> for others";
}
else
print "<h3>passworrd is wrong!!</h3>";
}
else
print "<h3>the Id does not exist!!</h3>";
?>
</p>
