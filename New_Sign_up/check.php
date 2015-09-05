<?php
$username = $_POST['username'];
$password = $_POST['password'];
$remember = isset($_POST['remember']) ? TRUE: FALSE;

var_dump($remember);
    if(isset($_POST['signin']))
    {
        if ($remember==TRUE) {
            $cookie_name = 'mycookie';
            $cookie_value = $username. "%" .$password;
            setcookie($cookie_name,$cookie_value,time()+(60*60*24*30),'/New_Sign_up'); //cookie set for 1 day :-D
        }
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("student_record",$conn);
	$query_student ="select username,password from record where username='$username' and password='$password'";
    $result  = mysql_query($query_student);
	$row_student=mysql_fetch_array($result);
    $query_teacher ="select username,password from teacher_record where username='$username' and password='$password'";
    $result1  = mysql_query($query_teacher);
	$row_teachers=mysql_fetch_array($result1);
	if(!empty($row_student['username']) AND !empty($row_student['password']) )
	{
        /*$student_file = fopen("student_check.php","r+") or die("Unable to open file");
        echo fread($student_file,filesize("student_check.php"));
        fclose($student_file);*/
        header('Location: student_check.php');

	}
    else if(!empty($row_teachers['username']) AND !empty($row_teachers['password']))
    {
        /*$teacher_file = fopen("teacher_check.html","r+") or die("Unable to open file");
        echo fread($teacher_file,filesize("teacher_check.html"));
        fclose($teacher_file);*/
        header('Location: teacher_check.html');
    }
	else
	{	
echo <<<EOT
<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<pre><h1 align="center">Login Failed !!!! </h1></pre>
<p align="center"><a href="new_login1.php" class="btn btn-info btn-lg">SIGN IN</a></p>
</body>
</html>
EOT;
    }
    }
?>