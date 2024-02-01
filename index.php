<?php
/*
// assets/php/functions.php
$conn = mysqli_connect("localhost", "root", "", "datadiri");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// end of file
*/
require 'assets/php/functions.php';

$rows = query("SELECT * FROM datas");

setlocale(LC_ALL, 'id_ID');

// var_dump($rows);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Fortofolio</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>

<section class="title">
    <h1> Welcome! <br><span style="color: #9ba0b2; font-size: 20px;">ようこそ！</span></h1>
</section>

<!-- Table -->
<?php foreach ($rows as $row) : ?>
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <tr>
            <th colspan="2" class="title-bio"><i class="bi bi-person-fill"></i> Biografi</th>
        </tr>
        <tr>
            <th style="width: 30%">Nama</th>
            <td><?= $row["nama"] ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?= $row["gender"] ?></td>
        </tr>
        <tr>
            <th>Hobi</th>
            <td><?= $row["hobi"] ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><?= $row["umur"] ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?= $row["alamat"] ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?= date('l, j F Y', strtotime($row["tanggal_lahir"])) ?></td>
        </tr>
        <tr>
            <th>Sosial Media</th>
            <td>
                <i class="bi bi-instagram"></i> Instagram : <a class="link" href="https://www.instagram.com/aziz_khasyi11/" target="_blank">Click Here!</a> <br>
                <i class="bi bi-github"></i> Github: <a class="link" href="https://github.com/Azizkhasyi11" target="_blank">Click Here!</a><br>
                <i class="bi bi-discord"></i> Discord : <a class="link">BolehNgopi</a> <br>
            </td>
        </tr>

    </table>
<?php endforeach; ?>
<div class="mai">
    <img src="assets/img/mai.png" alt="" width="690px">
</div>


<footer>
    &copy; <?php echo date("Y"); ?> Aziz Khasyi
</footer>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>

</html>