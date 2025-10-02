<?php 

include 'connect.php';

if(isset($_POST['register_btn'])){
    $email = $_POST['email'];
    $rid = $_POST['reg_id'];
    $password = $_POST['reg_pass'];

    $checkID = "SELECT user_id FROM user_login WHERE user_id = '$rid'";
    $result = $conn->query($checkID);
    if($result->num_rows > 0){
       header("Location: idexist.php");
    }else{
        $insertQuery= "INSERT INTO user_login (email, user_id, password) values ('$email',
                        '$rid','$password')";
        if($conn->query($insertQuery) == TRUE){
            header("Location: regveri.php");
        }else{
            echo "Error ";
        }
}
}

if(isset($_POST['login_btn'])){
    $userid = $_POST['log_id'];
    $password = $_POST['log_pass'];

    $sql = "SELECT * FROM user_login WHERE user_id = '$userid' and password = '$password'";
    $result = $conn->query($sql);
    if($result -> num_rows > 0){
        session_start();
        $row = $result -> fetch_assoc();
            $_SESSION['log_id'] = $row['log_id'];
            header("Location: logveri.php");
            exit();
        }else{
            header("Location: loginer.php");
        }
    }
?>