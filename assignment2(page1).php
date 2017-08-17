<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
	width:750px;
	height:138px;
	z-index:-1;
	left: 40px;
	
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}


.slideshow-container {
  max-width: 1330px;
  position: relative;
  margin: auto;
  height:"300";
}


.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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
#button3
{
	float:left;
	width:20%;
	
	 background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
	
  
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 4px;
    cursor: pointer;
}
#button3:hover
{
	background-color: #008CBA;
    color: white;
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
#mar{
	 font-size:18px;
	 font-family:Georgia, "Times New Roman", Times, serif;
	 font-style:italic;
	 color:#00F;
	 background-color:#CCF;
 }
 

</style>

</head>
<?php
   require_once("header2.php"); ?>

<body>
<table width="1250px" height="10" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="1250" height="10"> <div id="design1"><img src="dps_kalyanpur.jpg" width="750px" height="138px" /></div></td>
<td id="search" width="150px" height="70"> <form>
  <input type="text" name="search" placeholder="Search..">
</form></td>
</tr>
</table>
<table width="1330" height="80" cellpadding="70" cellspacing="70">
<tr>
<td width="1330" height="90" cellpadding="70" cellspacing="70"><marquee direction="left" scrollamount="7" id="mar"> Delhi Public School Society is one of the largest institutions providing education at school level in India and abroad. </marquee></td>
</tr></table>
<table width="1330" height="200" cellspacing="10" cellpadding="10">
<tr>
<td width="1330" height="200">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="phpnYXOZ5_thb.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="IMG_3192.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="40 (1).jpg" style="width:100%">
  <div class="text"></div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</td>
</tr>
</table>
<div>

  <form  method="POST" action="reg_process2.php">
  <fieldset>
    <legend id="leg">Registration Form</legend>
    <label for="name">Name</label>
    <input type="text"  name="name" placeholder="Your name..">

    <label for="email">Email id</label>
    <input type="email"  name="email" placeholder="Your email id.."><br />
    <label for="phone">PHONE NUMBER</label>
    <input type="phone"  name="phone" placeholder="Your phone number is.."><br />
    <label for="dob">DATE OF BIRTH</label>
    <input type="date"  name="dob" placeholder="Your date of birth is.."><br />
    <label for="class">CLASS</label>
    <select  name="class">
      <option value="nursary">NURSARY</option>
      <option value="lkg">LKG</option>
      <option value="ukg">UKG</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
  
   <table width="100%" height="10px" >
     <tr>
     <td width="50%" height="10px"><input id="button" type="submit" name="register" value="Register!" onClick="validate()"></td>
    <td width="50%" height="10px"> <button id="button2" type="reset" value="Reset">Reset</button></td></tr></table>
      </form>
      <form method="post" action="trial.php"><table width="100%" height="10px" cellpadding="0" cellspacing="0">
      <tr>
      <td width="20%" height="10px" ><button id="button3" type="submit" value="submit">Already Registered<a href="trial.php"</a>      </button></td>
      </tr>
      </table>
      </form>
     
  </fieldset>
</div>


 <table width="1330" height="40" cellspacing="0" cellpadding="0"><tr>
<td width="1330" height="40" id="foot" ><footer> Copyright &copy; SHIVAM KUMAR </footer></td></tr></table>



</body>
</html>