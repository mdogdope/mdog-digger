<?php
include("faucethub.php");
include("fuctions.php");

$api_key = "9fda4889558642d8841dde85857e1281";
$cur = "BTC";

$fh = new FaucetHub($api_key, $cur);
$secretkey = "LM9YXjAbPEPNEPCrz6AdQ4picJqOX6ry";

$payout = $_REQUEST["payout"];
$address = $_REQUEST["address"];
//echo $address;
//$address = "112KZU7GoJ3RAEfyX4mYKhhSZJnGohacdb";
if(payout > "0"){
$newbal = $fh->send($address, $payout);
echo $payout;
}


//179.2 hashes = 0.00000001 monero
//1 monero = 0.02757980 bitcoins
//1 satoshi = 0.00000036 monero
//7168 hashes per 1 satoshi
?>
