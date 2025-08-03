<?php

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.php';
    require_once 'functions.php';

    if(emptyInput($email, $pwd)!==false){
        header("location:../account.php?error=Fill in all fields");
        exit();
    }

    // if(invalidPwd($pwd)!==false){
    //     header("location:../login.php?error=invalidpwd");
    //     exit();
    // }
    
    
    if(emailExists($conn, $email) !== false){
        header("location:../account.php?error=This email is taken");
        exit();
    }

    createUser($conn, $email, $pwd);
}else{
    header("location:../account.php");
}