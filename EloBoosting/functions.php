<?php

function check_price($price, $id){
    $valid_price = false;
	return true;
}


function get_price($league_1, $division_1, $league_2, $division_2)
{

    $product = $league_1 . ' ' . $division_1 . ' ' . $league_2 . ' ' . $division_2;

    switch ($product)
    {

        case 'Bronze V Bronze IV':
            $price = 35;
            break;
        case 'Bronze V Bronze III':
            $price = 70;
            break;
        case 'Bronze V Bronze II':
            $price = 105;
            break;
        case 'Bronze V Bronze I':
            $price = 140;
            break;
        case 'Bronze V Silver V':
            $price = 180;
            break;
        case 'Bronze V Silver IV':
            $price = 220;
            break;
        case 'Bronze V Silver III':
            $price = 260;
            break;
        case 'Bronze V Silver II':
            $price = 300;
            break;
        case 'Bronze V Silver I':
            $price = 340;
            break;
        case 'Bronze V Gold V':
            $price = 390;
            break;
        case 'Bronze V Gold IV':
            $price = 440;
            break;
        case 'Bronze V Gold III':
            $price = 490;
            break;
        case 'Bronze V Gold II':
            $price = 540;
            break;
        case 'Bronze V Gold I':
            $price = 590;
            break;
        case 'Bronze V Platinium V':
            $price = 655;
            break;
        case 'Bronze V Platinium IV':
            $price = 740;
            break;
        case 'Bronze V Platinium III':
            $price = 825;
            break;
        case 'Bronze V Platinium II':
            $price = 920;
            break;
        case 'Bronze V Platinium I':
            $price = 995;
            break;
        case 'Bronze V Diamond V':
            $price = 1125;
            break;
        case 'Bronze V Diamond IV':
            $price = 1270;
            break;
        case 'Bronze V Diamond III':
            $price = 1415;
            break;
        case 'Bronze V Diamond II':
            $price = 1580;
            break;
        case 'Bronze V Diamond I':
            $price = 1755;
            break;
        case 'Bronze V Master Tier I':
            $price = 2095;
            break;
        case 'Bronze V Master Tier II':
            $price = 2095;
            break;
        case 'Bronze V Master Tier III':
            $price = 2095;
            break;
        case 'Bronze V Master Tier IV':
            $price = 2095;
            break;
        case 'Bronze V Master Tier V':
            $price = 2095;
            break;
        case 'Bronze IV Bronze III':
            $price = 35;
            break;
        case 'Bronze IV Bronze II':
            $price = 70;
            break;
        case 'Bronze IV Bronze I':
            $price = 105;
            break;
        case 'Bronze IV Silver V':
            $price = 145;
            break;
        case 'Bronze IV Silver IV':
            $price = 185;
            break;
        case 'Bronze IV Silver III':
            $price = 225;
            break;
        case 'Bronze IV Silver II':
            $price = 265;
            break;
        case 'Bronze IV Silver I':
            $price = 305;
            break;
        case 'Bronze IV Gold V':
            $price = 355;
            break;
        case 'Bronze IV Gold IV':
            $price = 405;
            break;
        case 'Bronze IV Gold III':
            $price = 455;
            break;
        case 'Bronze IV Gold II':
            $price = 505;
            break;
        case 'Bronze IV Gold I':
            $price = 555;
            break;
        case 'Bronze IV Platinium V':
            $price = 620;
            break;
        case 'Bronze IV Platinium IV':
            $price = 705;
            break;
        case 'Bronze IV Platinium III':
            $price = 790;
            break;
        case 'Bronze IV Platinium II':
            $price = 875;
            break;
        case 'Bronze IV Platinium I':
            $price = 960;
            break;
        case 'Bronze IV Diamond V':
            $price = 1090;
            break;
        case 'Bronze IV Diamond IV':
            $price = 1235;
            break;
        case 'Bronze IV Diamond III':
            $price = 1380;
            break;
        case 'Bronze IV Diamond II':
            $price = 1545;
            break;
        case 'Bronze IV Diamond I':
            $price = 1720;
            break;
        case 'Bronze IV Master Tier I':
            $price = 2060;
            break;
        case 'Bronze IV Master Tier II':
            $price = 2060;
            break;
        case 'Bronze IV Master Tier III':
            $price = 2060;
            break;
        case 'Bronze IV Master Tier IV':
            $price = 2060;
            break;
        case 'Bronze IV Master Tier V':
            $price = 2060;
            break;
        case 'Bronze III Bronze II':
            $price = 35;
            break;
        case 'Bronze III Bronze I':
            $price = 70;
            break;
        case 'Bronze III Silver V':
            $price = 110;
            break;
        case 'Bronze III Silver IV':
            $price = 150;
            break;
        case 'Bronze III Silver III':
            $price = 190;
            break;
        case 'Bronze III Silver II':
            $price = 230;
            break;
        case 'Bronze III Silver I':
            $price = 270;
            break;
        case 'Bronze III Gold V':
            $price = 320;
            break;
        case 'Bronze III Gold IV':
            $price = 370;
            break;
        case 'Bronze III Gold III':
            $price = 420;
            break;
        case 'Bronze III Gold II':
            $price = 470;
            break;
        case 'Bronze III Gold I':
            $price = 520;
            break;
        case 'Bronze III Platinium V':
            $price = 585;
            break;
        case 'Bronze III Platinium IV':
            $price = 670;
            break;
        case 'Bronze III Platinium III':
            $price = 755;
            break;
        case 'Bronze III Platinium II':
            $price = 840;
            break;
        case 'Bronze III Platinium I':
            $price = 925;
            break;
        case 'Bronze III Diamond V':
            $price = 1055;
            break;
        case 'Bronze III Diamond IV':
            $price = 1200;
            break;
        case 'Bronze III Diamond III':
            $price = 1345;
            break;
        case 'Bronze III Diamond II':
            $price = 1510;
            break;
        case 'Bronze III Diamond I':
            $price = 1680;
            break;
        case 'Bronze III Master Tier I':
            $price = 2025;
            break;
        case 'Bronze III Master Tier II':
            $price = 2025;
            break;
        case 'Bronze III Master Tier III':
            $price = 2025;
            break;
        case 'Bronze III Master Tier IV':
            $price = 2025;
            break;
        case 'Bronze III Master Tier V':
            $price = 2025;
            break;
        case 'Bronze II Bronze I':
            $price = 35;
            break;
        case 'Bronze II Silver V':
            $price = 75;
            break;
        case 'Bronze II Silver IV':
            $price = 115;
            break;
        case 'Bronze II Silver III':
            $price = 155;
            break;
        case 'Bronze II Silver II':
            $price = 195;
            break;
        case 'Bronze II Silver I':
            $price = 235;
            break;
        case 'Bronze II Gold V':
            $price = 285;
            break;
        case 'Bronze II Gold IV':
            $price = 335;
            break;
        case 'Bronze II Gold III':
            $price = 385;
            break;
        case 'Bronze II Gold II':
            $price = 435;
            break;
        case 'Bronze II Gold I':
            $price = 485;
            break;
        case 'Bronze II Platinium V':
            $price = 550;
            break;
        case 'Bronze II Platinium IV':
            $price = 635;
            break;
        case 'Bronze II Platinium III':
            $price = 720;
            break;
        case 'Bronze II Platinium II':
            $price = 805;
            break;
        case 'Bronze II Platinium I':
            $price = 890;
            break;
        case 'Bronze II Diamond V':
            $price = 1020;
            break;
        case 'Bronze II Diamond IV':
            $price = 1165;
            break;
        case 'Bronze II Diamond III':
            $price = 1310;
            break;
        case 'Bronze II Diamond II':
            $price = 1475;
            break;
        case 'Bronze II Diamond I':
            $price = 1650;
            break;
        case 'Bronze II Master Tier I':
            $price = 1990;
            break;
        case 'Bronze II Master Tier II':
            $price = 1990;
            break;
        case 'Bronze II Master Tier III':
            $price = 1990;
            break;
        case 'Bronze II Master Tier IV':
            $price = 1990;
            break;
        case 'Bronze II Master Tier V':
            $price = 1990;
            break;
        case 'Bronze I Silver V':
            $price = 40;
            break;
        case 'Bronze I Silver IV':
            $price = 80;
            break;
        case 'Bronze I Silver III':
            $price = 120;
            break;
        case 'Bronze I Silver II':
            $price = 160;
            break;
        case 'Bronze I Silver I':
            $price = 200;
            break;
        case 'Bronze I Gold V':
            $price = 250;
            break;
        case 'Bronze I Gold IV':
            $price = 300;
            break;
        case 'Bronze I Gold III':
            $price = 350;
            break;
        case 'Bronze I Gold II':
            $price = 400;
            break;
        case 'Bronze I Gold I':
            $price = 450;
            break;
        case 'Bronze I Platinium V':
            $price = 515;
            break;
        case 'Bronze I Platinium IV':
            $price = 600;
            break;
        case 'Bronze I Platinium III':
            $price = 685;
            break;
        case 'Bronze I Platinium II':
            $price = 770;
            break;
        case 'Bronze I Platinium I':
            $price = 855;
            break;
        case 'Bronze I Diamond V':
            $price = 985;
            break;
        case 'Bronze I Diamond IV':
            $price = 1130;
            break;
        case 'Bronze I Diamond III':
            $price = 1275;
            break;
        case 'Bronze I Diamond II':
            $price = 1440;
            break;
        case 'Bronze I Diamond I':
            $price = 1615;
            break;
        case 'Bronze I Master Tier I':
            $price = 1955;
            break;
        case 'Bronze I Master Tier II':
            $price = 1955;
            break;
        case 'Bronze I Master Tier III':
            $price = 1955;
            break;
        case 'Bronze I Master Tier IV':
            $price = 1955;
            break;
        case 'Bronze I Master Tier V':
            $price = 1955;
            break;
        case 'Silver V Silver IV':
            $price = 40;
            break;
        case 'Silver V Silver III':
            $price = 80;
            break;
        case 'Silver V Silver II':
            $price = 120;
            break;
        case 'Silver V Silver I':
            $price = 160;
            break;
        case 'Silver V Gold V':
            $price = 210;
            break;
        case 'Silver V Gold IV':
            $price = 260;
            break;
        case 'Silver V Gold III':
            $price = 310;
            break;
        case 'Silver V Gold II':
            $price = 360;
            break;
        case 'Silver V Gold I':
            $price = 410;
            break;
        case 'Silver V Platinium V':
            $price = 475;
            break;
        case 'Silver V Platinium IV':
            $price = 560;
            break;
        case 'Silver V Platinium III':
            $price = 645;
            break;
        case 'Silver V Platinium II':
            $price = 730;
            break;
        case 'Silver V Platinium I':
            $price = 815;
            break;
        case 'Silver V Diamond V':
            $price = 945;
            break;
        case 'Silver V Diamond IV':
            $price = 1090;
            break;
        case 'Silver V Diamond III':
            $price = 1235;
            break;
        case 'Silver V Diamond II':
            $price = 1400;
            break;
        case 'Silver V Diamond I':
            $price = 1575;
            break;
        case 'Silver V Master Tier I':
            $price = 1915;
            break;
        case 'Silver V Master Tier II':
            $price = 1915;
            break;
        case 'Silver V Master Tier III':
            $price = 1915;
            break;
        case 'Silver V Master Tier IV':
            $price = 1915;
            break;
        case 'Silver V Master Tier V':
            $price = 1915;
            break;
        case 'Silver IV Silver III':
            $price = 40;
            break;
        case 'Silver IV Silver II':
            $price = 80;
            break;
        case 'Silver IV Silver I':
            $price = 120;
            break;
        case 'Silver IV Gold V':
            $price = 170;
            break;
        case 'Silver IV Gold IV':
            $price = 220;
            break;
        case 'Silver IV Gold III':
            $price = 270;
            break;
        case 'Silver IV Gold II':
            $price = 320;
            break;
        case 'Silver IV Gold I':
            $price = 370;
            break;
        case 'Silver IV Platinium V':
            $price = 435;
            break;
        case 'Silver IV Platinium IV':
            $price = 520;
            break;
        case 'Silver IV Platinium III':
            $price = 605;
            break;
        case 'Silver IV Platinium II':
            $price = 690;
            break;
        case 'Silver IV Platinium I':
            $price = 775;
            break;
        case 'Silver IV Diamond V':
            $price = 905;
            break;
        case 'Silver IV Diamond IV':
            $price = 1050;
            break;
        case 'Silver IV Diamond III':
            $price = 1195;
            break;
        case 'Silver IV Diamond II':
            $price = 1360;
            break;
        case 'Silver IV Diamond I':
            $price = 1535;
            break;
        case 'Silver IV Master Tier I':
            $price = 1875;
            break;
        case 'Silver IV Master Tier II':
            $price = 1875;
            break;
        case 'Silver IV Master Tier III':
            $price = 1875;
            break;
        case 'Silver IV Master Tier IV':
            $price = 1875;
            break;
        case 'Silver IV Master Tier V':
            $price = 1875;
            break;
        case 'Silver III Silver II':
            $price = 40;
            break;
        case 'Silver III Silver I':
            $price = 80;
            break;
        case 'Silver III Gold V':
            $price = 130;
            break;
        case 'Silver III Gold IV':
            $price = 180;
            break;
        case 'Silver III Gold III':
            $price = 230;
            break;
        case 'Silver III Gold II':
            $price = 280;
            break;
        case 'Silver III Gold I':
            $price = 330;
            break;
        case 'Silver III Platinium V':
            $price = 395;
            break;
        case 'Silver III Platinium IV':
            $price = 480;
            break;
        case 'Silver III Platinium III':
            $price = 565;
            break;
        case 'Silver III Platinium II':
            $price = 650;
            break;
        case 'Silver III Platinium I':
            $price = 735;
            break;
        case 'Silver III Diamond V':
            $price = 865;
            break;
        case 'Silver III Diamond IV':
            $price = 1010;
            break;
        case 'Silver III Diamond III':
            $price = 1155;
            break;
        case 'Silver III Diamond II':
            $price = 1320;
            break;
        case 'Silver III Diamond I':
            $price = 1495;
            break;
        case 'Silver III Master Tier I':
            $price = 1835;
            break;
        case 'Silver III Master Tier II':
            $price = 1835;
            break;
        case 'Silver III Master Tier III':
            $price = 1835;
            break;
        case 'Silver III Master Tier IV':
            $price = 1835;
            break;
        case 'Silver III Master Tier V':
            $price = 1835;
            break;
        case 'Silver II Silver I':
            $price = 40;
            break;
        case 'Silver II Gold V':
            $price = 90;
            break;
        case 'Silver II Gold IV':
            $price = 140;
            break;
        case 'Silver II Gold III':
            $price = 190;
            break;
        case 'Silver II Gold II':
            $price = 240;
            break;
        case 'Silver II Gold I':
            $price = 290;
            break;
        case 'Silver II Platinium V':
            $price = 355;
            break;
        case 'Silver II Platinium IV':
            $price = 440;
            break;
        case 'Silver II Platinium III':
            $price = 525;
            break;
        case 'Silver II Platinium II':
            $price = 610;
            break;
        case 'Silver II Platinium I':
            $price = 695;
            break;
        case 'Silver II Diamond V':
            $price = 825;
            break;
        case 'Silver II Diamond IV':
            $price = 970;
            break;
        case 'Silver II Diamond III':
            $price = 1115;
            break;
        case 'Silver II Diamond II':
            $price = 1280;
            break;
        case 'Silver II Diamond I':
            $price = 1455;
            break;
        case 'Silver II Master Tier I':
            $price = 1795;
            break;
        case 'Silver II Master Tier II':
            $price = 1795;
            break;
        case 'Silver II Master Tier III':
            $price = 1795;
            break;
        case 'Silver II Master Tier IV':
            $price = 1795;
            break;
        case 'Silver II Master Tier V':
            $price = 1795;
            break;
        case 'Silver I Gold V':
            $price = 50;
            break;
        case 'Silver I Gold IV':
            $price = 100;
            break;
        case 'Silver I Gold III':
            $price = 150;
            break;
        case 'Silver I Gold II':
            $price = 200;
            break;
        case 'Silver I Gold I':
            $price = 250;
            break;
        case 'Silver I Platinium V':
            $price = 315;
            break;
        case 'Silver I Platinium IV':
            $price = 400;
            break;
        case 'Silver I Platinium III':
            $price = 485;
            break;
        case 'Silver I Platinium II':
            $price = 570;
            break;
        case 'Silver I Platinium I':
            $price = 655;
            break;
        case 'Silver I Diamond V':
            $price = 785;
            break;
        case 'Silver I Diamond IV':
            $price = 930;
            break;
        case 'Silver I Diamond III':
            $price = 1075;
            break;
        case 'Silver I Diamond II':
            $price = 1270;
            break;
        case 'Silver I Diamond I':
            $price = 1415;
            break;
        case 'Silver I Master Tier I':
            $price = 1755;
            break;
        case 'Silver I Master Tier II':
            $price = 1755;
            break;
        case 'Silver I Master Tier III':
            $price = 1755;
            break;
        case 'Silver I Master Tier IV':
            $price = 1755;
            break;
        case 'Silver I Master Tier V':
            $price = 1755;
            break;
		case 'Gold V Gold IV':
            $price = 50;
            break;
        case 'Gold V Gold III':
            $price = 100;
            break;
        case 'Gold V Gold II':
            $price = 150;
            break;
        case 'Gold V Gold I':
            $price = 200;
            break;
        case 'Gold V Platinium V':
            $price = 265;
            break;
        case 'Gold V Platinium IV':
            $price = 350;
            break;
        case 'Gold V Platinium III':
            $price = 435;
            break;
        case 'Gold V Platinium II':
            $price = 520;
            break;
        case 'Gold V Platinium I':
            $price = 605;
            break;
        case 'Gold V Diamond V':
            $price = 750;
            break;
        case 'Gold V Diamond IV':
            $price = 895;
            break;
        case 'Gold V Diamond III':
            $price = 1040;
            break;
        case 'Gold V Diamond II':
            $price = 1205;
            break;
        case 'Gold V Diamond I':
            $price = 1380;
            break;
        case 'Gold V Master Tier I':
            $price = 1720;
            break;
        case 'Gold V Master Tier II':
            $price = 1720;
            break;
        case 'Gold V Master Tier III':
            $price = 1720;
            break;
        case 'Gold V Master Tier IV':
            $price = 1720;
            break;
        case 'Gold V Master Tier V':
            $price = 1720;
            break;
		case 'Gold IV Gold III':
            $price = 50;
            break;
        case 'Gold IV Gold II':
            $price = 100;
            break;
        case 'Gold IV Gold I':
            $price = 150;
            break;
        case 'Gold IV Platinium V':
            $price = 215;
            break;
        case 'Gold IV Platinium IV':
            $price = 300;
            break;
        case 'Gold IV Platinium III':
            $price = 385;
            break;
        case 'Gold IV Platinium II':
            $price = 470;
            break;
        case 'Gold IV Platinium I':
            $price = 555;
            break;
        case 'Gold IV Diamond V':
            $price = 700;
            break;
        case 'Gold IV Diamond IV':
            $price = 845;
            break;
        case 'Gold IV Diamond III':
            $price = 990;
            break;
        case 'Gold IV Diamond II':
            $price = 1155;
            break;
        case 'Gold IV Diamond I':
            $price = 1330;
            break;
        case 'Gold IV Master Tier I':
            $price = 1670;
            break;
        case 'Gold IV Master Tier II':
            $price = 1670;
            break;
        case 'Gold IV Master Tier III':
            $price = 1670;
            break;
        case 'Gold IV Master Tier IV':
            $price = 1670;
            break;
        case 'Gold IV Master Tier V':
            $price = 1670;
            break;
		case 'Gold III Gold II':
            $price = 50;
            break;
        case 'Gold III Gold I':
            $price = 100;
            break;
        case 'Gold III Platinium V':
            $price = 165;
            break;
        case 'Gold III Platinium IV':
            $price = 250;
            break;
        case 'Gold III Platinium III':
            $price = 335;
            break;
        case 'Gold III Platinium II':
            $price = 420;
            break;
        case 'Gold III Platinium I':
            $price = 505;
            break;
        case 'Gold III Diamond V':
            $price = 650;
            break;
        case 'Gold III Diamond IV':
            $price = 795;
            break;
        case 'Gold III Diamond III':
            $price = 940;
            break;
        case 'Gold III Diamond II':
            $price = 1105;
            break;
        case 'Gold III Diamond I':
            $price = 1280;
            break;
        case 'Gold III Master Tier I':
            $price = 1620;
            break;
        case 'Gold III Master Tier II':
            $price = 1620;
            break;
        case 'Gold III Master Tier III':
            $price = 1620;
            break;
        case 'Gold III Master Tier IV':
            $price = 1620;
            break;
        case 'Gold III Master Tier V':
            $price = 1620;
            break;
		case 'Gold II Gold I':
            $price = 50;
            break;
        case 'Gold II Platinium V':
            $price = 115;
            break;
        case 'Gold II Platinium IV':
            $price = 200;
            break;
        case 'Gold II Platinium III':
            $price = 285;
            break;
        case 'Gold II Platinium II':
            $price = 370;
            break;
        case 'Gold II Platinium I':
            $price = 455;
            break;
        case 'Gold II Diamond V':
            $price = 600;
            break;
        case 'Gold II Diamond IV':
            $price = 745;
            break;
        case 'Gold II Diamond III':
            $price = 890;
            break;
        case 'Gold II Diamond II':
            $price = 1055;
            break;
        case 'Gold II Diamond I':
            $price = 1230;
            break;
        case 'Gold II Master Tier I':
            $price = 1570;
            break;
        case 'Gold II Master Tier II':
            $price = 1570;
            break;
        case 'Gold II Master Tier III':
            $price = 1570;
            break;
        case 'Gold II Master Tier IV':
            $price = 1570;
            break;
        case 'Gold II Master Tier V':
            $price = 1570;
            break;
		case 'Gold I Platinium V':
            $price = 65;
            break;
        case 'Gold I Platinium IV':
            $price = 150;
            break;
        case 'Gold I Platinium III':
            $price = 235;
            break;
        case 'Gold I Platinium II':
            $price = 320;
            break;
        case 'Gold I Platinium I':
            $price = 405;
            break;
        case 'Gold I Diamond V':
            $price = 550;
            break;
        case 'Gold I Diamond IV':
            $price = 695;
            break;
        case 'Gold I Diamond III':
            $price = 840;
            break;
        case 'Gold I Diamond II':
            $price = 1005;
            break;
        case 'Gold I Diamond I':
            $price = 1180;
            break;
        case 'Gold I Master Tier I':
            $price = 1520;
            break;
        case 'Gold I Master Tier II':
            $price = 1520;
            break;
        case 'Gold I Master Tier III':
            $price = 1520;
            break;
        case 'Gold I Master Tier IV':
            $price = 1520;
            break;
        case 'Gold I Master Tier V':
            $price = 1520;
            break;
		case 'Platinium V Platinium IV':
            $price = 85;
            break;
        case 'Platinium V Platinium III':
            $price = 170;
            break;
        case 'Platinium V Platinium II':
            $price = 255;
            break;
        case 'Platinium V Platinium I':
            $price = 340;
            break;
        case 'Platinium V Diamond V':
            $price = 470;
            break;
        case 'Platinium V Diamond IV':
            $price = 615;
            break;
        case 'Platinium V Diamond III':
            $price = 760;
            break;
        case 'Platinium V Diamond II':
            $price = 925;
            break;
        case 'Platinium V Diamond I':
            $price = 1100;
            break;
        case 'Platinium V Master Tier I':
            $price = 1440;
            break;
        case 'Platinium V Master Tier II':
            $price = 1440;
            break;
        case 'Platinium V Master Tier III':
            $price = 1440;
            break;
        case 'Platinium V Master Tier IV':
            $price = 1440;
            break;
        case 'Platinium V Master Tier V':
            $price = 1440;
            break;
		case 'Platinium IV Platinium III':
            $price = 85;
            break;
        case 'Platinium IV Platinium II':
            $price = 170;
            break;
        case 'Platinium IV Platinium I':
            $price = 255;
            break;
        case 'Platinium IV Diamond V':
            $price = 385;
            break;
        case 'Platinium IV Diamond IV':
            $price = 530;
            break;
        case 'Platinium IV Diamond III':
            $price = 675;
            break;
        case 'Platinium IV Diamond II':
            $price = 840;
            break;
        case 'Platinium IV Diamond I':
            $price = 1015;
            break;
        case 'Platinium IV Master Tier I':
            $price = 1355;
            break;
        case 'Platinium IV Master Tier II':
            $price = 1355;
            break;
        case 'Platinium IV Master Tier III':
            $price = 1355;
            break;
        case 'Platinium IV Master Tier IV':
            $price = 1355;
            break;
        case 'Platinium IV Master Tier V':
            $price = 1355;
            break;
		case 'Platinium III Platinium II':
            $price = 85;
            break;
        case 'Platinium III Platinium I':
            $price = 170;
            break;
        case 'Platinium III Diamond V':
            $price = 315;
            break;
        case 'Platinium III Diamond IV':
            $price = 460;
            break;
        case 'Platinium III Diamond III':
            $price = 605;
            break;
        case 'Platinium III Diamond II':
            $price = 770;
            break;
        case 'Platinium III Diamond I':
            $price = 945;
            break;
        case 'Platinium III Master Tier I':
            $price = 1285;
            break;
        case 'Platinium III Master Tier II':
            $price = 1285;
            break;
        case 'Platinium III Master Tier III':
            $price = 1285;
            break;
        case 'Platinium III Master Tier IV':
            $price = 1285;
            break;
        case 'Platinium III Master Tier V':
            $price = 1285;
            break;
		case 'Platinium II Platinium I':
            $price = 85;
            break;
        case 'Platinium II Diamond V':
            $price = 230;
            break;
        case 'Platinium II Diamond IV':
            $price = 375;
            break;
        case 'Platinium II Diamond III':
            $price = 520;
            break;
        case 'Platinium II Diamond II':
            $price = 685;
            break;
        case 'Platinium II Diamond I':
            $price = 860;
            break;
        case 'Platinium II Master Tier I':
            $price = 1200;
            break;
        case 'Platinium II Master Tier II':
            $price = 1200;
            break;
        case 'Platinium II Master Tier III':
            $price = 1200;
            break;
        case 'Platinium II Master Tier IV':
            $price = 1200;
            break;
        case 'Platinium II Master Tier V':
            $price = 1200;
            break;
		case 'Platinium I Diamond V':
            $price = 145;
            break;
        case 'Platinium I Diamond IV':
            $price = 290;
            break;
        case 'Platinium I Diamond III':
            $price = 435;
            break;
        case 'Platinium I Diamond II':
            $price = 600;
            break;
        case 'Platinium I Diamond I':
            $price = 775;
            break;
        case 'Platinium I Master Tier I':
            $price = 1115;
            break;
        case 'Platinium I Master Tier II':
            $price = 1115;
            break;
        case 'Platinium I Master Tier III':
            $price = 1115;
            break;
        case 'Platinium I Master Tier IV':
            $price = 1115;
            break;
        case 'Platinium I Master Tier V':
            $price = 1115;
            break;
		case 'Diamond V Diamond IV':
            $price = 145;
            break;
        case 'Diamond V Diamond III':
            $price = 290;
            break;
        case 'Diamond V Diamond II':
            $price = 455;
            break;
        case 'Diamond V Diamond I':
            $price = 630;
            break;
        case 'Diamond V Master Tier I':
            $price = 970;
            break;
        case 'Diamond V Master Tier II':
            $price = 970;
            break;
        case 'Diamond V Master Tier III':
            $price = 970;
            break;
        case 'Diamond V Master Tier IV':
            $price = 970;
            break;
        case 'Diamond V Master Tier V':
            $price = 970;
            break;
		case 'Diamond IV Diamond III':
            $price = 145;
            break;
        case 'Diamond IV Diamond II':
            $price = 310;
            break;
        case 'Diamond IV Diamond I':
            $price = 485;
            break;
        case 'Diamond IV Master Tier I':
            $price = 825;
            break;
        case 'Diamond IV Master Tier II':
            $price = 825;
            break;
        case 'Diamond IV Master Tier III':
            $price = 825;
            break;
        case 'Diamond IV Master Tier IV':
            $price = 825;
            break;
        case 'Diamond IV Master Tier V':
            $price = 825;
            break;
		case 'Diamond III Diamond II':
            $price = 165;
            break;
        case 'Diamond III Diamond I':
            $price = 340;
            break;
        case 'Diamond III Master Tier I':
            $price = 680;
            break;
        case 'Diamond III Master Tier II':
            $price = 680;
            break;
        case 'Diamond III Master Tier III':
            $price = 680;
            break;
        case 'Diamond III Master Tier IV':
            $price = 680;
            break;
        case 'Diamond III Master Tier V':
            $price = 680;
            break;
		case 'Diamond II Diamond I':
            $price = 175;
            break;
        case 'Diamond II Master Tier I':
            $price = 515;
            break;
        case 'Diamond II Master Tier II':
            $price = 515;
            break;
        case 'Diamond II Master Tier III':
            $price = 515;
            break;
        case 'Diamond II Master Tier IV':
            $price = 515;
            break;
        case 'Diamond II Master Tier V':
            $price = 515;
            break;
		case 'Diamond I Master Tier I':
            $price = 340;
            break;
		case 'Diamond I Master Tier II':
            $price = 340;
            break;
		case 'Diamond I Master Tier III':
            $price = 340;
            break;
		case 'Diamond I Master Tier IV':
            $price = 340;
            break;
		case 'Diamond I Master Tier V':
            $price = 340;
            break;
        default:
            die('Wybierz prawidłową ligę i dywizję.');
    }

    return $price;

}
