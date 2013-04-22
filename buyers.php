
<html>
<head>
<title>online auctioning cart</title>

	</head>
	<table width="100%">
<tr>
<td width="1%">
</td>
<td  class="xyz" width="88%" align="center" bgcolor="#CCFFCC" >
<body>
<?php
$conn=mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("my_auction1",$conn) or die(mysql_error());

$c=mysql_query("SELECT * FROM `user` WHERE post='buyer' ") or die(mysql_error());
$d=mysql_num_rows($c);

if($d > 0)
{
echo "<table border=1>
<tr>

<th><b>USER ID</b></th>
<th><b>LOGIN NAME</b></th>
<th><b>PASSWORD</b></th>
<th><b>FIRST NAME</b></th>
<th><b>LAST NAME</b></th>


<th><b>ADRESS</b></b>


</th>

</tr>";
while($row = mysql_fetch_array($c))
   {
echo "<tr>";
 
  echo "<td>" . $row['UserId'] . "</td>";
   echo "<td>" . $row['Login_name'] . "</td>";
   echo "<td>" . $row['password'] . "</td>";
   echo "<td>" . $row['First_Name'] . "</td>";
   echo "<td>" . $row['Last_Name'] . "</td>";
  

   echo "<td>" . $row['Address'] . "</td>";
    
  echo "</tr>";
  }


}


?>

</body>

</html>