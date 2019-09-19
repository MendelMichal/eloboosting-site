<?php
function check_price($price, $id){
    $valid_price = false;
	return true;
}


function get_price($league_1, $amountof_games)
{

    $product = $league_1 . ' ' . $amountof_games;

    switch ($product)
    {

        case 'Unranked 2':
            $price = 15;
            break;
        case 'Unranked 3':
            $price = 25;
            break;
        case 'Unranked 4':
            $price = 35;
            break;
        case 'Unranked 5':
            $price = 45;
            break;
        case 'Unranked 6':
            $price = 55;
            break;
        case 'Unranked 7':
            $price = 65;
            break;
        case 'Unranked 8':
            $price = 75;
            break;
        case 'Unranked 9':
            $price = 85;
            break;
        case 'Unranked 10':
            $price = 95;
            break;
        case 'Bronze 2':
            $price = 15;
            break;
        case 'Bronze 3':
            $price = 25;
            break;
        case 'Bronze 4':
            $price = 35;
            break;
        case 'Bronze 5':
            $price = 45;
            break;
        case 'Bronze 6':
            $price = 55;
            break;
        case 'Bronze 7':
            $price = 65;
            break;
        case 'Bronze 8':
            $price = 75;
            break;
        case 'Bronze 9':
            $price = 85;
            break;
        case 'Bronze 10':
            $price = 95;
            break;
        case 'Silver 2':
            $price = 15;
            break;
        case 'Silver 3':
            $price = 25;
            break;
        case 'Silver 4':
            $price = 35;
            break;
        case 'Silver 5':
            $price = 45;
            break;
        case 'Silver 6':
            $price = 55;
            break;
        case 'Silver 7':
            $price = 65;
            break;
        case 'Silver 8':
            $price = 75;
            break;
        case 'Silver 9':
            $price = 85;
            break;
        case 'Silver 10':
            $price = 95;
            break;
        case 'Gold 2':
            $price = 22;
            break;
        case 'Gold 3':
            $price = 40;
            break;
        case 'Gold 4':
            $price = 51;
            break;
        case 'Gold 5':
            $price = 65;
            break;
        case 'Gold 6':
            $price = 79;
            break;
        case 'Gold 7':
            $price = 93;
            break;
        case 'Gold 8':
            $price = 107;
            break;
        case 'Gold 9':
            $price = 121;
            break;
        case 'Gold 10':
            $price = 135;
            break;
        case 'Platinium 2':
            $price = 27;
            break;
        case 'Platinium 3':
            $price = 43;
            break;
        case 'Platinium 4':
            $price = 59;
            break;
        case 'Platinium 5':
            $price = 75;
            break;
        case 'Platinium 6':
            $price = 91;
            break;
        case 'Platinium 7':
            $price = 107;
            break;
        case 'Platinium 8':
            $price = 123;
            break;
        case 'Platinium 9':
            $price = 139;
            break;
        case 'Platinium 10':
            $price = 155;
            break;
        case 'Diamond 2':
            $price = 35;
            break;
        case 'Diamond 3':
            $price = 55;
            break;
        case 'Diamond 4':
            $price = 75;
            break;
        case 'Diamond 5':
            $price = 95;
            break;
        case 'Diamond 6':
            $price = 115;
            break;
        case 'Diamond 7':
            $price = 135;
            break;
        case 'Diamond 8':
            $price = 155;
            break;
        case 'Diamond 9':
            $price = 175;
            break;
        case 'Diamond 10':
            $price = 195;
            break;
        default:
            die('Wybierz prawidłową ligę i dywizję.');
    }

    return $price;

}
