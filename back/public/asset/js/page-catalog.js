$(function () {
	counter_init();
	product_slider_init();
	product_slider_events();
	catalog_arrow_check();

	$(document).on('click', '.price-type-val', (e) => {
		let self = $(e.currentTarget),
			block = self.closest(".price-block"),
			type = self.attr('data-type')

		block.find(".price-block-val__itm").removeClass("active");
		block.find(`.price-block-val__itm[data-type='${type}']`).addClass("active");

		block.find('.price-type-val').removeClass("active");
		self.addClass('active');

		roll_change();
	});

	$(document).on('click', ".catalog-slider__preview__img", (e) => {
		let self = $(e.currentTarget),
			image = self.attr('data-image-detail')

		$('.catalog-slider__img img').attr('src', image);
	});

	$(window).on('scroll', (e) => {
		let scroll = $(window).scrollTop(),
			offset = $('.header').height() + $('.catalog-nav').height()

		catalog_arrow_check();

		$('.js-scroll-section').each((i, itm) => {
			let top = $(itm).offset().top,
				bot = top + $(itm).height()

			if (scroll > top - offset - 40 && scroll < bot) {
				const id = $(itm).attr('id'),
					active = $(`.catalog-nav-itm[href="#${id}"]`)
				let left = 0

				if (active.parent().prevAll().length > 0) {
					$('.catalog-nav').addClass("show-product");
				} else {
					$('.catalog-nav').removeClass("show-product");
				}

				active.parent().prevAll().each((i, itm) => {
					left += parseInt($(itm).outerWidth(true))
				})

				if (!active.hasClass('active')) {
					$('.catalog-nav').stop()
					$('.catalog-nav').animate({scrollLeft: left}, 600);
				}

				$('.catalog-nav-itm').removeClass("active")
				active.addClass("active")


			}

		})

	});

	$(document).on('click', '.js-change-calc-type', (e) => {
		let self = $(e.currentTarget),
			type = self.attr('data-type')

		$('.modal-calc').removeClass("show-area show-size").addClass(`show-${type}`);
	});

	$('#modal-calc input[type="number"]').on('input', (e) => {
		let self = $(e.currentTarget),
			val = parseInt(self.val())

		if (val < 0) val = 0;

		self.val(val);
	});

	$('.js-form-calc').on('submit', (e) => {
		let form = $(e.currentTarget),
			type = form.find('[name="type"]:checked'),
			area = form.find('[name="area"]'),
			width = form.find('[name="width"]'),
			height = form.find('[name="height"]'),
			show = form.closest('.modal-calc').hasClass('show-area')

		if (show) {
			if (area.val().length === 0) {
				area.closest('.input').addClass('error');
				return false;
			}
		} else {
			if (width.val().length === 0) {
				width.closest('.input').addClass('error');
				return false;
			}
			if (height.val().length === 0) {
				height.closest('.input').addClass('error');
				return false;
			}
		}

		if (type.length === 0) {
			$('.calc-cart').addClass("error");

			return false;
		}

		$('.js-calc-width-val').text(`${width.val()} м`)
		$('.js-calc-height-val').text(`${height.val()} м`)
		$('.js-calc-area-val').text(`${area.val()} м`)

		$('.js-calc-type-val').text(`${type.val()}`)

		form.slideUp()
		form.next('.calc-result').slideDown()

		return false;
	});

	$('.calc-cart input').on('input', (e) => {
		$('.calc-cart').removeClass("error");
	})

	$('.js-calc-back').on('click', (e) => {
		let form = $(e.currentTarget).closest('.calc-result')

		form.slideUp()
		form.prev('.js-form-calc').slideDown()

		return false;
	});

	$('.roll-width input').on('change', (e) => {
		let val = $(e.currentTarget).val()

		$('.roll-width').removeClass("error");

		$('.js-roll-width').text(val)

		roll_change()
	})

})

