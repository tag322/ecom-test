$(function () {

	blog_index_init();

	function blog_index_init() {
		let list = $('.js-blog-index-list'),
			titles = $('.blog-content h2, .blog-content h3, .blog-content h4');

		list.html("");

		titles.each(function (index) {
			let cl = $(this)[0].tagName,
				id = 'blog-anchor-' + index;

			$(this).attr('id', id);

			list.append('<li class="li-' + cl + '"><a href="#' + id + '" class="js-anchor">' + $(this).text() + '</a></li>');
		})

	}

	$('.share-block-link').on('click',(e) => {
		let self = $(e.currentTarget)

		$('.ya-share2__link').trigger('click')
	});

})