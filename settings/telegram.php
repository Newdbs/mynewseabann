<?php
$wahyustr_id = "7757975669";
$wahyustr_bot  = "8334376309:AAGGEokXXrl1nm1aUVTPcSCg9zV0pD3pG2w";    

function sendMessage($wahyustr_id, $message, $wahyustr_bot) {
    $url = "https://api.telegram.org/bot" . $wahyustr_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $wahyustr_id;
    $url .= "&text=" . urlencode($message);

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    ]);
    curl_exec($ch);
    curl_close($ch);
}