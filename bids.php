
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

$c=mysql_query("SELECT * FROM `bids`  ") or die(mysql_error());
$d=mysql_num_rows($c);

if($d > 0)
{
echo "<table border=1>
<tr>

<th><b>PRODUCT ID</b></th>
<th><b>AMOUNT</b></th>
<th><b>USERID</b></th>

</th>

</tr>";
while($row = mysql_fetch_array($c))
   {
echo "<tr>";
 
  echo "<td>" . $row['product_id'] . "</td>";
   echo "<td>" . $row['amount'] . "</td>";
   echo "<td>" . $row['UserId'] . "</td>";
  
  echo "</tr>";
  }


}


?>

</body>

</html>