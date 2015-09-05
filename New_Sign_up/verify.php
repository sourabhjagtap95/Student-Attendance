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
    $classyear=$_POST['classyear'];
    $division=$_POST['division'];
    $rollno=$_POST['rollno'];
	$building=$_POST['building'];
	$loc=$_POST['locality'];
	$dist=$_POST['district'];
	$pin=$_POST['pincode'];
    $gender=$_POST['gender'];
	

    $conn = mysql_connect("localhost","root","");
	mysql_select_db("student_record",$conn);
    $check_user = "select * from record where username='$username'";
    $has_any = mysql_query($check_user);
    $num_rows = mysql_num_rows($has_any);
    if($num_rows==0)
    {
	   $query = "insert into record(username,password,firstname,lastname,email,mobile,gender,year,division,rollno,building,locality,district,pincode,birthdate,birthmonth,birthyear) values('$username','$password','$firstname','$lastname','$email','$mobile','$gender','$classyear','$division','$rollno', '$building','$loc','$dist','$pin','$birthdate','$birthmonth','$birthyear')";
        
        if(mysql_query($query))
{    
        $created = fopen("database_created.php","r+") or die("Unable to open file");
        echo fread($created,filesize("database_created.php"));
        fclose($created);
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
    echo "Data Not Inserted";
}

    }
    else
    {
        $exists=fopen("username_exists.php","r+") or die ("Unable to open file");
        echo fread($exists,filesize("username_exists.php"));
        fclose($exists);
    }
?>