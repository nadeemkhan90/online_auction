
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

$c=mysql_query("SELECT * FROM `sold` ") or die(mysql_error());
$d=mysql_num_rows($c);

if($d > 0)
{
echo "<table border=1>
<tr>

<th><b>PRODUCT ID</b></th>
<th><b>PRODUCT NAME</b></th>
<th><b>USER</b></th>
<th><b>PURCHASING AMOUNT</b></th>


</th>

</tr>";
while($row = mysql_fetch_array($c))
   {
echo "<tr>";
 
  echo "<td>" . $row['product_id'] . "</td>";
   echo "<td>" . $row['product_name'] . "</td>";
  
   echo "<td>" . $row['UserId'] . "</td>";
   echo "<td>" . $row['max(amount)'] . "</td>";
  
   
  echo "</tr>";
  }


}

echo"MY ACCOUNT"

?><br/>
<a href="data.php"><img src="images/BACK.png" ></a></li>
</body>

</html>