$(function(){
	if($('#sub-nav').length > 0){
		$('body').scrollspy({
			target: '#scrollspy',
			offset: 51
		});
		$('#sub-nav').affix({
			offset: {
				top: 132
			}
		}).on('affix.bs.affix', function(){
			$('header + section').css('padding-top', $('#sub-nav').outerHeight()+'px');
		}).on('affix-top.bs.affix', function(){
			$('header + section').css('padding-top', '0px');
		});
	}

	if($('[data-fitvids-target]').length > 0){
		$('[data-fitvids-target]').fitVids();
	}

	$('.carousel')
		.on('slide.bs.carousel', function(e){
			var $activeSlide = $(this).find('.item.active'),
					$nextSlide = $(e.relatedTarget),
					newHeight = $nextSlide.outerHeight(),
					$player = $activeSlide.find('iframe'),
					data = {
						method: 'pause'
					};
			if($player.length > 0){
				var url = window.location.protocol + $player.attr('src').split('?')[0];
				$player[0].contentWindow.postMessage(JSON.stringify(data), url);
			}
			// $activeSlide.parent().animate({
			// 	'height': newHeight
			// }, 500);
		})
		.carousel({
			interval: 10000
		});

	$('.member-wrapper').each(function(){
		var a = Math.random() * 10-5;
		$(this).css('transform', 'rotate('+a+'deg)');
	});

	$('#technology').on('show.bs.collapse', function(e){
		var $collapse = $(e.target),
				$trigger = $collapse.parent().find('a[href="#'+$collapse.attr('id')+'"]');
		$trigger.addClass('open');
	}).on('hide.bs.collapse', function(e){
		var $collapse = $(e.target),
				$trigger = $collapse.parent().find('a[href="#'+$collapse.attr('id')+'"]');
		$trigger.removeClass('open');
	});

	$('button[name="subscribe"]').popover({
		trigger: 'manual',
		title: 'You\'ve been subscribed!',
		content: 'Check your email to verify, and get the lastest.'
	});
	$('form#mc-embedded-subscribe-form').on('submit', function(e){
		e.preventDefault();
		var $form = $(this),
				$input = $('#email-capture-field'),
				$honeypot = $('#gotcha');
		if($input.val() != '' && $honeypot.val() == ''){
			$.ajax({
				type: $form.attr('method'),
				url: $form.attr('action'),
				data: $form.serialize(),
				cache: false,
				dataType: 'json',
				contentType: "application/json; charset=utf-8",
				success: function(data){
					console.log(data);
					// if(data.result == 'success'){

					// }
				}
			});
		}
	});

});