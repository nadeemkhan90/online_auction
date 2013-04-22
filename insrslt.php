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


<title>add</title>
<link rel = "stylesheet" type = "text/css" href = "sheet.css">
</head>

<h1>Welcome to Company</h1>
<img src="2.jpg">
<body>

    <div id="wrapper">
    <h1>ajax ... nettuts</h1>
<a href="http://localhost//project-php-test/login2.php">LOG IN</a>
<body style="background-color:black">
<p class = "left">new user</p>
<h3><b>Writing a form for user input</b></h3>
<p class = "result">>
<?php
$UserId = filter_input(INPUT_GET, "UserId");
$Login_name = filter_input(INPUT_GET, "Login_name");
$Password = filter_input(INPUT_GET, "password");
$First_Name = filter_input(INPUT_GET, "First_Name");
$Last_Name = filter_input(INPUT_GET, "Last_Name");
$Reg_date = filter_input(INPUT_GET, "Reg_date");
$Address = filter_input(INPUT_GET, "Address");
$post = filter_input(INPUT_GET, "post");
//make the database connection
$conn = mysql_connect("localhost", "root") or die (mysql_error());
mysql_select_db("my_auction", $conn);
$sql = "INSERT INTO `my_auction`.`user` (
`UserId` ,
`Login_name` ,
`password` ,
`First_Name` ,
`Last_Name` ,
`Reg_date` ,
`Address` ,
`post`)
VALUES 
('$UserId', '$Login_name', '$Password', '$First_Name', '$Last_Name', '$Reg_date', '$Address', '$post');";
$result = mysql_query($sql, $conn) or die(mysql_error());
if($result ==1)
echo "employee $name is successfully added";
else
print "$id already exists";
?> 
</body>
</html>
