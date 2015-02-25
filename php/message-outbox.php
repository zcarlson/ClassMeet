<?php

	$nameTo = $_POST['to'];
	$message = $_POST['message'];
	
	$total = $nameTo.",".$message.";";
	$fp = fopen('message-outbox.txt', 'a+');
	fwrite($fp, $total);
	fclose ($fp);
	
	header('Location: /pages/message-outbox.html');
    


