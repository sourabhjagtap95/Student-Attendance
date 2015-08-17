<?php

	$userid = $_POST['username'];
	$pass = $_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email-id'];
	$mobile=$_POST['mobile'];
	$dob=$_POST['dob1'];
	$building=$_POST['building'];
	$loc=$_POST['locality'];
	$dist=$_POST['district'];
	$pin=$_POST['pincode'];
	/*$date=$_POST['date1'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$datef="";
	$monthf="";
	$yearf="";
	switch($date)
	{
	case 1:$datef="01";
	break;
	}
	switch($month)
	{
	case "jan":$monthf="Jan";
	break;
	}
	switch($year)
	{
	case "1995":$yearf="1995";
	break;
	}*/
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("student_record",$conn);
	


	$query = "insert into record(username,password,firstname,lastname,email,mobile,dob,address) values ( '$userid' , '$pass' , '$firstname' , '$lastname' , '$email' , '$mobile' , '$dob' , '$building,$loc,$dist,$pin')";


	mysql_query($query);
	$status=false;
	$to = "sourabhjagtap95@gmail.com";
	$subject = "Account Info !!";

	$message = <<<EMAIL
	Thank You for registeration !!!
	Your Username is : $userid
	Your Password is :$pass
	Keep it Confidential :-D.
EMAIL;

// Always set content-type when sending HTML email
/*$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
*/
/*// More headers
$headers .= 'From: localhost' . "\r\n";
*/
$headers='$email';
$status=mail($to,$subject,$message,$headers);
if(!$status)
{
	echo "Sorry there was a problem sending mail!! ";
}
else
	echo "Sent";
?>

<html>
<head>
<style type="text/css">
.button{
	text-align:center;
	border:5px;
	border-radius: 10px;
	color:red;
	height: 30px;
   	background: #ddaba3;
    	font-weight: bold;
	position:absolute; 
	left:650px;
	top:100px;
}
</style>
<body bgcolor="cyan">
<h1 align="center">DATABASE CREATED SUCCESSFULLY !!!</h1>
<h1 align="center">Mail has been Sent Succesfully.</h1> 
<p align="center">
<form action="login.php" method="post" name="verify">
<input type="submit" value="Log in" name="login" class="button"/>
</form></p>

</body>
</html>
