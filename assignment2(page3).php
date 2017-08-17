<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#design1 {
	position:absolute;
	width:"750";
	height: "90";
	z-index:-1;
	left: 40px;
	
}
#heading
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:25px;
	color:#333;
	background-color:#06F;
	border:1px solid #3F3;
	
}
#image {
    margin: 10px;
     border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    float: left;
    width: "600";
	height:"300";
	opacity:0.5;
	
}
#image:hover {
    border: 1px solid #777;
	opacity:1;
	
}
#image1 {
    margin: 10px;
     border: 1px solid #ddd;
    border-radius: 50%;
    padding: 5px;
    float: left;
    width: "600";
	height:"300";
	opacity:0.5;
	
}
#image1:hover {
    border: 1px solid #777;
	opacity:1;
	
}
#foot{
	width:"1330";
	height:"40";
	background-color:#06C;
	color:black;
	font-size:25px;
	text-align:center;
	border:1px solid #333;
}
body{
	border: 2px solid #CCC;
    border-radius: 10px;
}


</style>
</head>
<?php
   require_once("header2.php"); ?>

<body>
 <table width="1340" height="90" cellpadding="0" cellspacing="0">
 <tr>
 <td width="750" height="90"><img id="design1" src="dps_kalyanpur.jpg" width="750" height="90" /> </td>
 <td id="search" width="70" height="60"> <form>
  <input type="text" name="search" placeholder="Search..">
</form></td>
</tr>
</table>
<table width="1330" height="100" cellspacing="10" cellpadding="5">
<tr>
<td width="1330" height="110" ><marquee direction="left" scrollamount="10" id="heading">PHOTO GALLERY </marquee></td></tr></table>
 </tr></table>
 <table width="600" height="300" cellspacing="5">
 <tr>
 <td width="400" height="90" ><img id="image" width="600" height="400" src="40.jpg" /></td>
 <td width="400" height="90"><img id="image" width="600" height="400" src="dpsbhopal.jpg" /></td>
 </tr>
 </table>
 <table width="600" height="300" cellspacing="5">
 <tr>
 <td width="400" height="90" ><img id="image1" width="600" height="400" src="-45309_65164.jpg" /></td>
 <td width="400" height="90"><img id="image1" width="600" height="400" src="22836308691_39d2396b9c_b.jpg" /></td>
 </tr>
 </table>
 <table width="600" height="300" cellspacing="5">
 <tr>
 <td width="400" height="90" ><img id="image1" width="600" height="400" src="del1437129347.jpeg" /></td>
 <td width="400" height="90"><img id="image1" width="600" height="400" src="DSC00824AA.jpg" /></td>
 </tr>
 </table>
 <table width="600" height="300" cellspacing="5">
 <tr>
 <td width="400" height="90" ><img id="image" width="600" height="400" src="DSC04144.jpg" /></td>
 <td width="400" height="90"><img id="image" width="600" height="400" src="juniorcollage.jpg" /></td>
 </tr>
 </table>
 <table width="1330" height="40" cellspacing="0" cellpadding="0"><tr>
<td width="1330" height="40" id="foot" ><footer> Copyright &copy; SHIVAM KUMAR </footer></td></tr></table>
  
</body>
</html>