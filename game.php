<?php
session_start();
include('cek.php');
include('connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <title>Hasna Madikha - K3519037</title>
  </head>
  <body style='background-color:#95afc0;color:#130f40'>
  <nav class="navbar navbar-light" style='background-color:#95afc0;color:#130f40'>
  <div class="container-fluid">
    <a href='index.php' class='btn btn-outline-dark'>Home</a>;
  </div> 
</nav>
  <div class="container-fluid" style='position:absolute;top:20%;left:25%;width:50%;text-align:center;border:1px solid #30336b;border-radius:15px;padding-bottom:2%;margin-bottom:5%'>
    <?php
    $hasil = $_SESSION['angka'] + $_SESSION['angka2'];
    if($_SESSION['lives'] > 0){
        if(!isset($_POST['submit'])){
            echo "<p><h1>Hello {$_COOKIE['nama']}, semangat you can do the best</h1>";
            echo "<b style='color:white'>Lives : [{$_SESSION['lives']}] | Score : [{$_SESSION['score']}]</b><br></p>";
            echo "<div class='container-fluid' style='border:2px solid #30336b;border-radius:15px;width:400px;padding-bottom:2%'>";
            echo "<p><h3>Berapakah {$_SESSION['angka']} + {$_SESSION['angka2']} ? </h3>";
            echo "<form method='post'>";
            echo "<input type='number' name='jawaban' class='form-label'>";
            echo "&emsp; <button type='submit' name='submit' class='btn btn-info btn-sm'>Jawab</button></form></div>";
        } else {
            $jawaban = $_POST['jawaban'];
            if ($jawaban == $hasil){
                $_SESSION['score'] += 10;
                echo "<p><h1>Yeay, selamat {$_COOKIE['nama']} jawaban kamu benarrr</h1></p>";
                echo "<b style='color:white'>Lives : [{$_SESSION['lives']}] | Score : [{$_SESSION['score']}]</b><br></p>";
                echo "<p><a href='game.php' class='btn btn-info'>Soal Selanjutnya</a></p>";
            } else {
                $_SESSION['score'] -= 2;
                $_SESSION['lives'] -= 1;
                echo "<p><h1>Sayang sekali {$_COOKIE['nama']} jawaban kamu salah :(</h1></p>";
                echo "<b style='color:white'>Lives : [{$_SESSION['lives']}] | Score : [{$_SESSION['score']}]</b><br></p>";
                echo "<p><a href='game.php' class='btn btn-info'>Soal Selanjutnya</a></p>";
            }
            $_SESSION['angka'] = rand(1,20);
            $_SESSION['angka2'] = rand(1,20);
        }
        ?>
        
        <?php
    } else {
        echo "<p><h2>Sayang sekali {$_COOKIE['nama']}, kesempatanmu sudah habis :(
            <br>Semoga beruntung di percobaan selanjutnya</h2>";
        echo "<b style='color:white'>Score : [{$_SESSION['score']}]</b><br></p>";
        score ($host, $user, $pass, $db, $_COOKIE['nama'], $_SESSION['score']);
        $_SESSION['lives'] = 5;
        $_SESSION['score'] = 0;
        hof ($host, $user, $pass, $db);

        echo "<p><a href='game.php' class='btn btn-info'>Mulai Lagi</a></p>";
    }
    ?>
  </div> 

  </body>
</html>