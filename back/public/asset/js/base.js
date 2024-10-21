var is_mobile = window.matchMedia('all and (max-width: 600px)').matches;
var is_tablet = window.matchMedia('all and (max-width: 1100px)').matches;


$(function () {
	$.fancybox.defaults.hash = false;
	$.fancybox.defaults.animationEffect = "fade";
	$.fancybox.defaults.loop = true;

	check_expand_text();

	$(window).on('resize', function () {
		is_mobile = window.matchMedia('all and (max-width: 600px)').matches;
		is_tablet = window.matchMedia('all and (max-width: 1100px)').matches;
	});

	$('.js-close-modal').on('click', (e) => {
		let self = $(e.currentTarget)

		self.closest('.modal').removeClass("active");
		$('html').removeClass("no-scroll");
	});

	$('.js-open-modal').on('click', (e) => {
		let self = $(e.currentTarget),
			id = self.attr('href')

		open_modal(id);

		return false
	});

	$(document).on('click', '.js-anchor', (e) => {
		let self = $(e.currentTarget),
			target = $(self.attr('href')),
			offset = $('.header').height(),
			top = target.offset().top

		if ($('.catalog-nav').length > 0) {
			offset += $('.catalog-nav').height();
		}

		$('body,html').animate({scrollTop: top - offset}, 600)
	});

	$(document).on('click', '.show-more-btn', (e) => {
		let block = $(e.currentTarget).closest(".show-more-block"),
			text = block.find(".show-more-text"),
			tl = gsap.timeline(),
			height = 15;

		if (!block.hasClass('has-expand')) return;

		block.toggleClass('show');

		if (block.hasClass('show')) {
			to(text, {height: "auto", duration: .6, ease: "easeTextCollapse"}, tl);
		} else {
			to(text, {height: height + 'rem', duration: .6, ease: "easeTextCollapse"}, tl);
		}
	});

	$('.js-close-modal-mobile').on('click', (e) => {
		$('.modal-mobile').removeClass("active");
	});

	$('.js-open-modal-mobile').on('click', (e) => {
		let self = $(e.currentTarget),
			id = self.attr('href')

		$(id).addClass("active");
	});

});

const check_expand_text = () => {
	$('.show-more-text').each((k, itm) => {
		let height = 15;

		$(itm).css('height', height + 'rem');
		const text = $(itm).find('.show-more-text__content');

		if (text.innerHeight() > $(itm).innerHeight()) {
			$(itm).closest(".show-more-block").addClass("has-expand");
		} else {
			$(itm).closest(".show-more-block").removeClass("has-expand");
			$(itm).css('height', 'auto');
		}
	});

	$(document).on('click', '.js-accordion-head', (e) => {
		let self = $(e.currentTarget),
			self_accordion = self.parent()

		/*$('.js-accordion').not(self_accordion).removeClass("active");
		$('.js-accordion').not(self_accordion).find('.js-accordion-body').slideUp();*/

		self_accordion.toggleClass('active')
		self.siblings('.js-accordion-body').slideToggle();
	});
}

const open_modal = (id) => {
	$(id).addClass("active");
	$('html').addClass("no-scroll");
}

const close_all_modal = () => {
	$('.modal').removeClass("active");
	$('html').removeClass("no-scroll");
}


const to = (itm, option, module = gsap, timing = ">") => {
	if (!itm || itm.length === 0) return


	module.to(itm, option, timing)
}
const fromTo = (itm, optionFrom, optionTo, module = gsap, timing = ">") => {
	if (!itm || itm.length === 0) return

	module.fromTo(itm, optionFrom, optionTo, timing);
}
