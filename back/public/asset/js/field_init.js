$(function () {
	//Кастомизация чекбоксов
	init_checkbox_style();
	init_checkbox_swicher();
	init_radio_style();
	init_tel_mask();
	file_upload_init();


	$('.input input,.input textarea').each((k, i) => {
		if ($(i).val().length > 0) {
			$(i).closest('.input').addClass('has-val')
		} else {
			$(i).closest('.input').removeClass('has-val')
		}
	})

	$('.js-form-validate').each(function () {
		if ($(this).hasClass('js-form-validate-no-disable')) {
			return;
		}

		if (form_validate($(this), false)) {
			$('.js-form-validate-btn').removeClass("disabled");
		} else {
			$('.js-form-validate-btn').addClass("disabled");
		}
	});

	$('.js-form-validate').find('select,input,textarea').on('input', function () {
		if ($('.js-form-validate').hasClass('js-form-validate-no-disable')) {
			return;
		}

		if (form_validate($(this).closest('form'), false)) {
			$('.js-form-validate-btn').removeClass("disabled");
		} else {
			$('.js-form-validate-btn').addClass("disabled");
		}

		if ($(this).val().length > 0) {
			$(this).closest('.input').addClass('has-val')
		} else {
			$(this).closest('.input').removeClass('has-val')
		}

	});
	$('.js-form-validate').find('select,input,textarea').on('change', function () {
		if ($('.js-form-validate').hasClass('js-form-validate-no-disable')) {
			return;
		}

		if (form_validate($(this).closest('form'), false)) {
			$('.js-form-validate-btn').removeClass("disabled");
		} else {
			$('.js-form-validate-btn').addClass("disabled");
		}

	});

	$('.js-form-validate-btn').on('click', function (e) {
		if (form_validate($('.js-form-validate'), true) === false) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			return false;
		}
	});

	$(document).on('input', '.input.error input', (e) => {
		let self = $(e.currentTarget)

		self.closest('.input').removeClass("error");
	});

	$('.js-input-limit input,.js-input-limit textarea').on('input', (e) => {
		setTimeout(() => {
			let self = $(e.currentTarget),
				parent = self.closest('.input'),
				limit = parseInt(self.attr('data-limit')),
				val = self.val()

			if (!limit) return true;

			parent.find('.js-input-limit-num').text(val.length)

			if (val.length > limit) {
				parent.addClass('error')
			} else {
				parent.removeClass('error')
			}
		}, 0)
	});

	$('.input-field').append("<div class='reset-field'></div>")

	$(document).on('click', '.reset-field', (e) => {
		let self = $(e.currentTarget),
			parent = self.closest('.input')

		self.siblings('input,textarea').val("")
		parent.removeClass('has-val')
	});

});

const file_upload_init = () => {

	$('.js-file').each((k, i) => {
		let fileList = $(i).find('.js-file-list');
		let fileInput = $(i).find('input[type="file"]');

		fileInput.on('change', function (event) {
			const files = event.target.files;

			for (let i = 0; i < files.length; i++) {
				const file = files[i];

				if (!file.type.match('image/jpeg')) {
					alert('Пожалуйста, выберите только файлы формата JPEG/JPG.');
					continue;
				}

				if (file.size > 10 * 1024 * 1024) {
					alert('Размер файла превышает максимальный лимит в 10МБ.');
					continue;
				}

				const listItem = $('<div>').addClass('file-item');
				const fileImage = $('<img>').addClass('preview-image'); // Добавляем класс, чтобы потом было проще найти и обновить
				const deleteBtn = $('<span>').addClass('delete-btn');

				// Читаем содержимое файла и устанавливаем его как src для изображения
				const reader = new FileReader();
				reader.onload = function(event) {
					fileImage.attr('src', event.target.result);
				};
				reader.readAsDataURL(file);

				deleteBtn.on('click', function () {
					listItem.remove();
					updateFileInputValue();
				});

				listItem.append(fileImage, deleteBtn);
				fileList.append(listItem);
			}

			updateFileInputValue();
		});

		function updateFileInputValue() {
			const files = [];
			fileList.find('.file-item span:first-child').each(function () {
				const fileName = $(this).text();
				const blob = new Blob([fileName], {type: 'image/jpeg'});
				const file = new File([blob], fileName, {type: 'image/jpeg'});
				files.push(file);
			});
			const newFileList = new DataTransfer();
			for (const file of files) {
				newFileList.items.add(file);
			}
			fileInput[0].files = newFileList.files;

			if (form_validate(fileList.closest('form'), false)) {
				$('.js-form-validate-btn').removeClass("disabled");
			} else {
				$('.js-form-validate-btn').addClass("disabled");
			}

			checkHasFile()
		}

		const checkHasFile = () => {
			if(fileList.find('.file-item').length > 0){
				$(i).addClass("has-file");
			}else{
				$(i).removeClass("has-file");
			}
		}
	});
}

const init_tel_mask = () => {
	$('[type="tel"]').each((k, elem) => {
		let mask = '+7 (000) 000 00 00'
		IMask(
			elem, {
				mask: mask,
				placeholderChar: '_'
			});

		$(elem).on("input", (e) => {
			let self = e.target;

			if ($(self).val().length < mask.length) {
				$(self).closest('.input,.input-modal').removeClass("phone-complete");
			} else {
				$(self).closest('.input,.input-modal').addClass("phone-complete");
			}
		});
	});

}


