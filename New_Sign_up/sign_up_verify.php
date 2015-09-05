<?php
/*define('DB_HOST', 'localhost');
define('DB_NAME', 'student_record');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
*/
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());

$db=mysql_select_db(DB_NAME,$connection) or die("Failed to connect to MySQL: " . mysql_error()); 
function NewUser() 
{
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname']; 
    //$class = $_POST['']; 
    $email-id = $_POST['email-id']; 
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob']
    $query = "INSERT INTO student_record (First Name,Last Name,Email-Id,Mobile Number,Date Of Birth) VALUES ('$firstname','$lastname','$email-id','$mobile','$dob')";
    $data = mysql_query ($query)or die(mysql_error());
    if($data) 
    {
        echo "YOUR REGISTRATION IS COMPLETED..."; 
    } 
} 
function SignUp() 
{
    if(!empty($_POST['firstname'])) 
    {
        $query = mysql_query("SELECT * FROM student_record WHERE First Name = '$_POST[firstname]' AND Email-Id = '$_POST[email-id]'") 
            or die(mysql_error()); 
        if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
        { 
            NewUser(); 
        } 
        else 
        { 
            echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
        } 
    } 
} 
if(isset($_POST['submit'])) 
{ 
    SignUp(); 
}

?>