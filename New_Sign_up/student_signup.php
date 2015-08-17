<html>
<head>
    <style type="text/css">
        body{
           background-image: url(brown.jpg);
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
            box-shadow: 5px 5px 10px black;
            height: 600px;;
            width: 600px;;
            margin-bottom: 0px;
            overflow: hidden;
            padding: 20px 20px 30px;
            /*background-color: grey;*/
            margin: 0px auto 25px;
            border-radius: 10px;
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
            margin: 0 0 1.5em;
            display: inline-block;
            /*box-shadow: 5px 5px 10px red;*/
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
        }
     
        #text-fields{
            direction: ltr;
            width: 100%;
            height: 37px;
            display: block;
            margin: 0;
            padding: 0 8px;
            background-color: white;
            border-radius: 8px;
            font-family: serif;
            font-size: 16px;
            color: black;
            border-color: red;
        }
	#name{
	    box-shadow:5px 5px 10px brown;
	}
	
    </style>
</head>
<body>
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
                            <input type="text" name="firstname" id="text-fields" spellcheck="false" placeholder="First" >
                        </label>
                        <label>
                            <input type="text" name="lastname" id="text-fields" spellcheck="false" placeholder="Last" >
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>Username</strong>
                        </legend>
                        <label>
                            <input type="text" name="username" id="text-fields" spellcheck="false" placeholder="User Name" >
                        </label> 
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>Password</strong>
                        </legend>
                        <label>
                            <input type="text" name="username" id="text-fields" spellcheck="false" placeholder="Password" >
                        </label> 
                        <label>
                            <input type="text" name="username" id="text-fields" spellcheck="false" placeholder="Confirm Password" >
                        </label> 
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>Email-Id</strong>
                        </legend>
                        <label>
                            <input type="text" name="email" id="text-fields" spellcheck="false" placeholder="Email-id" >
                        </label> 
                    </fieldset>
                    <fieldset>
                        <legend>
                            <strong>Mobile</strong>
                        </legend>
                        <label>
                            <input type="text" name="mobile" id="text-fields" spellcheck="false" placeholder="Mobile Number" >
                        </label> 
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
