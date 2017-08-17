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
#search{
 

	width:"70";
	height:"60";
    box-sizing: border-box;
   
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
   
 }
 #mar{
	 font-size:18px;
	 font-family:Georgia, "Times New Roman", Times, serif;
	 font-style:italic;
	 color:#00F;
	 background-color:#CCF;
 }
 #image {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: "1300";
	height:"200";
	opacity:0.5;
	box-shadow:10px #333333;
}

#image:hover {
    border: 1px solid #777;
	opacity:1;
	
}
#para1{
	font-size:18px;
	font-family:Tahoma, Geneva, sans-serif;
	color:#06F;
	border:2px dotted #663300;
	width:"600";
	height:"250";
	float:left;
	background-color:#CFF;
	
	
}
#about
{
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
	color:#C9F;
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
 
 </tr></table>
<table width="1330" height="100" cellpadding="0" cellspacing="0">
<tr>
<td width="1330" height="100" cellpadding="0" cellspacing="0"><marquee direction="left" scrollamount="7" id="mar"> Delhi Public School Society is one of the largest institutions providing education at school level in India and abroad. </marquee></td></tr></table>
<table width="1340" height="120" cellpadding="0" cellspacing="0">
<tr>
<td width="1300" height="200"><img id="image" src="581021467033296.png" /></td></tr></table>

<table width="1330" heigh="550" cellspacing="50">
<tr>
<td width="600" height="250" id="para1"> <p> <strong id="about"> About us</strong><br /> <br />The Location of DPS kalyanpur in an immaculate landscape situated in the outskirts of the city,surrounded by Subarnarekha river and Dalma hills. The greenery spread en route instills in every mind to gather momentum in one's life throughout and never to back down. The building is located far from the madding crowd, totally away from the hustle-bustle of the city and the children here get the vivid imaginative ambiance to study</p></td>
<td width="600" height="250" id="para1"><p><strong id="about">Principal's Desk</strong><br /><br />It is said that if the foundation is laid well no upheaval can shake the structure. This also applies to human beings wherein the things learnt during childhood remain with one throughout life. Lessons learnt in the formative years, where the mind is most impressionable, form the bedrock of an individual’s personality and his way of thinking.</p></td>
<td width="600" height="250" id="para1"><p><strong id="about">Pro-Vice Chairman</strong><br /> <br />I feel elated to have a few words with you that in the fast changing times, we have to stand the competition in the global market knowledge as power was never so presiding a passion for making self and possession as it has become so today. In whatever age we may live, the ultimate objective of education is to understand life in its full length.</p></td>
</tr></table>
<table width="1330" height="40" cellspacing="0" cellpadding="0"><tr>
<td width="1330" height="40" id="foot" ><footer> Copyright &copy; SHIVAM KUMAR </footer></td></tr></table>

</body>
</html>