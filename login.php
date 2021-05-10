<?php
session_start();
if (isset($_POST['submit'])){
    setcookie("nama", $_POST['nama'], time()+3*30*24*3600,"/");
    
    $_SESSION['lives'] = 5;
    $_SESSION['score'] = 0;
    $_SESSION['angka'] = rand(0,20);
    $_SESSION['angka2'] = rand(0,20);
    header("Location: index.php");
}

?>