function form_validate(form, show_error = true) {
	let error = false,
		requireds = form.find('.required input, .required select, .required textarea');

	requireds.each(function () {
		let hint = $(this).siblings('.input-hint');
		if (!check_input($(this), show_error)) {
			error = true;
			if (show_error) {
				hint.text('Обязательное поле');
			}
		}
	});

	let ava = form.find('.gallery-itm-img');
	if (ava.length > 0) {
		let change = ava.find('.change-avatar.empty');
		if (change.length > 0 && change.hasClass('empty')) {
			error = true;
			if (show_error) {
				change.addClass('error');
			}
		}
	}

	let employer = form.find('.js-employer-table');
	if (employer.length > 0) {
		if (employer.find('tr[data-id]').length === 0) {
			return false;
		}
	}

	return !error;
}

function check_input(input, show_error = false) {
	let parent = input.closest(".input"),
		hint = parent.find('.input-hint')

	if (input.closest('.hide').length > 0) {
		return true;
	}

	if (show_error && input.attr('type') !== 'email') {
		hint.text('');
		parent.removeClass("error");
	}

	if ((input.attr('type') === 'checkbox') && input.prop('checked') === false) {

		if (input.hasClass('js-required-checkbox-group')) {
			if (input.closest('.required').find('.js-required-checkbox-group:checked').length > 0) {
				return true;
			}
		}

		if (show_error) {
			hint.text('Поле обязательно для заполнения');
			parent.addClass("error");
		}
		return false;
	}

	if (input.attr('type') === 'radio') {
		let name = input.attr('name');

		if ($('input[name="' + name + '"]:checked').length === 0) {
			return false;
		}
	}

	if (input.attr('type') === 'file') {
		let block = input.closest('.js-file'),
			files = block.find('.file-item')


		if (files.length > 0) {
			return true;
		}

		if (show_error) {
			hint.text('Превышен лимит количества символов');
			parent.addClass("error");
		}
	}

	if (input.val().length <= 0) {
		if (show_error) {
			hint.text('Поле обязательно для заполнения');
			parent.addClass("error");
		}

		return false;
	}

	if (input.attr('type') === 'email') {
		let is_email = input.val().match(
			/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
		);

		if (is_email == null && input.val().length > 0) {
			hint.text('Неверно заполнен e-mail');
			parent.addClass("error");
			return false;
		} else {
			hint.text('');
			parent.removeClass("error");
		}
	}

	if (input.attr('type') === 'tel') {
		if (!parent.hasClass("phone-complete")) {
			if (show_error) {
				hint.text('Поле обязательно для заполнения');
				parent.addClass("error");
			}
			return false;
		}
	}


	if (parent.hasClass("js-input-limit") && input.attr('data-limit')) {
		let limit = parseInt(input.attr('data-limit')),
			val = input.val()

		if (show_error) {
			hint.text('Превышен лимит количества символов');
			parent.addClass("error");
		}

		if (val.length > limit) {
			parent.addClass('error')
			return false;
		} else {
			parent.removeClass('error')
		}
	}

	/*if (input[0].nodeName === 'TEXTAREA') {
		if (!textarea_input(input)) {
			return false;
		}
	}*/

	return input.val().length !== 0;

}


function form_start_validate(form) {
	let error = false,
		requireds = form.find('.required input, .required textarea');

	requireds.each(function () {
		if (!check_input($(this))) {
			error = true;
		}
	});

	return error;
}

function init_radio_style() {
	$('input.js-radio').each(function () {
		if (!$(this).parent().is('.radio_box')) {
			var placeholder = $(this).attr('placeholder');

			$(this).wrap('<label class="radio_box"></label>');
			$(this).after('<span class="radio_box__item"></span><span class="radio_box__text">' + placeholder + '</span>');
		}

		if ($(this).prop('checked')) {
			$(this).parent('.radio_box').addClass('checked');
		} else {
			$(this).parent('.radio_box').removeClass('checked');
		}
	});
}

function init_checkbox_style() {
	$('input.js-checkbox').each(function () {
		if (!$(this).closest('.check_box').length > 0) {
			var placeholder = $(this).attr('placeholder');

			$(this).wrap('<label class="check_box"></label>');
			$(this).after('<span class="check_box__item"></span><span class="check_box__text">' + placeholder + '</span>');

			if ($(this).prop('disabled')) {
				$(this).parent().addClass("disabled");
			}
		}

		if ($(this).prop('checked')) {
			$(this).parent('.check_box').addClass('checked');
		} else {
			$(this).parent('.check_box').removeClass('checked');
		}
	});
}

function init_checkbox_swicher() {
	$('input.js-checkbox-switcher').each(function () {
		if (!$(this).parent().is('.switcher')) {
			var placeholder = $(this).attr('placeholder');

			$(this).wrap('<label class="switcher"></label>');
			$(this).after('<span class="switcher__text">' + placeholder + '</span><span class="switcher__item"></span>');

			if ($(this).prop('disabled')) {
				$(this).parent().addClass("disabled");
			}
		}

		if ($(this).prop('checked')) {
			$(this).parent('.check_box').addClass('checked');
		} else {
			$(this).parent('.check_box').removeClass('checked');
		}
	});
}