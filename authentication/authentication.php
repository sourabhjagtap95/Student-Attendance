<?php

define(USERNAME, 'root');
define(PASSWORD, 'toor');
define(DATABASE, 'attendence');
define(HOST, 'localhost');

function attemptLogin($username, $password)
    {
          
        $stmt            = 'SELECT * FROM users WHERE username = :username';
        $stmt->execute(array('username' => $username));
        $row             = $stmt->fetch(PDO::FETCH_ASSOC);
        $model           = null;
        if ($stmt->rowCount() == 1) {
                if (Encryption::verify($row["password"],$password)) {
                    $_user_browser            = $_SERVER['HTTP_USER_AGENT'];
                    $_SESSION['id']      = $row["id"];
                    $_SESSION['username']     = $username;
                    $passwordhash             = $row["password"];
                    $_SESSION['login_string'] = hash('sha512', $passwordhash.$_user_browser);
                    return 1;
                } else {
                    return 0;
                }
        } else {
            return 0;
        }
    }


function checkLogin(bool $value)
    {   
        if (isset($_SESSION['id'], $_SESSION['username'], $_SESSION['login_string'])) {
            $username        = $_SESSION['username'];
            $model           = new Model;
            $stmt            = $model->dbconnect->prepare('SELECT * FROM users WHERE username = :username');
            $stmt->execute(array('username' => $username));
            $row             = $stmt->fetch(PDO::FETCH_ASSOC);
            $model= null;
            if ($stmt->rowCount() == 1) {
                $passwordhash    = $row["password"];
                $user_browser   = $_SERVER['HTTP_USER_AGENT'];
                if ($_SESSION['login_string'] == hash('sha512', $passwordhash.$user_browser)&&$_SESSION['id']==$row['id']) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


function destroySession()
    {
        $_SESSION = array();
        $params   = session_get_cookie_params();
        setcookie(session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]);
        session_destroy();
    }


function startSession()
    {
        $session_name = 'attendence';   // Set a custom session name
        $secure       = false;
        $httponly     = true;
        if (ini_set('session.use_only_cookies', 1) === false) {
        } else {
            $cookieParams = session_get_cookie_params();
            session_set_cookie_params($cookieParams["lifetime"],
                $cookieParams["path"],
                $cookieParams["domain"],
                $secure,
                $httponly);
            session_name($session_name);
            session_start();
            session_regenerate_id(true);
        }
    }