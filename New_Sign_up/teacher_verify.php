<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$birthdate=$_POST['date'];
    $birthmonth=$_POST['month'];
    $birthyear=$_POST['year'];
    $gender=$_POST['gender'];
	$uid = $_POST['uid'];
    $flag=0;
    $conn = mysql_connect("localhost","root","");
	mysql_select_db("student_record",$conn);
/* check uid*/
$check_uid = "select uid from uids where name='$firstname' and uid='$uid'";
$result = mysql_query($check_uid);
$row = mysql_fetch_array($result);
if(!empty($row['uid']))
{
    $flag=1;
}

    $check_user = "select * from teacher_record where username='$username'";
    $has_any = mysql_query($check_user);
    $num_rows = mysql_num_rows($has_any);
    if($num_rows==0 && $flag==1)
    {
	   $query = "insert into teacher_record(username,password,firstname,lastname,email,mobile,gender,birthdate,birthmonth,birthyear) values('$username','$password','$firstname','$lastname','$email','$mobile','$gender','$birthdate','$birthmonth','$birthyear')";
        
        if(mysql_query($query))
        {
echo <<<EOT
<html>
<head>
<link rel='stylesheet' href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<form role="form" action="new_login1.php">
    <div class="form-group">
        <pre><h1 align="center">DATABASE CREATED SUCCESSFULLY !!!</h1></pre>
        <div class="form-group">
            <p align="center"><button type="submit" name="login" class="btn btn-success">LOG IN</button></p>
        </div>
    </div>
</form>
</body>
</html>
EOT;
/* Sending Mail*/
$to      = 'sourabhjagtap95@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
    }
    else
    {
            echo "data Not inserted";
    }
    }
    else if($num_rows!=0)
    {
echo <<<EOT
<html>
<head>
<link rel='stylesheet'  href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<form role="form">
<div class="form-group">
<pre><h1 align="center">USERNAME ALREADY EXISTS !!! GO BACK AND SIGN UP AGAIN</h1></pre>
<div class="form-group">
<p align="center"><a class="btn btn-danger" href="teacher_sign_up.php">SIGN UP</a></p>
</div>
</div>
</form>
</body>
</html>
EOT;
    }
else if($flag==0)
{
echo <<<EOT
<html>
<head>
<link rel='stylesheet' href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<form role="form" action="teacher_sign_up.php">
    <div class="form-group">
        <pre><h1 align="center">INVALID UNIQUE IDENTIFICATION NUMBER!!!</h1></pre>
        <div class="form-group">
            <p align="center"><button type="submit" name="login" class="btn btn-warning">SIGN UP</button></p>
        </div>
    </div>
</form>
</body>
</html>
EOT;
}

?>