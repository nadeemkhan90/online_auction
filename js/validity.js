function valid_activate(form) {
 
  alert("Activation has been done.");
  return true;
}

function valid_delete(form) 
{
	alert("Selected users has been deleted.");
	return true;
}

function valid_infomodify(form) {
  if (form.address.value=='') {
    alert("You must indicate address.");
    form.address.style.backgroundColor='pink';
    return false;
  }
  else { form.address.style.backgroundColor=''; }  
  
  if (form.contact.value==''|| form.contact.value.length<10) {
    alert("You must indicate valid contact no.");
    form.contact.style.backgroundColor='pink';
    return false;
  }
  else { form.contact.style.backgroundColor=''; }
  
  if (form.eid.value=='') {
    alert("You must indicate email address.");
    form.eid.style.backgroundColor='pink';
    return false;
  }
  else { form.eid.style.backgroundColor=''; }
  
  var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i
  var returnval=emailfilter.test(form.eid.value)
  if (returnval==false){
	alert("Please enter a valid email address.");
	form.eid.style.backgroundColor='pink';
	return false;
}
  
  return returnval;
}

function valid_passmodify(form) {
  if (form.opassword.value=='') {
    alert("You must indicate old password.");
    form.opassword.style.backgroundColor='pink';
    return false;
  }
  else { form.opassword.style.backgroundColor=''; }  
  
  if (form.npassword.value=='') {
    alert("You must indicate new password.");
    form.npassword.style.backgroundColor='pink';
    return false;
  }
  else { form.npassword.style.backgroundColor=''; }
  
  if (form.cpassword.value=='') {
    alert("You must indicate your password.");
    form.cpassword.style.backgroundColor='pink';
    return false;
  }
  else { form.cpassword.style.backgroundColor=''; }
  
  if (form.npassword.value.length<=3) {
    alert("Your password is too short.please enter password > 3 characters.");
    form.npassword.style.backgroundColor='pink';
    return false;
  }
  else { form.npassword.style.backgroundColor=''; }
    
  if (form.npassword.value != form.cpassword.value) {
    alert("Your passwords do not match. Please type more carefully.");
   form.cpassword.style.backgroundColor='pink';
    return false;
	}
	else { form.cpassword.style.backgroundColor=''; }
	
   return true;
}


