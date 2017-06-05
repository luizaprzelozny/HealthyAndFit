// ==============================
// Main.js -- JQuery 

// $(document).ready(function(){ 

// 	console.log('DOM READY'); 

// });
 

// $(window).load(function() {
 
//   	console.log('HTML , CSS , JS , IMG READY');
// });

// ==============================
// Main.js -- Pure Javascript 

//  document.addEventListener("DOMContentLoaded", function(event) { // Dom Content Loading
 	
//  	 console.log('DOM READY'); 
 
//  });

// window.addEventListener('load', function(){

// 	console.log('HTML , CSS , JS , IMG READY');
	
// }, false )
function parallax() {
	var $window = $(window);
	$('section[data-type="background"]').each(function() {
		var $backgroundObj = $(this);

		$window.scroll(function() {
			var yPosition = -($window.scrollTop() / $backgroundObj.data('speed'));
		
			var coords = '50%' + yPosition + 'px';

			$backgroundObj.css({
				backgroundPosition: coords
			});
		})
	})
}

$(function() {

parallax();

});
