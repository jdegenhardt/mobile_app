<?php

$apiUrl = 'https://graph.facebook.com/';
$id = $_GET["id"];
$attribute = $_GET["attribute"];
if($attribute != ''){
	$attribute = "/".$attribute;
}
$token = 'AAACZCEZAB3PGkBALunsPJTKatfNov6KQgPbcwZBhk6UCn95OEurBfPk4KQowA3g7K8MLZBLQOutnLYKvDHFXShOX8JCRVuPnhhkux7vQ8gZDZD';

//  https://graph.facebook.com/berlinairport?access_token=AAACZCEZAB3PGkBAPhWzZBo4VppZBE2DYq4JB39ZBt6NpnWWHiLqCGz6DLJUw3lVI6EZAsFdbjn2CR0ZA2mOZBvsGOmG8ZAFaXnk5iIpC1Y83GOQZDZD

$url = $apiUrl.$id.$attribute.'?access_token='.$token;
$jsonData = file_get_contents($url);

header('Content-Type: text/json');
header ('Cache-Control: no-cache');
header ('Cache-Control: no-store' , false);

echo $jsonData;

?>