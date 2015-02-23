<?php

	$username = $_POST['userName'];
	$classname = $_POST['className'];
	$comment = $_POST['comment'];
	
	$total = $username.",".$classname.",".$comment.";";
	$fp = fopen('accounts.txt', 'a+');
	fwrite($fp, $total);
	fclose ($fp);
	
	header('Location: /pages/comments.html');
    


