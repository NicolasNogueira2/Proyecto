$(document).ready(function(){
	$('.menu li:has(ul)').click(function(e){
		 $(".menu li ul li a").click(function (e) {
    		window.location.href = $(this).attr("href");
    		});
		if ($(this).hasClass('activado')){
			$(this).removeClass('activado')
			$(this).children('ul').slideUp();

			} else {
				$('.menu li ul').slideUp();
				$('.menu li').removeClass('activado');
				$(this).addClass('activado')
				$(this).children('ul').slideDown();
 		}

	});

});

