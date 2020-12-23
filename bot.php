<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $token = "1429201383:AAG97dhytzYKCBBttkTSSwICRXkJ416pmIk";
    $apiUrl = "https://api.telegram.org/bot".$token;

    $getUpdates = file_get_contents($apiUrl.'/getUpdates', false);

    $getUpdatesArray = json_decode($getUpdates,true);

    print_r($getUpdatesArray);
?>