<!DOCTYPE html>
<html>

<head>
<title> DATA UKURAN TABUNG </title>
</head>

<body>
<p> DATA UKURAN TABUNG </P>
<table border="1">
  <th>Nama Tabung</th>
  <th>Diameter</th>
  <th>Tinggi</th>
  <th>Luas</th>

<?php

$myfile = fopen("datatabung.dat", "r") or die("Tidak bisa buka file!");
while(!feof($myfile)) {
  $baris = fgets($myfile);
  $pecah = explode(",", $baris);
  echo "<tr>
  <td height='15'>".$pecah[0]."</td>
  <td>".$pecah[1]."</td>
  <td>".$pecah[2]."</td>
  <td><a href='hitungluas.php?n=$pecah[0]&d=$pecah[1]&t=$pecah[2]'>view</a></td>
  </tr>";
}
fclose($myfile);

?>

</table>
</body>
</html>