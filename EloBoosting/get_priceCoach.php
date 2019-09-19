<?php

require 'functions4.php';

$amountofhours = isset($_POST['amountofhours']) ? trim($_POST['amountofhours']) : '';

$item_amount = get_price($amountofhours);

echo  $item_amount;

