<?php
    session_start();
    require_once('../model/userModel.php');
    if(isset($_POST['signup_submit'])){
        $username   = $_REQUEST['username'];
        $password   = $_REQUEST['password'];
        $email      = $_REQUEST['email'];

        if($username == "" || $password == "" || $email == ""){
                echo "null username/password/email!";
        }else{
           $user = ['username'=>$username, 'password'=>$password, 'email'=>$email];
           //$_SESSION['user']= $user;
           $status = addUser($user);
           if($status){
                header('location: ../view/login.php');
           }else{
                header('location: ../view/signup.php');
           }
           
        }
    }else{
        echo "invalid request! please submit form...";
    }

?>