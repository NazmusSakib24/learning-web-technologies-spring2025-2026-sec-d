<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $con = $_POST['con_pass'];
        $dob = $_POST['dob'];
        
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }
        else {
            $gender = "";
        }

        if($name == ""){
            echo "Name can not be empty.<br>";
        }
        else{
            if(strlen($name) < 2){
                echo "Name must contain at least 2 character.<br>";
            }

            for ($i = 0 ; $i < strlen($name); $i++){
                $ch = $name[$i];

                if (
                    !($ch >= 'a' && $ch <= 'z') &&
                    !($ch >= 'A' && $ch <= 'Z') &&
                    $ch != '.' &&
                    $ch != '-' &&
                    $ch != ' ' 
                )
                {
                    echo "Name can contain only letters, dot(.), dash(-).<br>";
                    break;
                }
            }
        }

        if ($email == ""){
            echo "Email can not be empty.<br>";
        }

        else{
            $at = false;
            $dot = false;

            for ($i = 0; $i < strlen($email); $i++){
                
                if($email[$i] == '@'){
                    $at = true;
                }

                if($email[$i] == '.'){
                    $dot = true;
                }
            }

            if(!$at || !$dot){
                echo "Email must have \"@\" and \".\". <br>";
            }
        }

        if($username == ""){
            echo "Username can not be empty<br>";
        }

        else{
            if (strlen($username) < 2){
                echo "Username must contain at least two character.<br>";
            }
        }

        if ($pass == ""){
            echo "Password can not be empty.<br>";
        }

        else{
            if(strlen($pass) < 8){
                echo "Password should be 8 characters long.<br>";
            }

            $special = false;

            for ($i = 0; $i < strlen($pass); $i++){

                $p = $pass[$i];

                if(
                    $p == '@' ||
                    $p == '#' ||
                    $p == '$' ||
                    $p == '%'
                )
                {
                    $special = true;
                    break;
                }
            }

            if(!$special){
                echo "Password must contain special character (@,#,$,%).<br>";
            }
        }
        if($con != $pass){
            echo "Confirm password must match password.<br>";
        }
        if ($gender =="")
            {
                echo "Select a gender.<br>";
            }
        if ($dob ==""){
            echo "Date of birth can not be empty.<br>";
        }
    }
?>