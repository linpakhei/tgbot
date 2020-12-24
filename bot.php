<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$token = "1429201383:AAG97dhytzYKCBBttkTSSwICRXkJ416pmIk";
$apiUrl = "https://api.telegram.org/bot".$token;

$update = file_get_contents("php://input");
$update = json_decode($update, true);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$chatType = $update["message"]["chat"]["type"];

// Check command (Private)
if($chatType == "private") {
    switch($message) {
        case "/test":
            sendMessage($chatId, "private good");
            break;
        case "/hello":
            sendMessage($chatId, "private world");
            break;
        default:

    }
}

// Check command (Group)
$commandPattern = "/@jlvariabot$/i":
if($chatType == "group" && preg_match($commandPattern, $message);) {
    switch($message) {
        case "/test":
            sendMessage($chatId, "group good");
            break;
        case "/hello":
            sendMessage($chatId, "group world");
            break;
        default:

    }
}

function sendMessage($chatId, $message) {
    $url = $GLOBALS[apiUrl]."/sendMessage?chat_id=".$chatId."&text=".urldecode($message);
    file_get_contents($url);
}

?>