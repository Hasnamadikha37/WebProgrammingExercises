<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <title>UTS Pemrograman Web</title>
  </head>
  <body style='background-color:#95afc0;color:#130f40'>
    <?php
        if (!isset($_COOKIE['nama'])){
            ?>
        <div class="container-fluid" style='position:absolute;top:20%;left:25%;width:50%;text-align:center'>
    <?php
            
            echo "<p><h1>Maaf anda tidak memiliki akses ke halaman ini</h1></p>";
            echo "<h4><p>Silahkan <a href='index.php' style='color:red'>Log In</a> terlebih dahulu</p></h4>";
            exit();
        }

    ?>
  </body>
</html>