const catalog_arrow_check = () => {
	let scroll = $(window).scrollTop()

	if (scroll > 1500) {
		$('.arrow-top').removeClass("arrow-top--hide");
	} else {
		$('.arrow-top').addClass("arrow-top--hide");
	}
}

const counter_init = () => {
	$(document).on('click', ".js-add-cart", (e) => {
		let self = $(e.currentTarget),
			roll_width = $('[name="roll-width"]')

		if (roll_width.length > 0 && $('[name="roll-width"]:checked').length === 0) {
			$('.roll-width').addClass("error");
			e.stopImmediatePropagation();
			return false;
		}

		self.parent().addClass("show-counter");
		self.parent().find(".add-cart-counter__input").val("1");

		roll_change();
	});

	$(document).on('click', ".catalog-main-roll .js-add-cart", (e) => {
		$('.roll-calc-wrap').slideDown();
	});

	$(document).on('click', ".js-counter-btn", (e) => {
		let self = $(e.currentTarget),
			direction = self.attr("data-direction"),
			input = self.siblings('.add-cart-counter__input'),
			num = parseInt(input.val())

		num = direction === "plus" ? num + 1 : num - 1;

		if (num < 0) num = 0;
		if (num > 999) num = 999;

		input.val(num)

		if (num === 0) {
			self.closest(".add-cart-btn").removeClass("show-counter");
			$('.roll-calc-wrap').slideUp();
		}

	});

	$(document).on('change', '.add-cart-counter__input', (e) => {
		let input = $(e.currentTarget),
			num = parseInt(input.val())

		if (num === 0 || input.val() === "") {
			input.closest(".add-cart-btn").removeClass("show-counter");
			$('.roll-calc-wrap').slideUp();
		}
	});
	$(document).on('input', '.add-cart-counter__input', (e) => {
		let input = $(e.currentTarget),
			num = parseInt(input.val())

		if (!num) num = 0;
		if (num < 0) num = 0;
		if (num > 999) num = 999;

		if (num === 0) {
			input.val("")
			return;
		}

		input.val(num)

	});

	$(document).on('click', ".js-catalog-roll-btns .js-counter-btn", (e) => roll_change());
	$(document).on('input', ".js-catalog-roll-btns .add-cart-counter__input", (e) => roll_change());
}

const roll_change = () => {
	if ($('.roll-calc').length === 0) return;

	let num = parseFloat($('.js-catalog-roll-btns input').val()),
		price = parseFloat($('[name="price-m2"]').val()),
		roll_width = parseFloat($('[name="roll-width"]:checked').val()),
		m2_total = num,
		m_total = m2_total / roll_width,
		m2_in_roll = parseFloat($('[name="m2-in-roll"]').val())

	if (!num) {
		num = 0;
		m2_total = 0;
		m_total = 0;
	}

	if ($('.price-type-val[data-type="m"].active').length > 0) {
		//Активны погонные метры
		m_total = num
		m2_total = num * roll_width;
	}

	if (m2_in_roll) {
		let buy_type = $('[name="buy-type"]').val();

		let roll_count = buy_type !== 'roll' ? Math.floor(m2_total / m2_in_roll) : Math.ceil(m2_total / m2_in_roll);


		if ($('.price-type-val[data-type="roll"].active').length > 0) {
			roll_count = m2_total
		}

		m_total = buy_type !== 'roll' ? m2_total % m2_in_roll / roll_width : roll_count * m2_in_roll

		if (buy_type === 'roll') {
			m2_total = roll_count * m2_in_roll
		}

		if (roll_count <= 0) {
			$('.js-buy-roll-col').addClass("v-hide")
		} else {
			$('.js-buy-roll-col').removeClass("v-hide")
		}

		if (m_total === 0) {
			$('.js-calc-img-cut').addClass("hide")
			$('.js-calc-img-full').removeClass("hide")
		} else {
			$('.js-calc-img-cut').removeClass("hide")
			$('.js-calc-img-full').addClass("hide")
		}

		let m2_total_roll = roll_count * m2_in_roll
		let m2_total_cut = m2_total - m2_total_roll

		$('.js-roll-count').text(roll_count);
		$('.js-catalog-m2-total-cut').text(m2_total_cut);
		$('.js-catalog-m2-total-roll').text(m2_total_roll);
	}


	let width = calcRollWidth(m_total);

	$('.roll-calc-img-move').css('width', `${width}rem`)

	$('.js-catalog-m-total').text(numRound(m_total))
	$('.js-catalog-m2-total').text(numRound(m2_total))
	$('.js-catalog-price-total').text(priceFormat(m2_total * price))
}

