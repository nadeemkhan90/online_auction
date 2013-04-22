
<html>
<body>
<?php
$conn=mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("my_auction",$conn) or die(mysql_error());

$c=mysql_query("select * from products where category_id='a' ") or die(mysql_error());
$d=mysql_num_rows($c);

if($d > 0)
{
echo "<table border=1>
<tr>

<th>PRODUCT ID</th>
<th>PRODUCT NAME</th>
<th>PRODUCT DETAILS</th>
<th>USERID</th>
<th>BASE PRICE</th>
<th>CURRENT PRICE</th>
<th>CLOSING DATE</th>
<th>CATEGORY ID</th>

</tr>";
while($row = mysql_fetch_array($c))
   {
echo "<tr>";
 
  echo "<td>" . $row['product_id'] . "</td>";
   echo "<td>" . $row['product_name'] . "</td>";
   echo "<td>" . $row['product_details'] . "</td>";
   echo "<td>" . $row['UserId'] . "</td>";
   echo "<td>" . $row['base_price'] . "</td>";
   echo "<td>" . $row['current_price'] . "</td>";
   echo "<td>" . $row['closing_date'] . "</td>";
   echo "<td>" . $row['category_id'] . "</td>";
    
  echo "</tr>";
  }

echo "<h1>click here to bid more</h1><a href=bid.php><h1>Home</h1></a>";
}

echo"<form  action=bidprocess.php method=post >
Productid: <input type=text name=product_id />
Amount: <input type=text name=amount /></br></br>
UserId: <input type=text name=UserId /></br></br>
<input type=submit />
</form>"
?>

</body>

</html>