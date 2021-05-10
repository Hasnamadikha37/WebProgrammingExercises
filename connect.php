<?php
$host = 'sql210.epizy.com';
$user = 'epiz_28585421';
$pass = 'bzjoXE4Ertq';
$db = 'epiz_28585421_game';



function score ($host, $user, $pass, $db, $nama, $skor){
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    $query = "INSERT INTO halloffame (nama, skor) VALUES ('$nama', '$skor')";
    $result = (mysqli_query($mysqli, $query));
    mysqli_close($mysqli);
}

function hof ($host, $user, $pass, $db){
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    $query = "SELECT * FROM halloffame ORDER BY skor DESC LIMIT 10";
    $index = 1;
    $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) > 0) {?>
        <table border='2' class='table table-info table-bordered border-primary caption-top'>
        <tr class='table-light'>
        <th>No.</th>
        <th>Nama Player</th>
        <th>Score</th>
        </tr>";
        <?php
        while($row = mysqli_fetch_assoc($result)){
            echo"<tr>";
            echo"<td>$index</td>";
            echo"<td>{$row['nama']}</td>";
            echo"<td>{$row['skor']}</td>";
            $index++;
        }       
        echo"</table>";
        
    }
    mysqli_close($mysqli);
}

?>