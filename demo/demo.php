<html>
<head>
<title>Sponsor Flip Wall With jQuery &amp; CSS | Tutorialzine demo</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery.flip.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>

<body>
<h1>Sponsor Flip Wall With jQuery &amp; CSS</h1>
<h2><a href="http://tutorialzine.com/2010/03/sponsor-wall-flip-jquery-css/">Go Back to the Tutorial &raquo;</a></h2>

<?php
// Each sponsor is an element of the $sponsors array:
$conn=mysql_connect('localhost','root','');
mysql_select_db('sponsor',$conn);
$query="select * from sponsor where category='computer'";
$result=mysql_query($query) or die("wrong query");
$i=0;
while($row=mysql_fetch_array($result))
{
$sponsors[$i][0]=$row['image_name'];
$sponsors[$i][1]=$row['item_detail'];
$sponsors[$i][2]="buy.php?image=".$row['image_name']."" ;
$i++;
}

// Randomizing the order of sponsors:
shuffle($sponsors);
?>

<div id="main">
	<div class="sponsorListHolder">
        <?php
			// Looping through the array:
			foreach($sponsors as $company)
			{echo'
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="img/sponsors/'.$company[0].'.png" alt="More about '.$company[0].'" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL" >
		                    <div align=center>
				           <a href="'.$company[2].'">BUY</a>
		                       </div>
				
		
				
						</div>
					</div>
				 			
				
				</div>
				

				
				
				';
			}
		
		?>

        
        
    	<div class="clear"></div>
    </div>

</div>

</body>
</html>
