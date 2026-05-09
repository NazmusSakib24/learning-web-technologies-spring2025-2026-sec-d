<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

    <form method="post" action="../controller/loginCheck.php" enctype="multipart/form-data">
                    <input type="hidden" name="login_form" value="true"/>
        Username:   <input type="text" name="username" value=""/> <br>
        Password:   <input type="password" name="password" value=""/> <br>
                    <input type="submit" name="login_submit" value="Submit"/>
                      <a href="signup.php">Signup</a>
    </form>
</body>
</html>