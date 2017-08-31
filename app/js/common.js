$(function() {
	$('.scroll-pane').jScrollPane();

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
$(window).scroll(function(){
	if ($(window).scrollTop() > 20){
		$('.fixed-header').addClass('fixed-header-shadow');
		$('.logo').removeClass('logo-mr');
	} else {
		$('.fixed-header').removeClass('fixed-header-shadow');
		$('.logo').addClass('logo-mr');
	};
});

$('.slide-menu-btn').click(function(){
	$('.slide-menu').toggleClass('slide-menu-active');
	$('.slide-menu-btn').toggleClass('is-active');
	$('.fixed-header').toggleClass('fixed-header-bg');
	$('.slide-menu').next('li').slideToggle();
	if ($('.slide-menu-btn').hasClass('is-active') == true){
		$(window).disablescroll();
		var animationType = 'bounceInDown';
			$('.slide-menu').children('li').each(function(index){
				$(this).addClass('animate-'+(index+1)).addClass(animationType);
			});
	} else {
		$(window).disablescroll('undo');
	};
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


