<?php

function isLoggedIn(){
    if(isset($_SESSION['username'], $_SESSION['userid']) && ($_SESSION['session_id'] == session_id())){
        return true;
        echo "joo" . $_SESSION['username'] . $_SESSION['userid'];
    } else {
        return false;
        echo "ei";
    }
}

function verifyAge($dateOfBirth){
    $dateOfBirth = new DateTime($dateOfBirth);
    $nowDate = new DateTime();
    $age = $nowDate->diff($dateOfBirth)->y;
    return $age >= 15;
}