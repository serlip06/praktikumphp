<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "kepegawaian") ;


function mysqli_query($query) {
    global $conn;
    $result = Mysqli_query($conn,$query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)){
        $row[] = $row;
    }
    return $row;
}

function tambah($data) {
    global $conn;

    $npm = $data["npm"];
    $nama = $data["nama"];
    $email = $data["email"];
    $npm = $data[""];

}


?>