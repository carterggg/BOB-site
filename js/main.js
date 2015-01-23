
// Toggle for Nav
$(".toggle").click(function () {
	$(this).next().slideToggle("slow");
});



// Toggle for Contact Page
$(".toggle-nav").click(function () {
	$(".toggle-info").slideToggle("slow");
});



$(document).ready(function(){

	//dynamically load content from content.html 
	// intro .main section
	
	// $('.dynamic').load('content/blog-content.html');
	
	// add eventhandler to more link
	
	$('.more').click(function(e){
		e.preventDefault();
		$('.dynamic').load('content/blog-page1.html');
		$(this).remove();
	});
});
