@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content">

    <ul class="head-nav">
        <li>
            <a class="head-nav-itm active" href="/contacts.html">
                <span class="head-nav-itm__text">Контакты</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm" href="/about.html">
                <span class="head-nav-itm__text">О компании</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm" href="/documents.html">
                <span class="head-nav-itm__text">Документы</span>
            </a>
        </li>
    </ul>

    <div class="contact-line">
        <div class="contact-line-content">
            <h5 class="contact-line__title">Адрес:</h5>
            <p class="contact-line__desc">г. Санкт-Петербург, Коломяжский пр. 10Э (территория Ленинградского Северного Завода)</p>

            <h5 class="contact-line__title">Режим работы:</h5>
            <p class="contact-line__desc">Пн. — Пт.: с 9:00 до 18:00</p>

            <a class="js-open-modal btn btn--small" href="#contact-us">Свяжитесь с нами</a>
        </div>
        <div class="contact-line-map">
            <div class="contact-map" data-coord="55.45,37.37" data-name="г. Санкт-Петербург, Коломяжский пр. 10Э (территория Ленинградского Северного Завода)" data-template-path="" id="contact-map"></div>
        </div>
    </div>

    <div class="contact-line">

        <div class="contact-line-map">
            <div class="contact-map" data-coord="55.45,37.37" data-name="г. Москва, Коломяжский пр. 22" data-template-path="" id="contact-map2"></div>
        </div>

        <div class="contact-line-content">
            <h5 class="contact-line__title">Адрес:</h5>
            <p class="contact-line__desc">г. Москва, Коломяжский пр. 22</p>

            <h5 class="contact-line__title">Режим работы:</h5>
            <p class="contact-line__desc">Пн. — Пт.: с 9:00 до 18:00</p>

            <a class="js-open-modal btn btn--small" href="#contact-us">Свяжитесь с нами</a>
        </div>
    </div>

    <div class="contact-line-info">
        <a class="contact-line-info__itm" href="tel:88127774031">
            <img alt="" class="svg" src="./img/ico/tel.svg">
            <span>8-812-777-40-31</span>
        </a>
        <a class="contact-line-info__itm" href="mailto:88127774031">
            <img alt="" class="svg" src="./img/ico/mail.svg">
            <span>spb@vkvadrate.ru</span>
        </a>
    </div>

</div>

<div class="modal modal-with-mobile modal-with-form" id="contact-us">
    <div class="modal-fade js-close-modal"></div>
    <div class="modal-content">

        <div class="modal-head-mobile">
            <div class="modal-head-mobile__left"></div>
            <div class="modal-head-mobile__title h3">Задать вопрос</div>
            <div class="modal-head-mobile__close js-close-modal">
                <div class="cross"></div>
            </div>
        </div>

        <div class="h3 modal-title">Задать вопрос</div>
        <div>
            Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет стоимости услуг и подготовят индивидуальное коммерческое предложение.
        </div>

        <form action="" class="nice-form nice-form--label-top js-form-validate">

            <label class="input required">
                <span class="input-field">
                    <input placeholder=" " type="text" value="" name="width">
                    <span class="input-label">Ваше имя*</span>
                </span>
                <div class="input-hint" style="	"></div>

            </label>

            <label class="input required">
                <span class="input-field">
                    <input placeholder=" " type="tel" value="" name="width">
                    <span class="input-label">Телефон*</span>
                </span>
                <div class="input-hint" style="	"></div>

            </label>

            <label class="input ">
                <span class="input-field">
                    <input placeholder=" " type="email" value="" name="width">
                    <span class="input-label">E-mail</span>
                </span>
                <div class="input-hint" style="	"></div>

            </label>

            <label class="input ">
                <span class="input-field">
                    <input placeholder=" " type="text" value="" name="width">
                    <span class="input-label">Интересующий товар/услуга</span>
                </span>
                <div class="input-hint" style="	"></div>

            </label>

            <label class="input required">
                <span class="input-field">
                    <input placeholder=" " type="text" value="" name="width">
                    <span class="input-label">Сообщение*</span>
                </span>
                <div class="input-hint" style="	"></div>

            </label>

            <button class="btn js-form-validate-btn w100">Отправить</button>

            <div class="form-bottom-text">Продолжая, вы соглашаетесь с политикой конфиденциальности</div>

        </form>

    </div>
</div>

</div>

@endsection