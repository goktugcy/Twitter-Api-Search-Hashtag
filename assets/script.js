$(document).ready(function() {
	$('#search').keyup(function() {
		if ($(this).val() < 1) {
			$('.search-results').hide();
			$(this).css({'border-radius':'5px'});
		} else {
			$('.search-results').show();
			$(this).css({'border-radius':'5px 5px 0 0'});
		}
	});

	$('.nav-item[aria-label="More"], #more-popout-overlay').click(function() {
		$('#more-popout, #more-popout-overlay').toggleClass('toggle');
	});
	$('.display').click(function() {
		$('#modal, #modal-overlay').toggleClass('toggle');
	})
	$('#modal-overlay').click(function() {
		$('#modal, #modal-overlay').removeClass('toggle');
	})

	$('input[name="background-option"]').change(function() {
		var theme = $(this).data('theme');
		if (theme == 'light') {
			$(':root').css({
				'--bg1':'#e5e5e5',
				'--bg2':'#eee',
				'--bg3':'#fff',
				'--color':'#000'
			})
		}
		if (theme == 'dim') {
			$(':root').css({
				'--bg1':'#15202b',
				'--bg2':'#192734',
				'--bg3':'#253341',
				'--color':'#fff'
			})
		}
		if (theme == 'dark') {
			$(':root').css({
				'--bg1':'#1a1a1a',
				'--bg2':'#222',
				'--bg3':'#272727',
				'--color':'#fff'
			})
		}
	})

	$('input[name="nav-style"]').change(function() {
        var style = $(this).data('nav');
        if (style == 'closed') {
            $('nav, body > header, #container, #more-popout').addClass('nav-closed');
            $('.nav-item').attr('data-balloon-pos', 'right');
        } else {
            $('nav, body > header, #container, #more-popout').removeClass('nav-closed');
			  $('.nav-item').removeAttr('data-balloon-pos');
        }
    })


})