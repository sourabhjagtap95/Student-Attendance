
<html>
<head>
    <style type="text/css">
        body{
            background-image: url("blue1.jpg");
            background-repeat:no-repeat;
        }
        .wrapper{
            position:relative;
            min-height:100%;
        }
        .header-bar.centered{
            height:100px;
            overflow:hidden;
        }
        .banner{
            text-align:center;
        }
        .banner h1{
            font-size: 38px;
            margin-bottom: 20px;
            font-family:cursive;
            color: lightblue;
            font-weight:300;
            margin-top:0px;
        }
        .banner h2{
            margin-bottom:15px;
            font-family:verandana;
            color: lightblue;
            font-weight:400;
            margin-top:0px;
            font-size:14px;
        }
        .main-content{
            height:300px;
            
        }
        .signin-card{
            height: 500px;
            position: relative;
            overflow:hidden;
            width: 274px;
            height:auto;
            padding: 40px;
        }
        .card{
            margin-bottom: 0px;
            background-color: #add8e6;
            padding: 20px 25px 30px;
            margin: 0px auto 25px;
            border-radius: 5px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .circle-mask{
            display: block;
            height: 96px;
            width: 96px;
            overflow: hidden;
            border-radius: 100%;
            margin-left: auto;
            margin-right: auto;
            z-index: 100;
            margin-bottom: 10px;
            background-size: 96px auto;
            background-repeat: no-repeat;
            background-image: url("logo.jpg");
            transition: opacity 0.075s ease 0s;
        }
        #canvas{
            transition: opacity 0.075s ease 0s;
            opacity: 0.01;
        }
        #first-form{
            z-index: 2;
        }
        .form-panel{
            width: 274px;
            box-sizing: border-box;
            transform: traslateZ(0px);
            position: absolute;
        }
        .slide-out{
            transform: translate3d(0px ,0px, 0px);
            display: block;
            transition-property: transform, opacity;
            transition-duration: 0.1s;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
        .input-wrapper{
            position: relative;
        }
        .hidden-label{
            position: absolute !important;
            clip: rect(1px, 1px, 1px, 1px);
            height:0px;
            width:0px;
            overflow: hidden;
            visibility: hidden;
        }
        .signin-card #username,.signin-card #password{
            margin-top: 16px;
            margin-bottom: 0px;
            direction: ltr;
            height: 44px;
            font-size: 16px;
        }
        .signin-card input[type="text"],.signin-card input[type="password"],.signin-card input[type="submit"]{
            width: 100%;
            display: block;
            margin-bottom: 10px;
            z-index:1;
            position: relative;
            box-sizing: border-box;
            padding: 0px 8px;
            margin: 0px;
            background: none repeat scroll 0% 0$ #FFF;
            border-color: #C0C0C0 #D9D9D9 #D9D9D9;
            border-image: none;
            border-radius: 5px;
            color: #654322;
            font-family:cursive;
        }
        .card .rc-button{
            width: 100%;
            padding 0px;
        }
        input[type="submit"]{
            font-family: Arial,sans-serif;
            font-size: 13px;
        }
        .rc-button{
            display: inline block;
            min-width: center;
            text-align: center;
            color: #444;
            font-size: 14px;
            font-weight: 700;
            height:36px;
            line-height: 36px;
            transition: all 0.218s ease 0s;
            border: 1px solid #DCDCDC;
            background-image: -moz-linear-gradient(center top, #F5F5F5, #F1F1F1);
            cursor: default;
        }
        .rc-button-submit{
            border: 1px solid #3079ED;
            color: #FF3244;
            text-shadow :0px 1px rgba(0,0,0,0.1);
            background-color: #4D90FE;
            background-image: -moz-linear-gradient(center top, #4D90FE, #4787ED);
        }
        .create-account{
            margin: 0px 0px 10px;
            color: #555;
            font-size: 20px;
            text-align:center;
        }
        a ,a:hover, a:visited{
            color: #427FED;
            cursor: pointer;
            text-decoration: none;
        }
        .logo img{   
            height:100px;
            width:600px;
            display:block;
            margin-left:auto;
            margin-right:auto;
        }
    </style>
</head>

<body>
<div class="wrapper">
    <div class="header-bar centered">
        <div class="header-content">
            <div class="logo">
                <img src="mit_logo.png"/>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="banner">
            <h1>LOGIN PAGE</h1>
            <h2 class="hidden-small">Sign in to Continue</h2>
        </div>
        <div class="main-content no-name">
            <div class="card signin-card pre-shift no-name">
                <div class="circle-mask" style=" ">
                    <canvas id="canvas" class="circle" height="96" width="96"</canvas>
                </div>
                <form action="?" name="login" method="post">
                    <div id="first-form" class="form -panel first valid">
                        <div class="slide-out">
                            <div class="input-wrapper focused">
                                <div id="identifier-shown">
                                    <div>
                                    <label class="hidden-label" for="Username">
                                        Enter your User Name
                                    </label>
                                    </div>
                                    <input id="username" type="text" autofocus="" name="username" placeholder="Enter User Name" required></input>
                                 <input id="password" type="password" autofocus="" name="password" placeholder="Enter Password"></input>
                            <p><input type="submit" value="Sign In" class="rc-button rc-button-submit" id="login" required/></p>
                                </div>
                            </div>
                        </div>
                    </div>
            <p class="create-account"><a href="new_home.php">Create account</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
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

