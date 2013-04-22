
<html>
<head>
<title>online auctioning cart</title>



	</head>
<body>
<?php
include 'includes/connection.php';

   
 
  // Set timezone
  date_default_timezone_set("UTC");
 
  // Time format is UNIX timestamp or
  // PHP strtotime compatible strings
  function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }
 
    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }
 
    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();
 
    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Set default diff to 0
      $diffs[$interval] = 0;
      // Create temp time from time1 and interval
      $ttime = strtotime("+1 " . $interval, $time1);
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
	$time1 = $ttime;
	$diffs[$interval]++;
	// Create new temp time from time1 and interval
	$ttime = strtotime("+1 " . $interval, $time1);
      }
    }
 
    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
	break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
	// Add s if value is not 1
	if ($value != 1) {
	  $interval .= "s";
	}
	// Add value and interval to times array
	$times[] = $value . " " . $interval;
	$count++;
      }
    }
 
    // Return string with times
    return implode(", ", $times);
  }
 

$id=$_POST['id'];
//$id=$_GET['id'];
//echo "<h2>$id</h2>";
$conn=mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("my_auction",$conn) or die(mysql_error());
$date=date("M d Y");//current date
//echo "current date is $date<br/>";
  //$aDays = GetDays('5th Feb 2007', '10th Feb 2007');
  $age= dateDiff("$date","$closing_date");
  //echo "age is $age<br/>";
 
  
$c=mysql_query("select * from products where category_id='e' and $age<0 ") or die(mysql_error());
$d=mysql_num_rows($c);

if($d > 0)
{
echo "<table border=1>
<tr>

<th><b>PRODUCT ID</b></th>
<th><b>PRODUCT NAME</b></th>
<th><b>PRODUCT DETAILS</b></th>
<th><b>USERID</b></th>
<th><b>BASE PRICE</b></th>
<th><b>CURRENT PRICE</b></th>
<th><b>CLOSING DATE</b></th>
<th><b>CATEGORY ID</b></b>


</th>

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

echo"<form  action=bidpro.php method=post >
<b>Productid:</b> <input type=text name=product_id />
<b>Amount:</b> <input type=text name=amount /></br></br>
<b>UserId: </b><input type=text name=UserId /></br></br>
<input type=submit />
</form>"
?>

</body>

</html>