$(document).ready(function(){
	$('.carousel-inner').find('.item:first').addClass('active');/*adds active class to the 1st child for banner slider*/
	$('.contentArea').find('hr:last').addClass('hidden');/*removes the horizontal line on the last search(result) page*/
  $('#navbar').find('ul li a').addClass('page-scroll');/*adds page-scroll class to list items*/

 	/*adds hover effect to thumbnails*/
 	$('.featuredPostThumbnail').hover(doThis, doThis);
  	function doThis(){
		var $this = $(this);
		$this.toggleClass('opacity70');
  }

  /*adds the animation class to trigger animate.css*/
  $('.post').addClass("hideAnimation").viewportChecker({
      classToAdd: 'viewAnimation animated fadeIn',
      offset: 200
  });

  /*controls the easing of the jquery plugin easing*/
  $(document).on('click', 'a.page-scroll', function(event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top
      }, 1500, 'easeInOutExpo');
      event.preventDefault();
  });

  /*removes the navigation if error 404*/
  var $404Checker = $('div').hasClass('404');
  if ($404Checker == true){
    $('nav').addClass('hidden');
  }
  else {
    false;
  }
});