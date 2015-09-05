<html lang="en">
<head>  
<meta charset="utf-8"> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style type="text/css">
        body{
            background-image: url(plain2.jpg);
            /*background-color:#fff;*/
            background-repeat: no-repeat;
            background-size: cover;
        }
        .logo img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 100px;
            width: 600px;
        }
        .main h1{
            font-family: inherit,arial;
            text-align: center;
            color: black;
        }
        .box{
            box-shadow: 1px 1px 20px 5px black;
            height: auto;
            width: 600px;
            margin-bottom: 0px;
            overflow: hidden;
            padding: 20px 20px 30px;
            background-color: white;
            margin: 0px auto 25px;
            border-radius: 5px;
        }
        .name{
            box-shadow: 2px 2px 2px 2px grey;
            border-radius: 5px;
        }
       /* .clearfix{
            visibility: hidden;
            display: block;
            font-size: 0;
            content: '.';
            clear: both;
            height: 0;
        }*/
        /*.firstname input[type="text"]{
            direction: ltr;
            height: 30px;
            border-radius: 5px;
            font-size: 16px;
            width: auto;
            display: block;
            z-index: 1;
            background-color: aquamarine;
            box-sizing: border-box;
            padding: 0px 8px 1px;
            background: none repeat scroll 0% 0% #FFFFFF;
            background-image: none;
        }*/
        label{
            position: relative;
            margin: 0 10 1.5em;
            display: inline-block;
            /*box-shadow: 2px 2px 30px 2px  black;*/
            border-radius: 20px;
        }
       
        .name{
            font-family: inherit;
            color: black;
            font-size: 20px;
            padding: 0px 0px 8px;
        }
        fieldset{
            margin: 0;
            padding: 10px 8px;
            border: 0;
           /* border-top: 0;
            border-bottom: 50;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom-color: black;*/
        }
     
        #text-fields{
            direction: ltr;
            width: 100%;
            height: 37px;
            display: block;
            margin: 0;
            padding: 0 8px;
            background-color: aliceblue;
            border-radius: 3px;
            font-family: cursive,Veranadana;
            font-size: 16px;
            color: black;
            border-color: #121323;
            border-width: thin;
        }
       
	   #name{
           box-shadow:5px 5px 30px 5px black;
           background-color:#fffeee;
	   }
       .container{
          
           text-align: center;
           margin: auto;
           margin-top: 50px;
           font-size: 20px;
           text-transform: uppercase;
       }


        .button{
            margin-top:50px;
            margin-left:120px;
            }
      
          
        .div-class{
            clear: both;
            /*margin: 0 50px;*/
        }
        .radio-label{
            width: 150px;
            height: 40px;
            border-radius: 3px;
            border: 1px solid black;
            background-color: aliceblue;
        }
        input.radio:empty{
            margin-left: -999px;
        }
        input.radio:empty ~ .radio-label{
            position: relative;
            float: left;
            line-height: 2em;
            text-indent: 3em;
            /*margin-top: 2em;*/
            cursor: pointer;
        }
        input.radio:empty ~ .radio-label:before{
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            content: '';
            width: 2em;
            background: #d1d3d4;
            border-radius: 3px 0 0 3px;
        }
        input.radio:hover:not(:checked) ~ .radio-label:before{
            content: '\2714';
            text-indent: 1em;
            color: #c2c2c2;
        }
        input.radio:hover:not(:checked) ~ .radio-label {
            color: #888edf;
        }
        input.radio:checked ~ .radio-label:before {
            content:'\2714';
            text-indent: 1em;
            color: #9CE2AE;
            background-color: #4DCB6D;
        }
        input.radio:checked ~ .radio-label {
            color: #888edf;
        }
        input.radio:focus ~ .radio-label:before {
            box-shadow: 0 0 0 3px #999;
        }
        #radio-id2{
            background-color: blue;
        }
     
  
       
    </style>
    <script>
    function formValidation()
 {
    var date = document.student_registration.date;
    var month = document.student_registration.month;
    var year = document.student_registration.year;
    var classyear = document.student_registration.classyear;
    var division = document.student_registration.division;
    var flag=0;
    var username = document.student_registration.username;
    var firstname = document.student_registration.firstname;
    var lastname = document.student_registration.lastname;
    var password = document.student_registration.password;
    var confirm_password = document.student_registration.confirm_password;
    var email = document.student_registration.email;
    var mobile = document.student_registration.mobile;
    if(firstname_validation(firstname))
    {
        if(lastname_validation(lastname))
            {
                if(username_validation(username))
                    {
                        if(password_validation(password))
                            {
                                if(check_pass(password,confirm_password))
                                    {                       
                                        if(email_validation(email))
                                            {
                                                if(check_mobile(mobile))
                                                    {
                                                        if(check_dob(date,month,year))
                                                            {
                                                                if(check_class(classyear,division))     
                                                                {
                                                                    flag=1;
                                                                }
                                                            }
                                                    }
                                            }
						                      
                                    }
                            }
                    }
            }
	
    }
if(flag==1)
    return true;
else
    return false;
}
function firstname_validation(firstname)  
{  
    var format = /^[A-Za-z]+$/;
    if (firstname.value.match(format))  
    {  
        return true;  
    }  
    else
    {
        alert("First Name must be a valid name");  
        firstname.focus();  
        return false;
    }
}       
function lastname_validation(lastname)  
{  
    var format = /^[A-Za-z]+$/;
    if (lastname.value.match(format))  
    {  
        return true;  
    }  
    else
    {
        alert("Last Name must be a valid name");  
        lastname.focus();  
        return false;
    }
}
function username_validation(username)
{
    var letters = /^[A-Za-z][A-Za-z0-9]{5,12}$/;
    var wrong = /^[0-9]+$/;
    if(username.value.match(wrong))
        {
            alert("User Name should start with atleast with one alphabet");
            username.focus();
            return false;
        }
     if(username.value.match(letters))
        {
            return true;
        }
    else 
        {
            alert("User Name should be between 6 to 12 characters");
            username.focus();
            return false;
        }
}
function password_validation(password)  
{  
    var format = /^[\w]{6,12}$/;
    if (password.value.match(format))  
    {  
        return true;  
    }  
    else
    {
        alert("Password should be between 6 to 12 characters");  
        password.focus();  
        return false;
    }
}
function check_pass(password,confirm_password)
{
    if(confirm_password.value == password.value)
        {
            return true;
        }
    else
        {
            alert("Passwords do not match");
            confirm_password.focus();
            return false;
        }
}

