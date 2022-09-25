<?php

session_start();

require("connection.php");

if(isset($_POST['finish'])){
    $id = $_POST["id"];
    $pass = $_POST["confirmpass"];

    
    mysqli_query($conn, "UPDATE tbl_users SET password='$pass' WHERE userID=$id"); 
    $_SESSION['message'] = "Password Set Successfuly";
    header("location:login.php");
}

// if (isset($_GET['del'])) {
// 	$id = $_GET['del'];
// 	mysqli_query($conn, "DELETE FROM tbl_users WHERE user_id=$id");
// 	$_SESSION['message'] = "Account deleted!"; 
// 	header('location: viewuser.php');
// }

$conn->close();

?>


