<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Set</title>
</head>
<body>
 <h1> Your almost done!</h1>

   <div>Kindly your details below to set your new password</div>
    <form action = "passwordchange.php" method = "post">
      <div>
        <div>
          <span> Employee ID </span>
          <input type = "number" name = "employee" placeholder = "Enter employee ID" required>
        </div>

        <div>
          <span> New Password </span>
          <input type = "text" name = "newpass" placeholder = "Enter your new password" required>
        </div>

        <div>
          <span> Confirm Password </span>
          <input type = "text" name = "confirmpass" placeholder = "Confirm your new password" required>
        </div>

        <div>
          <input type = "submit" value = "Finish">
        </div>
    </form>

</body>
</html>