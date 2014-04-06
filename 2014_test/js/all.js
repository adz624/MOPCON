$(document).ready(function() {
	$('.showmenu').on('click',function(){
		$('body').toggleClass('open');
	});
	$('.area-1,.area-2,.area-3,.area-all').on('click',function(){
		$('body').toggleClass('open-session');
		var title = $(this).find('h2').text();
		var author = $(this).find('h3').text();
		$('.talker-view h2').text(title);
		$('.talker-view p').text(author);
	})
          $('.close').on('click',function(){
               $('body').removeClass('open-session');
          })
});