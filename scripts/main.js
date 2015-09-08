$(function() {
	var marginTop = parseInt($('#content').css('margin-top'));
	$(".menu-button").on("click", function(e) {
		if (!$('.menu-button').hasClass('display'))
		{
			var a =  marginTop +
			 parseInt($('#nav').height())-5;
			
			$('#nav').slideDown();
			
		}
		else
		{
			$('#nav').slideUp(function() {
				//$('#content').css('margin-top', marginTop);
			}); 
		}
		$('.menu-button').toggleClass('display');
			
	});
});