<?php
/*
    check if he click button to move to panel page
    else back to login page
*/
if (isset($_POST["buttonLoginSubmit"])) {

    //get inputs and filter it from tags and speaces etc...
    $email = htmlspecialchars(trim($_POST["emailInput"]));
    $pass = htmlspecialchars(trim($_POST["passwordInput"]));

    /*
    0- EMAIL:-
    1- check if it not empty
    2- check if it string
    3- check if can be requierd email
    */
    if (empty($email)) {
        $email_error = "You must enter your email.";
    }else if(is_string($email)){
        $email_error = "You must enter your email not any else.";
    }else if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_error = "You must enter your email not any else.";
    }

    /*
    0- password:-
    1- check if it not empty.
    2- check if it string.
    */
    if(empty($pass)){
        $password_error = "You must enter you password";
    }else if(is_string($pass)){
        $password_error = "You must enter your password not any else.";
    }

    /* 
    0- Session:-
    check if variables is undefined to start session.
    else send message welcome.
    */
    if (!(isset($password_error) && isset($email_error))) {
        session_start();
        $_SESSION["emailSession"] = $email_error;
        $_SESSION["passwordSession"] = $password_error;
    }else {
        echo "Welcome to Control Panel.";
    }
    
    /* 
    0- send information in all products
    1- get user info and display it page all products
    */
    if(!empty($email)){
        session_start();
        $_SESSION["displayEmail"] = $email;
    }

}else{
    header("location:../../.././pages/headerPages/login.php");
}
?>