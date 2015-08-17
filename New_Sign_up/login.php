<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
body{
	background-color:#acf876;
	background-image:url('mit.png');	
	background-repeat:no-repeat;
	size:100;
	background-position:350px 100px;
}

h1{
	
	font-family:geneva;	
	color:#ff4563;
}
table h3{
	font-family:serif;
	color:green;
}
table{
	color:red;
	text-align: justify;
	background-position:center;
	background-color:#acdefa;
	position:absolute;
	left:420px;
	top:270px;
	border-radius:20px; 
}
#button{
    border-radius: 10px;
    height: 30px;
	width:70px;
    background: #ddab10;
	color:red;    
	position:absolute;
	left:480px;
	top:450px;   	
}
#button1{
        border-radius: 10px;
        height: 30px;
	width:70px;
        background: #ddab10;
	color:red;    
	position:absolute;
	left:640px;
	top:450px;   	
}
#acc{
	text-decoration:none;
	position:absolute;
	left:500px;
	top:500px;   
}
p{
	position:absolute;
	left:460px;
	top:220px;
} 
div {
        width: 1270px;
        padding: 1px;
        border: 2px solid #4ef453;
        margin: 3px;
	background-color:#aee842;
	border-radius:10px;
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
h4{
    font-family:algerian;
    position:absolute;
    color:#ed5468;
    left:520px;
    top:400px;
}
	
</style>
<script lang="JavaScript" type="text/javascript">
    $(document).ready(function(){
       $('div').mouseenter(function(){
          $('div').fadeTo('fast',0.5); 
       });
        
    });
    </script>
</head>
<body>
<div>
<h3><u>STUDENT ATTENDANCE RECORD</u> </h3><a href="login.php" >Home</a>&nbsp;&nbsp;&nbsp;<a href="login.php" >About&nbsp;&nbsp;Contact Us</a>
</div>
<form action="?" method="post" name="login">
<p align="center">Fields Marked with (<font color="red">*</font>) are compulsory.</p>
<table border="5px" >
<tr>
<td><h3>USERNAME <font color="red">*</font>:</h3></td><td><input type="text" name="username" placeholder="username" required/></td>
</tr>
<tr>
<td><h3>PASSWORD <font color="red">*</font>:</h3></td><td><input type="password" name="password" placeholder="password" required/></td>
</tr>
<tr>
    <button type="submit" name="signin" value="SIGN IN" id="button" class="btn btn-primary">SIGN IN</button>
<input type="reset" value="RESET" id="button1" />
<a href="home.php" id="acc"><h3><li>Create a new account.</li></h3></a>
</tr>
</table>
</form>
</body>
</html>


<?php
$username=isset($_POST['username'])?$_POST['username']:"";
$pass=isset($_POST['password'])?$_POST['password']:"";
$note="";
    if(isset($_POST['signin']))
    {
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("student_record",$conn);
	$query =mysql_query( "select username,password from record where username= '$username' and password='$pass'");
	$row=mysql_fetch_array($query);
	if(!empty($row['username']) AND !empty($row['password']))
	{
        $note="<h4>LOGIN SUCCESSFULL!!! </h4>";
		echo $note;

	}
	else
	{	
        $note="<h4>Login Failed !!!! </h4>";
		echo $note;
	}
    }
?>

