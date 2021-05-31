<?php

// сюда нужно вписать токен вашего бота
define('TELEGRAM_TOKEN', '1754207694:AAFz29Jyk5woopFj9xsPt5XSZaaMw_r7upQ');

// сюда нужно вписать ваш внутренний айдишник
define('TELEGRAM_CHATID', '544792213');

message_to_telegram("ИМЯ: ".$_POST['name']." \nТелефон: ".$_POST['tel']." \nЯщик: ".$_POST['mail']."  \nЗапрос: ".$_POST['comment']);

function message_to_telegram($text)
{
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHATID,
                'text' => $text,
            ),
        )
    );
    curl_exec($ch);header ('Location: index.php'); 
}?>