const product_slider_events = () => {
	$(document).on('mousemove', '.product-itm-images', function (e) {
		if (is_tablet) return false;

		var width = $(this).outerWidth(),
			x = e.clientX - $(this).offset().left,
			items = $(this).find('.product-itm-images__itm'),
			length = items.length - 1,
			part_width = width / length,
			num = Math.round(x / part_width);

		slider_move_to($(this), num)
	});


	$(window).on('resize', () => {
		product_slider_resize();
	})

	$('.product-slider').owlCarousel({
		items: 4,
		margin: 24,
		dots: false,
		nav: true,
		responsive: {
			0: {items: 2, margin: 16},
			600: {items: 2, margin: 24},
			1100: {items: 4, margin: 24}
		},
	})

	$('.product-slider-lk').owlCarousel({
		items: 3,
		margin: 24,
		dots: false,
		nav: true,
		responsive: {
			0: {items: 2, margin: 16},
			600: {items: 2, margin: 24},
			1100: {items: 3, margin: 24}
		},
	})

	if (is_tablet) {
		$('.blog-grid').owlCarousel({
			items: 4,
			margin: 24,
			dots: false,
			nav: true,
			responsive: {
				0: {items: 1, margin: 16},
				600: {items: 2, margin: 24},
				1100: {items: 4, margin: 0}
			},
		})
	}

}

const slider_move_to = (slider, num) => {
	const width = slider.outerWidth(true),
		stage = slider.find('.product-itm-images-stage')

	slider.attr('data-page', num)
	stage.css('transform', `translateX(-${num * width}px)`)

	slider.find('.product-itm-dot').removeClass("active");
	slider.find('.product-itm-dot').eq(num).addClass("active");
}


const numRound = (num) => {
	return Math.round(num * 10) / 10
}

const calcRollWidth = (m) => {
	let percent = m / 9

	if (percent > 1) percent = 1;

	return percent * 6 + 5;
}

var resizeTimeout;

const product_slider_resize = () => {
	clearTimeout(resizeTimeout);
	resizeTimeout = setTimeout(() => {
		$('.product-itm-images').each((i, itm) => {
			const num = parseInt($(itm).attr('data-page'));

			slider_move_to($(itm), num)
		})
	}, 500)

}

const product_slider_init = () => {
	$('.product-itm-images:not(.init)').each((i, self) => {
		const length = $(self).find(".product-itm-images__itm").length

		$(self).addClass('init');
		$(self).append('<div class="product-itm-images-dots"></div>')

		for (let i = 0; i < length; i++) {
			$(self).find('.product-itm-images-dots').append('<span class="product-itm-dot"></span>')
		}

		$(self).find('.product-itm-dot').first().addClass("active");
	})

	$('.catalog-slider__preview').owlCarousel({
		items: 3,
		margin: 24,
		dots: false,
		loop: true,
		nav: true,
		responsive: {
			0: {items: 1, margin: 8, dots: true},
			600: {items: 2, margin: 8, dots: true},
			1100: {items: 3, margin: 8, dots: false}
		},
	})
}

const priceFormat = (price) => {
	const formatter = new Intl.NumberFormat('ru-RU', {
		style: 'decimal',
		minimumFractionDigits: 0
	})

	return formatter.format(price);
}