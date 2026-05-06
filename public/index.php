<link rel="stylesheet" href="style.css">

<?php
require "./header.html"; //LISÄÄ HEADER JA FOOTER SAMAAN KANSIOON KUN INDEX.PHP

session_start();

//echo $_SESSION['userid'] . "hello";

$route = explode("?", $_SERVER["REQUEST_URI"])[0];
$method = strtolower($_SERVER["REQUEST_METHOD"]);

require_once '../Controllers/userControllers.php';
require_once '../Controllers/eventsControllers.php';
require_once '../Controllers/libraries/auth.php';


//router/reititin
switch ($route){
    case '/':
        viewEventsController();
        break;
    case '/viewall':
        viewEventsController();
        break;
    case "" :
        viewEventsController();
        break;
    case '/register' :
        registerController();
        break;
    case '/login' :
        loginController();
        break;
    case '/logout' :
        logoutController();
        break;
    

    default :
        http_response_code(404);
        require '../views/404.php';
        break;
}


require ".footer.php";