<html>
<head>
<title>online shopping cart</title>
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
<body>
 
    <div id="wrapper">
    <h1>ajax ... nettuts</h1>
	
    <pre>
	
       
	   <li><b><a href="http://localhost//project-php-test/electo.php"title="Electronic goods" rel="gb_page[800, 800]"><img src="images/e.png" > </a></b></li>
		
		
		
        <li><b><a href="http://localhost//project-php-test/paintings.php"title="Paintings" rel="gb_page[800, 800]"><img src="images/p.jpg" ></a></b></li>
		
		
		
        <li><b><a href="http://localhost//project-php-test/antiques.php"title="Antiques" rel="gb_page[800, 800]"><img src="images/a.jpg" ></a></b></i>
		
		
        </pre>
		
		
    
    
</div>
<a href = "login.php" title="logout" rel="gb_page[400, 300]"><img src="images/chpass.jpg" style="width:140px;height:33px;position:absolute;left:900px;top:5px;></a>
<script type="text/javascript">
<!--
function FindObject(id, doc)
{
   var child, elem;
   if(!doc)
      doc=document;
   if(doc.getElementById)
      elem=doc.getElementById(id);
   else
   if(doc.layers)
      child=doc.layers;
   else
   if(doc.all)
      elem=doc.all[id];
   if(elem)
      return elem;
   if(doc.id==id || doc.name==id)
      return doc;
   if(doc.childNodes)
      child=doc.childNodes;
   if(child)
   {
      for(var i=0; i<child.length; i++)
      {
         elem=FindObject(id,child[i]);
         if(elem)
            return elem;
      }
   }
   var frm=doc.forms;
   if(frm)
   {
      for(var i=0; i<frm.length; i++)
      {
         var elems=frm[i].elements;
         for(var j=0; j<elems.length; j++)
         {
            elem=FindObject(id,elems[i]);
            if(elem) return elem;
         }
      }
   }
   return null;
}
function SetImage(id, filename)
{
   var elem=FindObject(id);
   if(elem)
   {
      elem.src=filename;
   }
}
//-->
</script>

<div id="wb_JavaScript1" style="position:absolute;left:36px;top:48px;width:129px;height:151px;z-index:0;" align="CENTER">
<script type="text/javascript">
var message1="AUCTION IN ACTION";
var flashspeed=100;
var n=0;

document.write('<font style="color:#000000;font-family:Arial;font-size:30px;">');
for (m=0;m<message1.length;m++)
   document.write('<span id="neonlight'+m+'">'+message1.charAt(m)+'</span>');
document.write('</font>');

function crossref(number)
{
   var crossobj = document.getElementById("neonlight"+number);
   return crossobj;
}

function neon()
{
   if (n==0)
   {
      for (m=0;m<message1.length;m++)
         crossref(m).style.color="#000000";
   }

   crossref(n).style.color="#FF0000";

   if (n<message1.length-1)
   {
      n++;
   }
   else
   {
      n=0;
      clearInterval(flashing);
      setTimeout("StartNeon()", 1500);
      return;
   }
}

function StartNeon()
{
   if (document.all||document.getElementById)
      flashing=setInterval("neon()", flashspeed)
}

StartNeon();

</script></div>
</body>
</html>
