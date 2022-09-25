<?php
session_start();
include "fetchuser.php";
$array = mysqli_fetch_row($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME USER</h1>
    
    <form action="whandler.php" method="POST">

        <label for="email"> ENTER YOUR EMAIL </label>
        <input type="text" id="email" name="email">

        <input type="submit" value="PROCEED" id="proceed" name="proceed">

    </form>
     
    
</body>
</html>