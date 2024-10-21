function createCustomSelect() {
	$('.js-select:not(.init)').each(function (i, select) {
		$(this).wrapAll('<div class="js-select-wrap"></div>');

		if ($(this).next().hasClass('custom-select')) {
			return true;
		}

		$(this).after('<div class="custom-select"><div class="custom-select__single"><span class="custom-select__single-label"></span></div><div class="custom-select__dropdown"><ul class="custom-select__dropdown-list"></ul></div><span class="custom-select-result"></span></div>');

		let dropdown = $(this).next();
		let wrap = $(this).parent();
		let options = $(select).find('option');
		let selected = $(this).find('option:selected');
		let list = dropdown.find('.custom-select__dropdown-list');
		let val = selected.val();

		if (!val || val == '' || val == undefined) {
			dropdown.find('.custom-select__single-label').addClass('placeholder');
			wrap.removeClass('select');
		} else {
			dropdown.find('.custom-select__single-label').removeClass('placeholder');
			wrap.addClass('select');
		}

		dropdown.find('.custom-select__single-label').html(selected.text());

		options.each(function (j, o) {
			let display = $(o).data('note') || '';
			let placeholder_class = $(o).val() === '' || $(o).val() === undefined ? 'placeholder ' : '';
			list.append('<li class="custom-select__dropdown-item ' + (placeholder_class) + ($(o).is(':selected') ? 'is-active' : '') + '"' + (display ? 'data-note="' + display + '"' : '') + ' data-value="' + $(o).val() + '"><span>' + $(o).text() + '</span></li>')
		});

		$(this).addClass('init');

	});
}

$(function () {
	// Event listeners

	//клик вне
	$(document).on('click', function (e) {
		if ($(e.target).closest('.js-select-wrap').length > 0 || $(e.target).hasClass('.js-select-wrap')) {
			return true;
		}

		$('.custom-select').removeClass("is-open");
	});

// Open/close
	$(document).on('click', '.custom-select', function () {
		$('.custom-select').not($(this)).removeClass('is-open');
		$(this).toggleClass('is-open')
		if ($(this).hasClass('is-open')) {
			$(this).find('.custom-select__dropdown-item').attr('tabindex', 0);
			$(this).find('.is-active').focus()
		} else {
			$(this).find('.custom-select__dropdown-item').removeAttr('tabindex');
			$(this).focus()
		}
	});

// Option click
	$(document).on('click', '.custom-select__dropdown-item', function () {
		$(this).closest('.custom-select__dropdown').find('.is-active').removeClass('is-active');
		$(this).addClass('is-active');


		let text = $(this).text(),
			parent = $(this).closest('.js-select-wrap');

		$(this).closest('.custom-select').find('.custom-select__single-label').text(text);
		$(this).closest('.custom-select').prev('select').val($(this).data('value')).trigger('change');


		let val = $(this).data('value');

		if (!val || val == '') {
			$(this).closest('.custom-select').find('.custom-select__single-label').addClass('placeholder');
			parent.removeClass('select');
		} else {
			$(this).closest('.custom-select').find('.custom-select__single-label').removeClass('placeholder');
			parent.addClass('select');
		}

	});

// Keyboard events
	$(document).on('keydown', '.custom-select', function (event) {
		let focused_option = $($(this).find('.custom-select__dropdown-item:focus')[0] || $(this).find('.custom-select__dropdown-item.is-active')[0]);
		// Space or Enter
		if (event.keyCode == 32 || event.keyCode == 13) {
			if ($(this).hasClass('is-open')) {
				focused_option.trigger('click')
			} else {
				$(this).trigger('click')
			}
			return false
			// Down
		} else if (event.keyCode == 40) {
			if (!$(this).hasClass('is-open')) {
				$(this).trigger('click')
			} else {
				focused_option.next().focus()
			}
			return false
			// Up
		} else if (event.keyCode == 38) {
			if (!$(this).hasClass('is-open')) {
				$(this).trigger('click')
			} else {
				let focused_option = $($(this).find('.custom-select__dropdown-item:focus')[0] || $(this).find('.custom-select__dropdown-item.is-active')[0]);
				focused_option.prev().focus()
			}
			return false
			// Esc
		} else if (event.keyCode == 27) {
			if ($(this).hasClass('is-open')) {
				$(this).trigger('click');
			}
			return false
		}
	});

	$(document).ready(function () {
		createCustomSelect()

	});

})
