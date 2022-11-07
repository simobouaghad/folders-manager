<!-- 
    Machine 22 :
        Mohamed Bouaghad
        Hafsa Ougha
        Abdellah Adansar

-->

<link rel="stylesheet" href="stl.css">
<link rel="icon" href="img/react.png">
<title>webCourses</title>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,400;1,500&family=Roboto&display=swap" rel="stylesheet">

<?php
    
    $cours = $_GET['cours'];
    $n = strlen($cours) - 3;

    if(substr($cours, $n)=='mp4') {
        echo "
            <nav>
                <h2>Web<span>Courses</span></h2>
                <ul>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='courses.php'>Courses</a></li>
                </ul>
                <a href='login.php' class='btn'>Log out</a>
            </nav>

            <div class='vd'>
                <video class='video' controls autoplay>
                    <source src='$cours' type='video/mp4'>
                </video>
            </div>
            ";
    }
    else if(substr($cours, $n)=='pdf') {
        echo "
            <div class='pdf'>
                <embed src='$cours' type='application/pdf'>
            </div>
        ";
    }
    else {
        $list = scandir($cours);
        echo "
            <nav>
                <h2>Web<span>Courses</span></h2>
                <ul>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='courses.php'>Courses</a></li>
                </ul>
                <a href='login.php' class='btn'>Log out</a>
            </nav>

            <div class='dv'>
                <h4>welocome to</h4>
                <h3>Free courses from mr gounane</h3>
                    <table>
                        <tr>
                            <th>Cours</th>
                            <th>Links</th>
                        </tr>
                    ";
                    foreach($list as $r) {
                        echo "
                            <tr>
                                <td><img src='img/folder.png'/></td>
                                <td><a href=ana.php?cours=$cours/$r>$r</a></td>
                            </tr>
                        ";
                    }
                echo "</table>";
            echo "</div>";
            echo "
            <footer>
                <h5 id='cr'><span>created by : </span>Mohamed Bouaghad & Hafsa Ougha</h5>
                <h5>Génie Informatique 2020-2022</h5>
            </footer>
        ";
        }
?>