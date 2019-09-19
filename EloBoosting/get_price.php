<?php

require 'functions.php';

$league = isset($_POST['league']) ? trim($_POST['league']) : '';
$division = isset($_POST['division']) ? trim($_POST['division']) : '';
$league2 = isset($_POST['league2']) ? trim($_POST['league2']) : '';
$division2 = isset($_POST['division2']) ? trim($_POST['division2']) : '';
$duo = isset($_POST['duo']) ? trim($_POST['duo']) : '';


$item_amounts = get_price($league, $division, $league2, $division2);

if($duo == "[DUO]") {
	$item_amount = $item_amounts * 1.5;
}
else{
	$item_amount = $item_amounts;
}

echo  $item_amount;