function IsNumeric(sText)
{
   var ValidChars = "0123456789";
   var IsNumber=true;
   var Char;
	for (i = 0; i < sText.length && IsNumber == true; i++) 
    { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
   return IsNumber;
    }
	 
	 

function IsNumericwithdot(sText)
{
   var ValidChars = "0123456789.";
   var IsNumber=true;
   var Char;
	for (i = 0; i < sText.length && IsNumber == true; i++) 
    { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
   return IsNumber;
    }
	
function valid_login(form) {

if (form.firmtype.value=='--------Firm type--------') {
    alert("You must indicate your firm type.");
    form.firmtype.style.backgroundColor='pink';
    return false;
  }
  else { form.firmtype.style.backgroundColor=''; }  
  
if (form.login.value=='') {
    alert("You must indicate your firm name.");
    form.login.style.backgroundColor='pink';
    return false;
  }
  else { form.login.style.backgroundColor=''; }  
    
  if (form.password.value=='') {
    alert("You must indicate your password.");
    form.password.style.backgroundColor='pink';
    return false;
  }
  else { form.password.style.backgroundColor=''; }
  return true;
}


function valid_signup(form) {

if (form.firmtype.value=='--------Firm type--------') {
    alert("You must indicate your firm type.");
    form.firmtype.style.backgroundColor='pink';
    return false;
  }
  else { form.firmtype.style.backgroundColor=''; }  
  
  if (form.fname.value=='') {
    alert("You must indicate your firm name.");
    form.fname.style.backgroundColor='pink';
    return false;
  }
  else { form.fname.style.backgroundColor=''; }  
  if (form.address.value=='') {
    alert("You must indicate your address.");
    form.address.style.backgroundColor='pink';
    return false;
  }
  else { form.address.style.backgroundColor=''; }
  
  if (form.contact.value==''|| form.contact.value.length!=10 || !IsNumeric(form.contact.value)) {
    alert("You must indicate valid contact number with exactly 10 numerics.");
    form.contact.style.backgroundColor='pink';
    return false;
  }
  else { form.contact.style.backgroundColor=''; }
  if (form.eid.value=='') {
    alert("You must indicate the email id.");
    form.eid.style.backgroundColor='pink';
    return false;
  }
  else { form.eid.style.backgroundColor=''; }
  
   var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i
  var returnval=emailfilter.test(form.eid.value)
if (returnval==false){
alert("Please enter a valid email address.");
 form.eid.style.backgroundColor='pink';
 return false;
}

  if (form.password.value=='') {
    alert("You must indicate your password.");
    form.password.style.backgroundColor='pink';
    return false;
  }
  else { form.password.style.backgroundColor=''; }
  
  if (form.cpassword.value=='') {
    alert("Please confirm your password.");
    form.cpassword.style.backgroundColor='pink';
    return false;
  }
  else { form.cpassword.style.backgroundColor=''; }
  
  if (form.password.value.length<=3) {
    alert("Your password is too short.");
    form.password.style.backgroundColor='pink';
    return false;
  }
  else { form.password.style.backgroundColor=''; }
  
  if (form.password.value != form.cpassword.value) {
    alert("Your passwords do not match. Please type more carefully.");
   form.cpassword.style.backgroundColor='pink';
    return false;
	}
	else { form.cpassword.style.backgroundColor=''; }
	
 
if (!jcap()) {
	alert("Enter the code as it is shown.");
   
    return false;
	}
	//else { form.cpassword.style.backgroundColor=''; }

if (!document.all&&!document.getElementById){
if (window.checkobj&&checkobj.checked)
return true
else{
alert("Please read/accept terms to submit form");
return false
}
}
return returnval;
}



function valid_newitem(form) {
  if (form.itemname.value=='') {
    alert("You must indicate item name.");
    form.itemname.style.backgroundColor='pink';
    return false;
  }
  else { form.itemname.style.backgroundColor=''; }  
  
  if (form.packing.value=='') {
    alert("You must indicate packing.");
    form.packing.style.backgroundColor='pink';
    return false;
  }
  else { form.packing.style.backgroundColor=''; }
  
  if (form.price.value==''|| form.price.value<=0 || !IsNumericwithdot(form.price.value)) {
    alert("You must indicate valid price.");
    form.price.style.backgroundColor='pink';
    return false;
  }
  else { form.price.style.backgroundColor=''; } 
  
  alert("New Item has been created.");
  return true;
}

function valid_payment(form) {
if (form.amt.value==''|| form.amt.value<=0 || !IsNumericwithdot(form.amt.value)) 
{
    alert("You must indicate valid Amount to Deposit.");
    form.amt.style.backgroundColor='pink';
    return false;
}
  else { form.amt.style.backgroundColor='';}  
  
  alert("your payment has been made successfully.");
 return true;
 }
 
 function valid_placeorder(form) {
if ((form.itemname1.value=='---itemname---' && form.quantity1.value!='')||(form.itemname1.value!='---itemname---' && (form.quantity1.value==''|| form.quantity1.value<=0 || !IsNumeric(form.quantity1.value)))) {
    alert("You must indicate appropriate value of Item Name and quantity.");
    form.itemname1.style.backgroundColor='pink';
    form.quantity1.style.backgroundColor='pink';
	form.itemname2.style.backgroundColor='';
    form.quantity2.style.backgroundColor='';
   form.itemname3.style.backgroundColor='';
    form.quantity3.style.backgroundColor='';
    form.itemname4.style.backgroundColor='';
    form.quantity4.style.backgroundColor='';
	return false;
  }
  else { form.itemname1.style.backgroundColor=''; form.quantity1.style.backgroundColor=''; }  
  
if ((form.itemname2.value=='---itemname---' && form.quantity2.value!='')||(form.itemname2.value!='---itemname---' && (form.quantity2.value==''|| form.quantity2.value<=0 || !IsNumeric(form.quantity2.value)))) {
       alert("You must indicate appropriate value of Item Name and quantity.");

    form.itemname2.style.backgroundColor='pink';
    form.quantity2.style.backgroundColor='pink';
	form.itemname1.style.backgroundColor='';
    form.quantity1.style.backgroundColor='';
   form.itemname3.style.backgroundColor='';
    form.quantity3.style.backgroundColor='';
    form.itemname4.style.backgroundColor='';
    form.quantity4.style.backgroundColor='';
	return false;
  }
  else { form.itemname2.style.backgroundColor=''; form.quantity2.style.backgroundColor=''; }  
  
if ((form.itemname3.value=='---itemname---' && form.quantity3.value!='')||(form.itemname3.value!='---itemname---' && (form.quantity3.value==''|| form.quantity3.value<=0 || !IsNumeric(form.quantity3.value)))) {
       alert("You must indicate appropriate value of Item Name and quantity.");

    form.itemname3.style.backgroundColor='pink';
    form.quantity3.style.backgroundColor='pink';
	form.itemname2.style.backgroundColor='';
    form.quantity2.style.backgroundColor='';
   form.itemname1.style.backgroundColor='';
    form.quantity1.style.backgroundColor='';
    form.itemname4.style.backgroundColor='';
    form.quantity4.style.backgroundColor='';
	return false;
  }
  else { form.itemname3.style.backgroundColor=''; form.quantity3.style.backgroundColor=''; }  
  
  if ((form.itemname4.value=='---itemname---' && form.quantity4.value!='')||(form.itemname4.value!='---itemname---' && (form.quantity4.value==''|| form.quantity4.value<=0 || !IsNumeric(form.quantity4.value)))) {
     alert("You must indicate appropriate value of Item Name and quantity.");

    form.itemname4.style.backgroundColor='pink';
    form.quantity4.style.backgroundColor='pink';
	form.itemname2.style.backgroundColor='';
    form.quantity2.style.backgroundColor='';
   form.itemname3.style.backgroundColor='';
    form.quantity3.style.backgroundColor='';
    form.itemname1.style.backgroundColor='';
    form.quantity1.style.backgroundColor='';
	return false;
  }
  else { form.itemname4.style.backgroundColor=''; form.quantity4.style.backgroundColor=''; }  
  
if(form.itemname1.value=='---itemname---' && form.quantity1.value=='' &&  form.itemname2.value=='---itemname---' && form.quantity2.value=='' &&
form.itemname3.value=='---itemname---' && form.quantity3.value=='' && form.itemname4.value=='---itemname---' && form.quantity4.value=='' )
  {
   alert("You must Enter some order.");
   form.itemname1.style.backgroundColor='pink';
    form.quantity1.style.backgroundColor='pink';
   form.itemname2.style.backgroundColor='pink';
    form.quantity2.style.backgroundColor='pink';
   form.itemname3.style.backgroundColor='pink';
    form.quantity3.style.backgroundColor='pink';
    form.itemname4.style.backgroundColor='pink';
    form.quantity4.style.backgroundColor='pink';
	return false;
    }

	else{
	   form.itemname1.style.backgroundColor='';
    form.quantity1.style.backgroundColor='';
   form.itemname2.style.backgroundColor='';
    form.quantity2.style.backgroundColor='';
   form.itemname3.style.backgroundColor='';
    form.quantity3.style.backgroundColor='';
    form.itemname4.style.backgroundColor='';
    form.quantity4.style.backgroundColor='';
	}
	
	  
	 

	
	   alert("your order has been placed.");
 return true;
 }

 function valid_sale() 
{
    alert("Invoice has been created of the order.");
	return true;
}

function valid_updateitem(form) {
if (form.itemname.value=='-------Item Name-------') {
    alert("You must indicate Item Name.");
    form.itemname.style.backgroundColor='pink';
    return false;
  }
  else { form.itemname.style.backgroundColor=''; }  
  
  if (form.quantity.value=='' || form.quantity.value<=0 || !IsNumeric(form.quantity.value)) {
    alert("You must indicate valid quantity.");
    form.quantity.style.backgroundColor='pink';
    return false;
  }
  else { form.quantity.style.backgroundColor=''; }  
  
  alert("Stock of Item has been Updated.");
  return true;
  }