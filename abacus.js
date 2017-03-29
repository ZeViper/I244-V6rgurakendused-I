window.onload = function() {
  
  var beads = document.querySelectorAll('.bead');
  
  for ( i = 0; i < beads.length; i++ ) {
	
	beads[ i ].onclick = function() {
	  
	  var beadFloat = window.getComputedStyle( this, null ).cssFloat;
	  
	  if ( beadFloat == "right" ) {
		  
		  this.style.cssFloat = "left";
		  
	  } else {
		  
		  this.style.cssFloat = "right";
		  
	  }
	}
  }
}