<?php
    $connect = mysqli_connect('localhost', 'root', '', 'miniprojet');

    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $query = "SELECT username FROM studant WHERE username='$uname' AND password='$pass';";
    $cn = mysqli_num_rows(mysqli_query($connect, $query));
    if($cn > 0) {
        header('Location:index.php');
    }
    else {
        header('Location:login.php');
        session_start();
        $_SESSION['test'] = "error";
    }

?>