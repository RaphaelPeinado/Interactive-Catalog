$(document).ready(function() {
	/*MENU*/
	$('.bt-menu button').click(function(){
		$('.menu-wrap').slideToggle();
	});
	/* SCROLL PAGE */
	var $doc = $('html, body');
	$('.menu a, .logo a').click(function() {
		$doc.animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 700);
		$('.menuMob').slideUp();
		return false;
	});
	/* BANNER */
	$('.banner').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 4000,
	});
	/* MOSTRUÁRIO RELÓGIOS */
	$('.item-wrap').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
	    {
			breakpoint: 600,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 3
	      }
	    },
	    {
			breakpoint: 480,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 2
	      }
	    }
	    ]
	});
	/* SELEÇÂO RELÓGIOS */
	$('.bt-select').click(function(){
		$(this).toggleClass('selected');
		$('.bt-select').each(function(){
			if ( $( this ).is( ".selected") ) {
				$('.cart-wrap').slideDown();
				return false;
			} else {
				$('.cart-wrap').slideUp();
			}
		});
		if ( $( this ).is( ".selected") ) {
				select_show = $(this).parent().parent().find('img').attr('src');
				modelo_closed = $(this).val();
				$('.selected-relogios').append('<div><button class="bt-closed" value="' + modelo_closed + '">X</button><img src="' + select_show + '"></div>');
				$(this).attr('id', 'F'+ modelo_closed +'');
				return false;
			} else {
				remove_select = $(this).parent().parent().find('img').attr('src');
				remove_bt = $(this).val();
				$('.selected-relogios').find('.bt-closed[value$="' + remove_bt +'"]').remove();
				$('.selected-relogios').find('img[src$="' + remove_select +'"]').remove();
			}
	});
	$('.selected-relogios').on('click', '.bt-closed', function(){
        bt_modelo_closed = $(this).val();
		$('#F' + bt_modelo_closed).removeClass("selected");
		$(this).parent().find('img').remove();
		$(this).remove();
		$('.bt-select').each(function(){
			if ( $('.bt-select').is( ".selected") ) {
				return false;
			} else {
				$('.cart-wrap').slideUp();
			}
		});
		
    });
	$('.bt-enviar').click(function(){
		var show_mod = [];
		$('.selected').each(function(){
			show_mod.push($(this).val());
		});
		if (!show_mod.length == 0) {
			window.open('https://api.whatsapp.com/send?phone=&text=Olá,%20tenho%20interesse%20nos%20modelos:%20' + show_mod);
		}
		return false;
	});
	/* GALLERY */
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		centerMode: false,
		focusOnSelect: true
	});
	$('.bt-gallery').click(function(){
		event.preventDefault();
		$('.gallery').css('visibility', 'visible');
		gallery_model = $(this).val();
		$('.gallery-content.' + gallery_model).css('visibility', 'visible');
		// alert(gallery_model);
	});
	$('.bt-close-gal').click(function(){
		$('.gallery').css('visibility', 'hidden');
		$('.gallery-content').css('visibility', 'hidden');
	});
});