<?php

require_once '../Models/users.php*'; //"users.php" fron Models is still uncertain as a name.
require_once "./libraries/cleaners.php";
require_once "./libraries/auth.php";


//just password hashing
function hashPassword($password){
    $password = trim($password);
    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
    return $hashedpassword;
}



function registerController(){
    if(isset($_POST['username'], $_POST['password'])){
        $username = cleanUpInput($_POST['username']);
        $password = cleanUpInput($_POST['password']);
        //maybe add email
        //maybe add birthday

        $users = getAllUsers(); //a model function that fetches all users *temporary name
        foreach($users as $user){
            if($username == $user['username']){
                echo "ei saa olla sama käyttäjänimi kun jollain toisella.";

                header("Location: /register"); //this is a view that doesn't exist as of yet
            } else {
                try {
                    addUser($username, $password);
                    header("Location: /login.html"); //this is a view that doesn't exist as of yet
                } catch (PDOException $e){
                    echo "Virhe tietokantaan tallentaessa: " . $e->getMessage();
                }
            }
        }
    } else {
        require "../views/register.php"; //this whole routing is null until someone makes the view.
    }
}