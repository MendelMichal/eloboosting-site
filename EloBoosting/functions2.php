<?php
function check_price($price, $id){
    $valid_price = false;
	return true;
}


function get_price($league_1, $division_1, $amountof_wins)
{

    $product = $league_1 . ' ' . $division_1 . ' ' . $amountof_wins;

    switch ($product)
    {

        case 'Bronze V 2':
            $price = 11;
            break;
        case 'Bronze V 3':
            $price = 16;
            break;
        case 'Bronze V 4':
            $price = 21;
            break;
        case 'Bronze V 5':
            $price = 26;
            break;
        case 'Bronze V 6':
            $price = 31;
            break;
        case 'Bronze V 7':
            $price = 36;
            break;
        case 'Bronze V 8':
            $price = 41;
            break;
        case 'Bronze V 9':
            $price = 46;
            break;
        case 'Bronze V 10':
            $price = 51;
            break;
        case 'Bronze IV 2':
            $price = 11;
            break;
        case 'Bronze IV 3':
            $price = 16;
            break;
        case 'Bronze IV 4':
            $price = 21;
            break;
        case 'Bronze IV 5':
            $price = 26;
            break;
        case 'Bronze IV 6':
            $price = 31;
            break;
        case 'Bronze IV 7':
            $price = 36;
            break;
        case 'Bronze IV 8':
            $price = 41;
            break;
        case 'Bronze IV 9':
            $price = 46;
            break;
        case 'Bronze IV 10':
            $price = 51;
            break;
        case 'Bronze III 2':
            $price = 11;
            break;
        case 'Bronze III 3':
            $price = 16;
            break;
        case 'Bronze III 4':
            $price = 21;
            break;
        case 'Bronze III 5':
            $price = 26;
            break;
        case 'Bronze III 6':
            $price = 31;
            break;
        case 'Bronze III 7':
            $price = 36;
            break;
        case 'Bronze III 8':
            $price = 41;
            break;
        case 'Bronze III 9':
            $price = 46;
            break;
        case 'Bronze III 10':
            $price = 51;
            break;
        case 'Bronze II 2':
            $price = 11;
            break;
        case 'Bronze II 3':
            $price = 16;
            break;
        case 'Bronze II 4':
            $price = 21;
            break;
        case 'Bronze II 5':
            $price = 26;
            break;
        case 'Bronze II 6':
            $price = 31;
            break;
        case 'Bronze II 7':
            $price = 36;
            break;
        case 'Bronze II 8':
            $price = 41;
            break;
        case 'Bronze II 9':
            $price = 46;
            break;
        case 'Bronze II 10':
            $price = 51;
            break;
        case 'Bronze I 2':
            $price = 12;
            break;
        case 'Bronze I 3':
            $price = 17;
            break;
        case 'Bronze I 4':
            $price = 23;
            break;
        case 'Bronze I 5':
            $price = 29;
            break;
        case 'Bronze I 6':
            $price = 34;
            break;
        case 'Bronze I 7':
            $price = 40;
            break;
        case 'Bronze I 8':
            $price = 46;
            break;
        case 'Bronze I 9':
            $price = 52;
            break;
        case 'Bronze I 10':
            $price = 58;
            break;
        case 'Silver V 2':
            $price = 14;
            break;
        case 'Silver V 3':
            $price = 21;
            break;
        case 'Silver V 4':
            $price = 28;
            break;
        case 'Silver V 5':
            $price = 35;
            break;
        case 'Silver V 6':
            $price = 41;
            break;
        case 'Silver V 7':
            $price = 48;
            break;
        case 'Silver V 8':
            $price = 55;
            break;
        case 'Silver V 9':
            $price = 62;
            break;
        case 'Silver V 10':
            $price = 68;
            break;
        case 'Silver IV 2':
            $price = 14;
            break;
        case 'Silver IV 3':
            $price = 21;
            break;
        case 'Silver IV 4':
            $price = 28;
            break;
        case 'Silver IV 5':
            $price = 35;
            break;
        case 'Silver IV 6':
            $price = 41;
            break;
        case 'Silver IV 7':
            $price = 48;
            break;
        case 'Silver IV 8':
            $price = 55;
            break;
        case 'Silver IV 9':
            $price = 62;
            break;
        case 'Silver IV 10':
            $price = 68;
            break;
        case 'Silver III 2':
            $price = 14;
            break;
        case 'Silver III 3':
            $price = 21;
            break;
        case 'Silver III 4':
            $price = 28;
            break;
        case 'Silver III 5':
            $price = 35;
            break;
        case 'Silver III 6':
            $price = 41;
            break;
        case 'Silver III 7':
            $price = 48;
            break;
        case 'Silver III 8':
            $price = 55;
            break;
        case 'Silver III 9':
            $price = 62;
            break;
        case 'Silver III 10':
            $price = 68;
            break;
        case 'Silver II 2':
            $price = 14;
            break;
        case 'Silver II 3':
            $price = 21;
            break;
        case 'Silver II 4':
            $price = 28;
            break;
        case 'Silver II 5':
            $price = 35;
            break;
        case 'Silver II 6':
            $price = 41;
            break;
        case 'Silver II 7':
            $price = 48;
            break;
        case 'Silver II 8':
            $price = 55;
            break;
        case 'Silver II 9':
            $price = 62;
            break;
        case 'Silver II 10':
            $price = 68;
            break;
        case 'Silver I 2':
            $price = 16;
            break;
        case 'Silver I 3':
            $price = 23;
            break;
        case 'Silver I 4':
            $price = 31;
            break;
        case 'Silver I 5':
            $price = 39;
            break;
        case 'Silver I 6':
            $price = 46;
            break;
        case 'Silver I 7':
            $price = 54;
            break;
        case 'Silver I 8':
            $price = 62;
            break;
        case 'Silver I 9':
            $price = 69;
            break;
        case 'Silver I 10':
            $price = 77;
            break;
        case 'Gold V 2':
            $price = 17;
            break;
        case 'Gold V 3':
            $price = 25;
            break;
        case 'Gold V 4':
            $price = 33;
            break;
        case 'Gold V 5':
            $price = 41;
            break;
        case 'Gold V 6':
            $price = 49;
            break;
        case 'Gold V 7':
            $price = 57;
            break;
        case 'Gold V 8':
            $price = 64;
            break;
        case 'Gold V 9':
            $price = 72;
            break;
        case 'Gold V 10':
            $price = 80;
            break;
        case 'Gold IV 2':
            $price = 17;
            break;
        case 'Gold IV 3':
            $price = 25;
            break;
        case 'Gold IV 4':
            $price = 33;
            break;
        case 'Gold IV 5':
            $price = 41;
            break;
        case 'Gold IV 6':
            $price = 49;
            break;
        case 'Gold IV 7':
            $price = 57;
            break;
        case 'Gold IV 8':
            $price = 64;
            break;
        case 'Gold IV 9':
            $price = 72;
            break;
        case 'Gold IV 10':
            $price = 80;
            break;
        case 'Gold III 2':
            $price = 17;
            break;
        case 'Gold III 3':
            $price = 25;
            break;
        case 'Gold III 4':
            $price = 33;
            break;
        case 'Gold III 5':
            $price = 41;
            break;
        case 'Gold III 6':
            $price = 49;
            break;
        case 'Gold III 7':
            $price = 57;
            break;
        case 'Gold III 8':
            $price = 64;
            break;
        case 'Gold III 9':
            $price = 72;
            break;
        case 'Gold III 10':
            $price = 80;
            break;
        case 'Gold II 2':
            $price = 17;
            break;
        case 'Gold II 3':
            $price = 25;
            break;
        case 'Gold II 4':
            $price = 33;
            break;
        case 'Gold II 5':
            $price = 41;
            break;
        case 'Gold II 6':
            $price = 49;
            break;
        case 'Gold II 7':
            $price = 57;
            break;
        case 'Gold II 8':
            $price = 64;
            break;
        case 'Gold II 9':
            $price = 72;
            break;
        case 'Gold II 10':
            $price = 80;
            break;
        case 'Gold I 2':
            $price = 20;
            break;
        case 'Gold I 3':
            $price = 30;
            break;
        case 'Gold I 4':
            $price = 39;
            break;
        case 'Gold I 5':
            $price = 48;
            break;
        case 'Gold I 6':
            $price = 58;
            break;
        case 'Gold I 7':
            $price = 67;
            break;
        case 'Gold I 8':
            $price = 77;
            break;
        case 'Gold I 9':
            $price = 86;
            break;
        case 'Gold I 10':
            $price = 95;
            break;
        case 'Platinium V 2':
            $price = 27;
            break;
        case 'Platinium V 3':
            $price = 40;
            break;
        case 'Platinium V 4':
            $price = 53;
            break;
        case 'Platinium V 5':
            $price = 66;
            break;
        case 'Platinium V 6':
            $price = 79;
            break;
        case 'Platinium V 7':
            $price = 92;
            break;
        case 'Platinium V 8':
            $price = 104;
            break;
        case 'Platinium V 9':
            $price = 117;
            break;
        case 'Platinium V 10':
            $price = 130;
            break;
        case 'Platinium IV 2':
            $price = 27;
            break;
        case 'Platinium IV 3':
            $price = 40;
            break;
        case 'Platinium IV 4':
            $price = 53;
            break;
        case 'Platinium IV 5':
            $price = 66;
            break;
        case 'Platinium IV 6':
            $price = 79;
            break;
        case 'Platinium IV 7':
            $price = 92;
            break;
        case 'Platinium IV 8':
            $price = 104;
            break;
        case 'Platinium IV 9':
            $price = 117;
            break;
        case 'Platinium IV 10':
            $price = 130;
            break;
        case 'Platinium III 2':
            $price = 27;
            break;
        case 'Platinium III 3':
            $price = 40;
            break;
        case 'Platinium III 4':
            $price = 53;
            break;
        case 'Platinium III 5':
            $price = 66;
            break;
        case 'Platinium III 6':
            $price = 79;
            break;
        case 'Platinium III 7':
            $price = 92;
            break;
        case 'Platinium III 8':
            $price = 104;
            break;
        case 'Platinium III 9':
            $price = 117;
            break;
        case 'Platinium III 10':
            $price = 130;
            break;
        case 'Platinium II 2':
            $price = 27;
            break;
        case 'Platinium II 3':
            $price = 40;
            break;
        case 'Platinium II 4':
            $price = 53;
            break;
        case 'Platinium II 5':
            $price = 66;
            break;
        case 'Platinium II 6':
            $price = 79;
            break;
        case 'Platinium II 7':
            $price = 92;
            break;
        case 'Platinium II 8':
            $price = 104;
            break;
        case 'Platinium II 9':
            $price = 117;
            break;
        case 'Platinium II 10':
            $price = 130;
            break;
        case 'Platinium I 2':
            $price = 35;
            break;
        case 'Platinium I 3':
            $price = 52;
            break;
        case 'Platinium I 4':
            $price = 69;
            break;
        case 'Platinium I 5':
            $price = 86;
            break;
        case 'Platinium I 6':
            $price = 103;
            break;
        case 'Platinium I 7':
            $price = 120;
            break;
        case 'Platinium I 8':
            $price = 137;
            break;
        case 'Platinium I 9':
            $price = 153;
            break;
        case 'Platinium I 10':
            $price = 170;
            break;
        case 'Diamond V 2':
            $price = 37;
            break;
        case 'Diamond V 3':
            $price = 55;
            break;
        case 'Diamond V 4':
            $price = 73;
            break;
        case 'Diamond V 5':
            $price = 91;
            break;
        case 'Diamond V 6':
            $price = 109;
            break;
        case 'Diamond V 7':
            $price = 127;
            break;
        case 'Diamond V 8':
            $price = 144;
            break;
        case 'Diamond V 9':
            $price = 162;
            break;
        case 'Diamond V 10':
            $price = 180;
            break;
        case 'Diamond IV 2':
            $price = 42;
            break;
        case 'Diamond IV 3':
            $price = 62;
            break;
        case 'Diamond IV 4':
            $price = 82;
            break;
        case 'Diamond IV 5':
            $price = 102;
            break;
        case 'Diamond IV 6':
            $price = 122;
            break;
        case 'Diamond IV 7':
            $price = 142;
            break;
        case 'Diamond IV 8':
            $price = 162;
            break;
        case 'Diamond IV 9':
            $price = 182;
            break;
        case 'Diamond IV 10':
            $price = 202;
            break;
        case 'Diamond III 2':
            $price = 46;
            break;
        case 'Diamond III 3':
            $price = 68;
            break;
        case 'Diamond III 4':
            $price = 90;
            break;
        case 'Diamond III 5':
            $price = 112;
            break;
        case 'Diamond III 6':
            $price = 134;
            break;
        case 'Diamond III 7':
            $price = 157;
            break;
        case 'Diamond III 8':
            $price = 179;
            break;
        case 'Diamond III 9':
            $price = 201;
            break;
        case 'Diamond III 10':
            $price = 223;
            break;
        case 'Diamond II 2':
            $price = 50;
            break;
        case 'Diamond II 3':
            $price = 74;
            break;
        case 'Diamond II 4':
            $price = 99;
            break;
        case 'Diamond II 5':
            $price = 123;
            break;
        case 'Diamond II 6':
            $price = 147;
            break;
        case 'Diamond II 7':
            $price = 172;
            break;
        case 'Diamond II 8':
            $price = 196;
            break;
        case 'Diamond II 9':
            $price = 220;
            break;
        case 'Diamond II 10':
            $price = 244;
            break;
        case 'Diamond I 2':
            $price = 102;
            break;
        case 'Diamond I 3':
            $price = 151;
            break;
        case 'Diamond I 4':
            $price = 201;
            break;
        case 'Diamond I 5':
            $price = 251;
            break;
        case 'Diamond I 6':
            $price = 300;
            break;
        case 'Diamond I 7':
            $price = 350;
            break;
        case 'Diamond I 8':
            $price = 400;
            break;
        case 'Diamond I 9':
            $price = 450;
            break;
        case 'Diamond I 10':
            $price = 500;
            break;
        default:
            die('Wybierz prawidłową ligę i dywizję.');
    }

    return $price;

}
