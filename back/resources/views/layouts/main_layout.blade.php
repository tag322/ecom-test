<!DOCTYPE html>er

<html lang="ru">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Vkvadrate — Главная</title>
    <meta content="All inclusive - Главная" name="description">

    <link href="css/style.css?v=1.2" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="wrapper">

        <div class="header-top">
            <div class="content content--big visible">

                <div class="header-place">
                    <img alt="" class="svg header-place__img" src="./img/head-place.svg">

                    <a class="header-place-btn js-open-modal" href="#modal-city-full">
                        <img alt="" class="header-place-btn__ico svg" src="./img/ico/place.svg">
                        <div class="header-place-btn__text">Санкт-Петербург</div>
                    </a>
                </div>

                <div class="header-top-mid">
                    <ul class="header-top-menu">
                        <li>
                            <a href="/" class="has-child">Спецпредложения</a>
                            <ul class="header-top-menu-dropdown">
                                <li>
                                    <a href="/">Оплата</a>
                                </li>
                                <li>
                                    <a href="/">Обмен и возврат</a>
                                </li>
                                <li>
                                    <a href="/">Гарантия</a>
                                </li>
                                <li>
                                    <a href="/">Поддержка</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/" class="has-child">Компания</a>

                            <ul class="header-top-menu-dropdown">
                                <li>
                                    <a href="">О компании</a>
                                </li>
                                <li>
                                    <a href="">Документы</a>
                                </li>
                                <li>
                                    <a href="">Блог</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/">Помощь</a>
                        </li>
                        <li>
                            <a href="{{route('delivery')}}">Доставка</a>
                        </li>
                        <li>
                            <a href="{{route('contacts')}}">Контакты</a>
                        </li>
                    </ul>
                </div>

                <div class="header-top__right">
                    <a class="header-top-phone" href="tel:+78007774031">+7 (800-77) 7-40-31</a>
                    <a class="js-open-modal header-btn" href="#modal-callback">Заказать звонок</a>

                    <div class="header-soc">
                        <a aria-label="Telegram" class="header-soc__itm" href="https://t.me/+7000000" target="_blank">
                            <img alt="" class="svg" src="./img/ico/soc/tel.svg">
                        </a>
                        <a aria-label="WhatsUp" class="header-soc__itm" href="https://api.whatsapp.com/send?phone=7900000" target="_blank">
                            <img alt="" class="svg" src="./img/ico/soc/whatsup.svg">
                        </a>
                    </div>

                </div>

            </div>
        </div>

        <header class="header">
            <div class="header-progress">
                <div class="header-progress__bar"></div>
            </div>
            <div class="content content--big">

                <div class="mobile-menu-btn js-open-mobile-menu">
                    <span class="dot-box">
                        <span class="dot-box__itm"></span>
                        <span class="dot-box__itm"></span>
                        <span class="dot-box__itm"></span>
                        <span class="dot-box__itm"></span>
                        <span class="dot-box__itm"></span>
                        <span class="dot-box__itm"></span>
                        <span class="dot-box__itm"></span>
                        <span class="dot-box__itm"></span>
                        <span class="dot-box__itm"></span>
                    </span>
                </div>

                <a href="{{route('indexpage')}}" class="header-logo">
                    <picture>
                        <source media="all and (max-width: 1100px)" srcset="./img/logo-small.svg">
                        <img alt="Logo" src="./img/logo.svg">
                    </picture>
                </a>

                <div class="header-menu-btn js-menu-btn">
                    <div class="gamburger"></div>
                    <div class="header-menu-btn__text">Каталог</div>
                </div>

                <form action="" class="header-search">
                    <input placeholder="Найти в Вквадрате" type="text">
                    <button aria-label="Поиск">
                        <img alt="" class="svg" src="./img/ico/search.svg">
                    </button>
                </form>

                <div class="header-btns">

                    <a aria-label="Поиск" class="header-btns__btn mobile-only js-open-search" href="#">
                        <img alt="" class="svg" src="./img/ico/search.svg">
                    </a>

                    <a aria-label="Личный кабинет" class="header-btns__btn" href="/">
                        <img alt="" class="svg" src="./img/ico/user.svg">
                    </a>

                    <a aria-label="Избранное" class="header-btns__btn" href="/">
                        <img alt="" class="svg" src="./img/ico/heart.svg">
                    </a>

                    <a aria-label="Сравнить" class="header-btns__btn" href="/">
                        <img alt="" class="svg" src="./img/ico/solve.svg">
                    </a>

                    <a aria-label="Корзина" class="header-btns__btn" href="/">
                        <img alt="" class="svg" src="./img/ico/basket-full.svg">
                    </a>

                </div>

            </div>
        </header>

        <div class="main-menu">
            <div class="main-menu-fade js-close-main-menu"></div>
            <div class="content">

                <div class="main-menu-head">
                    <div class="main-menu-head__back">
                        <img src="./img/ico/arrow.svg" alt="">
                    </div>
                    <div class="main-menu-head__title">Каталог товаров</div>
                    <div class="main-menu-head__close js-close-main-menu">
                        <div class="cross"></div>
                    </div>
                </div>

                <div class="main-menu-search">
                    <input type="text" placeholder="Кварц-винил..." class="js-main-menu-search">
                </div>

                <div class="main-menu-content">

                    <div class="main-menu-content__step step1">
                        <ul class="main-menu-list">
                            <li>
                                <a class="main-menu-link has-child" data-id="step2-laminat" href="/">Ламинат</a>
                            </li>
                            <li>
                                <a class="main-menu-link has-child" data-id="step2-pvx" href="/">ПВХ-плитка</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Инженерная доска</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">SPC Ламинат</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Паркетная доска</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Пробковый пол</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Биополы</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Паркет ёлка</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Массивная доска</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Новинки</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Популярные товары</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Рекомендуемые товары</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Акции</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Распродажи</a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Уцененные товары</a>
                            </li>
                        </ul>
                    </div>

                    <div class="main-menu-content__step step2">
                        <ul class="main-menu-list" data-id="step2-laminat">
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Класс <span class="main-menu-link__count">4</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Бренд <span class="main-menu-link__count">7</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Толщина <span class="main-menu-link__count">9</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Страна производитель <span class="main-menu-link__count">14</span>
                                </a>
                            </li>
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Тип рисунка <span class="main-menu-link__count">17</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Оттенок <span class="main-menu-link__count">25</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Наличие фрески <span class="main-menu-link__count">3</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Степень блеска <span class="main-menu-link__count">4</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Помещение <span class="main-menu-link__count">9</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Декор <span class="main-menu-link__count">33</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Пожарный класс <span class="main-menu-link__count">3</span></a>
                            </li>
                        </ul>
                        <ul class="main-menu-list" data-id="step2-pvx">
                            <li>
                                <a class="main-menu-link" data-id="step3-color" href="/">Класс <span class="main-menu-link__count">4</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Бренд <span class="main-menu-link__count">7</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Толщина <span class="main-menu-link__count">9</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Страна производитель <span class="main-menu-link__count">14</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="main-menu-content__step step3">
                        <ul class="main-menu-list" data-id="step3-color">

                            <li>
                                <a class="main-menu-link" data-id="step4-cat" href="/">Бежевый <span class="main-menu-link__count">291</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Белый <span class="main-menu-link__count">18</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Выбеленный <span class="main-menu-link__count">256</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Желтый <span class="main-menu-link__count">4</span></a>
                            </li>

                            <li>
                                <a class="main-menu-link" data-id="step4-cat" href="/">Бежевый <span class="main-menu-link__count">291</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Белый <span class="main-menu-link__count">18</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Выбеленный <span class="main-menu-link__count">256</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Желтый <span class="main-menu-link__count">4</span></a>
                            </li>

                            <li>
                                <a class="main-menu-link" data-id="step4-cat" href="/">Бежевый <span class="main-menu-link__count">291</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Белый <span class="main-menu-link__count">18</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Выбеленный <span class="main-menu-link__count">256</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Желтый <span class="main-menu-link__count">4</span></a>
                            </li>

                            <li>
                                <a class="main-menu-link" data-id="step4-cat" href="/">Бежевый <span class="main-menu-link__count">291</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Белый <span class="main-menu-link__count">18</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Выбеленный <span class="main-menu-link__count">256</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Желтый <span class="main-menu-link__count">4</span></a>
                            </li>

                            <li>
                                <a class="main-menu-link" data-id="step4-cat" href="/">Бежевый <span class="main-menu-link__count">291</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Белый <span class="main-menu-link__count">18</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Выбеленный <span class="main-menu-link__count">256</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Желтый <span class="main-menu-link__count">4</span></a>
                            </li>

                        </ul>
                    </div>

                    <div class="main-menu-content__step step4">
                        <ul class="main-menu-list" data-id="step4-cat">

                            <li>
                                <a class="main-menu-link" href="/">Бежевый <span class="main-menu-link__count">291</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Белый <span class="main-menu-link__count">18</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Выбеленный <span class="main-menu-link__count">256</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Желтый <span class="main-menu-link__count">4</span></a>
                            </li>

                            <li>
                                <a class="main-menu-link" href="/">Бежевый <span class="main-menu-link__count">291</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Белый <span class="main-menu-link__count">18</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Выбеленный <span class="main-menu-link__count">256</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Желтый <span class="main-menu-link__count">4</span></a>
                            </li>

                            <li>
                                <a class="main-menu-link" href="/">Бежевый <span class="main-menu-link__count">291</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Белый <span class="main-menu-link__count">18</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Выбеленный <span class="main-menu-link__count">256</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Желтый <span class="main-menu-link__count">4</span></a>
                            </li>

                            <li>
                                <a class="main-menu-link" href="/">Бежевый <span class="main-menu-link__count">291</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Белый <span class="main-menu-link__count">18</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Выбеленный <span class="main-menu-link__count">256</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Желтый <span class="main-menu-link__count">4</span></a>
                            </li>

                            <li>
                                <a class="main-menu-link" href="/">Бежевый <span class="main-menu-link__count">291</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Белый <span class="main-menu-link__count">18</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Выбеленный <span class="main-menu-link__count">256</span></a>
                            </li>
                            <li>
                                <a class="main-menu-link" href="/">Желтый <span class="main-menu-link__count">4</span></a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="mobile-menu">
            <div class="main-menu-fade js-close-mobile-menu"></div>
            <div class="mobile-menu-content">
                <ul class="mobile-menu-list-head">
                    <li>
                        <a href="#" class="js-menu-btn">
                            <img alt="" src="./img/ico/burger.svg">
                            Каталог
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img alt="" src="./img/ico/actions.svg">
                            Акции
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img alt="" class="svg fill-red" src="./img/ico/sale.svg">
                            Распродажа
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img alt="" src="./img/ico/receipt-tax-orange.svg">
                            Уцененные товары
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu-list">
                    <li>
                        <a href="/">Доставка</a>
                    </li>
                    <li class="has-child">
                        <a href="#">Компания</a>

                        <ul class="mobile-menu-list__sub">
                            <li>
                                <a href="/">О компании</a>
                            </li>
                            <li>
                                <a href="/">Документы</a>
                            </li>
                            <li>
                                <a href="/">Блог</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#">Помощь</a>

                        <ul class="mobile-menu-list__sub">
                            <li>
                                <a href="/">Оплата</a>
                            </li>
                            <li>
                                <a href="/">Обмен и возврат</a>
                            </li>
                            <li>
                                <a href="/">Гарантия</a>
                            </li>
                            <li>
                                <a href="/">Поддержка</a>
                            </li>
                            <li>
                                <a href="/">Вопросы</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="/">Контакты</a>
                    </li>
                </ul>

                <ul class="mobile-menu-list">
                    <li>
                        <a class="header-place-btn js-open-modal" href="#modal-city-full">
                            <img alt="" class="header-place-btn__ico svg" src="./img/ico/place.svg">
                            <div class="header-place-btn__text">Санкт-Петербург</div>
                        </a>
                    </li>
                    <li>
                        <a class="header-menu-phone" href="tel:+78007774031">+7 (800-77) 7-40-31</a>
                    </li>
                    <li>
                        <div class="header-soc">
                            <a aria-label="Telegram" class="header-soc__itm" href="https://t.me/+7000000" target="_blank">
                                <svg class="svg replaced-svg" fill="none" height="32" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.27614 15.0433C9.14654 14.0131 11.2344 13.1532 13.1852 12.2889C16.5413 10.8733 19.9108 9.48223 23.3143 8.18717C23.9765 7.96651 25.1663 7.75075 25.2829 8.73205C25.219 10.1211 24.9562 11.502 24.776 12.883C24.3185 15.9198 23.7897 18.9462 23.274 21.973C23.0963 22.9812 21.8333 23.5031 21.0252 22.8579C19.0831 21.5461 17.126 20.247 15.2087 18.9047C14.5806 18.2665 15.163 17.35 15.7239 16.8943C17.3235 15.3179 19.0199 13.9786 20.5359 12.3207C20.9449 11.3332 19.7366 12.1654 19.338 12.4205C17.1482 13.9295 15.0119 15.5307 12.7031 16.857C11.5238 17.5062 10.1492 16.9514 8.97043 16.5892C7.91351 16.1515 6.3647 15.7107 7.27603 15.0434L7.27614 15.0433Z" fill="white"></path>
                                </svg>
                            </a>
                            <a aria-label="WhatsUp" class="header-soc__itm" href="https://api.whatsapp.com/send?phone=7900000" target="_blank">
                                <svg class="svg replaced-svg" fill="none" height="32" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M15.5941 25.035H15.5901C13.9978 25.0345 12.4332 24.635 11.0436 23.877L6 25.2L7.34974 20.2699C6.51716 18.827 6.07905 17.1903 6.07977 15.5135C6.08185 10.2678 10.3499 6 15.594 6C18.1391 6.0011 20.5279 6.99191 22.3241 8.79027C24.1204 10.5885 25.1091 12.9789 25.1081 15.521C25.106 20.7655 20.8397 25.0329 15.5941 25.035ZM11.2772 22.1546L11.566 22.326C12.7801 23.0464 14.1718 23.4277 15.5908 23.4282H15.594C19.9525 23.4282 23.4999 19.8808 23.5017 15.5205C23.5025 13.4075 22.6807 11.4207 21.1878 9.92599C19.6948 8.43126 17.7093 7.60769 15.5971 7.60695C11.2353 7.60695 7.68783 11.1541 7.6861 15.514C7.68548 17.0082 8.10356 18.4634 8.89514 19.7224L9.08316 20.0216L8.2843 22.9397L11.2772 22.1546ZM20.0616 17.5694C20.2274 17.6495 20.3394 17.7036 20.3872 17.7834C20.4466 17.8825 20.4466 18.3585 20.2486 18.9139C20.0504 19.4692 19.1007 19.976 18.6439 20.0442C18.2344 20.1055 17.7161 20.131 17.1467 19.95C16.8014 19.8405 16.3586 19.6942 15.7914 19.4493C13.5628 18.4869 12.0567 16.3269 11.7721 15.9187C11.7521 15.8901 11.7382 15.8701 11.7304 15.8597L11.7285 15.8571C11.6027 15.6893 10.7597 14.5646 10.7597 13.4005C10.7597 12.3055 11.2976 11.7315 11.5452 11.4673C11.5621 11.4492 11.5777 11.4326 11.5917 11.4173C11.8096 11.1793 12.0672 11.1198 12.2256 11.1198C12.3841 11.1198 12.5428 11.1213 12.6813 11.1283C12.6984 11.1291 12.7161 11.129 12.7345 11.1289C12.8731 11.1281 13.0458 11.1271 13.2161 11.5363C13.2817 11.6938 13.3776 11.9273 13.4787 12.1736C13.6833 12.6716 13.9093 13.2218 13.9491 13.3015C14.0085 13.4205 14.0481 13.5592 13.9689 13.718C13.957 13.7418 13.946 13.7642 13.9355 13.7857C13.876 13.9072 13.8322 13.9966 13.7312 14.1145C13.6915 14.1609 13.6504 14.2109 13.6094 14.2609C13.5276 14.3605 13.4458 14.4601 13.3746 14.531C13.2556 14.6496 13.1317 14.7782 13.2704 15.0162C13.409 15.2542 13.8861 16.0326 14.5929 16.663C15.3525 17.3406 16.0128 17.627 16.3475 17.7722C16.4128 17.8005 16.4658 17.8235 16.5046 17.8429C16.7422 17.9619 16.8809 17.942 17.0196 17.7834C17.1583 17.6248 17.6139 17.0892 17.7723 16.8513C17.9308 16.6134 18.0893 16.653 18.3072 16.7323C18.5251 16.8117 19.6939 17.3867 19.9316 17.5057C19.978 17.529 20.0214 17.5499 20.0616 17.5694Z" fill="white" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>



        @yield('content')

        <!--footer begin-->
        <footer class="footer">
            <div class="content">
                <div class="footer-grid">

                    <div class="footer-col">
                        <h5 class="footer-col__title">Быстрая доставка</h5>
                        <ul>
                            <li>
                                <a class="footer-list-itm" href="/">Каталог</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Услуги</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Доставка и самовывоз</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Возврат товара</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Поддержка</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Вопросы</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h5 class="footer-col__title">Компания</h5>
                        <ul>
                            <li>
                                <a class="footer-list-itm" href="/">О нас</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Контакты</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Техинфо</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Документы</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Блог</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h5 class="footer-col__title">Товары</h5>
                        <ul>
                            <li>
                                <a class="footer-list-itm" href="/">Акции и распродажи</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Новинки</a>
                            </li>
                            <li>
                                <a class="footer-list-itm" href="/">Популярные товары</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h5 class="footer-col__title">Соцсети</h5>
                        <ul class="footer-soc">
                            <li>
                                <a href="/" target="_blank">
                                    <img alt="" class="svg" src="./img/ico/soc/Youtube.svg">
                                </a>
                            </li>
                            <li>
                                <a href="/" target="_blank">
                                    <img alt="" class="svg" src="./img/ico/soc/VK.svg">
                                </a>
                            </li>
                            <li>
                                <a href="/" target="_blank">
                                    <img alt="" class="svg" src="./img/ico/soc/dzen.svg">
                                </a>
                            </li>
                        </ul>

                        <h5 class="footer-col__title">Всегда на связи</h5>
                        <ul class="footer-soc">
                            <li>
                                <a href="/" target="_blank">
                                    <img alt="" class="svg" src="./img/ico/soc/tel.svg">
                                </a>
                            </li>
                            <li>
                                <a href="/" target="_blank">
                                    <img alt="" class="svg" src="./img/ico/soc/whatsup.svg">
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </footer>

        <div class="modal" id="modal-city">
            <div class="modal-fade js-close-modal"></div>
            <div class="modal-content">
                <div class="modal-city-title">
                    Ваше местоположение <b>Санкт-Петербург?</b>
                </div>
                <div class="modal-city-btns">
                    <a class="btn btn--line js-open-modal js-close-modal" href="#modal-city-full">Нет, изменить</a>
                    <div class="btn js-close-modal">Да, спасибо</div>
                </div>
            </div>
        </div>

        <div class="modal modal--small" id="modal-callback">
            <div class="modal-fade js-close-modal"></div>
            <div class="modal-content">
                <div class="modal-close js-close-modal">
                    <div class="cross"></div>
                </div>
                <form action="" class="js-form-validate">
                    <label class="input required">
                        <span class="input-field">
                            <input placeholder=" " type="text" value="" name="width">
                            <span class="input-label">Имя</span>
                        </span>
                        <div class="input-hint" style="	"></div>

                    </label>

                    <label class="input required">
                        <span class="input-field">
                            <input placeholder=" " type="tel" value="" name="width">
                            <span class="input-label">Ваш номер для связи</span>
                        </span>
                        <div class="input-hint" style="	"></div>

                    </label>

                    <div class="help-support__policy required">
                        <input class="js-checkbox required" placeholder="Нажимая кнопку, я даю согласие на обработку персональных данных, в&nbsp;соответствии с Политикой конфиденциальности." type="checkbox">
                    </div>

                    <button class="btn w100 js-form-validate-btn">Оставить заявку</button>
                </form>
            </div>
        </div>

        <div class="modal" id="modal-city-full">
            <div class="modal-fade js-close-modal"></div>
            <div class="modal-content">
                <div class="modal-close js-close-modal">
                    <div class="cross"></div>
                </div>

                <p class="h2">Выберите город</p>
                <input type="text" name="search-city" class="search-city js-city-search" placeholder="Ваш город...">

                <ul class="modal-city-list">
                    <li>
                        <a href="">Санкт-Петербург</a>
                    </li>
                    <li>
                        <a href="">Москва, МО</a>
                    </li>
                    <li>
                        <a href="">Архангельск</a>
                    </li>
                    <li>
                        <a href="">Барнаул</a>
                    </li>
                    <li>
                        <a href="">Белгород</a>
                    </li>
                    <li>
                        <a href="">Владивосток</a>
                    </li>
                    <li>
                        <a href="">Владикавказ</a>
                    </li>
                    <li>
                        <a href="">Волгоград</a>
                    </li>
                    <li>
                        <a href="">Воронеж</a>
                    </li>
                    <li>
                        <a href="">Екатеринбург</a>
                    </li>
                    <li>
                        <a href="">Иваново</a>
                    </li>
                    <li>
                        <a href="">Ижевск</a>
                    </li>
                    <li>
                        <a href="">Иркутск</a>
                    </li>
                    <li>
                        <a href="">Казань</a>
                    </li>
                    <li>
                        <a href="">Калининград</a>
                    </li>
                    <li>
                        <a href="">Калуга</a>
                    </li>
                    <li>
                        <a href="">Кемерово</a>
                    </li>
                    <li>
                        <a href="">Киров</a>
                    </li>
                    <li>
                        <a href="">Клин</a>
                    </li>
                    <li>
                        <a href="">Кострома</a>
                    </li>
                    <li>
                        <a href="">Краснодар</a>
                    </li>
                    <li>
                        <a href="">Красноярск</a>
                    </li>
                    <li>
                        <a href="">Курск</a>
                    </li>
                    <li>
                        <a href="">Липецк</a>
                    </li>
                    <li>
                        <a href="">Набережные Челны</a>
                    </li>
                    <li>
                        <a href="">Наро-Фоминск</a>
                    </li>
                    <li>
                        <a href="">Нижний Новогород</a>
                    </li>
                    <li>
                        <a href="">Новокузнецк</a>
                    </li>
                    <li>
                        <a href="">Новороссийск</a>
                    </li>
                    <li>
                        <a href="">Новосибирск</a>
                    </li>
                    <li>
                        <a href="">Омск</a>
                    </li>
                    <li>
                        <a href="">Оренбург</a>
                    </li>
                    <li>
                        <a href="">Пенза</a>
                    </li>
                    <li>
                        <a href="">Пермь</a>
                    </li>
                    <li>
                        <a href="">Петрозаводск</a>
                    </li>
                    <li>
                        <a href="">Псков</a>
                    </li>
                    <li>
                        <a href="">Ростов-на-Дону</a>
                    </li>
                    <li>
                        <a href="">Рязань</a>
                    </li>
                    <li>
                        <a href="">Самара</a>
                    </li>
                    <li>
                        <a href="">Саранск</a>
                    </li>
                    <li>
                        <a href="">Саратов</a>
                    </li>
                    <li>
                        <a href="">Смоленск</a>
                    </li>
                    <li>
                        <a href="">Ставрополь</a>
                    </li>
                    <li>
                        <a href="">Сургут</a>
                    </li>
                    <li>
                        <a href="">Тверь</a>
                    </li>
                    <li>
                        <a href="">Тольятти</a>
                    </li>
                    <li>
                        <a href="">Тула</a>
                    </li>
                    <li>
                        <a href="">Тюмень</a>
                    </li>
                    <li>
                        <a href="">Ульяновск</a>
                    </li>
                    <li>
                        <a href="">Уфа</a>
                    </li>
                    <li>
                        <a href="">Хабаровск</a>
                    </li>
                    <li>
                        <a href="">Челябинск</a>
                    </li>
                    <li>
                        <a href="">Череповец</a>
                    </li>
                    <li>
                        <a href="">Ярославль</a>
                    </li>
                </ul>

            </div>
        </div>

    </div>

    <script src="/js/lib.js" type="text/javascript"></script>
    <script src="/js/all.js?v=0.1" type="text/javascript"></script>

</body>

</html>