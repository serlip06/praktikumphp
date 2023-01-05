<?php
// require 'function.php'
// // koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "kepegawaian") ;

// //ambil data dari tabel kepegawaian / query data kepegawaian
$result = mysqli_query($conn, "SELECT * FROM absen_kepegawaian");

//ambil data
// mysqli_fetch
//mysqli_fetch
//mysqli
//mysqli



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Kepegawaian</h1>
    <table border="1" cellspacing="0">

    <tr>
        <th>no</th>
        <th>npm</th>
        <th>nama</th>
        <th>email</th>
        <th>no_telpon</th>
        <th>aksi</th>
    </tr>

   
        <?php  while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td>1</td>

            <td>714220023</td>
            <td>serli</td>
            <td>serlipariela@gmail.com</td>
            <td>087711650942</td>
            
            
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
        </tr>
        <?php  endwhile; ?>
    </table>
</body>
</html>