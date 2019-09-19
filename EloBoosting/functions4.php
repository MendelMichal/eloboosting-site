<?php

function check_price($price, $id){
    $valid_price = false;
	return true;
}


function get_price($amountof_hours)
{

    $product = $amountof_hours;

    switch ($product)
    {

        case '1':
            $price = 25;
            break;
        case '2':
            $price = 50;
            break;
        case '3':
            $price = 75;
            break;
        case '4':
            $price = 100;
            break;
        case '5':
            $price = 125;
            break;
        case '6':
            $price = 150;
            break;
        case '7':
            $price = 175;
            break;
        case '8':
            $price = 200;
            break;
        case '9':
            $price = 225;
            break;
        case '10':
            $price = 250;
            break;
        default:
            die('Wybierz prawidłową ligę i dywizję.');
    }

    return $price;

}
