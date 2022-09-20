
<?php
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
      header("location: index.php");
      exit;
  }


    include("connection.php");

    if (isset($_POST['email'])) {
        $uname = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from tbl_users where email = '".$uname."'  AND password = '".$password."' limit 1";

        $result = mysqli_query($conn,$sql);
    
        $rolesql = "select role from tbl_users where email = '".$uname."'";
        $role = mysqli_query($conn,$rolesql);
        $row = mysqli_fetch_array($role);
        $rolee = $row['role'];
            switch ($rolee) {
                case "user":
                    if(mysqli_num_rows($result) == 1){
                        session_start();
                
                        $_SESSION['email'] = $uname;

                    header('location: index.php');
                    exit();
                    }
                    else{
                      echo "You have entered incorrect email or password";
                    }
                break;
                case "admin":
                    if(mysqli_num_rows($result) == 1){
                        session_start();
                
                        $_SESSION['email'] = $uname;

                    header('location: admin.php');
                    exit();
                    }
                    else{
                      echo "You have entered incorrect email or password";
                    }
                break;
                default:
                header('location: login.php');
            }

        $conn -> close();
    }
?> 