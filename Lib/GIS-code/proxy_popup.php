<?php 
$u=urldecode($_GET['url']);
$uleoke=str_replace("https://","http://",$u);
$json = file_get_contents($uleoke);
echo $json;
?>