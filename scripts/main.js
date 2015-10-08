$(function() {
	$(".become-sponsor i").on("click", collapseToggle);
	$('#sponsor-info').on('shown.bs.collapse', function () {
		var sponsorTop  = $('#sponsor-info').offset().top;
		$('body, html').animate({
        scrollTop: sponsorTop
		}, 1000);
    	return false;
	});
	
	function collapseToggle()
	{
		$('#sponsor-info').collapse('toggle');
		$(".become-sponsor i").toggleClass("fa-plus-square-o fa-minus-square-o");
	
	}
});