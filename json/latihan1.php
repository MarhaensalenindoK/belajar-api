<?php
// $mahasiswa = [
//     [
//         "nama" => "Marhaensalenindo Komara",
//         "nis" => "11907260",
//         "email" => "marhaensa@gmail.com"
//     ],
//     [
//         "nama" => "Ika Roro Kusuma Tunggal Dewi",
//         "nis" => "11907189",
//         "email" => "ika@gmail.com"
//     ],
// ];

$dbh = new PDO(
    'mysql:host=localhost;dbname=phpdasar',
    'root',
    ''
);
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($mahasiswa);
echo $data;
