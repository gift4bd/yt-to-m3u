<?php
$ch = $_GET['ch'];
$url = file_get_contents("https://nowhdtime.com.bd/live-tv/".$ch.".html");
preg_match_all(
    "/(https.*\d+')/",

    $url,
    $nizam, 
    PREG_SET_ORDER 
);
foreach ($nizam as $uddin) {
    $urls = $uddin[0];
    $play = str_replace("'","",$urls);
header("Location: $play");
}
?>