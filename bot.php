<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $token = "1429201383:AAG97dhytzYKCBBttkTSSwICRXkJ416pmIk";
    $apiUrl = "https://api.telegram.org/bot".$token;

    $update = file_get_contents("php://input");
    $update = json_decode($update, true);

    $chatId = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];

    switch($message) {
        case "/test":
            sendMessage($chatId, "good");
            break;
        case "/hello":
            sendMessage($chatId, "world");
            break;
        default:
            sendMessage($chatId, "default");

    }

    function sendMessage($chatId, $message) {
        $url = $GLOBALS[apiUrl]."/sendMessage?char_id=".$chatId."&text=".urldecode($message);
        file_get_contents($url);
    }


    // $getUpdates = file_get_contents($apiUrl.'/getUpdates', false);

    // $getUpdatesArray = json_decode($getUpdates,true);

    // print_r($getUpdatesArray);
?>