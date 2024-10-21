$(function () {

	if ($('.range-select').length > 0) {
		$('.range-select').each((k, i) => {
			let min = parseInt($(i).attr('data-min')),
				max = parseInt($(i).attr('data-max'));

			$(i).rangeSelect({
				min_val: min,
				max_val: max,
			});
		});
	}

	$('.quick-filter-more-btn').on('click', (e) => {
		let self = $(e.currentTarget),
			block = $('.quick-filter-list'),
			tl = gsap.timeline()

		self.toggleClass('show')
		block.toggleClass('show')

		if (block.hasClass('show')) {
			to(block, {height: "auto", duration: .6, ease: "easeTextCollapse"}, tl);
		} else {
			to(block, {height: '2rem', duration: .6, ease: "easeTextCollapse"}, tl);
		}
	});

	$('.js-change-catalog-view').on('click', (e) => {
		let self = $(e.currentTarget),
			view = self.attr('data-catalog-view')

		e.preventDefault();

		if (view === 'list') {
			$('.js-view-parent').addClass('view-list');
		} else {
			$('.js-view-parent').removeClass('view-list');
		}

		$('.js-change-catalog-view').removeClass("active");
		self.addClass('active')

		product_slider_resize();
	});

	$(document).on('input', '.js-search-modal-filter', (e) => {
		let self = $(e.currentTarget),
			val = self.val().toLowerCase(),
			items = $('#modal-catalog-filter .filter-itm'),
			acord = $('#modal-catalog-filter .catalog-filter-accordion')

		if (val.length === 0) {
			items.removeClass('disable');
			acord.removeClass("disable");
			return false;
		}

		items.addClass('disable');
		acord.addClass("disable");

		items.each((i, itm) => {
			if ($(itm).text().toLowerCase().indexOf(val) !== -1) {
				$(itm).removeClass('disable');
				$(itm).closest('.catalog-filter-accordion').removeClass("disable");
			}
		});

	});

});