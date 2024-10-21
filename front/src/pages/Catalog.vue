<template>

<!-- <button type="button" @click="console.log($store.state.cart_items_count)">aboba</button> -->
        <div class="main-menu">
            <div class="main-menu-fade js-close-main-menu"></div>
            <div class="content">

                <div class="main-menu-head">
                    <div class="main-menu-head__back">
                        <img src="../img/ico/arrow.svg" alt="">
                    </div>
                    <div class="main-menu-head__title" >Каталог товаров</div>

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
                            <img alt="" src="../img/ico/burger.svg">
                            Каталог
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img alt="" src="../img/ico/actions.svg">
                            Акции
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img alt="" class="svg fill-red" src="../img/ico/sale.svg">
                            Распродажа
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img alt="" src="../img/ico/receipt-tax-orange.svg">
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
                            <img alt="" class="header-place-btn__ico svg" src="../img/ico/place.svg">
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

        <div class="main">

            <div class="content">
                <ul class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/">Каталог</a></li>
                    <li><span >Ламинат</span></li>
                </ul>

                <a href="/" class="breadcrumb-back">
                    <img src="../img/ico/arrow.svg" alt="" class="svg">
                </a>

                <h1 @click="number++; console.log(number)">Ламинат</h1>

                <div class="catalog js-view-parent" id="catalog-block">
                    <form class="catalog-filter">

                        <div class="catalog-filter-head">
                            <img alt="" class="svg" src="../img/ico/filter.svg">
                            <div class="catalog-filter-head__title h4">Фильтры</div>
                        </div>

                        <div id='filter_category_upper' class="catalog-filter-accordion js-accordion">
                            <div class="catalog-filter-accordion__head js-accordion-head">
                                <div class="catalog-filter-accordion__head__name">Категории</div>
                                <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                            </div>

                            <div id='filter_category_body' class="catalog-filter-accordion__body js-accordion-body">        
                                                   
                                <ul class="filter-list">
                                    <li v-for="category in categs">
                                    <li>
                                        <label class="filter-itm check_box">

                                            <input @click="updateFilter($event, 'category', category.slug)" type="checkbox" name="@@input-name" class="js-checkbox" :value="category" :checked="this.$route.query.category != null ? this.$route.query.category.split('-').includes(category.slug) : false">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__name">{{ category['title'] }}</span>
                                            <span class="filter-itm__count">{{ category['elements_count']}}</span>
                                        </label>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        

                        <price-filter @priceselect="priceselect" :pricelimits="pricelimits"></price-filter>

                        <div v-for="key in attr_list['attributes']">

                        <div :id="'filter_'+key['slug']+'_upper'" v-if="this.filterArr['category'] != null && this.filterArr['category'].length == 1 && key['type'] == 'string'"  class="catalog-filter-accordion js-accordion">
                            <div class="catalog-filter-accordion__head js-accordion-head">
                                <div class="catalog-filter-accordion__head__name">{{key['slug']}}</div>
                                    
                                <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg" v-if="key['type'] == 'string'">
                            </div>
                            <div :id="'filter_'+key['slug']+'_body'" class="catalog-filter-accordion__body js-accordion-body">
                                <ul class="filter-list">
                                    <li v-for="prop in key['values']" >
                                    <li>
                                        <label class="filter-itm check_box"  >
                                            <input type="checkbox" name="@@input-name" class="js-checkbox" @click="updateFilter($event, `attribute[${key['slug']}]`, prop)" :originalprop="key['slug']" :propval="prop" :checked="this.$route.query[`attribute[${key['slug']}]`] != null ? this.$route.query[`attribute[${key['slug']}]`].split('-').includes(prop) : false">
                                            <span class="check_box__item"></span>

                                            

                                            <span class="filter-itm__name">{{ prop }}</span>
                                            <span class="filter-itm__count">3</span>
                                        </label>
                                    </li>
                                    </li>
                                      
                                </ul>
                            </div>
                        </div>

                        <div v-else-if="this.filterArr['category'] != null && this.filterArr['category'].length == 1" class="catalog-filter-accordion">
                            <div class="catalog-filter-accordion__head">
                                <div class="catalog-filter-accordion__head__name">{{key['slug']}}</div>
                                <label class="switcher"><input :checked="this.$route.query[`attribute[${key['slug']}]`] != null ? this.$route.query[`attribute[${key['slug']}]`] == 1 : false" @click="updateFilter($event, 'boolean', key['slug'])" class="js-checkbox-switcher" placeholder="" type="checkbox"><span class="switcher__text"></span><span class="switcher__item"></span></label>
                            </div>
                        </div>
                        </div>

                        <div class="catalog-filter-accordion">
                            <div class="catalog-filter-accordion__head">
                                <div class="catalog-filter-accordion__head__name">Влагостойкость</div>
                                <input class="js-checkbox-switcher" placeholder="" type="checkbox">
                            </div>
                        </div>

                        <div class="catalog-filter-accordion js-accordion">
                            <div class="catalog-filter-accordion__head js-accordion-head">
                                <div class="catalog-filter-accordion__head__name">Категории</div>
                                <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                            </div>

                            <div class="catalog-filter-accordion__body js-accordion-body">
                                <ul class="filter-list">
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__name">LVT</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__name">SPS</span>
                                            <span class="filter-itm__count">124</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__name">Ламинат</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__name">Линолеум</span>
                                            <span class="filter-itm__count">1</span>
                                        </label>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="catalog-filter-accordion js-accordion">
                            <div class="catalog-filter-accordion__head js-accordion-head">
                                <div class="catalog-filter-accordion__head__name">Стоимость</div>
                                <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                            </div>

                            <div class="catalog-filter-accordion__body js-accordion-body">
                                <div class="filter-itm__content">
                                    <div class="range-input-container">
                                        <div class="range-input-block">
                                            <input class="range-input before" type="text" value="1 300">
                                        </div>
                                        <div class="range-input-block">
                                            <input class="range-input after" type="text" value="220 000">
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                    <div class="range-select" data-max="220000" data-min="1300"></div>
                                </div>
                            </div>
                        </div>

                        <div class="catalog-filter-accordion js-accordion">
                            <div class="catalog-filter-accordion__head js-accordion-head">
                                <div class="catalog-filter-accordion__head__name">Цвета</div>
                                <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                            </div>

                            <div class="catalog-filter-accordion__body js-accordion-body">
                                <ul class="filter-list">
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__color">
                                                <img src="../img/color-icons/bej.svg" alt="" loading="lazy">
                                            </span>

                                            <span class="filter-itm__name">бежевый</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__color">
                                                <img src="../img/color-icons/black.svg" alt="" loading="lazy">
                                            </span>

                                            <span class="filter-itm__name">черный</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__color">
                                                <img src="../img/color-icons/blue.svg" alt="" loading="lazy">
                                            </span>

                                            <span class="filter-itm__name">синий</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__color">
                                                <img src="../img/color-icons/brown.svg" alt="" loading="lazy">
                                            </span>

                                            <span class="filter-itm__name">коричневый</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="catalog-filter-accordion">
                            <div class="catalog-filter-accordion__head">
                                <div class="catalog-filter-accordion__head__name">Влагостойкость</div>
                                <input class="js-checkbox-switcher" placeholder="" type="checkbox">
                            </div>
                        </div>

                        <div class="catalog-filter-accordion js-accordion">
                            <div class="catalog-filter-accordion__head js-accordion-head">
                                <div class="catalog-filter-accordion__head__name">Категории</div>
                                <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                            </div>

                            <div class="catalog-filter-accordion__body js-accordion-body">
                                <ul class="filter-list">
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__name">LVT</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__name">SPS</span>
                                            <span class="filter-itm__count">124</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__name">Ламинат</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__name">Линолеум</span>
                                            <span class="filter-itm__count">1</span>
                                        </label>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="catalog-filter-accordion js-accordion">
                            <div class="catalog-filter-accordion__head js-accordion-head">
                                <div class="catalog-filter-accordion__head__name">Стоимость</div>
                                <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                            </div>

                            <div class="catalog-filter-accordion__body js-accordion-body">
                                <div class="filter-itm__content">
                                    <div class="range-input-container">
                                        <div class="range-input-block">
                                            <input class="range-input before" type="text" value="1 300">
                                        </div>
                                        <div class="range-input-block">
                                            <input class="range-input after" type="text" value="220 000">
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                    <div class="range-select" data-max="220000" data-min="1300"></div>
                                </div>
                            </div>
                        </div>

                        <div class="catalog-filter-accordion js-accordion">
                            <div class="catalog-filter-accordion__head js-accordion-head">
                                <div class="catalog-filter-accordion__head__name">Цвета</div>
                                <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                            </div>

                            <div class="catalog-filter-accordion__body js-accordion-body">
                                <ul class="filter-list">
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__color">
                                                <img src="../img/color-icons/bej.svg" alt="" loading="lazy">
                                            </span>

                                            <span class="filter-itm__name">бежевый</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__color">
                                                <img src="../img/color-icons/black.svg" alt="" loading="lazy">
                                            </span>

                                            <span class="filter-itm__name">черный</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__color">
                                                <img src="../img/color-icons/blue.svg" alt="" loading="lazy">
                                            </span>

                                            <span class="filter-itm__name">синий</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                    <li>
                                    <li>
                                        <label class="filter-itm check_box">
                                            <input type="checkbox" name="@@input-name" class="js-checkbox">
                                            <span class="check_box__item"></span>

                                            <span class="filter-itm__color">
                                                <img src="../img/color-icons/brown.svg" alt="" loading="lazy">
                                            </span>

                                            <span class="filter-itm__name">коричневый</span>
                                            <span class="filter-itm__count">4</span>
                                        </label>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="catalog-filter-accordion">
                            <div class="catalog-filter-accordion__head">
                                <div class="catalog-filter-accordion__head__name">Влагостойкость</div>
                                <input class="js-checkbox-switcher" placeholder="" type="checkbox">
                            </div>
                        </div>

                        <div class="catalog-filter-foot">
                            <a class="catalog-filter-foot__btn js-open-modal btn" href="#modal-catalog-filter">Открыть все фильтры</a>
                            <input class="catalog-filter-foot__btn btn btn--line js-reset-form" type="reset" value="Сбросить все фильтры">
                        </div>

                    </form>
                    <div class="catalog-filter-main">

                        <div class="quick-filter">
                            <ul class="quick-filter-list">

                                <li>
                                    <a class="quick-filter-itm active" href="">
                                        <span>33 класс</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm active" href="">
                                        <span>под бетон</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>под дерево</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>под мрамор</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>коричневый</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>бежевый</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>32 класс</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>толщина 7 мм</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>

                                <li>
                                    <a class="quick-filter-itm active" href="">
                                        <span>33 класс</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm active" href="">
                                        <span>под бетон</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>под дерево</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>под мрамор</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>коричневый</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>бежевый</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>32 класс</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>толщина 7 мм</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>

                                <li>
                                    <a class="quick-filter-itm active" href="">
                                        <span>33 класс</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm active" href="">
                                        <span>под бетон</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>под дерево</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>под мрамор</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>коричневый</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>бежевый</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>32 класс</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>толщина 7 мм</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>

                                <li>
                                    <a class="quick-filter-itm active" href="">
                                        <span>33 класс</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm active" href="">
                                        <span>под бетон</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>под дерево</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>под мрамор</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>коричневый</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>бежевый</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>32 класс</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>толщина 7 мм</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>

                                <li>
                                    <a class="quick-filter-itm active" href="">
                                        <span>33 класс</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm active" href="">
                                        <span>под бетон</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>под дерево</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>под мрамор</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>коричневый</span><span class="quick-filter-itm__remove"><span class="cross"></span></span></a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>бежевый</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>32 класс</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="quick-filter-itm" href="">
                                        <span>толщина 7 мм</span><span class="quick-filter-itm__remove"><span class="cross"></span></span>
                                    </a>
                                </li>

                            </ul>

                            <button class="quick-filter-more-btn">
                                <span class="quick-filter-more-btn__more-text">Показать ещё</span> <span class="quick-filter-more-btn__less-text">Свернуть</span>
                                <img alt="" class="svg quick-filter-more-btn__ico" loading="lazy" src="../img/ico/caret-down.svg">
                            </button>
                        </div>

                        <div class="catalog-filter-info">
                            <a class="btn js-open-modal catalog-filter-info__mobile" href="#modal-catalog-filter">Фильтры</a>
                            <div class="catalog-filter-info__count">Найдено 836 товаров</div>
                            <div class="catalog-filter-info__action">
                                <select class="js-select">
                                    <option value="">Сначала недорогие</option>
                                    <option value="">Сначала дорогие</option>
                                    <option value="">Сначала популярные</option>
                                    <option value="">По скидке (%)</option>
                                    <option value="">Сначала с лучшей ценой</option>
                                </select>

                                <div class="catalog-filter-info__view">
                                    <a class="catalog-filter-info__btn js-change-catalog-view active" data-catalog-view="grid" href="">
                                        <img alt="" class="svg" src="../img/ico/grid.svg">
                                    </a>

                                    <a class="catalog-filter-info__btn js-change-catalog-view" data-catalog-view="list" href="">
                                        <img alt="" class="svg" src="../img/ico/list.svg">
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="catalog-filter-product">

                        <!-- PRODUCT LIST HERE -->

                        <product-card v-if="!loadingflag" v-for="product in products" :product="product" :test='number'></product-card>
                        <div v-else v-for="aboba in [1,2,3]" id="loading"></div>
                        </div>

                        <div class="catalog-filter-main-foot">
                            <div class="catalog-filter-main-foot__pagination">
                                <div class="pagination">
                                    <a class="pagination-arrow pagination-arrow--left" href="">
                                        <img alt="" class="svg" src="../img/ico/arrow.svg">
                                    </a>
                                    <a class="pagination-itm" href="">1</a>
                                    <a class="pagination-itm active" href="">2</a>
                                    <a class="pagination-itm" href="">3</a>
                                    <span class="pagination-sep">…</span>
                                    <a class="pagination-itm" href="">64</a>
                                    <a class="pagination-arrow" href="">
                                        <img alt="" class="svg" src="../img/ico/arrow.svg">
                                    </a>
                                </div>
                            </div>
                            <div class="catalog-filter-main-foot__action">
                                <button class="btn btn--line">Показать ещё</button>

                                <a class="arrow-top js-anchor" href="#catalog-block">
                                    <img alt="" class="svg" src="../img/ico/arrow.svg">
                                </a>
                            </div>
                        </div>

                        <div class="show-more-block often-block">
                            <div class="show-more-text">
                                <div class="show-more-text__content">
                                    <div class="catalog-desc">
                                        <h4 class="title-normal">Часто ищут</h4>
                                        <ul class="often-cols">

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                            <li>
                                                <a class="often-itm" href="/">Ламинат 12 мм</a>
                                            </li>
                                            <li>
                                                <a class="often-itm" href="/">Ламинат 33 класс с фаской</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="show-more-btn"><span class="text-more">Показать ещё</span><span class="text-lese">Закрыть</span></div>
                        </div>

                        <div class="brand-cart">
                            <div class="brand-cart-head">
                                <div class="brand-cart-head__img">
                                    <img alt="" class="" src="../img/tmp/FF-logo.svg">
                                </div>
                                <div class="brand-cart-head__text">
                                    <h5>О бренде</h5>
                                    <p>FineFloor — первый бренд кварц-виниловой плитки в России, который с 2008 года радует своих потребителей качественными напольными покрытиями. </p>
                                    <p>Продукция бренда производится в Европе, на бельгийских заводах International Vinil Company (Авельгем) и Beaulieu International Group (Меннен). Ассортимент соответствует всем современным техническим регламентам и нормам.</p>
                                </div>
                            </div>

                            <div class="brand-cart-info">

                                <div class="brand-cart-info__left">
                                    <div class="brand-cart-info-itm">
                                        <div class="brand-cart-info-itm__num">7</div>
                                        <div class="brand-cart-info-itm__desc">коллекций</div>
                                    </div>
                                    <div class="brand-cart-info-itm">
                                        <div class="brand-cart-info-itm__num">57</div>
                                        <div class="brand-cart-info-itm__desc">декоров</div>
                                    </div>
                                    <div class="brand-cart-info-itm">
                                        <div class="brand-cart-info-itm__num">147</div>
                                        <div class="brand-cart-info-itm__desc">

                                            <div class="tooltip">
                                                SKU
                                                <div class="tooltip__content">
                                                    Идентификационный код, ассоциируемый с конкретной единицей товара
                                                    <div class="tooltip__content__arrow"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="brand-cart-info__right">
                                    <div class="tooltip">
                                        <img alt="" class="brand-cart-info__flag" loading="lazy" src="../img/tmp/flar-be.svg">
                                        <div class="tooltip__content" style="width: 5.2rem">
                                            Флаг Бельгии
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="modal" id="modal-catalog-filter">
                <div class="modal-fade js-close-modal"></div>
                <form action="" class="modal-content modal-catalog-filter">
                    <div class="modal-catalog-filter__inner">

                        <div class="modal-catalog-filter__head">
                            <div class="modal-head-mobile">
                                <div class="modal-head-mobile__left"></div>
                                <div class="modal-head-mobile__title h3">Фильтры</div>
                                <div class="modal-head-mobile__close js-close-modal">
                                    <div class="cross"></div>
                                </div>
                            </div>

                            <div class="modal-catalog-filter__title h3">
                                <img alt="" class="svg" src="../img/ico/filter.svg">
                                <span>Все фильтры</span>
                            </div>

                            <label class="modal-facet-filter-search">
                                <input class="js-search-modal-filter" placeholder="Поиск по фильтрам" type="text">
                                <img alt="" class="svg modal-facet-filter-search-ico" src="../img/ico/search.svg">
                            </label>
                        </div>

                        <div class="modal-filter-list">

                            <div class="modal-filter-list__col">

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Категории</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <ul class="filter-list">
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">LVT</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">SPS</span>
                                                    <span class="filter-itm__count">124</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">Ламинат</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">Линолеум</span>
                                                    <span class="filter-itm__count">1</span>
                                                </label>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Стоимость</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <div class="filter-itm__content">
                                            <div class="range-input-container">
                                                <div class="range-input-block">
                                                    <input class="range-input before" type="text" value="1 300">
                                                </div>
                                                <div class="range-input-block">
                                                    <input class="range-input after" type="text" value="220 000">
                                                </div>
                                            </div>

                                            <div class="clear"></div>
                                            <div class="range-select" data-max="220000" data-min="1300"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Цвета</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <ul class="filter-list">
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/bej.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">бежевый</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/black.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">черный</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/blue.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">синий</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/brown.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">коричневый</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion">
                                    <div class="catalog-filter-accordion__head">
                                        <div class="catalog-filter-accordion__head__name">Влагостойкость</div>
                                        <input class="js-checkbox-switcher" placeholder="" type="checkbox">
                                    </div>
                                </div>
                            </div>

                            <div class="modal-filter-list__col">

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Категории</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <ul class="filter-list">
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">LVT</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">SPS</span>
                                                    <span class="filter-itm__count">124</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">Ламинат</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">Линолеум</span>
                                                    <span class="filter-itm__count">1</span>
                                                </label>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Стоимость</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <div class="filter-itm__content">
                                            <div class="range-input-container">
                                                <div class="range-input-block">
                                                    <input class="range-input before" type="text" value="1 300">
                                                </div>
                                                <div class="range-input-block">
                                                    <input class="range-input after" type="text" value="220 000">
                                                </div>
                                            </div>

                                            <div class="clear"></div>
                                            <div class="range-select" data-max="220000" data-min="1300"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Цвета</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <ul class="filter-list">
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/bej.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">бежевый</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/black.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">черный</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/blue.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">синий</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/brown.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">коричневый</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion">
                                    <div class="catalog-filter-accordion__head">
                                        <div class="catalog-filter-accordion__head__name">Влагостойкость</div>
                                        <input class="js-checkbox-switcher" placeholder="" type="checkbox">
                                    </div>
                                </div>
                            </div>

                            <div class="modal-filter-list__col">

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Категории</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <ul class="filter-list">
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">LVT</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">SPS</span>
                                                    <span class="filter-itm__count">124</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">Ламинат</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">Линолеум</span>
                                                    <span class="filter-itm__count">1</span>
                                                </label>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Стоимость</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <div class="filter-itm__content">
                                            <div class="range-input-container">
                                                <div class="range-input-block">
                                                    <input class="range-input before" type="text" value="1 300">
                                                </div>
                                                <div class="range-input-block">
                                                    <input class="range-input after" type="text" value="220 000">
                                                </div>
                                            </div>

                                            <div class="clear"></div>
                                            <div class="range-select" data-max="220000" data-min="1300"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Цвета</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <ul class="filter-list">
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/bej.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">бежевый</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/black.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">черный</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/blue.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">синий</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/brown.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">коричневый</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion">
                                    <div class="catalog-filter-accordion__head">
                                        <div class="catalog-filter-accordion__head__name">Влагостойкость</div>
                                        <input class="js-checkbox-switcher" placeholder="" type="checkbox">
                                    </div>
                                </div>
                            </div>

                            <div class="modal-filter-list__col">

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Категории</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <ul class="filter-list">
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">LVT</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">SPS</span>
                                                    <span class="filter-itm__count">124</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">Ламинат</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__name">Линолеум</span>
                                                    <span class="filter-itm__count">1</span>
                                                </label>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Стоимость</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <div class="filter-itm__content">
                                            <div class="range-input-container">
                                                <div class="range-input-block">
                                                    <input class="range-input before" type="text" value="1 300">
                                                </div>
                                                <div class="range-input-block">
                                                    <input class="range-input after" type="text" value="220 000">
                                                </div>
                                            </div>

                                            <div class="clear"></div>
                                            <div class="range-select" data-max="220000" data-min="1300"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion js-accordion">
                                    <div class="catalog-filter-accordion__head js-accordion-head">
                                        <div class="catalog-filter-accordion__head__name">Цвета</div>
                                        <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../img/ico/caret-down.svg">
                                    </div>

                                    <div class="catalog-filter-accordion__body js-accordion-body">
                                        <ul class="filter-list">
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/bej.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">бежевый</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/black.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">черный</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/blue.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">синий</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                            <li>
                                            <li>
                                                <label class="filter-itm check_box">
                                                    <input type="checkbox" name="@@input-name" class="js-checkbox">
                                                    <span class="check_box__item"></span>

                                                    <span class="filter-itm__color">
                                                        <img src="../img/color-icons/brown.svg" alt="" loading="lazy">
                                                    </span>

                                                    <span class="filter-itm__name">коричневый</span>
                                                    <span class="filter-itm__count">4</span>
                                                </label>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="catalog-filter-accordion">
                                    <div class="catalog-filter-accordion__head">
                                        <div class="catalog-filter-accordion__head__name">Влагостойкость</div>
                                        <input class="js-checkbox-switcher" placeholder="" type="checkbox">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <ul class="modal-filter-current">
                        <li>
                            <a class="modal-filter-current-itm" href="">LVT <span class="cross"></span></a>
                        </li>
                        <li>
                            <a class="modal-filter-current-itm" href="">SPC <span class="cross"></span></a>
                        </li>
                        <li>
                            <a class="modal-filter-current-itm" href="">Ламинат <span class="cross"></span></a>
                        </li>
                        <li>
                            <a class="modal-filter-current-itm" href="">FineFloor <span class="cross"></span></a>
                        </li>
                        <li>
                            <a class="modal-filter-current-itm" href="">Красно-бордовый <span class="cross"></span></a>
                        </li>
                        <li>
                            <a class="modal-filter-current-itm" href="">Синезеленый <span class="cross"></span></a>
                        </li>
                        <li>
                            <a class="modal-filter-current-reset" href="">Сбросить фильтры</a>
                        </li>
                    </ul>

                    <div class="modal-filter-foot">
                        <a class="btn btn--line" href="">Сбросить</a>
                        <a class="btn js-close-modal" href="#">Показать 657 товаров</a>
                    </div>
                </form>
            </div>

            <div class="fly-btn">

                <a href="/" class="fly-btn-itm">
                    <img src="../img/ico/actions.svg" alt="" class="fly-btn-itm__ico">
                    <span class="fly-btn-itm__text">Акция</span>
                </a>

                <a href="/" class="fly-btn-itm fly-btn-itm--sale">
                    <img src="../img/ico/sale.svg" alt="" class="fly-btn-itm__ico">
                    <span class="fly-btn-itm__text">Распродажа</span>
                </a>

                <a href="/" class="fly-btn-itm fly-btn-itm--discount">
                    <img src="../img/ico/receipt-tax.svg" alt="" class="fly-btn-itm__ico">
                    <span class="fly-btn-itm__text">Уцененные товары</span>
                </a>

            </div>

        </div>
