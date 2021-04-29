<?php
echo "Selamat ya… Anda benar, saya telah memilih bilangan " .$_COOKIE['bilacak'];
setcookie("bilacak", "", time()-3*30*24*3600,"/");
echo "<br>";
echo "<br>";
echo "<a href='tampilanPertama.php'>ulangi lagi</a>";
echo "<- link untuk mengulangi permainan kembali"
?>