function check_mobile(mobile)
{
    var numbers=/^[0-9]{10}$/;
    var plus = /^(\+91-|\+91|0)?\d{10}$/;
    if(mobile.value.match(numbers) || mobile.value.match(plus))
        {
            return true;
        }
    else
        {
            alert('Mobile must be a valid number');
            mobile.focus();
            return false;
        }
}
function email_validation(email)
{
    var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.value.match(format))
        {
            return true;
        }
    else
        {
            alert("Enter a valid email address (e.g someone@example.com)");
            email.focus();
            return false;
        }
}
function check_pass(password,confirm_password)
{
    
    if(confirm_password.value == password.value)
        {
            return true;
        }
    else
        {
            alert("Passwords do not match");
            confirm_password.focus();
            return false;
        }
}
function check_dob(date,month,year)
{
  if ( document.getElementsByName('date')[0].value == 'blank' )
    {
        alert("Please Select Birth Date");
        date.focus();
        return false;
    }
    
  else if ( document.getElementsByName('month')[0].value == 'blank1' )
    {
        alert("Please Select Birth Month");
        month.focus();
        return false;
    }
    
  else if ( document.getElementsByName('year')[0].value == 'blank2' )
    {
        alert("Please Select Birth Year");
        year.focus();
        return false;
    }
    return true;
}
function check_class(classyear,division)
{
    if ( document.getElementsByName('classyear')[0].value == 'blank3' )
    {
        alert("Please Select Current Year");
        classyear.focus();
        return false;
    }
    
    else if ( document.getElementsByName('division')[0].value == 'blank4' )
    {
        alert("Please Select Division");
        division.focus();
        return false;
    }
    return true;
}
    </script>
