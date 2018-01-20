<?php
include("faucethub.php");
include("fuctions.php");
$api_key = "9fda4889558642d8841dde85857e1281";
$cur = "BTC";
$fh = new FaucetHub($api_key, $cur);
$secretkey = "LM9YXjAbPEPNEPCrz6AdQ4picJqOX6ry";
$coinhive_profit_percent = "0.05";

$bal = $fh->getbalance("112KZU7GoJ3RAEfyX4mYKhhSZJnGohacdb");

echo number_format($bal['balance'] * 0.00000001, 8);
echo "<br>";

$xmrbtcdata = json_decode(file_get_contents("https://api.cryptonator.com/api/ticker/xmr-btc"));

$payoutdata = json_decode(file_get_contents("https://api.coinhive.com/stats/payout?secret=$secretkey"));

$payout = $payoutdata->payoutPer1MHashes;
echo number_format($payout,10);
$xmrbtc = $xmrbtcdata->ticker->price;
echo "<br>";
echo floor($xmrbtc*100000000);


/*
$newbal = $fh->send("112KZU7GoJ3RAEfyX4mYKhhSZJnGohacdb", 1);
echo number_format($newbal['balance'] * 0.00000001, 8);
*/


//179.2 hashes = 0.00000001 monero
//1 monero = 0.02757980 bitcoins
//1 satoshi = 0.00000036 monero
//7168 hashes per 1 satoshi
?>
