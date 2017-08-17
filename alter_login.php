<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
	function validate(){
		var name = document.getElementById("email").value;
		if (name=="") {
			document.getElementById("hint").innerHTML="This field should not be blank!";
			alert("This field Name should not be blank!");
		}
	}
</script>
</head>
<style>
input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#button
{
	float:left;
	width:40%;
	
	 background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
	
   
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 4px;
    cursor: pointer;
}
#button:hover
{
	background-color: #008CBA;
    color: white;
}
body{
	width:100%;
	
	background-repeat:no-repeat;
	background-image:url(14856474-grunge-recycle-paper-background-design-with-rope-binding-Stock-Photo.jpg);
}
#login{
	font-size:30px;
}
</style>

<body>
<div>
  <form  method="POST" action="reg_process3.php">
  <fieldset>
    <legend id="login">Login Form</legend>
    <label for="email">Email id</label>
    <input type="email"  name="email" placeholder="Enter your Email Id">

    <label for="password">Password</label>
    <input type="password"  name="password" placeholder="Enter your Password"><br />
    <table width="100%" height="10px" >
     <tr>
     <td width="50%" height="10px"><input id="button" type="submit" name="register" value="Register!" onClick="validate()"></td>
    </fieldset>
    </form>
    </div>
</body>
</html>