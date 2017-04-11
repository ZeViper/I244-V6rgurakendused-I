<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8" />
		<title>Ülesanne 8</title>
		<?php
			
			//Algsed väärtused
			$outputtext = "";
			$taustavärv = "#0066ff";
			$tekstivärv = "#000000";
			$joonelaius = "4";
			$joonestiil = "solid";
			$joonevärvus = "#002b80";
			$nurgaraadius = "16";
			
			if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
				
				if ( isset( $_POST["tekst"] ) && $_POST["tekst"]!="" ) {
					$outputtext = htmlspecialchars( $_POST["tekst"] );
				}
				if ( isset( $_POST["taustavärv"] ) && $_POST["taustavärv"]!="" ) {
					$taustavärv = htmlspecialchars( $_POST["taustavärv"] );
				}
				if ( isset( $_POST["tekstivärv"] ) && $_POST["tekstivärv"]!="" ) {
					$tekstivärv = htmlspecialchars( $_POST["tekstivärv"] );
				}
				if ( isset( $_POST["joonelaius"] ) && $_POST["joonelaius"]!="" ) {
					$joonelaius = htmlspecialchars( $_POST["joonelaius"] );
				}
				if ( isset( $_POST["joonestiil"] ) && $_POST["joonestiil"]!="" ) {
					$joonestiil = htmlspecialchars( $_POST["joonestiil"] );
				}
				if ( isset( $_POST["joonevärvus"] ) && $_POST["joonevärvus"]!="" ) {
					$joonevärvus = htmlspecialchars( $_POST["joonevärvus"] );
				}
				if ( isset( $_POST["nurgaraadius"] ) && $_POST["nurgaraadius"]!="" ) {
					$nurgaraadius = htmlspecialchars( $_POST["nurgaraadius"] );
				}
			}
		?>
		<style type="text/css">
			body {
				width: 460px;
				margin: auto;
				font-size: 140%;
			}
			.output {
				background-color: <?php echo $taustavärv; ?>;
				color: <?php echo $tekstivärv; ?>;
				border-width: <?php echo $joonelaius; ?>px;
				border-style: <?php echo $joonestiil; ?>;
				border-color: <?php echo $joonevärvus; ?>;
				border-radius: <?php echo $nurgaraadius; ?>px;
			}
		</style>
  </head>
  <body>
		<div class="output">
			<p><?php echo $outputtext; ?></p>
		</div>
		<hr>
		<div class="input">
			<form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
				
				<textarea name="tekst" rows="4" cols="40" maxlength="100" placeholder="Siia kirjuta tekst (max 100 tähte)"><?php echo $outputtext; ?></textarea><br>
				<br>
				<input type="color" name="taustavärv" value="<?php echo $taustavärv; ?>"> &nbsp; Taustavärvus<br>
				<input type="color" name="tekstivärv" value="<?php echo $tekstivärv; ?>"> &nbsp; Tekstivärvus<br>
				<br>
				<fieldset>
					<legend>Piirjoon</legend>
						<input type="number" name="joonelaius" min="0" max="25" value="<?php echo $joonelaius; ?>"> &nbsp; Laius (0-20px)<br>
						<select name="joonestiil">
							<option value="solid">Solid</option>
							<option value="dotted">Dotted</option>
							<option value="dashed">Dashed</option>
							<option value="double">Double</option>
							<option value="groove">Groove</option>
							<option value="ridge">Ridge</option>
							<option value="inset">Inset</option>
							<option value="outset">Outset</option>
							<option value="none">None</option>
						</select>&nbsp; Stiil<br>
						<input type="color" name="joonevärvus" value="<?php echo $joonevärvus; ?>"> &nbsp; Värvus<br>
						<input type="number" name="nurgaraadius" min="0" max="80" value="<?php echo $nurgaraadius; ?>"> &nbsp; Nurkade raadius (0-80px)<br>
				</fieldset>
				<input type="submit" name="submit" value="Esita">
				
			</form>
		</div>
		
  </body>
</html>