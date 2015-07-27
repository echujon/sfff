$(function() {
	var marginTop = parseInt($('#content').css('margin-top'));
	$(".menu-button").on("click", function(e) {
		if (!$('.menu-button').hasClass('display'))
		{
			var a =  marginTop +
			 parseInt($('#nav').height())-5;
			$('#content').css('margin-top', a);
			$('#nav').slideDown(250);
			
		}
		else
		{
			$('#nav').slideUp(250, function() {
				$('#content').css('margin-top', marginTop);
			}); 
		}
		$('.menu-button').toggleClass('display');
			
	});
});