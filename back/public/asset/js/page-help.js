$(function () {

	$('.js-faq-search').on('input', (e) => {
		const self = $(e.currentTarget),
			val = self.val().toLowerCase()

		$('.help-faq-aside-list li').each((k, itm) => {
			$(itm).addClass("hide");

			if ($(itm).text().toLowerCase().indexOf(val) !== -1) {
				$(itm).removeClass("hide");
			}
		})

	})

	$('.js-help-aside-close').on('click', (e) => {
		$('.help-faq-aside').removeClass("active");
		return false;
	});

	$('.js-help-aside-open').on('click', (e) => {
		$('.help-faq-aside').addClass("active");
		return false;
	});


	$('.help-faq-action__btn--show').on('click', () => {
		$('.help-faq').addClass("show-aside");
		return false;
	});

	$('.help-faq-action__btn--hide').on('click', () => {
		$('.help-faq').removeClass("show-aside");
		return false;
	});

})