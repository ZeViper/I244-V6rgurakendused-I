<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8" />
	<title>Maolised</title>
	<style type="text/css">
	  .tekst {
		display:inline-block;
		width:29%;
		margin:1%;
		border:solid #800000 2px;
		border-radius:3px;
		padding:10px;
	  }
	</style>
  </head>
  <body>
	<?php
	
	  $maolised = array( 
		
		array( 'tüüp'=>'püüton',		'nimi'=>'Boss',		'vanus'=>21,	'pikkus'=>9.5,	'kaal'=>124,	'kirjeldus'=>"Bossile meeldib palju roomata" ),
		array( 'tüüp'=>'kuningkobra',	'nimi'=>'Deemon',	'vanus'=>6,		'pikkus'=>4.1,	'kaal'=>7.7,	'kirjeldus'=>"Deemonile meeldib innukalt ämblikuid püüda" ),
		array( 'tüüp'=>'must mamba',	'nimi'=>'Mango',	'vanus'=>4,		'pikkus'=>2.9,	'kaal'=>1.6,	'kirjeldus'=>"Mangole meeldib oma pikki mürgihambaid näidata" ),
		array( 'tüüp'=>'boa',			'nimi'=>'Pipi',		'vanus'=>17,	'pikkus'=>4.3,	'kaal'=>45,		'kirjeldus'=>"Pipile meeldivad pisikesed mänguasjad" ),
		array( 'tüüp'=>'harilik rästik','nimi'=>'Rästi',	'vanus'=>8,		'pikkus'=>0.8,	'kaal'=>0.1,	'kirjeldus'=>"Rästi armastab ennast päikese käes kerra tõmmata" ),
		array( 'tüüp'=>'anakonda',		'nimi'=>'Zulu',		'vanus'=>19,	'pikkus'=>10.1,	'kaal'=>160,	'kirjeldus'=>"Zulule meeldib suure suuga toitu kugistada" )
		
	  );
	
	  foreach ( $maolised as $andmed ) {
		
		include "snakes.html";
		
	  }
	
	?>
  </body>
</html>