(function ($) {
	$.fn.rangeSelect = function (options) {
		options = $.extend({
			min_val: 0,
			max_val: 100,				// Максимальное значения диапазона
		}, options);

		var self = this,	// перепишем объект
			before = self.parent().find('.range-input.before'),
			after = self.parent().find('.range-input.after');

		if (self.length === 0 || before.length === 0 || after.length === 0) {
			return false;
		}

		$(document).ready(function () {
			var val1 = before.val().replace(/\s/g, ''),
				val2 = after.val().replace(/\s/g, '');

			if(val1 > options.min_val || val2 < options.max_val){
				self.addClass('has-val');
			}else{
				self.removeClass('has-val');
			}

			self.slider({
				animate: "slow",
				range: true,
				values: [val1, val2],
				min: options.min_val,
				max: options.max_val,
				step: 1,
				change: (e) => {
					if (!e.handleObj) return true;
					smartFilter.click(before[0]);


					let select = before.closest('.custom-select');

					select.addClass('has-val');
					select.find(".js-fake-select-val").text(before.val() + "—" + after.val())

					if(val1 > options.min_val || val2 < options.max_val){
						self.addClass('has-val');
					}else{
						self.removeClass('has-val');
					}
				},
				slide: function (event, ui) {
					before.val(XFormatPrice(ui.values[0]));
					after.val(XFormatPrice(ui.values[1]));

					before.attr('value', ui.values[0]);
					after.attr('value', ui.values[1]);

					$(ui.handle).closest('.filter-itm').addClass('checked');
					$(ui.handle).closest('form').addClass('checked');
				},
				stop: function (event, ui) {
					//options.stop( event, ui );
				}
			});

			$('.range-input').on('input', function () {
				var value = parseInt($(this).val());
				if (!value) value = 0;

				if (value > options.max_val) {
					value = options.max_val;
				}
				if (value < 0) {
					$(this).val(0);
				}

				$(this).val(value);

				var val1 = parseInt(before.val()),
					val2 = parseInt(after.val());

				if (val1 > val2) {
					before.val(val2);
					val1 = val2;
				}
				if (val2 < val1) {
					after.val(val1);
					val2 = val1;
				}


				if(val1 > options.min_val || val2 < options.max_val){
					self.addClass('has-val');
				}else{
					self.removeClass('has-val');
				}

				$('.range-select').slider("values", [val1, val2]);
			});


		});


	};

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

})(jQuery);

function XFormatPrice(_number) {
	var decimal = 0;
	var separator = ' ';
	var decpoint = '.';
	var format_string = '#';

	var r = parseFloat(_number)

	var exp10 = Math.pow(10, decimal);// приводим к правильному множителю
	r = Math.round(r * exp10) / exp10;// округляем до необходимого числа знаков после запятой


	rr = Number(r).toFixed(decimal).toString().split('.');

	b = rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g, "\$1" + separator);

	r = (rr[1] ? b + decpoint + rr[1] : b);
	return format_string.replace('#', r);
}
