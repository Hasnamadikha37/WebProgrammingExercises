<?php
$a = $_POST['tebak'];
$b = $_COOKIE['bilacak'];

if ($a > $b){
    echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.";
    echo "<br>";
    echo "<br>";
    echo "<form method='POST' action='tampilanKedua.php'>
            Bilangan tebakan Anda  <input type='text' name='tebak'>
            <input type='submit' name='submit' value='Submit'>
        </form>";
} elseif ($a < $b){
    echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.";
    echo "<br>";
    echo "<br>";
    echo "<form method='POST' action='tampilanKedua.php'>
            Bilangan tebakan Anda  <input type='text' name='tebak'>
            <input type='submit' name='submit' value='Submit'>
        </form>";
} else {
    header("Location:tampilanAkhir.php");
}
?>