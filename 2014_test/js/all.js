
$(document).ready(function() {
   $(window).resize(function() {
    if($(document).width()>768){
      $( ".detail,.detail_outbox" ).hide();
    }
     

  });
$('.talker h2 a').on('click',function(e){
  
  e.preventDefault();

  if($(document).width()>768){
    // columns.next().remove('.detail');
    var columns = $(this).parents('.row');
    var content = $(this).parent().parent().find('.detail').html();
    var details = '<div class="detail detail_outbox">'+content+'<div>';
    columns.next().remove();
    columns.after(details);
  }
  if($(document).width()<768){

    $(this).parent().parent().find('.detail').fadeToggle();
  }
})
})
	// $('.showmenu').on('click',function(){
	// 	$('body').toggleClass('open');
	// });
// 	$('.area-1,.area-2,.area-3,.area-all').on('click',function(){
// 		$('body').toggleClass('open-session');
// 		var title = $(this).find('h2').text();
// 		var author = $(this).find('h3').text();
// 		$('.talker-view h2').text(title);
// 		$('.talker-view p').text(author);
// 	})
//           $('.close').on('click',function(){
//                $('body').removeClass('open-session');
//           })


// ---super cool menu

$('document').ready(function(){
	var t
	$('.showmenu').on('click',  function(e){
		e.preventDefault();
		t = document.body.scrollTop;
		$('body').toggleClass('menu-show')
		$('.perspective').addClass('delay')
		$('.absolute').css('top',- t)
		console.log(t)
	})
	$('.block').click(function(e){
		e.preventDefault();
		$('body').removeClass('menu-show')
		//$('.perspective').delay(250).removeClass('delay')
		setTimeout(
		function() {
			$('.perspective').removeClass('delay')
			$('.absolute').css('top', 0)
			$('body').scrollTop(t)
		}, 301)
	})
});