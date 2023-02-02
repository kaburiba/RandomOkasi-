<?php
    $raw = file_get_contents('php://input');

    $data = json_decode($raw);
    var_dump($raw);

    $url = "https://sysbird.jp/webapi/?apikey=guest&format=json&order_r&max={$data["max"]}";
    $res = file_get_contents($url);
    $res = json_encode($res);
    $res = mb_convert_encoding($res, "utf-8", "auto");
    header("Content-Type: application/json; charset=utf-8");
    header("Access-Control-Allow-Origin: *");
    echo $res;
