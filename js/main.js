
// Toggle for Nav
$(".toggle").click(function(){
	$(this).next().slideToggle("fast");
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
