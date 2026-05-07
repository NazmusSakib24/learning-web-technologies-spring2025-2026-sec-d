<?php
    if(
        isset($_POST['c_pass']) && 
        isset($_POST['n_pass']) && 
        isset($_POST['r_pass'])
        )
    {
        $current = $_POST['c_pass'];
        $new = $_POST['n_pass'];
        $retype = $_POST['r_pass'];
            
        $error = false;

        if ($current == "" || $new == "" || $retype == "")
        {
            echo "All password fields are required.<br>";
            $error = true;
        }
        
        else
        {
            if ($new == $current)
        {
            echo "New Password should not be same as the Current Password<br>";
            $error = true;
        }
        
        if ($new != $retype)
        {
            echo " New Password must match with the Retyped Password<br>";
            $error = true;
        }

        }
        
        if(!$error)
        {   
            echo "<h3 style ='color: red;'>Password Changed Successfully</h3>";
        }

    }
?>