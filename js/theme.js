(function()
	{
	
		$('.js-search').on('click', function(e)
		{
			e.preventDefault();
			$('#searchform').slideToggle();
		});

		$('#searchform .link').on('click', function()
		{
			$('#searchform').slideToggle();
		});

		$('nav ul li').mouseenter(function() {
			$(this).addClass('show');
 			$(this).find('ul').stop(true, true).slideToggle();
		  }
		);
		
		$('nav ul li').mouseleave(function(){
			$(this).removeClass('show');
			$(this).find('ul').stop(true, true).fadeOut();
		  }
		);

		$(document).ready(function() {
    		var offset = 220;
    		var duration = 500;
    		$(window).scroll(function() {
        		if ($(this).scrollTop() > offset) {
            		$('.js-scroll-top').fadeIn(duration);
        		} else {
            		$('.js-scroll-top').fadeOut(duration);
        		}
    });
    
    $('.js-scroll-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});

		$(".js-scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	});

	})();
	