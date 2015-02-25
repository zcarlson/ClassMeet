<?php

	$option = $_POST['option'];
	$section = $_POST['section'];
	
	$total = $option.".".$section.";";
	$fp = fopen('myclassdata.txt', 'a+');
	fwrite($fp, $total);
	fclose ($fp);
	
	header('Location: /pages/myclasses.html');
    


