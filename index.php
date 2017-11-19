<html>
<head>
<meta charset="UTF-8">
<title>rank watch screenshot</title>
<style>
<!-- apply css-->
body{
	font-family: sans-serif;
	font-size: 14px;
	line-height: 19px;
	color: #000;
	background-color: azure;
}
#header{
	height: 78px; width: 100%;background: #4d5b76;
	font-size:25px;
	color:white;
}
.container{
width: 630px; height: auto; margin-left:30%;
}
.center{
width: 600px; height: auto;
padding:35px;
margin-left:20%;
}	
.input{
width:200px;
mergin-left:50%;
}
input[type="submit"]
{
width:50%;
margin-left:20%;
height:27px;
border-radius:5px;
}
</style>
</head>
<body>
<div id="header">
<center>Enter website URL LINK</center>
</div>
<!-- form for enter website url-->
<div class="container">
<div class="center">
<form action="screen_script.php" method="post">
<table style="border: 1px solid;">
<tr>
<td><input class="input" type="text" name="url"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>
