<html>
<body>

<div id="wb_Image4" style="position:absolute;left:450px;top:296px;width:213px;height:213px;z-index:12;" align="left">
<?php
$conn = mysql_connect("localhost", "root") or die (mysql_error());
mysql_select_db("my_auction1", $conn);

$first=$_POST['product_id'];
$last=$_POST['amount'];
$name=$_POST['UserId'];
/*$exp_date = "2010-01-12";
 $todays_date = date("Y-m-d"); 
 $today = strtotime($todays_date); 
 $expiration_date = strtotime($exp_date);
 if($expiration_date < $today)
               {
                 echo "<h1>product is already sold</h1></br><h2>Click Below To Go Back</h2></br>
                 <a href="http://localhost/frontend/12.html"><h1>Home</h1></a>     ";
			   }
			     else */
				{ 
				mysql_query("INSERT INTO `my_auction1`.`bids` ( `product_id`,`amount`,`UserId`)VALUES ('$first','$last','$name')");
			  echo "<h1>your BID For The Product Has   Been Accepted</h1></br><h2>Click Below To Go Back</h2></br>";
              echo "<a href=http://localhost//frontend/12.html><h1>Home</h1></a>";
			    }
			  
			 
			  ?>
			   
</body>
</html>