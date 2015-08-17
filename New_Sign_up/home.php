<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body{
	background-color:#acf876;
}
/*h1{
	position:absolute;
	left:500px;
	top:100px;
	font-family:geneva;	
	color:#ff4563;
}*/
#button{
       border-radius: 10px;
        height: 30px;
        background: #ddab10;
        font-weight: bold;
	font-family:verandana;
}
#button1{
       border-radius: 10px;
        height: 30px;
        background: #ddab10;
        font-weight: bold;
	font-family:verandana;
}	
table {
	position:absolute;
	left:490px;
	top:240px;
	text-align:center;
	color:#4eded4;
}
table th{
	font-family:courier;
	color:#ed5df2;
}
div {
        width: 1270px;
        padding: 1px;
        border: 2px solid #4ef453;
        margin: 3px;
    border-radius:10px;
	background-color:#aee842;
}
div a{
	font-family:cursive;
	color:#326acd;
	text-decoration:none;
}
div h3{
	font-family:arial;
	color:#de5643;
	text-align:center;
}

</style>
</head>
<body>
<div>
<h3><u>STUDENT ATTENDANCE RECORD</u> </h3><a href="login.php" >Home</a>&nbsp;&nbsp;&nbsp;<a href="login.php" >About us</a>
</div>
<table border="5px" width="300px" align="center">
<th colspan="2"><h1>SIGN UP AS:</h1></th>
<tr>
<form action="sign_up.php" method="post" name="home">
<td><input type="submit" name="student" value="STUDENT" id="button"/></td>
</form>
<td><form>
<input type="submit" name="teacher" value="TEACHER" id="button1"/></td>
</form></tr>
</table>
</body>
</html>
