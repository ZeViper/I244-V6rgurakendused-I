<?php
	require_once("head.html");
?>
			
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
			
<?php
	require_once("foot.html");
?>