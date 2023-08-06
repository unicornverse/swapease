<?php

require 'config/database.php';


if(isset($_POST['submit'])){

    $name=filter_var($_POST['name'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password=filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$name){
        $_SESSION['signup']="Please enter your name";
    }elseif(!$email){
        $_SESSION['signup']="Please enter your valid email";
    }elseif(!$password){
        $_SESSION['signup']="Please enter your password";
    }
    else{
        // hashing the password
        $hashed_password=password_hash($password,PASSWORD_DEFAULT);
    //    checking if email already registered

        $user_check_query="SELECt * FROM users WHERE email='$email'";
        $user_check_result=mysqli_query($connection,$user_check_query);
        if(mysqli_num_rows($user_check_result)>0){
            $_SESSION['signup']="email already exists";
        }
    }

if($_SESSION['signup']){
    $_SESSION['signup-data']=$_POST;
    header('location:'.ROOT_URL.'signup.php');
    die();
}else{
    $insert_user_query="INSERT INTO users(name,email,password,is_admin) VALUES('$name','$email','$hashed_password',0)";
    $insert_user_result=mysqli_query($connection,$insert_user_query);

    if(!mysqli_errno($connection)){
        $_SESSION['signup-success']="Registration successful. Please log in";
        header('location:'.ROOT_URL.'login.php');
        die();
    }
}

}else{
    header('location: '.ROOT_URL.'signup.php');
}
?>