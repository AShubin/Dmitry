<?php
session_start();

if($_GET['do'] == 'logout'){
    unset($_SESSION['admin']);
    session_destroy();
}

if(!$_SESSION['admin']){
    header("Location: enter.php");
    exit;
}

function login($login, $pass){} //create session
function is_login(){} //check if user is loged in
function logout(){} //logout user
function redirect_to_login_page(){} //redirect to login
function redirect_from_login(){} //check if user is loged in then redirect he to dashboard


