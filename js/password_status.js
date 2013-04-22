function textCounter(field,counter,maxlimit) 
{
	var charcnt = field.value.length;        
	if (charcnt > maxlimit) 
		field.value = field.value.substring(0, maxlimit);
	else 
	{ 
		var progress = parseInt(100 - (( maxlimit - charcnt) * 100)/maxlimit) ;
		if(progress<=30)
		{
			document.getElementById(counter).innerHTML="Weak";
			document.getElementById(counter).style.background="#FF3366";
		}
		else if(progress<100)
		{
			document.getElementById(counter).innerHTML="Strong";
			document.getElementById(counter).style.background="#FF9900";
		}
		else
		{
			document.getElementById(counter).innerHTML="Maximum";
			document.getElementById(counter).style.background="#99CC00";
		}
		document.getElementById(counter).style.width =  "60";
	}
}