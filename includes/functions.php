<?php
    function emptyInput($email, $pwd){
        $result = null;
        if(empty($email) || empty($pwd)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    function emailExists($conn, $email){
        $sql = "SELECT * FROM users WHERE usersEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../account.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt,"s", $email);

        mysqli_stmt_execute($stmt);
        
        $resultData = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            return false;
        }

    }

    function createUser($conn, $email, $pwd){
        $sql = "INSERT INTO users (usersEmail,usersPassword) VALUES (?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../account.php?error=stmtfailed");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"ss", $email, $hashedPwd);

        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_close($stmt);

        header("location:../account.php?successful login");
        exit();
    }

    function loginUser($conn, $email, $pwd){
        $emailExists = emailExists($conn, $email);
        
        if($emailExists === false){
            header("location:../account.php?error=Wrong email");
            exit();
        }

        $pwdHashed = $emailExists["usersPassword"];
        $checkPwd = password_verify($pwd, $pwdHashed);
        

        if($checkPwd === false){
            header("location:../account.php?error=Wrong password");
            exit();
        }else if($checkPwd === true){
            session_start();
            $_SESSION["userid"] = $emailExists["usersId"];
            header("location:../index.php?successful login");
            exit();
        }
    }

    function customErrorHandler($errno, $errstr, $errfile, $errline){
        $message ="Error: [$errno] $errstr - $errfile:$errline";
        error_log($message.PHP_EOL, 3,"error_log.txt");
    }