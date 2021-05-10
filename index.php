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
  <div class="container-fluid" style='position:absolute;top:20%;left:25%;width:50%;text-align:center'>
    <p><h1>Selamat Datang di Game Matematika</h1></p><br>
    <?php
    if(!isset($_COOKIE['nama'])){
    ?>
    <form method='post' action='login.php'>
    <p><input type="text" class="form-control" placeholder="Nama Lengkap" name='nama'>
       <br><input type="email" class="form-control" placeholder="Email" name='email'>
       <br><button type='submit' name='submit' class='btn btn-info'>Log In</button>
    </p>
    </form>
    <?php
    } else {
        echo "<p></h3>Haloo {$_COOKIE['nama']}, selamat datang kembali</h3></p>";
        echo "<p>Ingin bermain lagi? Kuyy</p>";
        echo "<p><a href='game.php' class='btn btn-info'>Mulai Game</a></p>";
        echo "<p>Bukan anda? <a href='logout.php' style='color:white'>Klik di sini</a></p>";

    }
    ?>
  </div> 

  </body>
</html>