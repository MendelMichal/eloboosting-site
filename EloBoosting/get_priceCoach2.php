<?php

require 'functions4.php';

$amountofhours2 = isset($_POST['amountofhours2']) ? trim($_POST['amountofhours2']) : '';

$item_amount = get_price($amountofhours2);

echo  $item_amount;

