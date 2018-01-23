
$(document).ready(function() {

    //let how = document.querySelector('.how');
    //let who = document.querySelector('.who');
    let menu = document.querySelector('.menu');
	function showElem(elem){
		elem.classList.add('shown');
	};
    function hideElem(elem){
        elem.classList.remove('shown');
    };
    //let whoBtn = document.querySelector('.nav_left');
    let menuBtn = document.querySelector('.header__btn');
    //let howBtn = document.querySelector('.nav_right');
    //let closeWho = document.querySelector('.who .close');
    //let closeHow = document.querySelector('.how .close');
    let closeMenu = document.querySelector('.menu .close');
	//whoBtn.addEventListener('click', showElem.bind(null, who));
    //howBtn.addEventListener('click', showElem.bind(null, how));
    menuBtn.addEventListener('click', showElem.bind(null, menu));
	//closeWho.addEventListener('click', hideElem.bind(null, who));
    //closeHow.addEventListener('click', hideElem.bind(null, how));
    closeMenu.addEventListener('click', hideElem.bind(null, menu));













	new WOW().init();

	// placeholder
	$("input, textarea").focus(function() {
		$(this).data("placeholder", $(this).attr("placeholder")),
		$(this).attr("placeholder", "")
	}),
	$("input, textarea").blur(function() {
		$(this).attr("placeholder", $(this).data("placeholder"))
	});

	// scroll
	var prevY = 0;
	var moveTop = false;
	window.onscroll = function(){
		var	scrolled = window.pageYOffset || document.documentElement.scrollTop,
			header = document.querySelector('.main__nav');
		if(prevY > scrolled){
			moveTop = true;
		}
		else{
			moveTop = false;
		}
		if (scrolled > 1 && $(window).width() > 768 && moveTop == false){
			$(header).addClass('main__nav--scrolled');
		}
		else if(scrolled <= 1 && $(window).width() > 768 || moveTop == true) {
			$(header).removeClass('main__nav--scrolled');
		}
		prevY = scrolled;
	};

	// scroll to
	$('.scroll').click( function(e){
		e.preventDefault();

		var scrollEl = $(this).attr('href');
		$('.scroll').find('li').removeClass('active');
		$(this).find('li').addClass('active');
		if ($(scrollEl).length != 0) {
			$('html, body').animate({ scrollTop: $(scrollEl).offset().top - 100 }, 700);
		}
		return false;
	});
	
	// menu button
	$('.main__menu_btn').click(function(){
		$('.sandwich').toggleClass('active');
		$('.nav_rolled').toggleClass('rolled');
		$('.main__search').toggleClass('translated');
	});

	// remove scroll
	function offScroll(){
		var winScrollTop = $(window).scrollTop();
			$(window).bind('scroll',function () {
			$(window).scrollTop(winScrollTop);
		});
	}
	// popup
	var popupWrapper = $('.popup_wrapper');
	
	$('.popup').click(function(e) {
		e.preventDefault();
		popupWrapper.addClass('opened');
		popupForm.dataset.form = whatForm;
		var whatForm =  this.dataset.form;
		offScroll();
	});
	popupWrapper.click(function (e) {
		if (e.target == this) {
			this.classList.remove('opened');
			$(window).unbind('scroll');
		}
	});
	$('.btn_close').click(function () {
		popupWrapper.removeClass('opened');
		$(window).unbind('scroll');
	});
	// footer copyright date
	var mdate = new Date();
	$('.footer__logo span').text(mdate.getFullYear());

	// slick slider
	$('.advantage__slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '.prev_adv',
		nextArrow: '.next_adv',
		speed: 1000,
		swipe: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					
				}
			}
		]
	});
});