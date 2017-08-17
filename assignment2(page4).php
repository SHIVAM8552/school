<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
	function validate(){
		var name = document.getElementById("name").value;
		if (name=="") {
			document.getElementById("hint").innerHTML="This field should not be blank!";
			alert("This field Name should not be blank!");
		}
	}
</script>
<style type="text/css">
#design1 {
	position:absolute;
	width:"750";
	height: "138";
	z-index:-1;
	left: 40px;
	
}
#heading
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:25px;
	color:#FFF;
	background-color:#06F;
	border:1px solid #3F3;
}
	
#image {
    margin: 10px;
     border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    float: left;
    width: "1300";
	height:"100";
	
	
}
#image:hover {
    border: 1px solid #777;
	opacity:1;
	
}
#add
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:16px;
	color:#630;
	background-color:#FFF;
	border:1px solid #00F;
	border-radius:8px;
}
#head
{
	text-align:center;
	font-size:26px;
	font-family:Georgia, "Times New Roman", Times, serif;
	color:#0FF;
	border:2px dotted #663300;
}

#box {
    border-radius: 5px;
    background-color:#CCC;
    padding: 10px;
	font-size:15px;
	height:"500";
	width:100%;
	color:#000;
	
	
	
}
#box1{
	border:1px solid #999;
	width:100%;
	height:"500";
	background-color:#FFF;
	border-radius:8px;
	font-size:16px;
}
	

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=phone], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
	 background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
	float:left;
    width: 40%;
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
  background-color: #008CBA;
    color: white;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
#leg
{
	font-size:30px;
}
#button2
{
	float:right;
	width:40%;
	
	 background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
	
   
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 4px;
    cursor: pointer;
}
#button2:hover
{
	background-color: #008CBA;
    color: white;
}
#foot{
	width:"1330";
	height:"10px";
	background-color:#06C;
	color:black;
	font-size:25px;
	text-align:center;
	border:1px solid #333;
}

</style>
</head>
<?php
   require_once("header2.php"); ?>

<body>
<table width="1250" height="100" cellpadding="0" cellspacing="0">
 <tr>
 <td width="750" height="100"><img id="design1" src="dps_kalyanpur.jpg" width="750" height="100" /> </td>
 <td id="search" width="70" height="50"> <form>
  <input type="text" name="search" placeholder="Search..">
</form></td>
</tr>
</table>
<table width="1330" height="110" cellspacing="0" cellpadding="0">
<tr>
<td width="1330" height="110" ><marquee direction="left" scrollamount="10" id="heading">CONTACT US </marquee></td></tr></table>
 </tr></table>
 
<table width="1300" height="110" cellspacing="0" cellpadding="0">
<tr>
<td width="1300" height="110"><img id="image" width="1300" height="400" src="taxi-route-on-google-map1.png" /></td>
</tr>
</table>
<table width="300" height="115" >
<tr>
<td width="300" height="115"><address id="add"><strong>ADDRESS</strong><br /> DELHI PUBLIC SCHOOL <br /> PALM BEACH MARG <br/> SECTOR 16 </address></td>
</tr>
</table>
<div>
  <form  method="POST" action="reg_process4.php">
  <fieldset>
    <legend id="leg">CONTACT US FORM </legend>
    <label for="name">Name</label>
    <input type="text"  name="name" placeholder="Your name..">

    <label for="email">Email id</label>
    <input type="email"  name="email" placeholder="Your email id.."><br />
    <label for="subject">SUBJECT</label>
    <input type="text"  name="subject" placeholder="Subject.."><br />
    <label for="description">DESCRIPTION</label>
    <input type="text"  name="description" placeholder="Description.."><br />
    
    
     <table width="100%" height="10px" >
     <tr>
     <td width="50%" height="10px"><input id="button" type="submit" name="register" value="Register!" onClick="validate()"></td>
    <td width="50%" height="10px"> <button id="button2" type="reset" value="Reset">Reset</button></td></tr></table>
      </form>
      
      </fieldset>
      </div>
     <table width="1330" height="40" cellspacing="0" cellpadding="0"><tr>
<td width="1330" height="10px" id="foot" ><footer> Copyright &copy; SHIVAM KUMAR </footer></td></tr></table>

</body>
</html>