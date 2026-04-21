<?php 


    if(isset($_POST['submit']))
    // if (isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

            if($username == "" || $password ==""){
                echo "Both username and password are required. <br>";
            } 
            else{
                if(strlen($username)<2){
                    echo "Username character must be greater than 2. <br>";
                }
                else{
                    for ($i = 0; $i < strlen($username); $i++){
                        $ch = $username[$i];

                        if (
                            !($ch >= 'a' && $ch <= 'z') &&
                            !($ch >= 'A' && $ch <= 'Z') &&
                            !($ch >= '0' && $ch <= '9') && $ch !='.' && $ch !='-' && $ch != "_"
                        ){
                            echo "Only alphanumeric, period, '.' , '-' , '_' are accepted." ;
                            break;
                        }
                    }
                }

                if (strlen($password) < 8){
                    echo "Password must not be less than eight (8) characters";
                }
                else {

                    $special_char = false;

                    for($i = 0 ; $i < strlen($password) ; $i++){
                        $p = $password[$i];

                        if(
                            $p =='@' ||
                            $p =='#' ||
                            $p =='$' ||
                            $p =='%'
                        ){

                            $special_char = true;
                            break;
                        }
                        else{
                            echo "Password must contain at least one special character(@,#,$,%)";
                            break;
                        }
                    }
                }
            }    
    }
    else {
        echo "Login Successful";
    }
?>