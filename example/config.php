<?php
session_start();
define('conString', 'mysql:host=localhost;dbname=secure_login');
define('dbUser', 'root');
define('dbPass', '');


define('userfile', 'user.php');
define('loginfile', 'login.php');
define('activatefile', 'activate.php');
define('registerfile', 'register.php');
define('saveMessage', 'save_message.php');


//template files

define('header', 'inc/header.htm');
define('indexHead', 'inc/indexhead.htm');
define('indexTop', 'inc/indextop.htm');
define('loginForm', 'inc/loginform.php');
define('activationForm', 'inc/activationform.php');
define('indexMiddle', 'inc/indexmiddle.htm');
define('registerForm', 'inc/registerform.php');
define('indexFooter', 'inc/indexfooter.htm');
define('userPage', 'inc/userpage.php');
define('myMessages', 'inc/mymessages.php');
define('addMessageForm', 'inc/addmessageform.php');
define('editMessageForm', 'inc/editmessageform.php');
define('messages', 'inc/messages.php');



define('baseURL', 'http://localhost/sweden-job-challenges/login/phpSecureLogin-master');

ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = new User();
$user->dbConnect(conString, dbUser, dbPass);
