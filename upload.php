<?php 
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("project",$conn);
$file_dir = "C:\xampp\htdocs\project\images\products";

echo $_FILES['file']['name'];
"img/sponsors/'.$company[0].'.png";
$fname=$_POST['proname'];
$fname1=$fname.'.jpg';


$file_dir = "C:/xampp/htdocs/project/images/products/";
$fname=$_POST['proname'];
$fname1=$fname.'.jpg';
   
  foreach($_FILES as $file_name => $file_array) {
     }
  
 $uploadfile = $file_dir . $fname1;
 
      if (is_uploaded_file($file_array['tmp_name'])) {
          move_uploaded_file($file_array['tmp_name'],$uploadfile) or die ("Couldn't copy");
		  $sql = "INSERT INTO products values ('','$fname1','$_POST[prodetail]','$_POST[proselect]','$_POST[proprice]','$_POST[propoint]')";
	if (mysql_query($sql, $conn))
	echo '<h3 align=center><br><br><br><br><br><br><br><br>PRODUCT HAS BEEN SUCCESSFULLY ADDED TO DATABASE FOR SALE<br><h4 align=center>please wait for 6 seconds while redirecting you to home page</h4></h3><meta http-equiv="refresh" content=6;url="admin_home.php">';
	else
		echo "error";


		  }



mysql_close($conn);
 ?>
 
 <html>
<title>Admin Upload</title> 
<body background="./images/register_form/paperbg.jpg">

</body>
 </html>