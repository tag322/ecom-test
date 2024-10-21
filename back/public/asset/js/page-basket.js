$(function () {

	$('.js-basket-remove').on('click', (e) => {
		let self = $(e.currentTarget)

		self.closest('.basket-itm').remove();
	});

	$('.basket-itm .js-checkbox').on('click', (e) => {
		if ($('.basket-itm .js-checkbox:checked').length > 0) {
			$('.js-basket-remove-all-btn').removeClass('disabled');
		} else {
			$('.js-basket-remove-all-btn').addClass('disabled');
		}
	});

	$('.js-basket-remove-all').on('click', (e) => {
		$('.basket-itm .js-checkbox:checked').closest('.basket-itm').remove();
	});

	$('.js-basket-select-all').on('change', (e) => {
		if ($(e.currentTarget).prop('checked')) {
			$('.basket-itm .js-checkbox').prop('checked', true);
			$('.js-basket-remove-all-btn').removeClass('disabled');
		} else {
			$('.basket-itm .js-checkbox').prop('checked', false);
			$('.js-basket-remove-all-btn').addClass('disabled');
		}
	});

});