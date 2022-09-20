<?php 
include('connection.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="leave.css">
    <title>Login</title> 
</head>
<body>
    <h1>USER LOGIN</h1>
    <hr>

    <form action="loghandler.php" method="POST">
        <div class="creg">
        <div class="selements">
            <label for="email"> Email:</label><br>
            <input type="text" id="email" name="email" placeholder="enter your email">
        </div>
        <div class="selements">
            <label for="password"> Password:</label><br>
            <input type="password" id="password" name="password" placeholder="enter your password">
        </div>
        <div>
            <input type="submit" value="LOGIN" class=btn_success>
        </div>
        <div>
            <input type="reset" value="CANCEL" class=btn_fail>
        </div>
        </div>
    </form>
    

</body>
</html>