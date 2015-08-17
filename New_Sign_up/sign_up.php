<!DOCTYPE HTML>
<html>
<head>    
<style type="text/css">
body{
    background-color:bisque;
}
table{
    text-align: justify;
    background-position: center;
    color:fuchsia;
}
h1{
    font-family: arial;
    text-decoration: underline;
    color: coral
}
h3{
    color: blueviolet;
}
h4{
    font-family: cursive; 
    color: green;
    position:absolute;
    left:600px;
    top:185px;
}
#button{
    border-radius: 10px;
    height: 30px;
    background: #ddab10;
    font-weight: bold;
    position:absolute;
    left:500px;
    top:700px;
}
#button1{
    border-radius: 10px;
    height: 30px;
    background: #ddab10;
    font-weight: bold;
    position:absolute;
    left:700px;
    top:700px;
}
</style>
</head>
<body>
    <form action="verify.php" method="POST" name="sign_up">
    <h1 align="center">SIGN UP FORM FOR STUDENTS</h1>
    <p align="center">Fields Marked with (<font color="red">*</font>) are compulsory.</p>
    <table border="5px" width="auto" align="center">
    <tr>
        <td><h3>NAME:<font color="red">*</font></h3></td> <td><input type="text" placeholder="First Name" name="firstname" required/><input type="text" placeholder="Last Name" name="lastname" required/></td>
        </tr>
	<tr>
	<td><h3><!--<form action="?" method="post">-->USERNAME:<font color="red">*</font></td><td><input type="text" placeholder="Username" name="username" required/>
<!--<?php
$user=isset($_POST['username'])?$_POST['username']:"";
$note="";
$conn=mysql_connect('localhost','root','');
mysql_select_db('student_record',$conn);
$query=mysql_query("SELECT username FROM record where username='$user'");
$row=mysql_fetch_array($query);
if(!empty($row['username']))
    {
    $note="<h4>Username available</h4>";
    echo $note;
}
else{
    $note= "<h4>Username Already exists !</h4>";
        echo $note;
}
?>
        </form>-->
        </td>
	</tr>
	<tr>
	<td><h3>PASSWORD:<font color="red">*</font></td><td><input type="password" placeholder="Password" name="password" required/></td>
	</tr>
        <tr>
        <td><h3>CLASS:<font color="red">*</font></h3></td>
            <td>
                <select>
                <option value="">DEPARTMENT</option>
                <option value="comp">COMPUTER</option>                                 
		<option value="e&tc">E&TC</option>
                <option value="mech">MECHANICAL</option>
                <option value="civil">CIVIL</option>
                <option value="it">IT</option> 
                </select>
                <select>
                <option>YEAR</option>
                <option value="S.E">Second Year (S.E)</option>
                <option value="T.E">Third Year (T.E)</option>    
                <option value="B.E">Final Year (B.E)</option>
                </select>
                <select>
                <option>DIVISION</option>
                <option value="A">DIVISION-A</option>
                <option value="B">DIVISION-B</option>
                <option value="C">DIVISION-C</option>
                </select>
                <input type="number" placeholder="Roll No." name="rollno"/>
            </td>
        </tr>
    <tr>
    <td><h3>EMAIL-ID:</h3></td><td><input type="email" placeholder="username@gmail.com" name="email-id"/></td>    
    </tr>
    <tr>
        <td><h3>MOBILE NUMBER:<font color="red">*</font></h3></td><td>
        +91 <input type="text" placeholder="Mobile Number" name="mobile" required/></td>
    </tr>
        <tr>
        <td><h3>DATE OF BIRTH:<font color="red">*</font></h3></td>
	<td>
	<select name="date1">
	<option>DATE</option> 
	<?php
		for($i=1;$i<32;$i++)
		{	
			echo "<option value='$i'>$i</option>";
		}
	?>
	</select>
	<select name="month">
	<option>MONTH</option>
	<option value="jan">January</option>
	<option value="feb">February</option>
	<option value="mar">March</option>
	<option value="apr">April</option>
	<option value="may">May</option>
	<option value="jun">June</option>
	<option value="jul">July</option>
	<option value="aug">August</option>
	<option value="sep">September</option>
	<option value="oct">October</option>
	<option value="nov">November</option>
	<option value="dec">December</option>
	</select>
	<select name="year">
	<option>YEAR</option>
	<?php
		for($i=1960;$i<2016;$i++)
		{
			echo "<option value='$i'>$i</option>";
		}
	?>
	</select>
	<input type="date" name="dob1" placeholder="dd-mm-yyyy"/>
	</td>
        </tr>
        <tr>
        <td><h3>ADDRESS:<font color="red">*</font></h3></td><td><input type="text" placeholder="Building Number..." name="building" required/>
            <input type="text" placeholder="Locality..." name="locality" required/>
            <input type="text" placeholder="District, Taluka..." name="district" required/>
            <input type="text" placeholder="Pincode" name="pincode" required/></td>
        </tr>
    </table>
    <input type="submit" value="SIGN UP" name="submit" id="button"/>
        <input type="reset" value="RESET" name="reset" id="button1"/>
        </form>
</body>
</html>

