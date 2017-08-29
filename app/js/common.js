$(function() {	
// // var $menu = $('#m-menu').mmenu({
// // 		"extensions": [
// // 		"fx-menu-zoom",
// // 		"pagedim-black",
// // 		"theme-white",
// // 									// "fullscreen",
// // 									"listview-huge",
// // 									"fx-listitems-slide",
// // 									"border-offset"
// // 									], 
// // 									"offCanvas": {
// // 										"position": "right"
// // 									},
// // 									"navbars": [
// // 									{
// // 										"position": "bottom",
// // 										"content": [
// // 										"<a class='fa fa-envelope' href='#/'></a>",
// // 										"<a class='fa fa-twitter' href='#/'></a>",
// // 										"<a class='fa fa-facebook' href='#/'></a>"
// // 										]
// // 									}
// // 									]
// // 	});
// // function windowSize(){
// //     if ($(window).width() < '992'){
// //         console.log($(window).width());
// //         $('section').each(function(){
// //         $(this).removeClass('full-height');
// //         });
// //     } else {
// //     		console.log($(window).width());
// //     		$('section').each(function(){
// //        		$(this).addClass('full-height');
// //        	});
// //     };
// // };
// // $(window).on('load resize',windowSize);


// $('.slick-slider').slick({
// 	autoplay: true,
// 	arrows: false,
// 	draggable: false,
// 	autoplaySpeed: 8000,
// 	speed: 400

// });
// $(window).scroll(function(){
// 	if ($(window).scrollTop() > 150){
// 		$('.top-menu-wrapper').addClass('top-menu-fixed');
// 	} else {
// 		$('.top-menu-wrapper').removeClass('top-menu-fixed');
// 	};
// });

$('.f-opener').click(function(){
	if ($(this).hasClass('active') == true) {
		$(this).removeClass('active');
		$(this).next('.f-text').hide(300);
	} else{
		$('.f-opener').each(function(){
			$(this).removeClass('active');
			$(this).next('.f-text').hide(300);
		});
		$(this).addClass('active');
		$(this).next('.f-text').show(300);
	}
});

//SectionQuestionSlides
$('.questions-item-opener').click(function(){
	$(this).next('.questions-item-text').slideToggle(400);
	$(this).next('.questions-item-text').toggleClass('questions-hidden');
	$(this).parent().toggleClass('questions-li-active');
});
//SectionQuestionSlides

$('.btn-call-form').click(function(){
	$('.call-back-form').addClass('form-active');
	$(window).disablescroll();
	});
$('.close-btn').click(function(){
	$('.call-back-form').removeClass('form-active');
	$(window).disablescroll('undo');
});

// Меню
$('.main-menu').click(function(){
	if ($('.main-menu').hasClass('main-menu-active') == true ){
		$('.main-menu').toggleClass('main-menu-active');
		$('.my-menu').toggleClass('is-active');
		if ($('.my-menu').hasClass('is-active') == true){
		$(window).disablescroll();
	} else {
		$(window).disablescroll('undo');
	};
	};
});
$('.my-menu').click(function(){
	$('.main-menu').toggleClass('main-menu-active');
	$('.my-menu').toggleClass('is-active');
	if ($('.my-menu').hasClass('is-active') == true){
		$(window).disablescroll();
	} else {
		$(window).disablescroll('undo');
	};
});
// Менюы

// Форма обратной связи
$('.input-textarea').focus(function(){
		$(this).next('.order-label').css({"top": "-14px", "font-size": "12px"});
	});
$('.input-textarea').blur(function(){
		if ($(this).val() == '' || $(this).val().indexOf("_") != -1 ) {
			$(this).next('.order-label').css({"top": "3px", "font-size": "16px"});
		};
	});
$('.order-input').focus(function(){
		$(this).next('.order-label').css({"top": "-14px", "font-size": "12px"});
	});
$('.order-input').blur(function(){
		if ($(this).val() == '' || $(this).val().indexOf("_") != -1 ) {
			$(this).next('.order-label').css({"top": "3px", "font-size": "16px"});
		};
	});
});