</head>
<body onload="document.student_registration.firstname.focus();">
    <form name="student_registration" action="verify.php" method="post" onsubmit="return formValidation();">
    <div class="header">
        <div class="logo">
            <img src="mit_logo.png" class="logo"/>
        </div>
        <div class="main clearfix">
            <h1>SIGN UP FORM FOR STUDENTS</h1>
            <div class="box">
                <div class="form-element multi-field name" id="name">
                    <fieldset>
                        <legend>
                            <strong>Name</strong>
                        </legend>
                        <label>
                            <input type="text" name="firstname" id="text-fields" spellcheck="false" placeholder="First" onchange="return firstname_validation(firstname);" required>
                        </label>
                        <label>
                            <input type="text" name="lastname" id="text-fields" spellcheck="false" placeholder="Last" onchange="return lastname_validation(lastname);" required>
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>Username</strong>
                        </legend>
                        <label>
                            <input type="text" name="username" id="text-fields" spellcheck="false" placeholder="User Name" onchange="return username_validation(username);" required> 
                        </label> 
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>Password</strong>
                        </legend>
                        <label>
                            <input type="password" name="password" id="text-fields" spellcheck="false" placeholder="Password" onchange="return password_validation(password);" required>
                        </label> 
                        <label>
                            <input type="password" name="confirm_password" id="text-fields" spellcheck="false" placeholder="Confirm Password" onchange="return check_pass(password,confirm_password);" required>
                        </label> 
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>Email-Id</strong>
                        </legend>
                        <label>
                            <input type="text" name="email" id="text-fields" spellcheck="false" placeholder="Email-id" onchange="return email_validation(email);" required>
                        </label> 
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>Mobile</strong>
                        </legend>
                        <label>
                            <input type="text" name="mobile" id="text-fields" spellcheck="false" placeholder="Mobile Number" onchange="return check_mobile(mobile);" required>
                        </label> 
                    </fieldset>
                      <fieldset>
                        <legend>
                            <strong>Date Of Birth</strong>
                        </legend>
                        <label>
                            <select id="text-fields" class="drop-down" name="date" required>
                                <option disabled selected value="blank">Date</option>
                                <?php
                                    for($i=1;$i<32;$i++)
                                    {
                                    echo "<option name='$i'>$i</option>";  
                                    }       
                                ?>
                            </select>
                          </label>
                          <label>
                            <select id="text-fields" class="drop-down" name="month" required>
                                <option disabled selected value="blank1">Month</option>
                                <option name="JAN">January</option>
                                <option name="FEB">February</option>
                                <option name="MAR">March</option>
                                <option name="APR">April</option>
                                <option name="MAY">May</option>
                                <option name="JUNE">June</option>
                                <option name="JULY">July</option>
                                <option name="AUG">August</option>
                                <option name="SEP">September</option>
                                <option name="OCT">October</option>
                                <option name="NOV">November</option>
                                <option name="DEC">December</option>
                            </select>
                        </label> 
                          <label>
                              <select id="text-fields" name="year" required>
                                <option disabled selected value="blank2">Year</option>
                                    <?php
                                     for($i=1960;$i<2016;$i++)
                                    {
                                    echo "<option name='$i'>$i</option>";  
                                    }  
                                    ?>
                              </select>
                          </label>
                          <!--<label>
                                <input type="date" id="text-fields">
                          </label>-->
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>Gender</strong>
                        </legend>
                        <div class="div-class">
                            <input type="radio" name="gender" id="radio-id" class="radio" required>
                            <label for="radio-id" class="radio-label">Male
                            </label>
                        </div>
                        <div class="div-class">
                            <input type="radio" name="gender" id="radio-id2" class="radio" required>
                            <label for="radio-id2" class="radio-label">Female
                            </label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>
                                Info
                            </strong>
                        </legend>
                        <label>
                            <select id="text-fields" name="classyear" required>
                                <option disabled selected value="blank3">Select Year</option>
                                <option name="SE">Second Year (S.E)</option>    
                                <option name="TE">Third Year (T.E)</option>
                                <option name="BE">Final Year (B.E)</option>
                            </select>   
                        </label>
                        <label>
                            <select name="division" id="text-fields" required>
                                <option disabled selected value="blank4">Divsion</option>
                                <option name="A">Division A</option>
                                <option name="B">Division B</option>
                                <option name="C">Division C</option>
                            </select>
                        </label>
                            <label>
                                <input type="text" name="rollno" id="text-fields" placeholder="Roll No." required>
                            </label>
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>Address</strong>
                        </legend>
                        <label>
                            <input type="text" name="building" id="text-fields" spellcheck="false" placeholder="Building or Plot no." required>
                        </label> 
                        <label>
                            <input type="text" name="locality" id="text-fields" spellcheck="false" placeholder="Locality.." required>
                        </label> 
                        <label>
                            <input type="text" name="district" id="text-fields" spellcheck="false" placeholder="District or Taluka.." required>
                        </label> 
                        <label>
                            <input type="text" name="pincode" id="text-fields" spellcheck="false" placeholder="Pincode.." required>
                        </label> 
                    </fieldset>
                </div>
                
               
                    <div class="button">
                    <button type="submit" class="btn btn-success btn-lg ">SUBMIT</button>
                    <button type="reset" class="btn btn-warning btn-lg ">RESET</button>
                        <a class="btn btn-danger btn-lg" href="new_login1.php">CANCEL</a>
                    </div>
                
                
            </div>
        </div>
    </div>
    </form>
</body>
</html>
