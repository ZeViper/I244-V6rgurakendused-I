<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Ülesanne 9</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<div id="wrap">
			<h3>Fotod</h3>
			<div id="gallery">
				<?php
					
					$directory = "pildid/";
					$images = glob( $directory."*.jpg" );
					$number = 0;

					foreach( $images as $image ) {
						$number++;
						echo '<img src="'.$image.'" alt="nimetu '.$number.'" />';
					}

				?>
			</div>
		</div>
		
	</body>
</html>