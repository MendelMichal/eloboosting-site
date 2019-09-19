<?php

require 'include/functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $league = isset($_POST['league']) ? trim($_POST['league']) : '';
    $division = isset($_POST['division']) ? trim($_POST['division']) : '';
    $league_2 = isset($_POST['league2']) ? trim($_POST['league2']) : '';
    $division_2 = isset($_POST['division2']) ? trim($_POST['division2']) : '';
	$duo = isset($_POST['duo']) ? trim($_POST['duo']) : '';

    $item_amount = get_price($league, $division, $league_2, $division_2, $duo);
}
