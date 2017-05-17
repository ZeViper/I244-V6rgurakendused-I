<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Ülesanne 9</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<div id="wrap">
			<h3>Vali oma lemmik :)</h3>
			<form action="tulemus.html" method="GET">
				<?php
				
					$directory = "pildid/";
					$images = glob( $directory."*.jpg" );
					$id = 0;
					
					foreach( $images as $image ) {
						$id++;
						echo '<p>
							<label for="p'.$id.'">
								<img src="'.$image.'" alt="nimetu '.$id.'" height="100" />
							</label>
							<input type="radio" value="'.$id.'" id="p'.$id.'" name="pilt"/>
						</p>';
					}
					
				?>
				<br/>
				<input type="submit" value="Valin!"/>
			</form>
		</div>

	</body>
</html>