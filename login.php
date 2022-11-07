<!-- 
    Machine 22 :
        Mohamed Bouaghad
        Hafsa Ougha
        Abdellah Adansar
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="stl.css">
    <link rel="icon" href="img/react.png">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,400;1,500&family=Roboto&display=swap" rel="stylesheet">
    <style>
        
        form {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
            border: 1px solid #dddfe2;
        }
        .login h2 {
            margin-bottom: 2rem !important;
        }
    </style>
</head>
<body>
    <div class="login">
        <h2 class="title">Web<span>Courses</span></h2>
        <h4 id="err">Error with Login !!<br>Please enter all your information to access your web lessons</h4>
        <form action="log.php" method="POST">
            <input id="username" type="text" name="username" placeholder="Username">
            <input id="password" type="password" name="password" placeholder="Password">
            <input id="submit-btn" type="submit" value="Login">
        </form>
    </div>
    
</body>
</html>

<?php
    session_start();
    if($_SESSION['test'] == "error") {
        echo "
            <script>
                let err = document.getElementById('err');
                err.style.display = 'block';
            </script>
        ";
        $_SESSION['test'] = 0;
    }
?>