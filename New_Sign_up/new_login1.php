<!DOCTYPE HTML>
<html>
<head>
    <style type="text/css">
        body{
            background-image: url(plain2.jpg);
            background-repeat:no-repeat;
            background-size:cover;
            /*background-color:#afaabb;*/
        }
        .wrapper{
            position:relative;
            min-height:100%;
        }
        .header-bar.centered{
            height:100px;
            overflow:hidden;    
            box-shadow:1px 1px 10px 5px #fff;
            border-radius:5px;
        }
        .banner{
            text-align:center;
        }
        .banner h1{
            font-size: 38px;
            margin-bottom: 20px;
            font-family:arial,cursive;
            color: lightblue;
            font-weight:300;
            margin-top:0px;
        }
        .banner h2{
            margin-bottom:15px;
            font-family:arial,verandana;
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
/*            background-color: #add8e6*/;
	        background-color:#dddfff;
            padding: 20px 25px 30px;
            margin: 50px auto 25px;
            border-radius: 5px;
            box-shadow: 10px 10px 10px 2px rgba(0, 0, 0, 0.3);
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
            color: black;
            font-family:arial,cursive;
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
<?php
    if (isset($_COOKIE['mycookie'])) {
        $v = $_COOKIE['mycookie'];
      //  echo $v;
        $val = explode("%", $v);
      //  echo "$val[0] <br> $val[1]";
    }
else
    {
    $val[0]=$val[1]="";
}
?>
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
        <!--<div class="banner">
            <h1>LOGIN PAGE</h1>
            <h2 class="hidden-small">Sign in to Continue</h2>
        </div>-->
        <div class="main-content no-name">
            <div class="card signin-card pre-shift no-name">
                <div class="circle-mask" style=" ">
                    <canvas id="canvas" class="circle" height="96" width="96"></canvas>
                </div>
                <form action="check.php" name="login" method="post">
                    <div id="first-form" class="form -panel first valid">
                        <div class="slide-out">
                            <div class="input-wrapper focused">
                                <div id="identifier-shown">
                                    <?php
                                    echo "<input id='username' type='text'  name='username' placeholder='Enter User Name' value='$val[0]' required></input>";
                                    echo "<input id='password' type='password' name='password' placeholder='Enter Password' value='$val[1]' required></input>";
                                    ?>
                                    <input type="checkbox" name="remember" style="margin-top:10px;"/> <font style="font-family:cursive;">Remember Me</font>
                            <p><input type="submit" value="Sign In" class="rc-button rc-button-submit" id="login" name="signin" /></p>
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



