<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $arrContextOptions = array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    ); 

    $token = "1429201383:AAG97dhytzYKCBBttkTSSwICRXkJ416pmIk";
    $apiUrl = "http://api.telegram.org/bot".$token;

    $getUpdates = file_get_contents($apiUrl.'/getUpdates', false, stream_context_create($arrContextOptions));

    $getUpdatesArray = json_decode($getUpdates);

    print_r($getUpdatesArray);
?>