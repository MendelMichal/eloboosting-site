<?php
	require("baza-danych/config.php");
	mysqli_query('SET NAMES utf8');
	if ($_POST['operation_status'] == 'completed') {
	$operation = $_POST['operation_number'];
	$amount = $_POST['operation_amount'];
	$waluta = $_POST['operation_currency'];
	$description = $_POST['description'];
	$email = $_POST['email'];
	mysqli_query($link, "INSERT INTO transakcje (ID,NROPERACJI,KWOTA,WALUTA,DANEZLECENIA,EMAIL) VALUES ('', '$operation', '$amount', '$waluta', '$description', '$email')");
    echo('OK');

	}
	else{
	mysqli_query($link, "INSERT INTO transakcje (DANEZLECENIA) VALUES ('BLAD')");
	}
mysqli_close($link);
	?>
