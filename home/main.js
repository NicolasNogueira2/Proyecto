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
const button =
document.getElementById("btn");
const list =
document.getElementById("List");

list.style.display = "none";

button.addeventListener("click", (event) => {
	if(list.style.display == "none") {
		list.style.display = "block";
	} else {
		list.style.display = "none";
	}

})

