// =================================================================
// 	Sovereign Agricultural
// 	Global Javascript Functions
// =================================================================

// Valtra Switcher

$( ".product-picker nav ul li a" ).on( "click", function() {
	$(".product-picker nav ul li a").removeClass('active');
	$(".series").removeClass('active');
 	$(this).toggleClass('active');
 	var name = $(this).attr("name");
 	$('#' + name).toggleClass('active');
});

// Mobile Menu 

$(".hamburger" ).on( "click", function() {
	$('header').toggleClass('nav-active');
});

// Sticky Valtra 

 $(document).ready(function(){
 	var top = $('header').outerHeight();
    $(".product-picker").sticky({topSpacing:top});
  });

// Swiper Javascript

var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30
});