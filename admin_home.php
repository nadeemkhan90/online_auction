<?php 
// Connects to your Database 
$conn=mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("project",$conn) or die(mysql_error()); 

//checks cookies to make sure they are logged in 
if(isset($_COOKIE['ID_admin_site'])) 
{ 
$username = $_COOKIE['ID_admin_site']; 
$pass = $_COOKIE['Key_admin_site']; 
$check = mysql_query("SELECT * FROM admin WHERE admin = '$username'")or die(mysql_error()); 
while($info = mysql_fetch_array( $check )) 
{ 
//if the cookie has the wrong password, they are taken to the login page 
if ($pass != $info['password']) 
{ header("Location: index.html#admin"); 
} 

//otherwise they are shown the admin area 
else 
{ 

} 
} 
} 
else 

//if the cookie does not exist, they are taken to the login screen 
{ 
header("Location: index.html#admin"); 
} 
?> 

<html lang="en">
<head>
	<title>Admin</title>
    <link href="css/jeffrey.css" rel="stylesheet" type="text/css"/>
	
	
	
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
<body background="./images/register_form/paperbg.jpg">



<a href = "admin_passch.php" title="Change Your Password" rel="gb_page[400, 300]"><img src="images/chpass.jpg" style="width:140px;height:33px;position:absolute;left:900px;top:5px;></a>


<div id="wrapper">
    <h1>ajax ... nettuts</h1>
    <ul id="nav">
	div style="position:absolute;left:0px;top:0px;width:0px;height:0px;z-index:0;" align="left">
        <li id="selected"><a href="admin_home.php">Upload</a></li>
        <li><a href="admin_update.php">Update</a></li>
        <li><a href="admin_add.php">Delete</a></li>
        <li><a href="admin_add.php">Add admin</a></li>
        
    </ul>
</div>
</div>

<div style="position:absolute;left:400px;top:260px;width:0px;height:19px;z-index:0;" align="left">
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="upload.php">
  <table width="400" height="1" border="1" class="container">
    <tr>
      <td>
        <p align="center"><strong> Enter Product Details for uploading</strong> </p>
        <p align="center">
          <label>Product Name:
          <input name="proname" type="text" id="proname">
          </label>
        </p>
		<p align="center">
          <label>Product detail:
          <input type="text" maxlength="60" name="prodetail" id="proname" >
          </label>
        </p>
        <p align="center">
          <label>Product Image:
          <input name="fileupload" id="ctl00_ContentPlaceHolder1_file_Image" style="width: 259px;" type="file">
</label>
        </p>
        <p align="center">
          <label>Product Price in $:
          <input name="proprice" type="text" id="proprice">
          </label>
        </p>
		<p align="center">
          <label>Product Points :
          <input name="propoint" type="text" id="proprice">
          </label>
        </p>
        
        <p align="center">
          <label>Category:
          <select name="proselect" id="proselect">
		  <option selected>Select one</option>
            <option>Computer</option>
            <option>Electronics</option>
			<option>Books</option>
            <option>Mobiles</option>
            <option>Beauty</option>
            <option>Other</option>
          </select>
          </label>
        </p>
        <p align="center">
          <label>
          <input name="image" type="image" value="submit" src="Images/submit.png" alt="A" width="104" height="34" border="0">
          </label>
      </p>        </td>
    
    </table>
</form></div>


<script type="text/javascript">
    $('#nav').spasticNav();
</script>
<a href = "admin_logout.php"><img src="images/logout.jpg" style="width:140px;height:33px;position:absolute;left:1044px;top:5px;></a>
</body>
</html>

