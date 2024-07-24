<?php 
    session_start();
    include_once 'config.php';
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            
            $_SESSION['unique_id'] = $row['unique_id']; //using this session we used user unique_id in other php file
            $status = "Online now";
            $sql = mysqli_query($conn, "UPDATE users SET status ='{$status}' WHERE unique_id = {$_SESSION['unique_id']}");
            echo 'yes';
        }else{
            echo "Email or password is incorrect";
        }
    }
    else{
        echo 'All fields are required!';
    }
