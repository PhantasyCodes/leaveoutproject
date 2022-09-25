<?php
session_start();
include('connection.php');
if (isset($_SESSION["userID"])) {
    $id = $_SESSION["userID"];
    $update = true;
    $sql = "SELECT * FROM tbl_users WHERE userID=$id";
    $record = mysqli_query($conn,$sql);

    if (mysqli_num_rows($record) == 1 ) {
        $n = mysqli_fetch_array($record);
        $firstname = $n["first_name"];
        $lastname = $n["last_name"];
    }
}


?>


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

   <div>Kindly set your new password</div>
    <form action = "updatereg.php" method = "post">
      <div>
      <div class="selements">
          <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="selements">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" value="<?php echo $firstname; ?>">
        </div>
        <div class="selements">
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" value="<?php echo $lastname; ?>">
        </div>

        <div>
          <span> New Password </span>
          <input type = "text" name = "newpass" id = "newpass" placeholder = "Enter your new password" required>
        </div>

        <div>
          <span> Confirm Password </span>
          <input type = "text" name = "confirmpass" id = "confirmpasss" placeholder = "Confirm your new password" required>
        </div>

        <div>
          <input type = "submit" value = "Finish" id="finish" name="finish">
        </div>
    </form>

</body>
</html>