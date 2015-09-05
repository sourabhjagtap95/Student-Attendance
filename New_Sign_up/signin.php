<html>
<head>
<style type="text/css">
body{
	background-color:#acf876;
}
h1{
	font-family:cursive;
	color:#daa354;
	text-align:center;
}
</style>
<?php
session_start();
$username=$_POST['username'];
$pass=$_POST['password'];
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("student_record",$conn);
	$query =mysql_query( "select username,password from record where username= '$username' and password='$pass'");
	$row=mysql_fetch_array($query);
	if(!empty($row['username']) AND !empty($row['password']))
	{
		echo "<h1>LOGIN SUCCESSFULL!!! </h1>";

	}
	else
	{	
		echo "<h1>Login Failed !!!! Check username or password again.</h1>";
	}


?>
