
function validateForm()
{
var x=document.forms["alumni"]["firstname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }

var w=document.forms["alumni"]["F_Hname"].value;
if (w==null || w=="")
  {
  alert("Father/Husband name must be filled out");
  return false;
  }
var z=document.forms["alumni"]["lastname"].value;
 if (z==null || z=="")
  {
  alert("last name must be filled out");
  return false;
  }
var t=document.forms["alumni"]["DateofBirth"].value;
if (t==null || t=="")
  {
  alert("First name must be filled out");
  return false;
  }
var group = document.alumni.Gender;
for (var i=0; i<group.length; i++) {
if (group[i].checked)
break;
}
if (i==group.length)
 alert("Please select Gender");

var s = document.alumni.MaritalStatus;
for (var j=0; j<s.length; j++) {
if (s[j].checked)
break;
}
if (j==s.length)
 alert("Please select MaritalStatus");

var d = document.alumni.course;
for (var k=0; k<d.length; k++) {
if (d[k].checked)
break;
}
if (k==d.length)
 alert("Please select course");

var h = document.alumni.YOP.value;
if(h=="")
{
alert("please Enter the Numeric only for Year of Passing");
document.alumni.YOP.focus();
return false;
}
if(isNaN(h))
{
alert("Enter the valid Year(Like : 1998)");
document.alumni.YOP.focus();
return false;
}
if((h.length !=4))
{
alert(" Your Year of passing must be of 4 Integers");
document.alumni.YOP.select();
return false;
}


var a = document.alumni.Residential_Address.value;
if(a=="")
{
alert("please Enter the details");
document.alumni.Residential_Address.focus();
return false;
}
if((a.length < 15) || (a.length > 100))
{
alert(" Your textarea must be 20 to 100 characters");
document.alumni.Residential_Address.select();
return false;
}

var p = document.alumni.Residential_no.value;
if(p=="")
{
alert("please Enter the Numeric only for telephone");
document.alumni.Residential_no.focus();
return false;
}
if(isNaN(p))
{
alert("Enter the valid Number");
document.alumni.Residential_no.focus();
return false;
}


var g = document.alumni.Mobile.value;
if(g=="")
{
alert("please Enter the Numeric only for Mobile");
document.alumni.Mobile.focus();
return false;
}
if(isNaN(g))
{
alert("Enter the valid Mobile Number(Like : 9566137117)");
document.alumni.Mobile.focus();
return false;
}
if((g.length !=10))
{
alert(" Your Mobile Number must be 1 to 10 Integers");
document.alumni.Mobile.select();
return false;
}


var y=document.forms["alumni"]["Email_ID"].value;
var atpos=y.indexOf("@");
var dotpos=y.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

}

