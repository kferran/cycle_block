//**********************************************************
//* Initialization
//**********************************************************
$(document).ready(function(){

	if($('#home_marquee').length > 0){
		$('#home_marquee').cycle({ 
			fx: 'scrollHorz',  
			timeout: 7000, 
			speed: 1000,
			pager: "#nav",
			pagerAnchorBuilder: function paginate(idx, el){
				return '<a class="service" href="#"> &bull;</a>';
			}
		});
	}
	
	// $('.scrollTo').click(function(e){
	// 	e.preventDefault();
	// 	$('html,body').animate({
	// 		scrollTop: $($(this).attr('href')).offset().top - 20 
	// 	},'slow');
	// });

	$("a.service").click(function(){
		$('#home_marquee').cycle("toggle");
	});

});