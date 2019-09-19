<?php

require 'functions2.php';

$league = isset($_POST['leagueWins']) ? trim($_POST['leagueWins']) : '';
$division = isset($_POST['divisionWins']) ? trim($_POST['divisionWins']) : '';
$amountofwins = isset($_POST['amountofwins']) ? trim($_POST['amountofwins']) : '';
$duoWins = isset($_POST['duoWins']) ? trim($_POST['duoWins']) : '';


$item_amounts = get_price($league, $division, $amountofwins);

if($duoWins == "[DUO]") {
	$item_amount = $item_amounts * 1.5;
}
else{
	$item_amount = $item_amounts;
}

echo  $item_amount;

