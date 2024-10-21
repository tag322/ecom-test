@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content">

    <ul class="head-nav">
        <li>
            <a class="head-nav-itm" href="/help-pay.html">
                <span class="head-nav-itm__text">Оплата</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm" href="/help-return.html">
                <span class="head-nav-itm__text">Возврат и гарантия</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm" href="/help-info.html">
                <span class="head-nav-itm__text">Техинфо</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm active" href="/help-support.html">
                <span class="head-nav-itm__text">Поддержка</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm" href="/help-faq.html">
                <span class="head-nav-itm__text">Вопросы</span>
            </a>
        </li>
    </ul>

    <div class="help-support">
        <form action="" class="help-support-form nice-form nice-form--label-top js-form-validate">

            <p class="title-margin">Напишите нам, если у вас есть вопрос, предложение, либо вы столкнулись с проблемой</p>

            <label class="input input--select required">

                <span class="input-field">
                    <div class="input-label">Тема обращения</div>

                    <select class="js-select" id="" name="theme">
                        <option></option>
                        <option value="1">Запрос информации</option>
                        <option value="2">Предложения и реклама</option>
                        <option value="3">Благодарность</option>
                        <option value="4">Претензия на обслуживание</option>
                        <option value="5">Претензия на товары</option>
                        <option value="6">Возврат товара</option>
                    </select>
                </span>

                <div class="input-hint" style="display: block"></div>
            </label>

            <label class="input required">
                <span class="input-field">
                    <input placeholder=" " type="text" value="" name="width">
                    <span class="input-label">ФИО</span>
                </span>
                <div class="input-hint" style="	"></div>

            </label>

            <label class="input required">
                <span class="input-field">
                    <input placeholder=" " type="tel" value="" name="width">
                    <span class="input-label">Телефон</span>
                </span>
                <div class="input-hint" style="	"></div>

            </label>

            <label class="input input--textarea required">
                <div class="input-field">
                    <textarea name="" placeholder=" "></textarea>
                    <div class="input-label">Текст сообщения</div>
                    <div class="input-hint" style="	"></div>
                </div>

            </label>

            <div class="help-support__policy required">
                <input class="js-checkbox required" placeholder="Нажимая кнопку, я даю согласие на обработку персональных данных, в&nbsp;соответствии с Политикой конфиденциальности." type="checkbox">
            </div>

            <button class="btn disabled js-form-validate-btn">Отправить</button>

        </form>
        <img src="./img/ico/stas/stas-cyber.svg" alt="" class="help-support__stas">
    </div>

</div>

</div>

@endsection