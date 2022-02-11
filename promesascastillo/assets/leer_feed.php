<?php
	$xml = simplexml_load_file("http://convoca.pe/feed/noticias/repor-promesas-vizcarra");
	$json = json_encode($xml);
	//$array = json_decode($json,TRUE);
	print_r($json);
?>