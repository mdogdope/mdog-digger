<?php
$address = $_REQUEST["address"];
$data = json_decode(file_get_contents("https://api.cryptonator.com/api/ticker/xmr-btc"));
if (!$data->success) {
return 0;
}
$price $data->ticker->price;
echo $price;







?>
