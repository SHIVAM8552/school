<!DOCTYPE HTML>
<html>
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
</head>
<style >
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

	
</style>

<body>
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
      <td width="20%" height="10px" ><button id="button3" type="submit" value="submit">Already Registered<a href="login.php"></a></button></td></tr></table></form>
     
  </fieldset>
</div>

</body>
</html>