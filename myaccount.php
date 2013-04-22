

<html><head>
<title>Your Account</title>
	<script type="text/javascript">
        var GB_ROOT_DIR = ".//greybox//";
    </script>

    <script type="text/javascript" src="greybox/AJS.js"></script>
    <script type="text/javascript" src="greybox/AJS_fx.js"></script>
    <script type="text/javascript" src="greybox/gb_scripts.js"></script>
    <link href="greybox/gb_styles.css" rel="stylesheet" type="text/css"  />

</head>


<body background="./images/register_form/paperbg.jpg">
<?php $con = mysql_connect("localhost","root","");
		mysql_select_db("my_auction1", $con);
		$zz = "SELECT * FROM sold WHERE user_id = 'uit111'";
		$yy=mysql_query($zz);
		while($xx=mysql_fetch_array($yy))
		{ $points=$xx[points];
		}
?>
		
  <table width="1260" height="243" border="1" cellpadding="1" cellspacing="1" class="container">
    <tr>
      <th height="68" bgcolor="#FFFFFF" scope="row"><div align="left">
        <p>&nbsp;&nbsp;<span class="style29"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome <?php echo $_COOKIE['ID_my_site']; ?></span></p>
		<p>&nbsp;&nbsp;<span class="style29"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Available points in you account: <?php echo $points; ?></span></p>
        <p class="style30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products bought by you:</p>
		       <p align="right"> </span>&nbsp;<span class =style28><a href=members.php>Back</a></span>&nbsp;<span class =style28><a href = "user_passch.php" title="Change Your Password" rel="gb_page[400, 300]">Change Password</a></span>&nbsp;<span class=style28><a href=logout.php><u>Logout</u></a>&nbsp;&nbsp;&nbsp;</span>
		  &nbsp;&nbsp;&nbsp;</p>
      </div></th>
    </tr>
    <tr>
      <th width="1252" height="170" bgcolor="#FFFFFF" scope="row"><table width="1250" border="0">
          
          
          <tr>
            <td width="192" height="22" bgcolor="#FFFFFF"><div align="center">Product_id</div></td>
            <td width="21" bgcolor="#FFFFFF"><div align="center">Product_name</div></td>
            <td width="112" bgcolor="#FFFFFF"><div align="center">User</div></td>
            <td width="187" bgcolor="#FFFFFF"><div align="center">purchasing amount</div></td>
          </tr>
          <tr bgcolor="#E6E6E6">
  <?php  
		  $con = mysql_connect("localhost","root","");
		mysql_select_db("my_auction1", $con);
		$query = "SELECT * FROM sold WHERE user_id = '$_COOKIE[ID_my_site]' order by date_sold desc";
				$res=mysql_query($query);
				$no=mysql_num_rows($res);
				if($no>0)
			{
			while($row=mysql_fetch_array($res))	
		{
		$aa="select * from products where product_id='$row[product_id]' ";
		$bb=mysql_query($aa);
		$cc=mysql_fetch_array($bb);
		?><tr bgcolor=#E6E6E6><td height=29 width=116><div align=left><p align=center><span class=style31>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><div style="position:relative; left:100px; top:-40px; width:152px; height:110px; z-index:0;" align="left"><img src="images/products/<?php echo $cc[product_name]; ?>" id="Image1" alt="" align="top" border="0" style="width:150px;height:140px;" /></div></p></div></td><td height=29 width=231><div align=center><?php echo $cc[detail]; ?></div></td>
    <td height=29 width=112><div align=center><?php echo $row[date_sold]; ?></div></td><td height=29 width=87><div align=center><?php if($row[mode_of_sell]==credit_card) {echo "$".$cc[price];} else {echo $cc[points]." points";} ?></div></td></tr>
		  
<?php
	}
	}	
	else 
	{ 
	$msg="Your cart is empty shop more";
	$msg1="";
	}
	mysql_close($con);
	 ?>
          
        </table>   <p>&nbsp; </p>    
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $msg1;?> </p>
      <p><?php echo $msg; ?></p>
      <p>&nbsp;</p>
      
      </th>
    </tr>
  </table>
  

</body>
</html>