</template>

<script>
import axios from "axios";
import { toRaw } from "vue";
import ProductCard from "@/components/ProductCard";
import PriceFilter from "@/components/ui/PriceFilter";

export default {

    components: {
        ProductCard, PriceFilter
    },

    data() {
        return {


            maxprice: 0,
            minprice: 1000000,
            pricelimits: [],

            pricefilter: this.$route.query.price !== null ? this.$route.query.price : '',

            products: [],
            categs: [],
            prod_counter: [],
            filterstring: '',
            filterArr: [],
            loadingflag: false,

            pricefilterrerender: 0,

            attr_list: [],

            number: 0
        }
    },

    methods: {
        calcpricelimits(data) {

            var limits = [10000000, 0]
            this.products.forEach((aboba) => {
                aboba.variants.forEach((variant) => {
                    limits[0] = Math.min(variant.price, limits[0])
                    limits[1] = Math.max(variant.price, limits[1])
                })
            })
            this.pricelimits = limits
        },

        async fetchData() {
            this.loadingflag = true
            var params = ''
           
                for(let i of Object.keys(this.filterArr)) {
                    
                    params += `${i}=${this.filterArr[i].join('-')}&`
                }
                
            try {         
                
                const response = await axios.get(`http://localhost:8000/api/products?${[params]}`, { params: {
                    
                    //...(this.filterArr['price'] != undefined && {price: this.filterArr['price'].join('-')}),
                    //...(this.filterArr['category'] != undefined && {category: this.filterArr['category'].join('-')})
                }})
                response.data.forEach((el) => {
                    el['inBasketInfo'] = []
                })
                this.products = response.data
                
            } catch(err) {
                alert(err)
            } finally {
                this.calcpricelimits()
                this.loadingflag = false
                
            }
        },
        checkBasketPresence() {
            const basket = JSON.parse(localStorage.getItem('basket')).products_payload

            this.products.forEach((prod, index) => {

                const basketInfoAcc = []
                const prodVariantsIds = prod.variants.map(i => i['id'])

                basket.forEach((el) => {
                    if(prodVariantsIds.includes(el.product_id)) {
                        basketInfoAcc.push({'quantity': el.quantity, 'variant_id': el.product_id})
                    }
                })

            
                
                if(basketInfoAcc.length > 0) {
                    this.products[index]['inBasketInfo'] = basketInfoAcc
                }
            })

            console.log(this.products)
            
        },
        async fetchCats() {

            try {               
                const response = await axios.get('http://localhost:8000/api/categories', { params: {

                }})

                var cat_ids = []
                response.data.forEach((iter) => {
                    cat_ids.push(iter.id)
                })
                cat_ids = cat_ids.join('-')

                const prod_counter = await axios.get('http://localhost:8000/api/products_in_cat_count/' + cat_ids, { params: {
                    
                }})

                this.prod_counter = prod_counter.data
                this.categs = response.data
            } catch(err) {
                alert(err)
            } finally {

            }

            this.categs.forEach((iter, index, array) => array[index]['elements_count'] = this.prod_counter[index] )
            
        },
        updateFilter(event, type, slug) {
                
                //boolean filter handler
                if(type == 'boolean') {
                    
                    if(this.filterArr[`attribute[${slug}]`] == undefined) {
                        this.filterArr[`attribute[${slug}]`] = [1]
                        this.$router.push({path: this.$route.fullPath, query: {...this.$route.query, [`attribute[${slug}]`]: [1] }});
                    } else {
                        console.log(1)

                        delete this.filterArr[slug]

                        const query = Object.assign({}, this.$route.query);
                        delete query[`attribute[${slug}]`]
                        this.$router.replace({ query });  
                        
                    }

                    setTimeout(() => {
                        this.checkFilterParams(),
                        this.fetchData()
                    }, 0);

                    return    
                }
                
                //create array property if its null
                if(this.filterArr[type.split('-')[0]] == null) {
                    this.filterArr[type.split('-')[0]] = []
                }
                //delete array element if its already in array, else add it
                if(this.filterArr[type.split('-')[0]].includes(slug)) {
                   
                    var index = this.filterArr[type.split('-')[0]].indexOf(slug);
                    this.filterArr[type.split('-')[0]].splice(index, 1);
                    this.$router.push({path: this.$route.fullPath, query: {...this.$route.query, [type.split('-')[0]]: this.filterArr[type.split('-')[0]].join('-')} });
                    
                    //if we deleted last element, we should delete its slug from query string at all
                    if(this.filterArr[type.split('-')[0]].length == 0) {
                        
                        

                        delete this.filterArr[type.split('-')[0]]

                        const query = Object.assign({}, this.$route.query);
                        delete query[type.split('-')[0]]
                        this.$router.replace({ query }); 
                         
                    }
                    
                } else {
                    
                    this.filterArr[type.split('-')[0]].push(slug)
                    this.$router.push({path: this.$route.fullPath, query: {...this.$route.query, [type.split('-')[0]]: this.filterArr[type.split('-')[0]].join('-')} });
                    
                    
                }

                this.loadingflag = true

                //fetch attrs if category filter specified
                if(this.filterArr['category'] !== null) {
                    this.get_cat_attrs()
                    
                }
                
               
               
                
                
                //костыль ебаный чтобы обсервить изменения в filterArr, ибо vue через вотчера не может видеть добавление/удаление новых свойств объекта
                this.filterstring += '1'

                setTimeout(() => {
                    this.checkFilterParams(),
                    this.fetchData()
                }, 0);
               
        },


        //checks representativeness of attributes in query string
        checkFilterParams() {

                    
                
                    var parameters = ['category', 'price', 'brand']
                    var attr_list_simple = []

                    if(this.attr_list['attributes'] != undefined && Object.keys(this.attr_list['attributes']).length > 0) {
                        
                        attr_list_simple = this.attr_list['attributes'].map((i) => i['slug'])

                    }
                    
                    

                    for(let i of Object.keys(this.$route.query)) {
                        if(i.includes('attribute')) {
                            if(!attr_list_simple.includes(i.replace(/attribute|\[|\]/g, ''))) {
                                delete this.filterArr[i]

                                const query = Object.assign({}, this.$route.query);
                                delete query[i]
                                this.$router.replace({ query });  
                            }
                        }
                    }

                    
                    // if(Object.keys(this.attr_list).length > 0) {
                        
                    //     for(let i of this.attr_list['attributes']) {
                    //         attr_list_simple.push(i['slug'])
                    //     }
                    // }
                    // parameters = parameters.concat(attr_list_simple)
                    // for(let i of Object.keys(this.$route.query)) {
                    //     if(!parameters.includes(i)) {
                            
                    //         delete this.filterArr[i]
                            
                    //         const query = Object.assign({}, this.$route.query);
                            
                    //         delete query[i]
                                                      
                    //         this.$router.replace({ query });  
                            
                             
                    //     }
                    // }
                
            
        },

        priceselect(data) {
            
            this.filterArr['price'] = data
            
            this.$router.push({path: this.$route.fullPath, query: {...this.$route.query, price: this.filterArr['price'].join('-')} });

            this.fetchData()

        },
        form_filterstring() {
            
            if(this.$route.query != null) {
            
                for(let attrtype of Object.keys(this.$route.query)) {

                    this.filterArr[attrtype] = this.$route.query[attrtype].split('-')
                    
                    
                    
                }
                    
                
            }
            
        },
        async get_cat_attrs() {
            

           
            if(this.filterArr['category'] == undefined || this.filterArr['category'].length > 1) {

                this.attr_list = []

                setTimeout(() => {
                    this.addActiveClasses(),
                    this.checkFilterParams()
                }, 0)

                return
            }
            
            try {               
                const response = await axios.get(`http://localhost:8000/api/cat_attributes/${this.filterArr['category'][0]}`, { params: {
                    
                }})
                this.attr_list = response.data
                
            } catch(err) {
                alert(err)
            } finally {
                this.scripts_shit(),
                setTimeout(() => {
                    this.addActiveClasses()         
                }, 0),
                this.checkFilterParams()
            }   
        },
        scripts_shit() {
            // const scripts = document.getElementsByTagName('script')
            // scripts[3].remove()
            // scripts[2].remove()

            let aboba = document.createElement('script')
            aboba.setAttribute('src', '/js/lib.js')
            aboba.setAttribute('type', 'text/javascript')
            document.body.appendChild(aboba)

            
            // let aboba1 = document.createElement('script')
            // aboba1.setAttribute('src', '/js/all.js')
            // aboba1.setAttribute('type', 'text/javascript')
            // document.body.appendChild(aboba1)

            // console.log(scripts[0])
            
        },
        updateDynamicFilter(event) {
            console.log(event.currentTarget.getAttribute('originalprop'))
        },

        addActiveClasses() {
            for(let param of Object.keys(this.$route.query)) {
                param = param.replace(/attribute|\[|\]/g, '')
                
                if (document.getElementById('filter_'+param+'_upper') != null && document.getElementById('filter_'+param+'_body') != null) { 
                    document.getElementById('filter_'+param+'_upper').classList.add('active')
                    document.getElementById('filter_'+param+'_body').setAttribute('style', 'display:block')
                }
            }
        },

        
        check() {
           this.checkFilterParams()
        },
        checkbox(event) {
            console.log(event.target.checked)
        }
    }, 
    async mounted() {
        this.form_filterstring(),

        await Promise.all([this.fetchData(), this.fetchCats(), this.get_cat_attrs()])
        this.checkBasketPresence()
    },
    watch: {
        filterstring() {
            
        }
    }

} 
</script>

<style>
#loading {
    background-color: rgb(231, 229, 229);
    box-sizing: border-box;
    width: 100%;
    height: 200px;
    text-align: center;
}

</style>