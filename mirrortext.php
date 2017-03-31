<?php
	
	$tekst = "koogelmoogel"; //originaaltekst siia
	$pikkus = strlen( $tekst );
	$peegelpilt = "";
	
	for ( $i = $pikkus - 1 ; $i >= 0 ; $i-- ) {
		
		$taht = $tekst[ $i ];
		$peegelpilt = $peegelpilt . $taht;
		
	}
	
	print $peegelpilt;
	
?>