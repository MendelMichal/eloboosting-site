<?php

$errorMSG = "";

if (empty($_POST["pytanie"])) {
    $errorMSG = "Wybierz rodzaj pytania! ";
} else {
    $pytanie = $_POST["pytanie"];
}

if (empty($_POST["email"])) {
    $errorMSG .= "Email jest wymagany! ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["message"])) {
    $errorMSG .= "Wprowadź wiadomość! ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "contact@site.net";
$Subject = $pytanie;

$Body = "";
$Body .= "Email klienta: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Wiadomość: ";
$Body .= $message;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "Od:".$email);

if ($success && $errorMSG == ""){
   echo "Wysłano wiadomość";
}else{
    if($errorMSG == ""){
        echo "Coś poszło nie tak :(";
    } else {
        echo $errorMSG;
    }
}

?>