/*
 * Replace all SVG images with inline SVG
 */
$(function () {
	// Приоритет выполнения
	setTimeout(function () {
		svg_init();
	}, 0);


	function svg_init() {
		var height = $(window).height(),
			offset = 200,
			scroll = $(window).scrollTop();

		$('img.svg:not(.init)').each(function () {
			if (scroll + height + offset > $(this).offset().top) {
				var $img = $(this);
				var imgID = $img.attr('id');
				var imgClass = $img.attr('class');
				var imgURL = $img.attr('src');


				$.get(imgURL, function (data) {
					// Get the SVG tag, ignore the rest
					var $svg = $(data).find('svg');

					// Add replaced image's ID to the new SVG
					if (typeof imgID !== 'undefined') {
						$svg = $svg.attr('id', imgID);
					}
					$svg = $svg.attr('data-src', imgURL);

					// Add replaced image's classes to the new SVG
					if (typeof imgClass !== 'undefined') {
						$svg = $svg.attr('class', imgClass + ' replaced-svg');
					}

					// Remove any invalid XML tags as per http://validator.w3.org
					$svg = $svg.removeAttr('xmlns:a');

					// Replace image with new SVG
					$img.replaceWith($svg);

				}, 'xml');
			}

		});
	}

	$(window).on('scroll', function () {
		svg_init();
	})

});