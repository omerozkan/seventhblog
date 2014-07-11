(function()
	{
		$('.js-sm').on('hover', function()
		{
			$this = $(this);
			$('.js-socialmedia').text($this.attr('alt'));
		});

		$('.js-sm').on('mouseleave', function()
		{
			$('.js-socialmedia').text('');
		});

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
		
// 		$('a.comment-reply-link').removeAttr('onclick');
// 		
// 		$('a.comment-reply-link').on('click', function(e){
// 			e.preventDefault();
// 			var url = $(this).attr('href');
// 			$.get(url, function(data) {
// 			
// 			var data = $(data);
// 			var form = $('#respond .commentform', data);
// 			$(this).parent().append();
// 			
// 			});
// 		
// 		});
	})();
	

$(function() {
          $(".js-scroll").click(function(e) {
             	e.preventDefault();
              $("html,body").stop().animate({ scrollTop: "0" }, 1000);
          });
      });
      $(window).scroll(function() {
          var uzunluk = $(document).scrollTop();
          
          if (uzunluk > 179) $(".js-scroll").fadeIn(500);
          
      });