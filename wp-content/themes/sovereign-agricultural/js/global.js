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

// Scroll to top 
$(".scroll-to-top" ).on( "click", function() {
	$("html, body").animate({ scrollTop: 0 }, "slow");
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