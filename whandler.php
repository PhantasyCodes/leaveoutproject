<?php
session_start();
include("connection.php");

if (isset($_POST['email'])) {
    $uname = $_POST['email'];

    $sql = "select * from tbl_users where email = '".$uname."'";
    $result = mysqli_query($conn,$sql);
    $rowData = mysqli_fetch_array($result);
    $passfield = $rowData["password"];


    if($passfield == null){
        $sqll = "select userID from tbl_users where email = '".$uname."'";
        $resultt = mysqli_query($conn,$sqll);
        $rowDataa = mysqli_fetch_array($resultt);
        $userID = $rowData["userID"];
        $_SESSION["userID"] = $userID;
        
        header("location: passwordchange.php");
        
    }
    else{
        header("location: login.php");
    }

    $conn -> close();
}

?>