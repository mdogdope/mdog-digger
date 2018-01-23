<?php
$data = json_decode(file_get_contents("https://api.cryptonator.com/api/ticker/btc-xmr"));
if (!$data->success) {
return 0;
}
$price = $data->ticker->price;

$val = $price/100;

echo $payoutrate = ($val/0.000054)*1.05
?>
