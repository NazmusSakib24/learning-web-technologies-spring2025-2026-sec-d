<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Form</title>
</head>
<body>
    <fieldset style="width:300px">
        <legend><h3>Profile picture</h3></legend>
        <div class="pic">
            <img src="user.png" alt="Picture Coming soon" width = "100px" height = "100px">
        </div>
        <br><br>
        <form action="pic_val.php" method="post" enctype="multipart/form-data">
            <input type="file" name="picture">
            <br><br>
            <hr>
            <br>
            <button type="submit">Submit</button>
        </form>
    </fieldset>
</body>
</html>