<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login <Form></Form></title>

    <style>
        .div1{
            display: flex;
            margin: auto;
            padding : auto;
           
        }

        label{
            display : inline-block;
            width: 130px;
        }
    </style>
</head>
<body>
    <div class="div1">
        <fieldset>
        <legend>CHANGE PASSWORD</legend>
        <form action="password_val.php" method="post">
            
            <label>Current Password</label>:
            <input type="password" name="c_pass">
            <br><br>

            <label style = "color : lime ;" >New Password</label>:
            <input type="password" name="n_pass">
            <br><br>

            <label style = "color : red ;">Retype Password</label>:
            <input type="password" name="r_pass">
            <br><br>

            <button type="submit">Submit</button>
        </form>
    </fieldset>
    </div>
</body>
</html>