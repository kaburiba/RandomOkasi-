<?php
    $keyword = $_POST["keyword"];
    $url = "https://sysbird.jp/webapi/?apikey=guest&keywork=$keyword&format=json";
    $res = file_get_contents($url);
    $res = json_encode($res);
    $res = mb_convert_encoding($res, "utf-8", "auto");
    header("Content-Type: application/json; charset=utf-8");
    header("Access-Control-Allow-Origin: *");
    echo $res;

