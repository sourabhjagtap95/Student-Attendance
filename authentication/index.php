<?php

require_once('authentication.php');

     if (DEVELOPMENT_ENVIRONMENT == true) {
         error_reporting(E_ALL);
         ini_set('display_errors', 'On');
     } else {
         error_reporting(E_ALL);
         ini_set('display_errors', 'Off');
         ini_set('log_errors', 'On');
         ini_set('error_log', ROOT.DS.'appdata'.DS.'logs'.DS.'error.log');
     }

startSession();
destroySession();

// if(attemptLogin('student1', 'secret'))
// {
// 	echo "logged in";
// }

if(checkLogin())
{
	echo "logged in";
} else
{
	echo "logged out";
}