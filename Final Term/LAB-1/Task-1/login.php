<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login <Form></Form></title>

    <style>
        .div1{
            display: flex;
            /* justify-content : center; */
            /* align-items : center ; */
            margin: auto;
            padding : auto;
           /* width: 100px; */
            /* height : 600px; */
        }
    </style>
</head>
<body>
    <div class="div1">
        <fieldset>
        <legend>LOGIN</legend>
        <form action="login_val.php" method="post">
            
            <label>User Name:</label>
            
            <input type="text" name="username">
            <br><br>

            <label>Password:</label>
            <input type="password" name="password">
            <br><br>

            <input type="checkbox" name="check" id=""> Remember
            <br><br>

            <button type="submit">Submit</button>
            <a href ="#">Forgot Password</a>
        </form>
    </fieldset>
    </div>
</body>
</html>