<?php 

    if (isset($_POST['username']) && isset($_POST['password']))
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
                            !($ch >= 'a' && $ch <='z') &&
                            !($ch >= 'A' && $ch <= 'Z') &&
                            !($ch >= 0 && $ch <= 9) && $ch !='.' && $ch !='-' && $ch != "_"
                        ){
                            echo "Only alphanumeric, period, '.' , '-' , '_' are accepted." ;
                        }
                    }
                }

                if (strlen($password) < 7){
                    echo "Password must not be less than eight (8) characters";
                }
                else {
                    for($i = 0 ; $i < strlen($password) ; $i++){
                        $p = $password[$i];

                        if (
                            !$p ='@' ||
                            !$p ='#' ||
                            !$p ='$' ||
                            !$p ='%'
                        ){
                            echo "Password must contain at least one of the special characters (@, #, $, %) ";
                        }
                    }
                }
            }    
    }
    else{
    echo "Validated";
    }

?>