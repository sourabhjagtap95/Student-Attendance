<!DOCTYPE HTML>
<html>
    <head>
        <style type="text/css">
        body{
            background-image: url(blue1.jpg);
        }
        .header{
            margin-left: auto;
            margin-right: auto;
            height: 100px;
        }
        .logo{
            display: block;
        }
            
        .logo img{
            height:100px;
            width:600px;
            display:block;
            margin-left:auto;
            margin-right:auto;
        }
        .title h1{
            font-family: cursive;
            color: aliceblue;
            text-align: center;
            display: block;
            margin-top: 150px;
        }
        .ph-button{
            border-style: solid;
            border-width: 0px 0px 3px;
            box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
            color: #FFFFFF;	   
            border-radius: 100px;
            cursor: pointer;
            display: inline-block;
            font-style: normal;
            overflow: hidden;
            text-align: center;
            text-decoration: none;
            text-overflow: ellipsis;
            transition: all 200ms ease-in-out 0s;
            white-space: nowrap;	
            font-family: cursive;
            font-weight: 700;	
            padding: 18px 39px 18px;
            font-size: 18px;
            text-align: center;
        }
        .ph-btn-blue{
            border-color: #326E99;
            background-color: #3F8ABF;
        }
        .ph-btn-blue:hover, .ph-btn-blue:focus, .ph-btn-blue:active{
            background-color:  #397CAC;
            border-color: #326E99;
        }    
      .ph-btn-green{
            border-color: #3Ac162;
            background-color: #5FCF80;
        }
        .ph-btn-green:hover, .ph-btn-green:focus, .ph-btn-green:active{
            background-color:  #4BB970;
            border-color: #3AC162;
        }
        .ph-float a{
            display: inline-block;
            margin-left: 350px;
            margin-top: 100px;
        }
        </style>
    </head>
    <body>
    <div class="header">
        <div class="logo">
            <img src="mit_logo.png"/>
        </div>
        <div class="main">
            <div class="title">
                <h1>CREATE YOUR ACCOUNT AS:</h1>
                <div class="card">
                    <div class="ph-container">
                        <div class="ph-float">
                            <a href="sign_up.php" class="ph-button ph-btn-blue">STUDENT</a>
                            <a href="sign_up.php" class="ph-button ph-btn-green">TEACHER</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>