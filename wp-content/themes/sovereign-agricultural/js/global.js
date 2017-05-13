// =================================================================
// 	Calais Jungle
// 	Global Javascript Functions
// =================================================================

$( ".description-holder" ).on( "click", function() {
 	$(this).toggleClass('active');
});


$( ".cutout-image" ).on( "click", function() {
		$(".cutout-image").removeClass('active');
});

$( ".map-marker" ).on( "click", function() {
 	var id = $(this).attr("name");
 	$(".cutout-image").removeClass('active');
 	$("#"+id).addClass('active');
});

var embedServices = [
  window.embetter.services.youtube,
  window.embetter.services.vimeo,
  window.embetter.services.kuula
];
window.embetter.utils.initMediaPlayers(document.body, embedServices);


var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30
});