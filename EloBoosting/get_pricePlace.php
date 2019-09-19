<?php

require 'functions3.php';

$league = isset($_POST['leaguePlacements']) ? trim($_POST['leaguePlacements']) : '';
$amountofgames = isset($_POST['amountofgames']) ? trim($_POST['amountofgames']) : '';
$duoPlacements = isset($_POST['duoPlacements']) ? trim($_POST['duoPlacements']) : '';


$item_amounts = get_price($league, $amountofgames);

if($duoPlacements == "[DUO]") {
	$item_amount = $item_amounts * 1.5;
}
else{
	$item_amount = $item_amounts;
}

echo  $item_amount;

