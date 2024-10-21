$(function () {

	check_header_height();
	check_header_progressbar();

	$('.js-menu-btn').on('click', (e) => {
		$('.js-menu-btn .gamburger,.main-menu').addClass('active');
		$('html').addClass("no-scroll");
	});
	$('.js-close-main-menu').on('click', (e) => {
		$('.js-menu-btn .gamburger,.main-menu').removeClass('active')
		$('html').removeClass("no-scroll");
	});
	$('.js-main-menu-search').on('input', (e) => {
		let self = $(e.currentTarget),
			val = self.val(),
			link = $('.main-menu-link')

		link.parent().removeClass('hide');

		if (val.length === 0) return false;

		link.each((i, itm) => {
			const text = $(itm).text()

			if (text.toLowerCase().indexOf(val) === -1) {
				$(itm).parent().addClass('hide')
			}
		})
	})

	$('.main-menu-head__back').on('click', (e) => {
		let self = $(e.currentTarget),
			step = $('.main-menu-content__step.active').last()

		if (step.length === 0) $('.js-close-main-menu').click()

		step.removeClass("active");
		step.find('.main-menu-list').removeClass("active");
		clear_main_menu_search();
		return false;
	});

	const clear_main_menu_search = () => {
		$('.main-menu-link').parent().removeClass('hide');
		$('.js-main-menu-search').val("")
	}

	/*	Мобильное меню	*/
	$('.js-open-mobile-menu').on('click', (e) => {
		$('.js-open-mobile-menu,.mobile-menu').toggleClass("active");
		$('html').toggleClass("no-scroll");
	});
	$('.js-close-mobile-menu').on('click', (e) => {
		$('.js-open-mobile-menu,.mobile-menu').removeClass("active");
		$('html').removeClass("no-scroll");
	});

	$(document).on('scroll', (e) => {
		check_header_progressbar();
		check_header_height();
	})

	$('.main-menu-fade').on('mouseenter', (e) => {
		//Закрыть все
		$('.main-menu-content__step.step1').nextAll().removeClass("active")
			.find('.main-menu-list').removeClass('active')
	});

	$('.main-menu-link').on('mouseenter', (e) => {
		const self = $(e.currentTarget),
			id = self.attr('data-id')

		clear_main_menu_search();

		if (!id) {
			const step = self.closest('.main-menu-content__step')
			step.nextAll().removeClass("active")
				.find('.main-menu-list').removeClass('active')

			return false;
		}
		const target = $(`.main-menu-list[data-id="${id}"]`),
			step = target.closest('.main-menu-content__step')

		step.nextAll().removeClass("active")
			.find('.main-menu-list').removeClass('active')


		step.addClass("active");

		target.siblings('.main-menu-list').removeClass('active')
		target.addClass('active')
	});

	$('.js-city-search').on('input', (e) => {
		let self = $(e.currentTarget),
			val = self.val(),
			li = $('.modal-city-list li')

		li.removeClass('hide');

		if (val.length === 0) return false;

		li.each((i, itm) => {
			const text = $(itm).text()

			if (text.toLowerCase().indexOf(val) === -1) {
				$(itm).addClass('hide')
			}
		})

	});

	$('.mobile-menu-list .has-child>a').on('click', (e) => {
		let self = $(e.currentTarget)

		self.parent().toggleClass('active')
		self.siblings('ul').slideToggle();

		return false;
	});

	$('.main-menu-link[data-id]').on('click', (e) => {
		let self = $(e.currentTarget)

		if (!is_tablet) return true;

		return false;
	});

	$('.js-open-search').on('click', (e) => {
		let self = $(e.currentTarget)

		$('.header-search').toggleClass('active');

		return false;
	});
});

const check_header_progressbar = () => {
	let scroll = $(window).scrollTop();

	let progress = 100 - (scroll / (($(document).height() - window.visualViewport.height) / 100));

	$('.header-progress__bar').css('transform', 'translateX(-' + Math.round(progress * 100) / 100 + '%)');

}
const check_header_height = () => {
	if (is_tablet) {
		let header_offset = $('.header')[0].getBoundingClientRect().top + $('.header').outerHeight();
		$('.wrapper').css('--header-offset', header_offset + 'px');
	}
}