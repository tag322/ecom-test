$(function () {

	check_compare_diff();

	$('.js-compare-move').each((k, i) => {
		$(i).find('.js-compare-move-itm').eq(0).addClass("order-left");
		$(i).find('.js-compare-move-itm').eq(1).addClass("order-right");
	})

	$('.js-compare-prev').on('click', (e) => compare_prev());
	$('.js-compare-next').on('click', (e) => compare_next());

	$('.js-compare-left-prev').on('click', (e) => {
		let left_num = parseInt($('.js-compare-num-left').first().text()),
			right_num = parseInt($('.js-compare-num-right').first().text())

		compare_show_block(--left_num, right_num, "left_prev")
	});

	$('.js-compare-left-next').on('click', (e) => {
		let left_num = parseInt($('.js-compare-num-left').first().text()),
			right_num = parseInt($('.js-compare-num-right').first().text())

		compare_show_block(++left_num, right_num, "left_next")
	});

	$('.js-compare-right-prev').on('click', (e) => {
		let left_num = parseInt($('.js-compare-num-left').first().text()),
			right_num = parseInt($('.js-compare-num-right').first().text())

		compare_show_block(left_num, --right_num, 'right_prev')
	});

	$('.js-compare-right-next').on('click', (e) => {
		let left_num = parseInt($('.js-compare-num-left').first().text()),
			right_num = parseInt($('.js-compare-num-right').first().text())

		compare_show_block(left_num, ++right_num, 'right_next')
	});

	$('.js-compare-diff-type-input').on('change', (e) => {
		let val = $(e.currentTarget).val()

		if (val === 'diff') {
			$('.compare-page').addClass("show-only-diff");
		} else {
			$('.compare-page').removeClass("show-only-diff");
		}

		$(`.js-compare-diff-type-input[value="${val}"]`).prop('checked', true)
	});

	$('.js-compare-diff-type-check').on('change', (e) => {
		let self = $(e.currentTarget)

		if (self.prop('checked')) {
			$('.compare-page').addClass("show-only-diff");
		} else {
			$('.compare-page').removeClass("show-only-diff");
		}
	});

	const compare_prev = () => {
		let products = $('.compare-products .product-itm'),
			products_head = $('.compare-products .fixed-head-product')

		products.parent().prepend(products.last());
		products_head.parent().prepend(products_head.last());


		$('.compare-grid__tr-body').each((k, i) => {
			let td = $(i).find('.compare-grid-td')

			td.parent().prepend(td.last());
		})
	}
	const compare_next = () => {
		let products = $('.compare-products .product-itm'),
			products_head = $('.compare-products .fixed-head-product')

		products.parent().append(products.first());
		products_head.parent().append(products_head.first());

		$('.compare-grid__tr-body').each((k, i) => {
			let td = $(i).find('.compare-grid-td')

			td.parent().append(td.first());
		})
	}

	const compare_show_block = (left_num, right_num, move) => {
		const count = $('.compare-products .product-itm').length

		if (left_num < 1) left_num = count
		if (left_num > count) left_num = 1

		if (right_num < 1) right_num = count
		if (right_num > count) right_num = 1

		if (left_num === right_num && move === 'left_prev') --left_num;
		if (left_num === right_num && move === 'left_next') ++left_num;
		if (left_num === right_num && move === 'right_prev') --right_num;
		if (left_num === right_num && move === 'right_next') ++right_num;

		if (left_num < 1) left_num = count
		if (left_num > count) left_num = 1

		if (right_num < 1) right_num = count
		if (right_num > count) right_num = 1

		$('.js-compare-num-left').text(left_num)
		$('.js-compare-num-right').text(right_num)

		$('.js-compare-move-itm').removeClass("order-left order-right");

		$('.js-compare-move').each((k, i) => {
			$(i).find('.js-compare-move-itm').eq(left_num - 1).addClass("order-left");
			$(i).find('.js-compare-move-itm').eq(right_num - 1).addClass("order-right");
		})

	}


	$(window).on('scroll', (e) => {
		let scroll = $(window).scrollTop()

		if ($('.js-compare-fixed-start').length === 0) return;

		if (scroll > $('.js-compare-fixed-start').offset().top) {
			$('.compare-fixed-head').addClass("show");
		} else {
			$('.compare-fixed-head').removeClass("show");
		}
	})

});

const check_compare_diff = () => {
	$('.compare-grid__tr-body').each((i, tr) => {
		let prev;
		$(tr).find('.compare-grid-td').each((j, td) => {
			if (!prev) {
				prev = $(td).text()
			}
			if (prev !== $(td).text()) {
				$(tr).closest('.compare-grid--line').addClass("line-different")
			}
		})
	})
}
