<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<h1>WELCOME</h1>

<body>
<div id="wrapper">
    <h1>ajax ... nettuts</h1>
    <ul id="nav">
<li><a href="index.html">home</a></li>


  
    </ul>

<p class = "left">new user</p>
<h3></h3>
<form method = "get"
action = "http://localhost//project-php-test/register_result.php"
class = "my"
hight="500px">
<fieldset>
<label><b>product_id</b>
</label>
     <input type = "text"
name = "product_id"
value = "" />
</fieldset>
<fieldset>
<label><b>product_name</b>
</label>
<input type = "text"
name = "product_name"
value = "" />
</fieldset>
<fieldset>
<label><b>product_details</b>
</label>
<input type = "text"
name = "product_details"
value = "" />
</fieldset>
<fieldset>
<label><b>UserId</b>
</label>
<input type = "text"
name = "UserId"
value = "" />
</fieldset>
<fieldset>
<label><b>base_price</b>
</label>
<input type = "text"
name = "base_price"
value = "" />
</fieldset>

<fieldset>
<label><b>current_price</b>
</label>
<input type = "text"
name = "current_price"
value = "" />
</fieldset>
<fieldset>
<label><b>closing_date</b>
</label>
<td>
<table>
<tr>
<?php //Check to see if a date has been posted
if(isset($_POST['Date'])){
$mysql_date = date(‘Y-m-d G:i:s’,strtotime($_POST['Date'].’ ‘.$_POST['Time'].’ ‘.$_POST['ampm']));
}
?>
<?php //Display the MySQL datetime if it exists
if (isset($mysql_date)){ ?>
<br/>The MySQL datetime version is: <?php echo ($mysql_date); ?>
<?php } ?>
<form id=”form1? name=”form1? method=”post” action=”">
<p>
<label>Date
<input name=”Date” type=”text” id=”Date” value=”10/23/2010? />
</label>
</p>
<p>
<label>Time
<input name=”Time” type=”text” id=”Time” value=”12:00:00? />
</label>
<label>
<input name=”ampm” type=”radio” id=”ampm” value=”am” checked=”checked” />
am</label>
<label>
<input type=”radio” name=”ampm” id=”ampm” value=”pm” />
pm</label>
</p>
<p>
<label>
<input type=”submit” name=”Submit” id=”Submit” value=”Submit” />
</label>
</p>
</form>
</select>
</td>
</tr>
</table>
</td>
</tr>
</fieldset>

</fieldset>                        
<fieldset>
<label><b>Category:</b></label>
          <select name="proselect2" id="proselect2">
		  <option selected>Select one</option>
           
            <option>e</option>
			<option>p</option>

            <option>a</option>
            
            
          </select>
</fieldset>
</fieldset>

        








<input type="submit" value="Register"/>

</form>
</body>
</html>
