<?php

$apiUrl = 'https://graph.facebook.com/';
$id = $_GET["id"];
$attribute = $_GET["attribute"];
if($attribute != ''){
	$attribute = "/".$attribute;
}
$token = 'AAACZCEZAB3PGkBALunsPJTKatfNov6KQgPbcwZBhk6UCn95OEurBfPk4KQowA3g7K8MLZBLQOutnLYKvDHFXShOX8JCRVuPnhhkux7vQ8gZDZD';

if($token != ''){
$url = $apiUrl.$id.$attribute.'?access_token='.$token;
} else {
	$url = $apiUrl.$id.$attribute;
}
$jsonData = file_get_contents($url);

header('Content-Type: text/json');
header ('Cache-Control: no-cache');
header ('Cache-Control: no-store' , false);

echo $jsonData;

?>