<template>
    <div>


<div v-if="isLoading" class="loading"></div>
<div class="main" v-else>

    <div class="content">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/">Каталог</a></li>
            <li><span>Ламинат</span></li>
        </ul>

        <a href="/" class="breadcrumb-back">
            <img src="../img/ico/arrow.svg" alt="" class="svg">
        </a>

        <div class="catalog-main section-small-margin">
            <div class="catalog-main__left">
                <div class="catalog-slider">
                    <div class="catalog-slider__preview">

                        <div class="catalog-slider__preview__img" data-image-detail="../img/tmp/banner-bg.jpg">
                            <picture>
                                <!--	Картинка для мобилы в более высоком разрешении -->
                                <source media="all and (max-width: 900px)" srcset="../img/tmp/banner-bg.jpg">
                                <!--	Картинка для ltcrnjgf (превью) в более высоком разрешении -->
                                <img alt="" class="" loading="lazy" src="../img/tmp/banner-bg.jpg">
                            </picture>
                        </div>
                        <div class="catalog-slider__preview__img" data-image-detail="../img/tmp/blog.jpg">
                            <img alt="" class="" loading="lazy" src="../img/tmp/blog.jpg">
                        </div>
                        <div class="catalog-slider__preview__img" data-image-detail="../img/tmp/cat.jpg">
                            <img alt="" class="" loading="lazy" src="../img/tmp/cat.jpg">
                        </div>
                        <div class="catalog-slider__preview__img" data-image-detail="../img/tmp/product.jpg">
                            <img alt="" class="" loading="lazy" src="../img/tmp/product.jpg">
                        </div>
                        <div class="catalog-slider__preview__img" data-image-detail="../img/tmp/banner-bg.jpg">
                            <img alt="" class="" loading="lazy" src="../img/tmp/banner-bg.jpg">
                        </div>
                        <div class="catalog-slider__preview__img" data-image-detail="../img/tmp/blog.jpg">
                            <img alt="" class="" loading="lazy" src="../img/tmp/blog.jpg">
                        </div>
                        <div class="catalog-slider__preview__img" data-image-detail="../img/tmp/cat.jpg">
                            <img alt="" class="" loading="lazy" src="../img/tmp/cat.jpg">
                        </div>

                    </div>
                    <div class="catalog-slider__img">
                        <img class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                    </div>
                </div>
            </div>
            <div class="catalog-info">
                <div class="catalog-info-head">
                    <div class="catalog-info__sku">Артикул: {{product.vendor_code}}</div>
                    <h1 class="catalog-info__title">{{product.title}}</h1>

                    <div class="price-block">
                        <div class="price-block-head">
                            <span>Цена за</span>
                            <div class="price-type" >
                                <div @click="priceSwitch($event, variant.id)" v-for="variant in product.variants" :class="{'price-type-val': true, 'active': variant.id == selected_var}" :data-type="variant.id">{{variant.title}}</div>

                            </div>
                        </div>
                        <div class="price-block-val">
                            <div  :class="{'price-block-val__itm': true, 'active': variant.id == selected_var}" :data-type="variant.id" v-for="variant in product.variants">
                                <span class="price price--old">1 590 ₽</span> <span class="price">{{variant.price}} ₽</span>
                            </div>

                        </div>
                    </div>

                    <div class="product-stock">
                        <div class="product-stock__text">в наличии</div>
                        <!--
            возможные варианты
                stock-1
                stock-2
                stock-3
                -->
                        <div :class="'product-stock__line '+storage_counter">
                            <span></span> <span></span> <span></span>
                        </div>
                    </div>

                    <div class="product-count-desc">сейчас на складе {{product.instorage}} уп.</div>

                    <div class="product-itm__btn">
                                <button aria-label="Сравнить" class="product-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
                                        <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
                                        <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
                                        <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
                                        <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
                                    </svg>
                                </button>
                                <button aria-label="В избранное" class="product-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
                                        <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
                                    </svg>
                                </button>
                            </div>

                    <div class="catalog-info__btns">
                        <div :class="{'add-cart-btn': true, 'show-counter': this.itemInCart.quantity > 0}">
                            <button :class="{'btn js-add-cart': true}" aria-label="В корзину" @click="addToCart">В корзину</button>

                            <div class="add-cart-counter">
                                <div @click="changeQuantity" class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" :value="itemInCart.quantity" class="add-cart-counter__input" aria-label="Количество" id="quantity_selector">
                                <div @click="changeQuantity" class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                            
                        </div>

                        <a class="btn btn--line js-open-modal" href="#modal-calc">Рассчитать количество</a>
                    </div>

                </div>

                <div class="catalog-info-foot">
                    <div class="catalog-info-attr">
                        <div class="catalog-info-attr__name">Самовывоз до транспортной компании</div>
                        <div class="catalog-info-attr__val">Бесплатно</div>
                    </div>
                    <div class="catalog-info-attr">
                        <div class="catalog-info-attr__name">Доставка по Санкт-Петербургу</div>
                        <div class="catalog-info-attr__val">от 2199 ₽</div>
                    </div>
                </div>

            </div>
        </div>

        <section class="section-small-margin">
            <h3 class="title-normal">Рассмотреть декор</h3>
            <div class="catalog-decor-preview">
                <img alt="" loading="lazy" src="../img/tmp/decor-preview.jpg">
            </div>
        </section>

        <section class="section-small-margin">
            <h3 class="title-normal">Все декоры коллекции</h3>

            <div class="collection-list">

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

                <a class="collection-list-itm" href="/">
                    <div class="collection-list-itm__hover">
                        <div class="collection-list-itm__hover__img">
                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-detail.jpg">
                        </div>
                        <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                    </div>
                    <div class="collection-list-itm__img">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-small.jpg">
                    </div>
                </a>

            </div>

        </section>

        <ul class="catalog-nav section-smallest-margin">
            <li>
                <a class="catalog-nav-itm js-anchor active" href="#catalog-desc">Описание</a>
            </li>
            <li>
                <a class="catalog-nav-itm js-anchor" href="#catalog-char">Характеристики</a>
            </li>
            <li>
                <a class="catalog-nav-itm js-anchor" href="#catalog-buy">С этим товаром покупают</a>
            </li>
            <li>
                <a class="catalog-nav-itm js-anchor" href="#catalog-related">Похожие товары</a>
            </li>
            <li>
                <a class="catalog-nav-itm js-anchor" href="#catalog-review">Отзывы</a>
            </li>
            <li>
                <a class="catalog-nav-itm js-anchor" href="#catalog-doc">Документы</a>
            </li>

            <li class="catalog-nav-product">
                <div class="catalog-nav-product__price">
                    <div class="price price--old">1 590 ₽</div>
                    <div class="price">986 ₽</div>
                </div>
                <img src="../img/tmp/banner-bg.jpg" alt="" class="catalog-nav-product__img" loading="lazy">
                <div class="add-cart-btn">
                    <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                    <div class="add-cart-counter">
                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                        <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                    </div>
                </div>

            </li>
        </ul>

        <section class="section-smallest-margin js-scroll-section" id="catalog-desc">
            <div class="show-more-block">
                <div class="show-more-text">
                    <div class="show-more-text__content">
                        <div class="catalog-desc">
                            <h3>Описание</h3>
                            <p>Ламинат Artens «Дуб Монгольский» предназначен для устройства напольного покрытия в жилых или торговых помещениях с высокой проходимостью (класс эксплуатации — 33). Допускается применение для полов с подогревом (система «теплый пол») при температуре не выше +28°С. Материал изделия — ХДФ (древесноволокнистая плита высокой плотности).</p>
                            <p>В одной упаковке весом 14,60 кг — 8 панелей размером 129,2 × 19,3 см и толщиной 8 мм. Общая площадь панелей в одной упаковке — 1,99 м². Страна производства — Россия.</p>

                            <h3>Преимущества</h3>
                            <ul>
                                <li>Торцы панелей оснащены специальными замками, позволяющими фиксировать их положение без клея — монтаж производится быстро и точно.</li>
                                <li>Рисунок покрытия имитирует текстуру натуральной древесины.</li>
                                <li>Поверхность материала защищена от повреждений, выдерживает значительные механические нагрузки, обеспечивая длительный срок службы изделия.</li>
                            </ul>

                            <h3>Дополнительная информация</h3>
                            <p>Получить актуальные сертификаты на товар вы можете, обратившись напрямую в магазин.</p>
                            <p>Внимание! Ламинированные полы передают рисунок древесины и, как древесина, могут отличаться нерегулярным рисунком и его оттенками, появлением сучков разных размеров и окраски, что не является дефектом. При монтаже чередуйте между собой панели разных оттенков из разных пачек. Не требуется подгонять рисунок дерева, декор предполагает хаотичную раскладку, для максимальной имитации натурального дерева. Цветопередача зависит от индивидуальных настроек вашего устройства. Цвет товара на экране может отличаться от реального.</p>
                        </div>
                    </div>
                </div>
                <div class="show-more-btn"><span class="text-more">Открыть полностью</span><span class="text-lese">Закрыть</span></div>
            </div>
        </section>

        <section class="section-margin js-scroll-section" id="catalog-char">
            <h3>Характеристики</h3>
            <div class="show-more-block">
                <div class="show-more-text">
                    <div class="show-more-text__content">
                        <div class="catalog-char">

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Вид покрытия</span>
                                    <div class="tooltip">
                                        <div class="tooltip__ico">
                                            <img alt="" class="svg" src="../img/ico/help.svg">
                                        </div>
                                        <div class="tooltip__content">
                                            Вы можете самостоятельно забрать заказ из нашего магазина
                                            <div class="tooltip__content__arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-char-line__val">
                                    <a href="/">Кварц-виниловая плитка (LVT)</a>
                                </div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Сфера применения</span>
                                </div>
                                <div class="catalog-char-line__val">Коммерческое/Бытовое</div>
                            </div>

                            <div class="catalog-char-line">
                                <div class="catalog-char-line__name">
                                    <span>Страна производства</span>
                                </div>
                                <div class="catalog-char-line__val">
                                    Россия
                                    <img alt="" class="catalog-char-line__val__ico" src="../img/ico/flag-ru.svg">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="show-more-btn"><span class="text-more">Открыть полностью</span><span class="text-lese">Закрыть</span></div>
            </div>
        </section>

        <section class="section-margin js-scroll-section" id="catalog-buy">
                    <h3 class="title-margin">С&nbsp;этим товаром покупают</h3>

                    <div class="product-slider owl-loaded owl-drag">

                        

                        

                        

                        

                        

                        

                        

                        

                        

                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2731px;"><div class="owl-item active" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/like.svg" class="product-itm-label__ico svg replaced-svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 8L7.375 3L9.0625 4.11111V6.88889H12.4375L13 8L11.5938 13H6.8125L5.125 12.4444H4V8ZM5.125 11.3333H5.30756L6.99506 11.8889H10.7387L11.8002 8.11453L11.7422 8H7.9375V4.70576L7.68702 4.54083L5.125 8.33642V11.3333Z" fill="#F5333F"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.8 7.27273H3.2V11.7273H3.8V7.27273ZM2 6V13H5V6H2Z" fill="#F5333F"></path>
                                        </svg>
                                        <span class="product-itm-label__text">рекомендуем</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--dark">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">уп.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
                                            <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
                                            <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
                                            <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
                                            <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
                                        </svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
                                            <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
                                        </svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item active" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--discount">
                                        <img alt="" class="svg" src="../img/ico/receipt-tax.svg">
                                        <span class="product-itm-label__text">уцененный</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--promo">
                                        <img alt="" class="svg" src="../img/ico/actions.svg">
                                        <span class="product-itm-label__text">акция</span>
                                    </span>

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="product-itm-label__ico svg star star--full  replaced-svg">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                            <g clip-path="url(#clip0_6388_53053)">
                                                <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FFCF3C"></stop>
                                                    <stop offset="1" stop-color="#FFD500"></stop>
                                                </linearGradient>
                                                <clipPath id="clip0_6388_53053">
                                                    <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span class="product-itm-label__text">хит сезона</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="pack">шт.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price">986 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
                                            <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
                                            <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
                                            <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
                                            <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
                                        </svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
                                            <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
                                        </svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item active" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="4">
                                    <div class="product-itm-images-stage" style="transform: translateX(-939.376px);">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot active"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--dark product-itm-label--main">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                                <span class="product-itm-buy-type">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/roll-ico.svg" class="svg replaced-svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45314 1L17.1487 1.77651L23 9.22236L20.0298 17.1793L12.8589 19.9479L5.53686 17.121L4.6695 9.80151L8.20285 5.24611L14.3819 4.83227L18.5321 8.72368L17.1236 14.0065L12.8323 15.7948L8.79596 13.9025V10.1021H10.9821V12.5674L12.8856 13.4598L15.2765 12.4634L16.0954 9.39209L13.5634 7.01794L9.34782 7.30028L6.94139 10.4028L7.55897 15.6144L12.8589 17.6607L18.31 15.5561L20.5372 9.58959L15.9939 3.80814L9.09753 3.1923L4.5086 6.57306L3.18617 10.448V15.0198L5.13511 18.0654L9.12917 20.8742H21.7686V23H8.42149L3.50589 19.5432L1 15.6271V10.1044L2.64746 5.27715L8.45314 1Z" fill="#171717"></path>
                                    </svg>
                                </span>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. 169000000000001170</div>
                                <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                        <g clip-path="url(#clip0_6388_53053)">
                                            <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFCF3C"></stop>
                                                <stop offset="1" stop-color="#FFD500"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_6388_53053">
                                                <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                    <div class="product-itm__desc__dop">
                                        <div class="product-itm-buy-type-long">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="40" viewBox="0 0 124 40" fill="none" data-src="../img/ico/roll-buy.svg" class="svg replaced-svg">
                                                <rect width="124" height="40" rx="2" fill="white"></rect>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4531 9L25.1487 9.77651L31 17.2224L28.0298 25.1793L20.8589 27.9479L13.5369 25.121L12.6695 17.8015L16.2028 13.2461L22.3819 12.8323L26.5321 16.7237L25.1236 22.0065L20.8323 23.7948L16.796 21.9025V18.1021H18.9821V20.5674L20.8856 21.4598L23.2765 20.4634L24.0954 17.3921L21.5634 15.0179L17.3478 15.3003L14.9414 18.4028L15.559 23.6144L20.8589 25.6607L26.31 23.5561L28.5372 17.5896L23.9939 11.8081L17.0975 11.1923L12.5086 14.5731L11.1862 18.448V23.0198L13.1351 26.0654L17.1292 28.8742H29.7686V31H16.4215L11.5059 27.5432L9 23.6271V18.1044L10.6475 13.2772L16.4531 9Z" fill="#171717"></path>
                                                <path d="M40.812 10H47.322V17H46.09V11.05H42.044V17H40.812V10ZM52.8248 17.21C52.2368 17.21 51.7188 17.112 51.2848 16.888C50.8508 16.664 50.5288 16.314 50.3188 15.838H50.1788V19.52H48.9468V10H50.1788V11.162H50.3188C50.5288 10.686 50.8508 10.35 51.2848 10.126C51.7188 9.902 52.2368 9.79 52.8248 9.79C53.3288 9.79 53.7768 9.846 54.1688 9.958C54.5608 10.07 54.8828 10.252 55.1628 10.532C55.4288 10.812 55.6388 11.19 55.7788 11.666C55.9188 12.142 56.0028 12.758 56.0028 13.5C56.0028 14.256 55.9188 14.872 55.7788 15.348C55.6388 15.824 55.4288 16.202 55.1628 16.482C54.8828 16.762 54.5608 16.944 54.1688 17.056C53.7768 17.168 53.3288 17.21 52.8248 17.21ZM52.3628 10.84C52.0828 10.84 51.8028 10.868 51.5508 10.91C51.2848 10.952 51.0468 11.036 50.8508 11.162C50.6548 11.288 50.4868 11.456 50.3608 11.68C50.2348 11.904 50.1788 12.198 50.1788 12.562V14.438C50.1788 14.802 50.2348 15.096 50.3608 15.32C50.4868 15.544 50.6548 15.726 50.8508 15.852C51.0468 15.978 51.2848 16.062 51.5508 16.104C51.8028 16.146 52.0828 16.16 52.3628 16.16C52.7968 16.16 53.1748 16.132 53.4828 16.076C53.7908 16.02 54.0288 15.908 54.2248 15.712C54.4208 15.53 54.5608 15.264 54.6448 14.914C54.7288 14.564 54.7848 14.088 54.7848 13.5C54.7848 12.912 54.7288 12.45 54.6448 12.1C54.5608 11.75 54.4208 11.484 54.2248 11.288C54.0288 11.106 53.7908 10.98 53.4828 10.924C53.1748 10.868 52.7968 10.84 52.3628 10.84ZM60.812 16.16C61.176 16.16 61.512 16.132 61.82 16.062C62.114 15.992 62.366 15.866 62.576 15.67C62.786 15.474 62.954 15.208 63.066 14.872C63.178 14.536 63.234 14.088 63.234 13.542C63.234 12.982 63.178 12.534 63.066 12.184C62.954 11.834 62.786 11.554 62.576 11.358C62.366 11.162 62.114 11.022 61.82 10.952C61.512 10.882 61.176 10.84 60.812 10.84C60.434 10.84 60.098 10.882 59.804 10.952C59.496 11.022 59.244 11.148 59.048 11.344C58.838 11.54 58.684 11.82 58.572 12.17C58.46 12.534 58.404 12.982 58.404 13.542C58.404 14.088 58.46 14.536 58.572 14.872C58.684 15.208 58.838 15.474 59.048 15.67C59.244 15.866 59.496 15.992 59.804 16.062C60.098 16.132 60.434 16.16 60.812 16.16ZM60.812 9.79C61.372 9.79 61.89 9.86 62.338 9.972C62.786 10.098 63.178 10.308 63.486 10.588C63.794 10.882 64.032 11.274 64.2 11.75C64.368 12.226 64.452 12.828 64.452 13.542C64.452 14.242 64.368 14.83 64.2 15.292C64.032 15.768 63.794 16.146 63.486 16.426C63.178 16.706 62.786 16.916 62.338 17.028C61.89 17.154 61.372 17.21 60.812 17.21C60.238 17.21 59.734 17.154 59.286 17.028C58.838 16.916 58.446 16.706 58.138 16.426C57.83 16.146 57.592 15.768 57.424 15.292C57.256 14.83 57.172 14.242 57.172 13.542C57.172 12.828 57.256 12.226 57.424 11.75C57.592 11.274 57.83 10.882 58.138 10.588C58.446 10.308 58.838 10.098 59.286 9.972C59.734 9.86 60.238 9.79 60.812 9.79ZM66.6045 10H72.3445V15.95H73.5065V19.1H72.2745V17H66.2265V19.1H64.9945V15.95H65.7505C65.9325 15.852 66.0725 15.684 66.1845 15.432C66.2965 15.194 66.3805 14.9 66.4505 14.564C66.5065 14.228 66.5485 13.864 66.5765 13.444C66.5905 13.038 66.6045 12.618 66.6045 12.184V10ZM67.7945 12.352C67.7945 13.276 67.7245 14.018 67.6125 14.592C67.5005 15.18 67.3465 15.628 67.1645 15.95H71.1125V11.05H67.7945V12.352ZM76.7822 17.21C76.3902 17.21 76.0402 17.182 75.7182 17.098C75.3962 17.014 75.1162 16.888 74.8922 16.706C74.6542 16.538 74.4722 16.3 74.3462 16.02C74.2062 15.74 74.1502 15.39 74.1502 14.984C74.1502 14.746 74.1782 14.494 74.2622 14.242C74.3462 13.99 74.4862 13.752 74.7102 13.542C74.9202 13.332 75.2142 13.164 75.5922 13.024C75.9702 12.898 76.4602 12.828 77.0622 12.828C77.3422 12.828 77.5802 12.842 77.8042 12.842C78.0282 12.842 78.2242 12.856 78.4202 12.856C78.6022 12.87 78.7842 12.884 78.9662 12.884C79.1482 12.898 79.3442 12.912 79.5682 12.912V12.324C79.5682 11.792 79.4142 11.414 79.1062 11.19C78.7982 10.966 78.3082 10.84 77.6082 10.84C77.3002 10.84 77.0202 10.868 76.7962 10.896C76.5582 10.938 76.3622 11.008 76.1942 11.12C76.0262 11.232 75.9002 11.372 75.8022 11.554C75.6902 11.736 75.6202 11.96 75.5782 12.24H74.3882C74.4442 11.778 74.5562 11.386 74.7242 11.078C74.8922 10.77 75.1022 10.518 75.3682 10.322C75.6342 10.14 75.9562 10 76.3342 9.916C76.6982 9.832 77.1322 9.79 77.6082 9.79C78.6022 9.79 79.3862 9.986 79.9462 10.378C80.5062 10.77 80.8002 11.428 80.8002 12.324V17H79.5682V15.838H79.4282C79.2042 16.314 78.8542 16.664 78.3782 16.888C77.9022 17.112 77.3702 17.21 76.7822 17.21ZM77.1882 16.16C77.4682 16.16 77.7342 16.146 78.0142 16.104C78.2942 16.062 78.5462 15.978 78.7702 15.866C78.9942 15.754 79.1762 15.586 79.3162 15.376C79.4562 15.166 79.5402 14.886 79.5682 14.55V13.822C79.1762 13.808 78.7982 13.794 78.4622 13.78C78.1262 13.78 77.8182 13.766 77.5382 13.766C77.0622 13.766 76.6702 13.808 76.3902 13.864C76.1102 13.934 75.8862 14.018 75.7462 14.13C75.5922 14.242 75.4942 14.382 75.4522 14.522C75.3962 14.662 75.3822 14.816 75.3822 14.97C75.3822 15.432 75.5222 15.74 75.8162 15.908C76.1102 16.076 76.5722 16.16 77.1882 16.16ZM89.2062 13.962H83.3962C83.3962 14.41 83.4662 14.788 83.5782 15.068C83.6902 15.348 83.8582 15.572 84.0682 15.74C84.2782 15.908 84.5302 16.02 84.8242 16.076C85.1182 16.132 85.4402 16.16 85.8042 16.16C86.0842 16.16 86.3362 16.146 86.5882 16.104C86.8262 16.076 87.0362 16.006 87.2322 15.908C87.4282 15.824 87.5822 15.698 87.7222 15.53C87.8482 15.362 87.9322 15.152 87.9882 14.886H89.2062C89.1362 15.32 89.0102 15.684 88.8142 15.978C88.6182 16.286 88.3802 16.524 88.0862 16.706C87.7922 16.888 87.4562 17.014 87.0782 17.098C86.6862 17.182 86.2662 17.21 85.8042 17.21C85.2302 17.21 84.7262 17.154 84.2782 17.028C83.8302 16.916 83.4382 16.706 83.1302 16.426C82.8222 16.146 82.5842 15.768 82.4162 15.292C82.2482 14.83 82.1642 14.242 82.1642 13.542C82.1642 12.828 82.2482 12.226 82.4162 11.75C82.5842 11.274 82.8222 10.882 83.1302 10.588C83.4382 10.308 83.8162 10.098 84.2642 9.972C84.7122 9.86 85.2162 9.79 85.7762 9.79C86.8402 9.79 87.6802 10.056 88.2962 10.588C88.8982 11.12 89.2062 11.932 89.2062 13.024V13.962ZM85.7762 10.84C85.4402 10.84 85.1462 10.868 84.8662 10.924C84.5862 10.98 84.3342 11.092 84.1242 11.246C83.9142 11.4 83.7462 11.61 83.6202 11.89C83.4942 12.17 83.4242 12.52 83.4102 12.968H87.9602C87.9602 12.548 87.9042 12.212 87.7922 11.932C87.6802 11.652 87.5402 11.442 87.3442 11.274C87.1482 11.12 86.9242 11.008 86.6582 10.938C86.3922 10.882 86.0982 10.84 85.7762 10.84ZM96.0823 10V11.05H93.5343V17H92.3023V11.05H89.7543V10H96.0823ZM103.534 14.718C103.464 15.194 103.338 15.586 103.142 15.894C102.946 16.216 102.708 16.468 102.414 16.664C102.12 16.86 101.784 17 101.406 17.084C101.014 17.168 100.594 17.21 100.132 17.21C99.5583 17.21 99.0543 17.154 98.6063 17.028C98.1583 16.916 97.7663 16.706 97.4583 16.426C97.1503 16.146 96.9123 15.768 96.7443 15.292C96.5763 14.83 96.4923 14.242 96.4923 13.542C96.4923 12.828 96.5763 12.226 96.7443 11.75C96.9123 11.274 97.1503 10.882 97.4583 10.588C97.7663 10.308 98.1583 10.098 98.6063 9.972C99.0543 9.86 99.5583 9.79 100.132 9.79C100.58 9.79 100.986 9.832 101.378 9.916C101.756 10 102.092 10.14 102.372 10.322C102.652 10.518 102.89 10.77 103.086 11.078C103.282 11.386 103.408 11.778 103.492 12.24H102.26C102.204 11.96 102.106 11.736 101.98 11.554C101.84 11.372 101.686 11.232 101.504 11.12C101.308 11.008 101.098 10.938 100.874 10.896C100.65 10.868 100.398 10.84 100.132 10.84C99.7543 10.84 99.4183 10.882 99.1243 10.952C98.8163 11.022 98.5643 11.148 98.3683 11.344C98.1583 11.54 98.0043 11.82 97.8923 12.17C97.7803 12.534 97.7243 12.982 97.7243 13.542C97.7243 14.088 97.7803 14.536 97.8923 14.872C98.0043 15.208 98.1583 15.474 98.3683 15.67C98.5643 15.866 98.8163 15.992 99.1243 16.062C99.4183 16.132 99.7543 16.16 100.132 16.16C100.412 16.16 100.664 16.146 100.916 16.104C101.154 16.062 101.364 15.992 101.56 15.88C101.742 15.768 101.896 15.628 102.036 15.432C102.162 15.25 102.26 15.012 102.316 14.718H103.534ZM109.766 14.494H107.428L105.86 17H104.404L106.196 14.382C105.706 14.242 105.342 13.99 105.104 13.598C104.852 13.206 104.74 12.744 104.74 12.212C104.74 11.904 104.782 11.624 104.866 11.344C104.95 11.078 105.076 10.84 105.272 10.644C105.468 10.448 105.72 10.294 106.028 10.182C106.336 10.07 106.714 10 107.162 10H110.998V17H109.766V14.494ZM105.958 12.212C105.958 12.548 106.028 12.828 106.182 13.08C106.322 13.332 106.602 13.444 107.008 13.444H109.766V11.05H107.26C106.98 11.05 106.756 11.078 106.588 11.134C106.42 11.19 106.28 11.274 106.196 11.372C106.098 11.484 106.028 11.61 106 11.75C105.972 11.89 105.958 12.044 105.958 12.212Z" fill="#171717"></path>
                                                <path d="M49.366 26.854C49.366 28.156 49.086 29.108 48.526 29.71C47.966 30.312 47.126 30.606 45.992 30.606H42.66V33H40.756V23.34H45.964C46.552 23.34 47.07 23.41 47.504 23.536C47.924 23.676 48.274 23.872 48.554 24.152C48.834 24.432 49.03 24.796 49.17 25.244C49.296 25.692 49.366 26.224 49.366 26.854ZM42.66 24.978V28.968H45.67C46.258 28.968 46.692 28.814 46.986 28.506C47.28 28.198 47.434 27.666 47.434 26.882C47.434 26.504 47.392 26.196 47.336 25.944C47.28 25.706 47.182 25.51 47.042 25.37C46.902 25.23 46.706 25.118 46.482 25.062C46.258 25.006 45.978 24.978 45.642 24.978H42.66ZM52.5237 33L53.7697 30.802L49.5977 23.34H51.8797L54.8057 28.954L57.4797 23.34H59.6077L54.7077 33H52.5237ZM62.4329 27.204C62.4329 28.296 62.3769 29.22 62.2929 29.948C62.1949 30.69 62.0409 31.292 61.8449 31.74C61.6489 32.188 61.3829 32.51 61.0469 32.706C60.7109 32.902 60.3189 33 59.8429 33H59.2829V31.334C59.5629 31.334 59.7869 31.278 59.9689 31.138C60.1369 30.998 60.2769 30.76 60.3889 30.424C60.4869 30.088 60.5569 29.612 60.5989 29.024C60.6269 28.436 60.6549 27.694 60.6549 26.784V23.34H68.2569V33H66.3389V25.048H62.4329V27.204ZM74.696 33.21C73.828 33.21 73.086 33.14 72.456 32.972C71.812 32.818 71.294 32.552 70.874 32.16C70.454 31.782 70.132 31.264 69.922 30.62C69.712 29.976 69.614 29.164 69.614 28.184C69.614 27.176 69.726 26.336 69.95 25.678C70.174 25.034 70.496 24.516 70.93 24.138C71.35 23.76 71.882 23.494 72.512 23.354C73.142 23.214 73.87 23.13 74.696 23.13C75.508 23.13 76.222 23.214 76.866 23.354C77.496 23.494 78.028 23.76 78.462 24.138C78.882 24.516 79.218 25.034 79.442 25.678C79.666 26.336 79.778 27.176 79.778 28.184C79.778 29.164 79.666 29.976 79.456 30.62C79.246 31.264 78.938 31.782 78.518 32.16C78.098 32.552 77.566 32.818 76.936 32.972C76.292 33.14 75.55 33.21 74.696 33.21ZM74.696 31.53C75.228 31.53 75.704 31.502 76.096 31.418C76.488 31.334 76.824 31.18 77.076 30.942C77.328 30.704 77.524 30.368 77.65 29.92C77.776 29.486 77.846 28.912 77.846 28.184C77.846 27.442 77.776 26.854 77.65 26.406C77.524 25.958 77.328 25.622 77.076 25.384C76.81 25.146 76.474 24.992 76.082 24.922C75.69 24.852 75.228 24.81 74.696 24.81C74.15 24.81 73.674 24.852 73.282 24.922C72.89 24.992 72.554 25.146 72.302 25.37C72.036 25.608 71.84 25.944 71.714 26.392C71.588 26.84 71.532 27.442 71.532 28.184C71.532 28.912 71.588 29.486 71.714 29.92C71.84 30.368 72.036 30.704 72.302 30.942C72.554 31.18 72.89 31.334 73.282 31.418C73.674 31.502 74.15 31.53 74.696 31.53ZM83.0467 27.33H88.1847V23.34H90.0887V33H88.1847V29.038H83.0467V33H81.1427V23.34H83.0467V27.33ZM96.5437 33.21C95.6757 33.21 94.9337 33.14 94.3037 32.972C93.6597 32.818 93.1417 32.552 92.7217 32.16C92.3017 31.782 91.9797 31.264 91.7697 30.62C91.5597 29.976 91.4617 29.164 91.4617 28.184C91.4617 27.176 91.5737 26.336 91.7977 25.678C92.0217 25.034 92.3437 24.516 92.7777 24.138C93.1977 23.76 93.7297 23.494 94.3597 23.354C94.9897 23.214 95.7177 23.13 96.5437 23.13C97.3557 23.13 98.0697 23.214 98.7137 23.354C99.3437 23.494 99.8757 23.76 100.31 24.138C100.73 24.516 101.066 25.034 101.29 25.678C101.514 26.336 101.626 27.176 101.626 28.184C101.626 29.164 101.514 29.976 101.304 30.62C101.094 31.264 100.786 31.782 100.366 32.16C99.9457 32.552 99.4137 32.818 98.7837 32.972C98.1397 33.14 97.3977 33.21 96.5437 33.21ZM96.5437 31.53C97.0757 31.53 97.5517 31.502 97.9437 31.418C98.3357 31.334 98.6717 31.18 98.9237 30.942C99.1757 30.704 99.3717 30.368 99.4977 29.92C99.6237 29.486 99.6937 28.912 99.6937 28.184C99.6937 27.442 99.6237 26.854 99.4977 26.406C99.3717 25.958 99.1757 25.622 98.9237 25.384C98.6577 25.146 98.3217 24.992 97.9297 24.922C97.5377 24.852 97.0757 24.81 96.5437 24.81C95.9977 24.81 95.5217 24.852 95.1297 24.922C94.7377 24.992 94.4017 25.146 94.1497 25.37C93.8837 25.608 93.6877 25.944 93.5617 26.392C93.4357 26.84 93.3797 27.442 93.3797 28.184C93.3797 28.912 93.4357 29.486 93.5617 29.92C93.6877 30.368 93.8837 30.704 94.1497 30.942C94.4017 31.18 94.7377 31.334 95.1297 31.418C95.5217 31.502 95.9977 31.53 96.5437 31.53ZM104.894 26.294V33H102.99V23.34H104.446L108.38 27.722L112.258 23.34H113.7V33H111.796V26.322L108.352 30.046L104.894 26.294Z" fill="#171717"></path>
                                            </svg>

                                        </div>

                                        <div class="product-itm__dop-attr">
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">вес</div>
                                                <div class="product-itm__dop-attr__itm__val">35,2 кг</div>
                                            </div>
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">площадь</div>
                                                <div class="product-itm__dop-attr__itm__val">80&nbsp;м<sup>2</sup></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">пог. метр</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
                                            <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
                                            <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
                                            <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
                                            <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
                                        </svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
                                            <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
                                        </svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item active" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="2">
                                    <div class="product-itm-images-stage" style="transform: translateX(-469.688px);">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot active"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/like.svg" class="product-itm-label__ico svg replaced-svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 8L7.375 3L9.0625 4.11111V6.88889H12.4375L13 8L11.5938 13H6.8125L5.125 12.4444H4V8ZM5.125 11.3333H5.30756L6.99506 11.8889H10.7387L11.8002 8.11453L11.7422 8H7.9375V4.70576L7.68702 4.54083L5.125 8.33642V11.3333Z" fill="#F5333F"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.8 7.27273H3.2V11.7273H3.8V7.27273ZM2 6V13H5V6H2Z" fill="#F5333F"></path>
</svg>
                                        <span class="product-itm-label__text">рекомендуем</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--dark">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">уп.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--discount">
                                        <img alt="" class="svg" src="../img/ico/receipt-tax.svg">
                                        <span class="product-itm-label__text">уцененный</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--promo">
                                        <img alt="" class="svg" src="../img/ico/actions.svg">
                                        <span class="product-itm-label__text">акция</span>
                                    </span>

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="product-itm-label__ico svg star star--full  replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                        <span class="product-itm-label__text">хит сезона</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="pack">шт.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price">986 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--dark product-itm-label--main">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                                <span class="product-itm-buy-type">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/roll-ico.svg" class="svg replaced-svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45314 1L17.1487 1.77651L23 9.22236L20.0298 17.1793L12.8589 19.9479L5.53686 17.121L4.6695 9.80151L8.20285 5.24611L14.3819 4.83227L18.5321 8.72368L17.1236 14.0065L12.8323 15.7948L8.79596 13.9025V10.1021H10.9821V12.5674L12.8856 13.4598L15.2765 12.4634L16.0954 9.39209L13.5634 7.01794L9.34782 7.30028L6.94139 10.4028L7.55897 15.6144L12.8589 17.6607L18.31 15.5561L20.5372 9.58959L15.9939 3.80814L9.09753 3.1923L4.5086 6.57306L3.18617 10.448V15.0198L5.13511 18.0654L9.12917 20.8742H21.7686V23H8.42149L3.50589 19.5432L1 15.6271V10.1044L2.64746 5.27715L8.45314 1Z" fill="#171717"></path>
</svg>
                                </span>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. 169000000000001170</div>
                                <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                    <div class="product-itm__desc__dop">
                                        <div class="product-itm-buy-type-long">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="40" viewBox="0 0 124 40" fill="none" data-src="../img/ico/roll-buy.svg" class="svg replaced-svg">
    <rect width="124" height="40" rx="2" fill="white"></rect>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4531 9L25.1487 9.77651L31 17.2224L28.0298 25.1793L20.8589 27.9479L13.5369 25.121L12.6695 17.8015L16.2028 13.2461L22.3819 12.8323L26.5321 16.7237L25.1236 22.0065L20.8323 23.7948L16.796 21.9025V18.1021H18.9821V20.5674L20.8856 21.4598L23.2765 20.4634L24.0954 17.3921L21.5634 15.0179L17.3478 15.3003L14.9414 18.4028L15.559 23.6144L20.8589 25.6607L26.31 23.5561L28.5372 17.5896L23.9939 11.8081L17.0975 11.1923L12.5086 14.5731L11.1862 18.448V23.0198L13.1351 26.0654L17.1292 28.8742H29.7686V31H16.4215L11.5059 27.5432L9 23.6271V18.1044L10.6475 13.2772L16.4531 9Z" fill="#171717"></path>
    <path d="M40.812 10H47.322V17H46.09V11.05H42.044V17H40.812V10ZM52.8248 17.21C52.2368 17.21 51.7188 17.112 51.2848 16.888C50.8508 16.664 50.5288 16.314 50.3188 15.838H50.1788V19.52H48.9468V10H50.1788V11.162H50.3188C50.5288 10.686 50.8508 10.35 51.2848 10.126C51.7188 9.902 52.2368 9.79 52.8248 9.79C53.3288 9.79 53.7768 9.846 54.1688 9.958C54.5608 10.07 54.8828 10.252 55.1628 10.532C55.4288 10.812 55.6388 11.19 55.7788 11.666C55.9188 12.142 56.0028 12.758 56.0028 13.5C56.0028 14.256 55.9188 14.872 55.7788 15.348C55.6388 15.824 55.4288 16.202 55.1628 16.482C54.8828 16.762 54.5608 16.944 54.1688 17.056C53.7768 17.168 53.3288 17.21 52.8248 17.21ZM52.3628 10.84C52.0828 10.84 51.8028 10.868 51.5508 10.91C51.2848 10.952 51.0468 11.036 50.8508 11.162C50.6548 11.288 50.4868 11.456 50.3608 11.68C50.2348 11.904 50.1788 12.198 50.1788 12.562V14.438C50.1788 14.802 50.2348 15.096 50.3608 15.32C50.4868 15.544 50.6548 15.726 50.8508 15.852C51.0468 15.978 51.2848 16.062 51.5508 16.104C51.8028 16.146 52.0828 16.16 52.3628 16.16C52.7968 16.16 53.1748 16.132 53.4828 16.076C53.7908 16.02 54.0288 15.908 54.2248 15.712C54.4208 15.53 54.5608 15.264 54.6448 14.914C54.7288 14.564 54.7848 14.088 54.7848 13.5C54.7848 12.912 54.7288 12.45 54.6448 12.1C54.5608 11.75 54.4208 11.484 54.2248 11.288C54.0288 11.106 53.7908 10.98 53.4828 10.924C53.1748 10.868 52.7968 10.84 52.3628 10.84ZM60.812 16.16C61.176 16.16 61.512 16.132 61.82 16.062C62.114 15.992 62.366 15.866 62.576 15.67C62.786 15.474 62.954 15.208 63.066 14.872C63.178 14.536 63.234 14.088 63.234 13.542C63.234 12.982 63.178 12.534 63.066 12.184C62.954 11.834 62.786 11.554 62.576 11.358C62.366 11.162 62.114 11.022 61.82 10.952C61.512 10.882 61.176 10.84 60.812 10.84C60.434 10.84 60.098 10.882 59.804 10.952C59.496 11.022 59.244 11.148 59.048 11.344C58.838 11.54 58.684 11.82 58.572 12.17C58.46 12.534 58.404 12.982 58.404 13.542C58.404 14.088 58.46 14.536 58.572 14.872C58.684 15.208 58.838 15.474 59.048 15.67C59.244 15.866 59.496 15.992 59.804 16.062C60.098 16.132 60.434 16.16 60.812 16.16ZM60.812 9.79C61.372 9.79 61.89 9.86 62.338 9.972C62.786 10.098 63.178 10.308 63.486 10.588C63.794 10.882 64.032 11.274 64.2 11.75C64.368 12.226 64.452 12.828 64.452 13.542C64.452 14.242 64.368 14.83 64.2 15.292C64.032 15.768 63.794 16.146 63.486 16.426C63.178 16.706 62.786 16.916 62.338 17.028C61.89 17.154 61.372 17.21 60.812 17.21C60.238 17.21 59.734 17.154 59.286 17.028C58.838 16.916 58.446 16.706 58.138 16.426C57.83 16.146 57.592 15.768 57.424 15.292C57.256 14.83 57.172 14.242 57.172 13.542C57.172 12.828 57.256 12.226 57.424 11.75C57.592 11.274 57.83 10.882 58.138 10.588C58.446 10.308 58.838 10.098 59.286 9.972C59.734 9.86 60.238 9.79 60.812 9.79ZM66.6045 10H72.3445V15.95H73.5065V19.1H72.2745V17H66.2265V19.1H64.9945V15.95H65.7505C65.9325 15.852 66.0725 15.684 66.1845 15.432C66.2965 15.194 66.3805 14.9 66.4505 14.564C66.5065 14.228 66.5485 13.864 66.5765 13.444C66.5905 13.038 66.6045 12.618 66.6045 12.184V10ZM67.7945 12.352C67.7945 13.276 67.7245 14.018 67.6125 14.592C67.5005 15.18 67.3465 15.628 67.1645 15.95H71.1125V11.05H67.7945V12.352ZM76.7822 17.21C76.3902 17.21 76.0402 17.182 75.7182 17.098C75.3962 17.014 75.1162 16.888 74.8922 16.706C74.6542 16.538 74.4722 16.3 74.3462 16.02C74.2062 15.74 74.1502 15.39 74.1502 14.984C74.1502 14.746 74.1782 14.494 74.2622 14.242C74.3462 13.99 74.4862 13.752 74.7102 13.542C74.9202 13.332 75.2142 13.164 75.5922 13.024C75.9702 12.898 76.4602 12.828 77.0622 12.828C77.3422 12.828 77.5802 12.842 77.8042 12.842C78.0282 12.842 78.2242 12.856 78.4202 12.856C78.6022 12.87 78.7842 12.884 78.9662 12.884C79.1482 12.898 79.3442 12.912 79.5682 12.912V12.324C79.5682 11.792 79.4142 11.414 79.1062 11.19C78.7982 10.966 78.3082 10.84 77.6082 10.84C77.3002 10.84 77.0202 10.868 76.7962 10.896C76.5582 10.938 76.3622 11.008 76.1942 11.12C76.0262 11.232 75.9002 11.372 75.8022 11.554C75.6902 11.736 75.6202 11.96 75.5782 12.24H74.3882C74.4442 11.778 74.5562 11.386 74.7242 11.078C74.8922 10.77 75.1022 10.518 75.3682 10.322C75.6342 10.14 75.9562 10 76.3342 9.916C76.6982 9.832 77.1322 9.79 77.6082 9.79C78.6022 9.79 79.3862 9.986 79.9462 10.378C80.5062 10.77 80.8002 11.428 80.8002 12.324V17H79.5682V15.838H79.4282C79.2042 16.314 78.8542 16.664 78.3782 16.888C77.9022 17.112 77.3702 17.21 76.7822 17.21ZM77.1882 16.16C77.4682 16.16 77.7342 16.146 78.0142 16.104C78.2942 16.062 78.5462 15.978 78.7702 15.866C78.9942 15.754 79.1762 15.586 79.3162 15.376C79.4562 15.166 79.5402 14.886 79.5682 14.55V13.822C79.1762 13.808 78.7982 13.794 78.4622 13.78C78.1262 13.78 77.8182 13.766 77.5382 13.766C77.0622 13.766 76.6702 13.808 76.3902 13.864C76.1102 13.934 75.8862 14.018 75.7462 14.13C75.5922 14.242 75.4942 14.382 75.4522 14.522C75.3962 14.662 75.3822 14.816 75.3822 14.97C75.3822 15.432 75.5222 15.74 75.8162 15.908C76.1102 16.076 76.5722 16.16 77.1882 16.16ZM89.2062 13.962H83.3962C83.3962 14.41 83.4662 14.788 83.5782 15.068C83.6902 15.348 83.8582 15.572 84.0682 15.74C84.2782 15.908 84.5302 16.02 84.8242 16.076C85.1182 16.132 85.4402 16.16 85.8042 16.16C86.0842 16.16 86.3362 16.146 86.5882 16.104C86.8262 16.076 87.0362 16.006 87.2322 15.908C87.4282 15.824 87.5822 15.698 87.7222 15.53C87.8482 15.362 87.9322 15.152 87.9882 14.886H89.2062C89.1362 15.32 89.0102 15.684 88.8142 15.978C88.6182 16.286 88.3802 16.524 88.0862 16.706C87.7922 16.888 87.4562 17.014 87.0782 17.098C86.6862 17.182 86.2662 17.21 85.8042 17.21C85.2302 17.21 84.7262 17.154 84.2782 17.028C83.8302 16.916 83.4382 16.706 83.1302 16.426C82.8222 16.146 82.5842 15.768 82.4162 15.292C82.2482 14.83 82.1642 14.242 82.1642 13.542C82.1642 12.828 82.2482 12.226 82.4162 11.75C82.5842 11.274 82.8222 10.882 83.1302 10.588C83.4382 10.308 83.8162 10.098 84.2642 9.972C84.7122 9.86 85.2162 9.79 85.7762 9.79C86.8402 9.79 87.6802 10.056 88.2962 10.588C88.8982 11.12 89.2062 11.932 89.2062 13.024V13.962ZM85.7762 10.84C85.4402 10.84 85.1462 10.868 84.8662 10.924C84.5862 10.98 84.3342 11.092 84.1242 11.246C83.9142 11.4 83.7462 11.61 83.6202 11.89C83.4942 12.17 83.4242 12.52 83.4102 12.968H87.9602C87.9602 12.548 87.9042 12.212 87.7922 11.932C87.6802 11.652 87.5402 11.442 87.3442 11.274C87.1482 11.12 86.9242 11.008 86.6582 10.938C86.3922 10.882 86.0982 10.84 85.7762 10.84ZM96.0823 10V11.05H93.5343V17H92.3023V11.05H89.7543V10H96.0823ZM103.534 14.718C103.464 15.194 103.338 15.586 103.142 15.894C102.946 16.216 102.708 16.468 102.414 16.664C102.12 16.86 101.784 17 101.406 17.084C101.014 17.168 100.594 17.21 100.132 17.21C99.5583 17.21 99.0543 17.154 98.6063 17.028C98.1583 16.916 97.7663 16.706 97.4583 16.426C97.1503 16.146 96.9123 15.768 96.7443 15.292C96.5763 14.83 96.4923 14.242 96.4923 13.542C96.4923 12.828 96.5763 12.226 96.7443 11.75C96.9123 11.274 97.1503 10.882 97.4583 10.588C97.7663 10.308 98.1583 10.098 98.6063 9.972C99.0543 9.86 99.5583 9.79 100.132 9.79C100.58 9.79 100.986 9.832 101.378 9.916C101.756 10 102.092 10.14 102.372 10.322C102.652 10.518 102.89 10.77 103.086 11.078C103.282 11.386 103.408 11.778 103.492 12.24H102.26C102.204 11.96 102.106 11.736 101.98 11.554C101.84 11.372 101.686 11.232 101.504 11.12C101.308 11.008 101.098 10.938 100.874 10.896C100.65 10.868 100.398 10.84 100.132 10.84C99.7543 10.84 99.4183 10.882 99.1243 10.952C98.8163 11.022 98.5643 11.148 98.3683 11.344C98.1583 11.54 98.0043 11.82 97.8923 12.17C97.7803 12.534 97.7243 12.982 97.7243 13.542C97.7243 14.088 97.7803 14.536 97.8923 14.872C98.0043 15.208 98.1583 15.474 98.3683 15.67C98.5643 15.866 98.8163 15.992 99.1243 16.062C99.4183 16.132 99.7543 16.16 100.132 16.16C100.412 16.16 100.664 16.146 100.916 16.104C101.154 16.062 101.364 15.992 101.56 15.88C101.742 15.768 101.896 15.628 102.036 15.432C102.162 15.25 102.26 15.012 102.316 14.718H103.534ZM109.766 14.494H107.428L105.86 17H104.404L106.196 14.382C105.706 14.242 105.342 13.99 105.104 13.598C104.852 13.206 104.74 12.744 104.74 12.212C104.74 11.904 104.782 11.624 104.866 11.344C104.95 11.078 105.076 10.84 105.272 10.644C105.468 10.448 105.72 10.294 106.028 10.182C106.336 10.07 106.714 10 107.162 10H110.998V17H109.766V14.494ZM105.958 12.212C105.958 12.548 106.028 12.828 106.182 13.08C106.322 13.332 106.602 13.444 107.008 13.444H109.766V11.05H107.26C106.98 11.05 106.756 11.078 106.588 11.134C106.42 11.19 106.28 11.274 106.196 11.372C106.098 11.484 106.028 11.61 106 11.75C105.972 11.89 105.958 12.044 105.958 12.212Z" fill="#171717"></path>
    <path d="M49.366 26.854C49.366 28.156 49.086 29.108 48.526 29.71C47.966 30.312 47.126 30.606 45.992 30.606H42.66V33H40.756V23.34H45.964C46.552 23.34 47.07 23.41 47.504 23.536C47.924 23.676 48.274 23.872 48.554 24.152C48.834 24.432 49.03 24.796 49.17 25.244C49.296 25.692 49.366 26.224 49.366 26.854ZM42.66 24.978V28.968H45.67C46.258 28.968 46.692 28.814 46.986 28.506C47.28 28.198 47.434 27.666 47.434 26.882C47.434 26.504 47.392 26.196 47.336 25.944C47.28 25.706 47.182 25.51 47.042 25.37C46.902 25.23 46.706 25.118 46.482 25.062C46.258 25.006 45.978 24.978 45.642 24.978H42.66ZM52.5237 33L53.7697 30.802L49.5977 23.34H51.8797L54.8057 28.954L57.4797 23.34H59.6077L54.7077 33H52.5237ZM62.4329 27.204C62.4329 28.296 62.3769 29.22 62.2929 29.948C62.1949 30.69 62.0409 31.292 61.8449 31.74C61.6489 32.188 61.3829 32.51 61.0469 32.706C60.7109 32.902 60.3189 33 59.8429 33H59.2829V31.334C59.5629 31.334 59.7869 31.278 59.9689 31.138C60.1369 30.998 60.2769 30.76 60.3889 30.424C60.4869 30.088 60.5569 29.612 60.5989 29.024C60.6269 28.436 60.6549 27.694 60.6549 26.784V23.34H68.2569V33H66.3389V25.048H62.4329V27.204ZM74.696 33.21C73.828 33.21 73.086 33.14 72.456 32.972C71.812 32.818 71.294 32.552 70.874 32.16C70.454 31.782 70.132 31.264 69.922 30.62C69.712 29.976 69.614 29.164 69.614 28.184C69.614 27.176 69.726 26.336 69.95 25.678C70.174 25.034 70.496 24.516 70.93 24.138C71.35 23.76 71.882 23.494 72.512 23.354C73.142 23.214 73.87 23.13 74.696 23.13C75.508 23.13 76.222 23.214 76.866 23.354C77.496 23.494 78.028 23.76 78.462 24.138C78.882 24.516 79.218 25.034 79.442 25.678C79.666 26.336 79.778 27.176 79.778 28.184C79.778 29.164 79.666 29.976 79.456 30.62C79.246 31.264 78.938 31.782 78.518 32.16C78.098 32.552 77.566 32.818 76.936 32.972C76.292 33.14 75.55 33.21 74.696 33.21ZM74.696 31.53C75.228 31.53 75.704 31.502 76.096 31.418C76.488 31.334 76.824 31.18 77.076 30.942C77.328 30.704 77.524 30.368 77.65 29.92C77.776 29.486 77.846 28.912 77.846 28.184C77.846 27.442 77.776 26.854 77.65 26.406C77.524 25.958 77.328 25.622 77.076 25.384C76.81 25.146 76.474 24.992 76.082 24.922C75.69 24.852 75.228 24.81 74.696 24.81C74.15 24.81 73.674 24.852 73.282 24.922C72.89 24.992 72.554 25.146 72.302 25.37C72.036 25.608 71.84 25.944 71.714 26.392C71.588 26.84 71.532 27.442 71.532 28.184C71.532 28.912 71.588 29.486 71.714 29.92C71.84 30.368 72.036 30.704 72.302 30.942C72.554 31.18 72.89 31.334 73.282 31.418C73.674 31.502 74.15 31.53 74.696 31.53ZM83.0467 27.33H88.1847V23.34H90.0887V33H88.1847V29.038H83.0467V33H81.1427V23.34H83.0467V27.33ZM96.5437 33.21C95.6757 33.21 94.9337 33.14 94.3037 32.972C93.6597 32.818 93.1417 32.552 92.7217 32.16C92.3017 31.782 91.9797 31.264 91.7697 30.62C91.5597 29.976 91.4617 29.164 91.4617 28.184C91.4617 27.176 91.5737 26.336 91.7977 25.678C92.0217 25.034 92.3437 24.516 92.7777 24.138C93.1977 23.76 93.7297 23.494 94.3597 23.354C94.9897 23.214 95.7177 23.13 96.5437 23.13C97.3557 23.13 98.0697 23.214 98.7137 23.354C99.3437 23.494 99.8757 23.76 100.31 24.138C100.73 24.516 101.066 25.034 101.29 25.678C101.514 26.336 101.626 27.176 101.626 28.184C101.626 29.164 101.514 29.976 101.304 30.62C101.094 31.264 100.786 31.782 100.366 32.16C99.9457 32.552 99.4137 32.818 98.7837 32.972C98.1397 33.14 97.3977 33.21 96.5437 33.21ZM96.5437 31.53C97.0757 31.53 97.5517 31.502 97.9437 31.418C98.3357 31.334 98.6717 31.18 98.9237 30.942C99.1757 30.704 99.3717 30.368 99.4977 29.92C99.6237 29.486 99.6937 28.912 99.6937 28.184C99.6937 27.442 99.6237 26.854 99.4977 26.406C99.3717 25.958 99.1757 25.622 98.9237 25.384C98.6577 25.146 98.3217 24.992 97.9297 24.922C97.5377 24.852 97.0757 24.81 96.5437 24.81C95.9977 24.81 95.5217 24.852 95.1297 24.922C94.7377 24.992 94.4017 25.146 94.1497 25.37C93.8837 25.608 93.6877 25.944 93.5617 26.392C93.4357 26.84 93.3797 27.442 93.3797 28.184C93.3797 28.912 93.4357 29.486 93.5617 29.92C93.6877 30.368 93.8837 30.704 94.1497 30.942C94.4017 31.18 94.7377 31.334 95.1297 31.418C95.5217 31.502 95.9977 31.53 96.5437 31.53ZM104.894 26.294V33H102.99V23.34H104.446L108.38 27.722L112.258 23.34H113.7V33H111.796V26.322L108.352 30.046L104.894 26.294Z" fill="#171717"></path>
</svg>

                                        </div>

                                        <div class="product-itm__dop-attr">
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">вес</div>
                                                <div class="product-itm__dop-attr__itm__val">35,2 кг</div>
                                            </div>
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">площадь</div>
                                                <div class="product-itm__dop-attr__itm__val">80&nbsp;м<sup>2</sup></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">пог. метр</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/like.svg" class="product-itm-label__ico svg replaced-svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 8L7.375 3L9.0625 4.11111V6.88889H12.4375L13 8L11.5938 13H6.8125L5.125 12.4444H4V8ZM5.125 11.3333H5.30756L6.99506 11.8889H10.7387L11.8002 8.11453L11.7422 8H7.9375V4.70576L7.68702 4.54083L5.125 8.33642V11.3333Z" fill="#F5333F"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.8 7.27273H3.2V11.7273H3.8V7.27273ZM2 6V13H5V6H2Z" fill="#F5333F"></path>
</svg>
                                        <span class="product-itm-label__text">рекомендуем</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--dark">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">уп.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
                                            <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
                                            <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
                                            <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
                                            <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
                                        </svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--discount">
                                        <img alt="" class="svg" src="../img/ico/receipt-tax.svg">
                                        <span class="product-itm-label__text">уцененный</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--promo">
                                        <img alt="" class="svg" src="../img/ico/actions.svg">
                                        <span class="product-itm-label__text">акция</span>
                                    </span>

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="product-itm-label__ico svg star star--full  replaced-svg">
                                    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
                                    <g clip-path="url(#clip0_6388_53053)">
                                        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFCF3C"></stop>
                                            <stop offset="1" stop-color="#FFD500"></stop>
                                        </linearGradient>
                                        <clipPath id="clip0_6388_53053">
                                            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
                                        </clipPath>
    </defs>
</svg>
                                        <span class="product-itm-label__text">хит сезона</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="pack">шт.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price">986 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--dark product-itm-label--main">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                                <span class="product-itm-buy-type">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/roll-ico.svg" class="svg replaced-svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45314 1L17.1487 1.77651L23 9.22236L20.0298 17.1793L12.8589 19.9479L5.53686 17.121L4.6695 9.80151L8.20285 5.24611L14.3819 4.83227L18.5321 8.72368L17.1236 14.0065L12.8323 15.7948L8.79596 13.9025V10.1021H10.9821V12.5674L12.8856 13.4598L15.2765 12.4634L16.0954 9.39209L13.5634 7.01794L9.34782 7.30028L6.94139 10.4028L7.55897 15.6144L12.8589 17.6607L18.31 15.5561L20.5372 9.58959L15.9939 3.80814L9.09753 3.1923L4.5086 6.57306L3.18617 10.448V15.0198L5.13511 18.0654L9.12917 20.8742H21.7686V23H8.42149L3.50589 19.5432L1 15.6271V10.1044L2.64746 5.27715L8.45314 1Z" fill="#171717"></path>
</svg>
                                </span>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. 169000000000001170</div>
                                <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                    <div class="product-itm__desc__dop">
                                        <div class="product-itm-buy-type-long">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="40" viewBox="0 0 124 40" fill="none" data-src="../img/ico/roll-buy.svg" class="svg replaced-svg">
    <rect width="124" height="40" rx="2" fill="white"></rect>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4531 9L25.1487 9.77651L31 17.2224L28.0298 25.1793L20.8589 27.9479L13.5369 25.121L12.6695 17.8015L16.2028 13.2461L22.3819 12.8323L26.5321 16.7237L25.1236 22.0065L20.8323 23.7948L16.796 21.9025V18.1021H18.9821V20.5674L20.8856 21.4598L23.2765 20.4634L24.0954 17.3921L21.5634 15.0179L17.3478 15.3003L14.9414 18.4028L15.559 23.6144L20.8589 25.6607L26.31 23.5561L28.5372 17.5896L23.9939 11.8081L17.0975 11.1923L12.5086 14.5731L11.1862 18.448V23.0198L13.1351 26.0654L17.1292 28.8742H29.7686V31H16.4215L11.5059 27.5432L9 23.6271V18.1044L10.6475 13.2772L16.4531 9Z" fill="#171717"></path>
    <path d="M40.812 10H47.322V17H46.09V11.05H42.044V17H40.812V10ZM52.8248 17.21C52.2368 17.21 51.7188 17.112 51.2848 16.888C50.8508 16.664 50.5288 16.314 50.3188 15.838H50.1788V19.52H48.9468V10H50.1788V11.162H50.3188C50.5288 10.686 50.8508 10.35 51.2848 10.126C51.7188 9.902 52.2368 9.79 52.8248 9.79C53.3288 9.79 53.7768 9.846 54.1688 9.958C54.5608 10.07 54.8828 10.252 55.1628 10.532C55.4288 10.812 55.6388 11.19 55.7788 11.666C55.9188 12.142 56.0028 12.758 56.0028 13.5C56.0028 14.256 55.9188 14.872 55.7788 15.348C55.6388 15.824 55.4288 16.202 55.1628 16.482C54.8828 16.762 54.5608 16.944 54.1688 17.056C53.7768 17.168 53.3288 17.21 52.8248 17.21ZM52.3628 10.84C52.0828 10.84 51.8028 10.868 51.5508 10.91C51.2848 10.952 51.0468 11.036 50.8508 11.162C50.6548 11.288 50.4868 11.456 50.3608 11.68C50.2348 11.904 50.1788 12.198 50.1788 12.562V14.438C50.1788 14.802 50.2348 15.096 50.3608 15.32C50.4868 15.544 50.6548 15.726 50.8508 15.852C51.0468 15.978 51.2848 16.062 51.5508 16.104C51.8028 16.146 52.0828 16.16 52.3628 16.16C52.7968 16.16 53.1748 16.132 53.4828 16.076C53.7908 16.02 54.0288 15.908 54.2248 15.712C54.4208 15.53 54.5608 15.264 54.6448 14.914C54.7288 14.564 54.7848 14.088 54.7848 13.5C54.7848 12.912 54.7288 12.45 54.6448 12.1C54.5608 11.75 54.4208 11.484 54.2248 11.288C54.0288 11.106 53.7908 10.98 53.4828 10.924C53.1748 10.868 52.7968 10.84 52.3628 10.84ZM60.812 16.16C61.176 16.16 61.512 16.132 61.82 16.062C62.114 15.992 62.366 15.866 62.576 15.67C62.786 15.474 62.954 15.208 63.066 14.872C63.178 14.536 63.234 14.088 63.234 13.542C63.234 12.982 63.178 12.534 63.066 12.184C62.954 11.834 62.786 11.554 62.576 11.358C62.366 11.162 62.114 11.022 61.82 10.952C61.512 10.882 61.176 10.84 60.812 10.84C60.434 10.84 60.098 10.882 59.804 10.952C59.496 11.022 59.244 11.148 59.048 11.344C58.838 11.54 58.684 11.82 58.572 12.17C58.46 12.534 58.404 12.982 58.404 13.542C58.404 14.088 58.46 14.536 58.572 14.872C58.684 15.208 58.838 15.474 59.048 15.67C59.244 15.866 59.496 15.992 59.804 16.062C60.098 16.132 60.434 16.16 60.812 16.16ZM60.812 9.79C61.372 9.79 61.89 9.86 62.338 9.972C62.786 10.098 63.178 10.308 63.486 10.588C63.794 10.882 64.032 11.274 64.2 11.75C64.368 12.226 64.452 12.828 64.452 13.542C64.452 14.242 64.368 14.83 64.2 15.292C64.032 15.768 63.794 16.146 63.486 16.426C63.178 16.706 62.786 16.916 62.338 17.028C61.89 17.154 61.372 17.21 60.812 17.21C60.238 17.21 59.734 17.154 59.286 17.028C58.838 16.916 58.446 16.706 58.138 16.426C57.83 16.146 57.592 15.768 57.424 15.292C57.256 14.83 57.172 14.242 57.172 13.542C57.172 12.828 57.256 12.226 57.424 11.75C57.592 11.274 57.83 10.882 58.138 10.588C58.446 10.308 58.838 10.098 59.286 9.972C59.734 9.86 60.238 9.79 60.812 9.79ZM66.6045 10H72.3445V15.95H73.5065V19.1H72.2745V17H66.2265V19.1H64.9945V15.95H65.7505C65.9325 15.852 66.0725 15.684 66.1845 15.432C66.2965 15.194 66.3805 14.9 66.4505 14.564C66.5065 14.228 66.5485 13.864 66.5765 13.444C66.5905 13.038 66.6045 12.618 66.6045 12.184V10ZM67.7945 12.352C67.7945 13.276 67.7245 14.018 67.6125 14.592C67.5005 15.18 67.3465 15.628 67.1645 15.95H71.1125V11.05H67.7945V12.352ZM76.7822 17.21C76.3902 17.21 76.0402 17.182 75.7182 17.098C75.3962 17.014 75.1162 16.888 74.8922 16.706C74.6542 16.538 74.4722 16.3 74.3462 16.02C74.2062 15.74 74.1502 15.39 74.1502 14.984C74.1502 14.746 74.1782 14.494 74.2622 14.242C74.3462 13.99 74.4862 13.752 74.7102 13.542C74.9202 13.332 75.2142 13.164 75.5922 13.024C75.9702 12.898 76.4602 12.828 77.0622 12.828C77.3422 12.828 77.5802 12.842 77.8042 12.842C78.0282 12.842 78.2242 12.856 78.4202 12.856C78.6022 12.87 78.7842 12.884 78.9662 12.884C79.1482 12.898 79.3442 12.912 79.5682 12.912V12.324C79.5682 11.792 79.4142 11.414 79.1062 11.19C78.7982 10.966 78.3082 10.84 77.6082 10.84C77.3002 10.84 77.0202 10.868 76.7962 10.896C76.5582 10.938 76.3622 11.008 76.1942 11.12C76.0262 11.232 75.9002 11.372 75.8022 11.554C75.6902 11.736 75.6202 11.96 75.5782 12.24H74.3882C74.4442 11.778 74.5562 11.386 74.7242 11.078C74.8922 10.77 75.1022 10.518 75.3682 10.322C75.6342 10.14 75.9562 10 76.3342 9.916C76.6982 9.832 77.1322 9.79 77.6082 9.79C78.6022 9.79 79.3862 9.986 79.9462 10.378C80.5062 10.77 80.8002 11.428 80.8002 12.324V17H79.5682V15.838H79.4282C79.2042 16.314 78.8542 16.664 78.3782 16.888C77.9022 17.112 77.3702 17.21 76.7822 17.21ZM77.1882 16.16C77.4682 16.16 77.7342 16.146 78.0142 16.104C78.2942 16.062 78.5462 15.978 78.7702 15.866C78.9942 15.754 79.1762 15.586 79.3162 15.376C79.4562 15.166 79.5402 14.886 79.5682 14.55V13.822C79.1762 13.808 78.7982 13.794 78.4622 13.78C78.1262 13.78 77.8182 13.766 77.5382 13.766C77.0622 13.766 76.6702 13.808 76.3902 13.864C76.1102 13.934 75.8862 14.018 75.7462 14.13C75.5922 14.242 75.4942 14.382 75.4522 14.522C75.3962 14.662 75.3822 14.816 75.3822 14.97C75.3822 15.432 75.5222 15.74 75.8162 15.908C76.1102 16.076 76.5722 16.16 77.1882 16.16ZM89.2062 13.962H83.3962C83.3962 14.41 83.4662 14.788 83.5782 15.068C83.6902 15.348 83.8582 15.572 84.0682 15.74C84.2782 15.908 84.5302 16.02 84.8242 16.076C85.1182 16.132 85.4402 16.16 85.8042 16.16C86.0842 16.16 86.3362 16.146 86.5882 16.104C86.8262 16.076 87.0362 16.006 87.2322 15.908C87.4282 15.824 87.5822 15.698 87.7222 15.53C87.8482 15.362 87.9322 15.152 87.9882 14.886H89.2062C89.1362 15.32 89.0102 15.684 88.8142 15.978C88.6182 16.286 88.3802 16.524 88.0862 16.706C87.7922 16.888 87.4562 17.014 87.0782 17.098C86.6862 17.182 86.2662 17.21 85.8042 17.21C85.2302 17.21 84.7262 17.154 84.2782 17.028C83.8302 16.916 83.4382 16.706 83.1302 16.426C82.8222 16.146 82.5842 15.768 82.4162 15.292C82.2482 14.83 82.1642 14.242 82.1642 13.542C82.1642 12.828 82.2482 12.226 82.4162 11.75C82.5842 11.274 82.8222 10.882 83.1302 10.588C83.4382 10.308 83.8162 10.098 84.2642 9.972C84.7122 9.86 85.2162 9.79 85.7762 9.79C86.8402 9.79 87.6802 10.056 88.2962 10.588C88.8982 11.12 89.2062 11.932 89.2062 13.024V13.962ZM85.7762 10.84C85.4402 10.84 85.1462 10.868 84.8662 10.924C84.5862 10.98 84.3342 11.092 84.1242 11.246C83.9142 11.4 83.7462 11.61 83.6202 11.89C83.4942 12.17 83.4242 12.52 83.4102 12.968H87.9602C87.9602 12.548 87.9042 12.212 87.7922 11.932C87.6802 11.652 87.5402 11.442 87.3442 11.274C87.1482 11.12 86.9242 11.008 86.6582 10.938C86.3922 10.882 86.0982 10.84 85.7762 10.84ZM96.0823 10V11.05H93.5343V17H92.3023V11.05H89.7543V10H96.0823ZM103.534 14.718C103.464 15.194 103.338 15.586 103.142 15.894C102.946 16.216 102.708 16.468 102.414 16.664C102.12 16.86 101.784 17 101.406 17.084C101.014 17.168 100.594 17.21 100.132 17.21C99.5583 17.21 99.0543 17.154 98.6063 17.028C98.1583 16.916 97.7663 16.706 97.4583 16.426C97.1503 16.146 96.9123 15.768 96.7443 15.292C96.5763 14.83 96.4923 14.242 96.4923 13.542C96.4923 12.828 96.5763 12.226 96.7443 11.75C96.9123 11.274 97.1503 10.882 97.4583 10.588C97.7663 10.308 98.1583 10.098 98.6063 9.972C99.0543 9.86 99.5583 9.79 100.132 9.79C100.58 9.79 100.986 9.832 101.378 9.916C101.756 10 102.092 10.14 102.372 10.322C102.652 10.518 102.89 10.77 103.086 11.078C103.282 11.386 103.408 11.778 103.492 12.24H102.26C102.204 11.96 102.106 11.736 101.98 11.554C101.84 11.372 101.686 11.232 101.504 11.12C101.308 11.008 101.098 10.938 100.874 10.896C100.65 10.868 100.398 10.84 100.132 10.84C99.7543 10.84 99.4183 10.882 99.1243 10.952C98.8163 11.022 98.5643 11.148 98.3683 11.344C98.1583 11.54 98.0043 11.82 97.8923 12.17C97.7803 12.534 97.7243 12.982 97.7243 13.542C97.7243 14.088 97.7803 14.536 97.8923 14.872C98.0043 15.208 98.1583 15.474 98.3683 15.67C98.5643 15.866 98.8163 15.992 99.1243 16.062C99.4183 16.132 99.7543 16.16 100.132 16.16C100.412 16.16 100.664 16.146 100.916 16.104C101.154 16.062 101.364 15.992 101.56 15.88C101.742 15.768 101.896 15.628 102.036 15.432C102.162 15.25 102.26 15.012 102.316 14.718H103.534ZM109.766 14.494H107.428L105.86 17H104.404L106.196 14.382C105.706 14.242 105.342 13.99 105.104 13.598C104.852 13.206 104.74 12.744 104.74 12.212C104.74 11.904 104.782 11.624 104.866 11.344C104.95 11.078 105.076 10.84 105.272 10.644C105.468 10.448 105.72 10.294 106.028 10.182C106.336 10.07 106.714 10 107.162 10H110.998V17H109.766V14.494ZM105.958 12.212C105.958 12.548 106.028 12.828 106.182 13.08C106.322 13.332 106.602 13.444 107.008 13.444H109.766V11.05H107.26C106.98 11.05 106.756 11.078 106.588 11.134C106.42 11.19 106.28 11.274 106.196 11.372C106.098 11.484 106.028 11.61 106 11.75C105.972 11.89 105.958 12.044 105.958 12.212Z" fill="#171717"></path>
    <path d="M49.366 26.854C49.366 28.156 49.086 29.108 48.526 29.71C47.966 30.312 47.126 30.606 45.992 30.606H42.66V33H40.756V23.34H45.964C46.552 23.34 47.07 23.41 47.504 23.536C47.924 23.676 48.274 23.872 48.554 24.152C48.834 24.432 49.03 24.796 49.17 25.244C49.296 25.692 49.366 26.224 49.366 26.854ZM42.66 24.978V28.968H45.67C46.258 28.968 46.692 28.814 46.986 28.506C47.28 28.198 47.434 27.666 47.434 26.882C47.434 26.504 47.392 26.196 47.336 25.944C47.28 25.706 47.182 25.51 47.042 25.37C46.902 25.23 46.706 25.118 46.482 25.062C46.258 25.006 45.978 24.978 45.642 24.978H42.66ZM52.5237 33L53.7697 30.802L49.5977 23.34H51.8797L54.8057 28.954L57.4797 23.34H59.6077L54.7077 33H52.5237ZM62.4329 27.204C62.4329 28.296 62.3769 29.22 62.2929 29.948C62.1949 30.69 62.0409 31.292 61.8449 31.74C61.6489 32.188 61.3829 32.51 61.0469 32.706C60.7109 32.902 60.3189 33 59.8429 33H59.2829V31.334C59.5629 31.334 59.7869 31.278 59.9689 31.138C60.1369 30.998 60.2769 30.76 60.3889 30.424C60.4869 30.088 60.5569 29.612 60.5989 29.024C60.6269 28.436 60.6549 27.694 60.6549 26.784V23.34H68.2569V33H66.3389V25.048H62.4329V27.204ZM74.696 33.21C73.828 33.21 73.086 33.14 72.456 32.972C71.812 32.818 71.294 32.552 70.874 32.16C70.454 31.782 70.132 31.264 69.922 30.62C69.712 29.976 69.614 29.164 69.614 28.184C69.614 27.176 69.726 26.336 69.95 25.678C70.174 25.034 70.496 24.516 70.93 24.138C71.35 23.76 71.882 23.494 72.512 23.354C73.142 23.214 73.87 23.13 74.696 23.13C75.508 23.13 76.222 23.214 76.866 23.354C77.496 23.494 78.028 23.76 78.462 24.138C78.882 24.516 79.218 25.034 79.442 25.678C79.666 26.336 79.778 27.176 79.778 28.184C79.778 29.164 79.666 29.976 79.456 30.62C79.246 31.264 78.938 31.782 78.518 32.16C78.098 32.552 77.566 32.818 76.936 32.972C76.292 33.14 75.55 33.21 74.696 33.21ZM74.696 31.53C75.228 31.53 75.704 31.502 76.096 31.418C76.488 31.334 76.824 31.18 77.076 30.942C77.328 30.704 77.524 30.368 77.65 29.92C77.776 29.486 77.846 28.912 77.846 28.184C77.846 27.442 77.776 26.854 77.65 26.406C77.524 25.958 77.328 25.622 77.076 25.384C76.81 25.146 76.474 24.992 76.082 24.922C75.69 24.852 75.228 24.81 74.696 24.81C74.15 24.81 73.674 24.852 73.282 24.922C72.89 24.992 72.554 25.146 72.302 25.37C72.036 25.608 71.84 25.944 71.714 26.392C71.588 26.84 71.532 27.442 71.532 28.184C71.532 28.912 71.588 29.486 71.714 29.92C71.84 30.368 72.036 30.704 72.302 30.942C72.554 31.18 72.89 31.334 73.282 31.418C73.674 31.502 74.15 31.53 74.696 31.53ZM83.0467 27.33H88.1847V23.34H90.0887V33H88.1847V29.038H83.0467V33H81.1427V23.34H83.0467V27.33ZM96.5437 33.21C95.6757 33.21 94.9337 33.14 94.3037 32.972C93.6597 32.818 93.1417 32.552 92.7217 32.16C92.3017 31.782 91.9797 31.264 91.7697 30.62C91.5597 29.976 91.4617 29.164 91.4617 28.184C91.4617 27.176 91.5737 26.336 91.7977 25.678C92.0217 25.034 92.3437 24.516 92.7777 24.138C93.1977 23.76 93.7297 23.494 94.3597 23.354C94.9897 23.214 95.7177 23.13 96.5437 23.13C97.3557 23.13 98.0697 23.214 98.7137 23.354C99.3437 23.494 99.8757 23.76 100.31 24.138C100.73 24.516 101.066 25.034 101.29 25.678C101.514 26.336 101.626 27.176 101.626 28.184C101.626 29.164 101.514 29.976 101.304 30.62C101.094 31.264 100.786 31.782 100.366 32.16C99.9457 32.552 99.4137 32.818 98.7837 32.972C98.1397 33.14 97.3977 33.21 96.5437 33.21ZM96.5437 31.53C97.0757 31.53 97.5517 31.502 97.9437 31.418C98.3357 31.334 98.6717 31.18 98.9237 30.942C99.1757 30.704 99.3717 30.368 99.4977 29.92C99.6237 29.486 99.6937 28.912 99.6937 28.184C99.6937 27.442 99.6237 26.854 99.4977 26.406C99.3717 25.958 99.1757 25.622 98.9237 25.384C98.6577 25.146 98.3217 24.992 97.9297 24.922C97.5377 24.852 97.0757 24.81 96.5437 24.81C95.9977 24.81 95.5217 24.852 95.1297 24.922C94.7377 24.992 94.4017 25.146 94.1497 25.37C93.8837 25.608 93.6877 25.944 93.5617 26.392C93.4357 26.84 93.3797 27.442 93.3797 28.184C93.3797 28.912 93.4357 29.486 93.5617 29.92C93.6877 30.368 93.8837 30.704 94.1497 30.942C94.4017 31.18 94.7377 31.334 95.1297 31.418C95.5217 31.502 95.9977 31.53 96.5437 31.53ZM104.894 26.294V33H102.99V23.34H104.446L108.38 27.722L112.258 23.34H113.7V33H111.796V26.322L108.352 30.046L104.894 26.294Z" fill="#171717"></path>
</svg>

                                        </div>

                                        <div class="product-itm__dop-attr">
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">вес</div>
                                                <div class="product-itm__dop-attr__itm__val">35,2 кг</div>
                                            </div>
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">площадь</div>
                                                <div class="product-itm__dop-attr__itm__val">80&nbsp;м<sup>2</sup></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">пог. метр</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                </section>

                <section class="section-margin js-scroll-section" id="catalog-related">
                    <h3 class="title-margin">Похожие товары</h3>

                    <div class="product-slider owl-loaded owl-drag">

                        

                        

                        

                        

                        

                        

                        

                        

                        

                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2731px;"><div class="owl-item active" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="1">
                                    <div class="product-itm-images-stage" style="transform: translateX(-234.844px);">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot active"></span><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/like.svg" class="product-itm-label__ico svg replaced-svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 8L7.375 3L9.0625 4.11111V6.88889H12.4375L13 8L11.5938 13H6.8125L5.125 12.4444H4V8ZM5.125 11.3333H5.30756L6.99506 11.8889H10.7387L11.8002 8.11453L11.7422 8H7.9375V4.70576L7.68702 4.54083L5.125 8.33642V11.3333Z" fill="#F5333F"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.8 7.27273H3.2V11.7273H3.8V7.27273ZM2 6V13H5V6H2Z" fill="#F5333F"></path>
</svg>
                                        <span class="product-itm-label__text">рекомендуем</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--dark">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">уп.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item active" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="0">
                                    <div class="product-itm-images-stage" style="transform: translateX(0px);">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot active"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--discount">
                                        <img alt="" class="svg" src="../img/ico/receipt-tax.svg">
                                        <span class="product-itm-label__text">уцененный</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--promo">
                                        <img alt="" class="svg" src="../img/ico/actions.svg">
                                        <span class="product-itm-label__text">акция</span>
                                    </span>

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="product-itm-label__ico svg star star--full  replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                        <span class="product-itm-label__text">хит сезона</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="pack">шт.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price">986 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item active" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="2">
                                    <div class="product-itm-images-stage" style="transform: translateX(-469.688px);">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot active"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--dark product-itm-label--main">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                                <span class="product-itm-buy-type">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/roll-ico.svg" class="svg replaced-svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45314 1L17.1487 1.77651L23 9.22236L20.0298 17.1793L12.8589 19.9479L5.53686 17.121L4.6695 9.80151L8.20285 5.24611L14.3819 4.83227L18.5321 8.72368L17.1236 14.0065L12.8323 15.7948L8.79596 13.9025V10.1021H10.9821V12.5674L12.8856 13.4598L15.2765 12.4634L16.0954 9.39209L13.5634 7.01794L9.34782 7.30028L6.94139 10.4028L7.55897 15.6144L12.8589 17.6607L18.31 15.5561L20.5372 9.58959L15.9939 3.80814L9.09753 3.1923L4.5086 6.57306L3.18617 10.448V15.0198L5.13511 18.0654L9.12917 20.8742H21.7686V23H8.42149L3.50589 19.5432L1 15.6271V10.1044L2.64746 5.27715L8.45314 1Z" fill="#171717"></path>
</svg>
                                </span>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. 169000000000001170</div>
                                <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                    <div class="product-itm__desc__dop">
                                        <div class="product-itm-buy-type-long">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="40" viewBox="0 0 124 40" fill="none" data-src="../img/ico/roll-buy.svg" class="svg replaced-svg">
    <rect width="124" height="40" rx="2" fill="white"></rect>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4531 9L25.1487 9.77651L31 17.2224L28.0298 25.1793L20.8589 27.9479L13.5369 25.121L12.6695 17.8015L16.2028 13.2461L22.3819 12.8323L26.5321 16.7237L25.1236 22.0065L20.8323 23.7948L16.796 21.9025V18.1021H18.9821V20.5674L20.8856 21.4598L23.2765 20.4634L24.0954 17.3921L21.5634 15.0179L17.3478 15.3003L14.9414 18.4028L15.559 23.6144L20.8589 25.6607L26.31 23.5561L28.5372 17.5896L23.9939 11.8081L17.0975 11.1923L12.5086 14.5731L11.1862 18.448V23.0198L13.1351 26.0654L17.1292 28.8742H29.7686V31H16.4215L11.5059 27.5432L9 23.6271V18.1044L10.6475 13.2772L16.4531 9Z" fill="#171717"></path>
    <path d="M40.812 10H47.322V17H46.09V11.05H42.044V17H40.812V10ZM52.8248 17.21C52.2368 17.21 51.7188 17.112 51.2848 16.888C50.8508 16.664 50.5288 16.314 50.3188 15.838H50.1788V19.52H48.9468V10H50.1788V11.162H50.3188C50.5288 10.686 50.8508 10.35 51.2848 10.126C51.7188 9.902 52.2368 9.79 52.8248 9.79C53.3288 9.79 53.7768 9.846 54.1688 9.958C54.5608 10.07 54.8828 10.252 55.1628 10.532C55.4288 10.812 55.6388 11.19 55.7788 11.666C55.9188 12.142 56.0028 12.758 56.0028 13.5C56.0028 14.256 55.9188 14.872 55.7788 15.348C55.6388 15.824 55.4288 16.202 55.1628 16.482C54.8828 16.762 54.5608 16.944 54.1688 17.056C53.7768 17.168 53.3288 17.21 52.8248 17.21ZM52.3628 10.84C52.0828 10.84 51.8028 10.868 51.5508 10.91C51.2848 10.952 51.0468 11.036 50.8508 11.162C50.6548 11.288 50.4868 11.456 50.3608 11.68C50.2348 11.904 50.1788 12.198 50.1788 12.562V14.438C50.1788 14.802 50.2348 15.096 50.3608 15.32C50.4868 15.544 50.6548 15.726 50.8508 15.852C51.0468 15.978 51.2848 16.062 51.5508 16.104C51.8028 16.146 52.0828 16.16 52.3628 16.16C52.7968 16.16 53.1748 16.132 53.4828 16.076C53.7908 16.02 54.0288 15.908 54.2248 15.712C54.4208 15.53 54.5608 15.264 54.6448 14.914C54.7288 14.564 54.7848 14.088 54.7848 13.5C54.7848 12.912 54.7288 12.45 54.6448 12.1C54.5608 11.75 54.4208 11.484 54.2248 11.288C54.0288 11.106 53.7908 10.98 53.4828 10.924C53.1748 10.868 52.7968 10.84 52.3628 10.84ZM60.812 16.16C61.176 16.16 61.512 16.132 61.82 16.062C62.114 15.992 62.366 15.866 62.576 15.67C62.786 15.474 62.954 15.208 63.066 14.872C63.178 14.536 63.234 14.088 63.234 13.542C63.234 12.982 63.178 12.534 63.066 12.184C62.954 11.834 62.786 11.554 62.576 11.358C62.366 11.162 62.114 11.022 61.82 10.952C61.512 10.882 61.176 10.84 60.812 10.84C60.434 10.84 60.098 10.882 59.804 10.952C59.496 11.022 59.244 11.148 59.048 11.344C58.838 11.54 58.684 11.82 58.572 12.17C58.46 12.534 58.404 12.982 58.404 13.542C58.404 14.088 58.46 14.536 58.572 14.872C58.684 15.208 58.838 15.474 59.048 15.67C59.244 15.866 59.496 15.992 59.804 16.062C60.098 16.132 60.434 16.16 60.812 16.16ZM60.812 9.79C61.372 9.79 61.89 9.86 62.338 9.972C62.786 10.098 63.178 10.308 63.486 10.588C63.794 10.882 64.032 11.274 64.2 11.75C64.368 12.226 64.452 12.828 64.452 13.542C64.452 14.242 64.368 14.83 64.2 15.292C64.032 15.768 63.794 16.146 63.486 16.426C63.178 16.706 62.786 16.916 62.338 17.028C61.89 17.154 61.372 17.21 60.812 17.21C60.238 17.21 59.734 17.154 59.286 17.028C58.838 16.916 58.446 16.706 58.138 16.426C57.83 16.146 57.592 15.768 57.424 15.292C57.256 14.83 57.172 14.242 57.172 13.542C57.172 12.828 57.256 12.226 57.424 11.75C57.592 11.274 57.83 10.882 58.138 10.588C58.446 10.308 58.838 10.098 59.286 9.972C59.734 9.86 60.238 9.79 60.812 9.79ZM66.6045 10H72.3445V15.95H73.5065V19.1H72.2745V17H66.2265V19.1H64.9945V15.95H65.7505C65.9325 15.852 66.0725 15.684 66.1845 15.432C66.2965 15.194 66.3805 14.9 66.4505 14.564C66.5065 14.228 66.5485 13.864 66.5765 13.444C66.5905 13.038 66.6045 12.618 66.6045 12.184V10ZM67.7945 12.352C67.7945 13.276 67.7245 14.018 67.6125 14.592C67.5005 15.18 67.3465 15.628 67.1645 15.95H71.1125V11.05H67.7945V12.352ZM76.7822 17.21C76.3902 17.21 76.0402 17.182 75.7182 17.098C75.3962 17.014 75.1162 16.888 74.8922 16.706C74.6542 16.538 74.4722 16.3 74.3462 16.02C74.2062 15.74 74.1502 15.39 74.1502 14.984C74.1502 14.746 74.1782 14.494 74.2622 14.242C74.3462 13.99 74.4862 13.752 74.7102 13.542C74.9202 13.332 75.2142 13.164 75.5922 13.024C75.9702 12.898 76.4602 12.828 77.0622 12.828C77.3422 12.828 77.5802 12.842 77.8042 12.842C78.0282 12.842 78.2242 12.856 78.4202 12.856C78.6022 12.87 78.7842 12.884 78.9662 12.884C79.1482 12.898 79.3442 12.912 79.5682 12.912V12.324C79.5682 11.792 79.4142 11.414 79.1062 11.19C78.7982 10.966 78.3082 10.84 77.6082 10.84C77.3002 10.84 77.0202 10.868 76.7962 10.896C76.5582 10.938 76.3622 11.008 76.1942 11.12C76.0262 11.232 75.9002 11.372 75.8022 11.554C75.6902 11.736 75.6202 11.96 75.5782 12.24H74.3882C74.4442 11.778 74.5562 11.386 74.7242 11.078C74.8922 10.77 75.1022 10.518 75.3682 10.322C75.6342 10.14 75.9562 10 76.3342 9.916C76.6982 9.832 77.1322 9.79 77.6082 9.79C78.6022 9.79 79.3862 9.986 79.9462 10.378C80.5062 10.77 80.8002 11.428 80.8002 12.324V17H79.5682V15.838H79.4282C79.2042 16.314 78.8542 16.664 78.3782 16.888C77.9022 17.112 77.3702 17.21 76.7822 17.21ZM77.1882 16.16C77.4682 16.16 77.7342 16.146 78.0142 16.104C78.2942 16.062 78.5462 15.978 78.7702 15.866C78.9942 15.754 79.1762 15.586 79.3162 15.376C79.4562 15.166 79.5402 14.886 79.5682 14.55V13.822C79.1762 13.808 78.7982 13.794 78.4622 13.78C78.1262 13.78 77.8182 13.766 77.5382 13.766C77.0622 13.766 76.6702 13.808 76.3902 13.864C76.1102 13.934 75.8862 14.018 75.7462 14.13C75.5922 14.242 75.4942 14.382 75.4522 14.522C75.3962 14.662 75.3822 14.816 75.3822 14.97C75.3822 15.432 75.5222 15.74 75.8162 15.908C76.1102 16.076 76.5722 16.16 77.1882 16.16ZM89.2062 13.962H83.3962C83.3962 14.41 83.4662 14.788 83.5782 15.068C83.6902 15.348 83.8582 15.572 84.0682 15.74C84.2782 15.908 84.5302 16.02 84.8242 16.076C85.1182 16.132 85.4402 16.16 85.8042 16.16C86.0842 16.16 86.3362 16.146 86.5882 16.104C86.8262 16.076 87.0362 16.006 87.2322 15.908C87.4282 15.824 87.5822 15.698 87.7222 15.53C87.8482 15.362 87.9322 15.152 87.9882 14.886H89.2062C89.1362 15.32 89.0102 15.684 88.8142 15.978C88.6182 16.286 88.3802 16.524 88.0862 16.706C87.7922 16.888 87.4562 17.014 87.0782 17.098C86.6862 17.182 86.2662 17.21 85.8042 17.21C85.2302 17.21 84.7262 17.154 84.2782 17.028C83.8302 16.916 83.4382 16.706 83.1302 16.426C82.8222 16.146 82.5842 15.768 82.4162 15.292C82.2482 14.83 82.1642 14.242 82.1642 13.542C82.1642 12.828 82.2482 12.226 82.4162 11.75C82.5842 11.274 82.8222 10.882 83.1302 10.588C83.4382 10.308 83.8162 10.098 84.2642 9.972C84.7122 9.86 85.2162 9.79 85.7762 9.79C86.8402 9.79 87.6802 10.056 88.2962 10.588C88.8982 11.12 89.2062 11.932 89.2062 13.024V13.962ZM85.7762 10.84C85.4402 10.84 85.1462 10.868 84.8662 10.924C84.5862 10.98 84.3342 11.092 84.1242 11.246C83.9142 11.4 83.7462 11.61 83.6202 11.89C83.4942 12.17 83.4242 12.52 83.4102 12.968H87.9602C87.9602 12.548 87.9042 12.212 87.7922 11.932C87.6802 11.652 87.5402 11.442 87.3442 11.274C87.1482 11.12 86.9242 11.008 86.6582 10.938C86.3922 10.882 86.0982 10.84 85.7762 10.84ZM96.0823 10V11.05H93.5343V17H92.3023V11.05H89.7543V10H96.0823ZM103.534 14.718C103.464 15.194 103.338 15.586 103.142 15.894C102.946 16.216 102.708 16.468 102.414 16.664C102.12 16.86 101.784 17 101.406 17.084C101.014 17.168 100.594 17.21 100.132 17.21C99.5583 17.21 99.0543 17.154 98.6063 17.028C98.1583 16.916 97.7663 16.706 97.4583 16.426C97.1503 16.146 96.9123 15.768 96.7443 15.292C96.5763 14.83 96.4923 14.242 96.4923 13.542C96.4923 12.828 96.5763 12.226 96.7443 11.75C96.9123 11.274 97.1503 10.882 97.4583 10.588C97.7663 10.308 98.1583 10.098 98.6063 9.972C99.0543 9.86 99.5583 9.79 100.132 9.79C100.58 9.79 100.986 9.832 101.378 9.916C101.756 10 102.092 10.14 102.372 10.322C102.652 10.518 102.89 10.77 103.086 11.078C103.282 11.386 103.408 11.778 103.492 12.24H102.26C102.204 11.96 102.106 11.736 101.98 11.554C101.84 11.372 101.686 11.232 101.504 11.12C101.308 11.008 101.098 10.938 100.874 10.896C100.65 10.868 100.398 10.84 100.132 10.84C99.7543 10.84 99.4183 10.882 99.1243 10.952C98.8163 11.022 98.5643 11.148 98.3683 11.344C98.1583 11.54 98.0043 11.82 97.8923 12.17C97.7803 12.534 97.7243 12.982 97.7243 13.542C97.7243 14.088 97.7803 14.536 97.8923 14.872C98.0043 15.208 98.1583 15.474 98.3683 15.67C98.5643 15.866 98.8163 15.992 99.1243 16.062C99.4183 16.132 99.7543 16.16 100.132 16.16C100.412 16.16 100.664 16.146 100.916 16.104C101.154 16.062 101.364 15.992 101.56 15.88C101.742 15.768 101.896 15.628 102.036 15.432C102.162 15.25 102.26 15.012 102.316 14.718H103.534ZM109.766 14.494H107.428L105.86 17H104.404L106.196 14.382C105.706 14.242 105.342 13.99 105.104 13.598C104.852 13.206 104.74 12.744 104.74 12.212C104.74 11.904 104.782 11.624 104.866 11.344C104.95 11.078 105.076 10.84 105.272 10.644C105.468 10.448 105.72 10.294 106.028 10.182C106.336 10.07 106.714 10 107.162 10H110.998V17H109.766V14.494ZM105.958 12.212C105.958 12.548 106.028 12.828 106.182 13.08C106.322 13.332 106.602 13.444 107.008 13.444H109.766V11.05H107.26C106.98 11.05 106.756 11.078 106.588 11.134C106.42 11.19 106.28 11.274 106.196 11.372C106.098 11.484 106.028 11.61 106 11.75C105.972 11.89 105.958 12.044 105.958 12.212Z" fill="#171717"></path>
    <path d="M49.366 26.854C49.366 28.156 49.086 29.108 48.526 29.71C47.966 30.312 47.126 30.606 45.992 30.606H42.66V33H40.756V23.34H45.964C46.552 23.34 47.07 23.41 47.504 23.536C47.924 23.676 48.274 23.872 48.554 24.152C48.834 24.432 49.03 24.796 49.17 25.244C49.296 25.692 49.366 26.224 49.366 26.854ZM42.66 24.978V28.968H45.67C46.258 28.968 46.692 28.814 46.986 28.506C47.28 28.198 47.434 27.666 47.434 26.882C47.434 26.504 47.392 26.196 47.336 25.944C47.28 25.706 47.182 25.51 47.042 25.37C46.902 25.23 46.706 25.118 46.482 25.062C46.258 25.006 45.978 24.978 45.642 24.978H42.66ZM52.5237 33L53.7697 30.802L49.5977 23.34H51.8797L54.8057 28.954L57.4797 23.34H59.6077L54.7077 33H52.5237ZM62.4329 27.204C62.4329 28.296 62.3769 29.22 62.2929 29.948C62.1949 30.69 62.0409 31.292 61.8449 31.74C61.6489 32.188 61.3829 32.51 61.0469 32.706C60.7109 32.902 60.3189 33 59.8429 33H59.2829V31.334C59.5629 31.334 59.7869 31.278 59.9689 31.138C60.1369 30.998 60.2769 30.76 60.3889 30.424C60.4869 30.088 60.5569 29.612 60.5989 29.024C60.6269 28.436 60.6549 27.694 60.6549 26.784V23.34H68.2569V33H66.3389V25.048H62.4329V27.204ZM74.696 33.21C73.828 33.21 73.086 33.14 72.456 32.972C71.812 32.818 71.294 32.552 70.874 32.16C70.454 31.782 70.132 31.264 69.922 30.62C69.712 29.976 69.614 29.164 69.614 28.184C69.614 27.176 69.726 26.336 69.95 25.678C70.174 25.034 70.496 24.516 70.93 24.138C71.35 23.76 71.882 23.494 72.512 23.354C73.142 23.214 73.87 23.13 74.696 23.13C75.508 23.13 76.222 23.214 76.866 23.354C77.496 23.494 78.028 23.76 78.462 24.138C78.882 24.516 79.218 25.034 79.442 25.678C79.666 26.336 79.778 27.176 79.778 28.184C79.778 29.164 79.666 29.976 79.456 30.62C79.246 31.264 78.938 31.782 78.518 32.16C78.098 32.552 77.566 32.818 76.936 32.972C76.292 33.14 75.55 33.21 74.696 33.21ZM74.696 31.53C75.228 31.53 75.704 31.502 76.096 31.418C76.488 31.334 76.824 31.18 77.076 30.942C77.328 30.704 77.524 30.368 77.65 29.92C77.776 29.486 77.846 28.912 77.846 28.184C77.846 27.442 77.776 26.854 77.65 26.406C77.524 25.958 77.328 25.622 77.076 25.384C76.81 25.146 76.474 24.992 76.082 24.922C75.69 24.852 75.228 24.81 74.696 24.81C74.15 24.81 73.674 24.852 73.282 24.922C72.89 24.992 72.554 25.146 72.302 25.37C72.036 25.608 71.84 25.944 71.714 26.392C71.588 26.84 71.532 27.442 71.532 28.184C71.532 28.912 71.588 29.486 71.714 29.92C71.84 30.368 72.036 30.704 72.302 30.942C72.554 31.18 72.89 31.334 73.282 31.418C73.674 31.502 74.15 31.53 74.696 31.53ZM83.0467 27.33H88.1847V23.34H90.0887V33H88.1847V29.038H83.0467V33H81.1427V23.34H83.0467V27.33ZM96.5437 33.21C95.6757 33.21 94.9337 33.14 94.3037 32.972C93.6597 32.818 93.1417 32.552 92.7217 32.16C92.3017 31.782 91.9797 31.264 91.7697 30.62C91.5597 29.976 91.4617 29.164 91.4617 28.184C91.4617 27.176 91.5737 26.336 91.7977 25.678C92.0217 25.034 92.3437 24.516 92.7777 24.138C93.1977 23.76 93.7297 23.494 94.3597 23.354C94.9897 23.214 95.7177 23.13 96.5437 23.13C97.3557 23.13 98.0697 23.214 98.7137 23.354C99.3437 23.494 99.8757 23.76 100.31 24.138C100.73 24.516 101.066 25.034 101.29 25.678C101.514 26.336 101.626 27.176 101.626 28.184C101.626 29.164 101.514 29.976 101.304 30.62C101.094 31.264 100.786 31.782 100.366 32.16C99.9457 32.552 99.4137 32.818 98.7837 32.972C98.1397 33.14 97.3977 33.21 96.5437 33.21ZM96.5437 31.53C97.0757 31.53 97.5517 31.502 97.9437 31.418C98.3357 31.334 98.6717 31.18 98.9237 30.942C99.1757 30.704 99.3717 30.368 99.4977 29.92C99.6237 29.486 99.6937 28.912 99.6937 28.184C99.6937 27.442 99.6237 26.854 99.4977 26.406C99.3717 25.958 99.1757 25.622 98.9237 25.384C98.6577 25.146 98.3217 24.992 97.9297 24.922C97.5377 24.852 97.0757 24.81 96.5437 24.81C95.9977 24.81 95.5217 24.852 95.1297 24.922C94.7377 24.992 94.4017 25.146 94.1497 25.37C93.8837 25.608 93.6877 25.944 93.5617 26.392C93.4357 26.84 93.3797 27.442 93.3797 28.184C93.3797 28.912 93.4357 29.486 93.5617 29.92C93.6877 30.368 93.8837 30.704 94.1497 30.942C94.4017 31.18 94.7377 31.334 95.1297 31.418C95.5217 31.502 95.9977 31.53 96.5437 31.53ZM104.894 26.294V33H102.99V23.34H104.446L108.38 27.722L112.258 23.34H113.7V33H111.796V26.322L108.352 30.046L104.894 26.294Z" fill="#171717"></path>
</svg>

                                        </div>

                                        <div class="product-itm__dop-attr">
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">вес</div>
                                                <div class="product-itm__dop-attr__itm__val">35,2 кг</div>
                                            </div>
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">площадь</div>
                                                <div class="product-itm__dop-attr__itm__val">80&nbsp;м<sup>2</sup></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">пог. метр</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item active" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="1">
                                    <div class="product-itm-images-stage" style="transform: translateX(-234.844px);">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot active"></span><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/like.svg" class="product-itm-label__ico svg replaced-svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 8L7.375 3L9.0625 4.11111V6.88889H12.4375L13 8L11.5938 13H6.8125L5.125 12.4444H4V8ZM5.125 11.3333H5.30756L6.99506 11.8889H10.7387L11.8002 8.11453L11.7422 8H7.9375V4.70576L7.68702 4.54083L5.125 8.33642V11.3333Z" fill="#F5333F"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.8 7.27273H3.2V11.7273H3.8V7.27273ZM2 6V13H5V6H2Z" fill="#F5333F"></path>
</svg>
                                        <span class="product-itm-label__text">рекомендуем</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--dark">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">уп.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--discount">
                                        <img alt="" class="svg" src="../img/ico/receipt-tax.svg">
                                        <span class="product-itm-label__text">уцененный</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--promo">
                                        <img alt="" class="svg" src="../img/ico/actions.svg">
                                        <span class="product-itm-label__text">акция</span>
                                    </span>

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="product-itm-label__ico svg star star--full  replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                        <span class="product-itm-label__text">хит сезона</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="pack">шт.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price">986 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--dark product-itm-label--main">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                                <span class="product-itm-buy-type">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/roll-ico.svg" class="svg replaced-svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45314 1L17.1487 1.77651L23 9.22236L20.0298 17.1793L12.8589 19.9479L5.53686 17.121L4.6695 9.80151L8.20285 5.24611L14.3819 4.83227L18.5321 8.72368L17.1236 14.0065L12.8323 15.7948L8.79596 13.9025V10.1021H10.9821V12.5674L12.8856 13.4598L15.2765 12.4634L16.0954 9.39209L13.5634 7.01794L9.34782 7.30028L6.94139 10.4028L7.55897 15.6144L12.8589 17.6607L18.31 15.5561L20.5372 9.58959L15.9939 3.80814L9.09753 3.1923L4.5086 6.57306L3.18617 10.448V15.0198L5.13511 18.0654L9.12917 20.8742H21.7686V23H8.42149L3.50589 19.5432L1 15.6271V10.1044L2.64746 5.27715L8.45314 1Z" fill="#171717"></path>
</svg>
                                </span>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. 169000000000001170</div>
                                <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                    <div class="product-itm__desc__dop">
                                        <div class="product-itm-buy-type-long">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="40" viewBox="0 0 124 40" fill="none" data-src="../img/ico/roll-buy.svg" class="svg replaced-svg">
    <rect width="124" height="40" rx="2" fill="white"></rect>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4531 9L25.1487 9.77651L31 17.2224L28.0298 25.1793L20.8589 27.9479L13.5369 25.121L12.6695 17.8015L16.2028 13.2461L22.3819 12.8323L26.5321 16.7237L25.1236 22.0065L20.8323 23.7948L16.796 21.9025V18.1021H18.9821V20.5674L20.8856 21.4598L23.2765 20.4634L24.0954 17.3921L21.5634 15.0179L17.3478 15.3003L14.9414 18.4028L15.559 23.6144L20.8589 25.6607L26.31 23.5561L28.5372 17.5896L23.9939 11.8081L17.0975 11.1923L12.5086 14.5731L11.1862 18.448V23.0198L13.1351 26.0654L17.1292 28.8742H29.7686V31H16.4215L11.5059 27.5432L9 23.6271V18.1044L10.6475 13.2772L16.4531 9Z" fill="#171717"></path>
    <path d="M40.812 10H47.322V17H46.09V11.05H42.044V17H40.812V10ZM52.8248 17.21C52.2368 17.21 51.7188 17.112 51.2848 16.888C50.8508 16.664 50.5288 16.314 50.3188 15.838H50.1788V19.52H48.9468V10H50.1788V11.162H50.3188C50.5288 10.686 50.8508 10.35 51.2848 10.126C51.7188 9.902 52.2368 9.79 52.8248 9.79C53.3288 9.79 53.7768 9.846 54.1688 9.958C54.5608 10.07 54.8828 10.252 55.1628 10.532C55.4288 10.812 55.6388 11.19 55.7788 11.666C55.9188 12.142 56.0028 12.758 56.0028 13.5C56.0028 14.256 55.9188 14.872 55.7788 15.348C55.6388 15.824 55.4288 16.202 55.1628 16.482C54.8828 16.762 54.5608 16.944 54.1688 17.056C53.7768 17.168 53.3288 17.21 52.8248 17.21ZM52.3628 10.84C52.0828 10.84 51.8028 10.868 51.5508 10.91C51.2848 10.952 51.0468 11.036 50.8508 11.162C50.6548 11.288 50.4868 11.456 50.3608 11.68C50.2348 11.904 50.1788 12.198 50.1788 12.562V14.438C50.1788 14.802 50.2348 15.096 50.3608 15.32C50.4868 15.544 50.6548 15.726 50.8508 15.852C51.0468 15.978 51.2848 16.062 51.5508 16.104C51.8028 16.146 52.0828 16.16 52.3628 16.16C52.7968 16.16 53.1748 16.132 53.4828 16.076C53.7908 16.02 54.0288 15.908 54.2248 15.712C54.4208 15.53 54.5608 15.264 54.6448 14.914C54.7288 14.564 54.7848 14.088 54.7848 13.5C54.7848 12.912 54.7288 12.45 54.6448 12.1C54.5608 11.75 54.4208 11.484 54.2248 11.288C54.0288 11.106 53.7908 10.98 53.4828 10.924C53.1748 10.868 52.7968 10.84 52.3628 10.84ZM60.812 16.16C61.176 16.16 61.512 16.132 61.82 16.062C62.114 15.992 62.366 15.866 62.576 15.67C62.786 15.474 62.954 15.208 63.066 14.872C63.178 14.536 63.234 14.088 63.234 13.542C63.234 12.982 63.178 12.534 63.066 12.184C62.954 11.834 62.786 11.554 62.576 11.358C62.366 11.162 62.114 11.022 61.82 10.952C61.512 10.882 61.176 10.84 60.812 10.84C60.434 10.84 60.098 10.882 59.804 10.952C59.496 11.022 59.244 11.148 59.048 11.344C58.838 11.54 58.684 11.82 58.572 12.17C58.46 12.534 58.404 12.982 58.404 13.542C58.404 14.088 58.46 14.536 58.572 14.872C58.684 15.208 58.838 15.474 59.048 15.67C59.244 15.866 59.496 15.992 59.804 16.062C60.098 16.132 60.434 16.16 60.812 16.16ZM60.812 9.79C61.372 9.79 61.89 9.86 62.338 9.972C62.786 10.098 63.178 10.308 63.486 10.588C63.794 10.882 64.032 11.274 64.2 11.75C64.368 12.226 64.452 12.828 64.452 13.542C64.452 14.242 64.368 14.83 64.2 15.292C64.032 15.768 63.794 16.146 63.486 16.426C63.178 16.706 62.786 16.916 62.338 17.028C61.89 17.154 61.372 17.21 60.812 17.21C60.238 17.21 59.734 17.154 59.286 17.028C58.838 16.916 58.446 16.706 58.138 16.426C57.83 16.146 57.592 15.768 57.424 15.292C57.256 14.83 57.172 14.242 57.172 13.542C57.172 12.828 57.256 12.226 57.424 11.75C57.592 11.274 57.83 10.882 58.138 10.588C58.446 10.308 58.838 10.098 59.286 9.972C59.734 9.86 60.238 9.79 60.812 9.79ZM66.6045 10H72.3445V15.95H73.5065V19.1H72.2745V17H66.2265V19.1H64.9945V15.95H65.7505C65.9325 15.852 66.0725 15.684 66.1845 15.432C66.2965 15.194 66.3805 14.9 66.4505 14.564C66.5065 14.228 66.5485 13.864 66.5765 13.444C66.5905 13.038 66.6045 12.618 66.6045 12.184V10ZM67.7945 12.352C67.7945 13.276 67.7245 14.018 67.6125 14.592C67.5005 15.18 67.3465 15.628 67.1645 15.95H71.1125V11.05H67.7945V12.352ZM76.7822 17.21C76.3902 17.21 76.0402 17.182 75.7182 17.098C75.3962 17.014 75.1162 16.888 74.8922 16.706C74.6542 16.538 74.4722 16.3 74.3462 16.02C74.2062 15.74 74.1502 15.39 74.1502 14.984C74.1502 14.746 74.1782 14.494 74.2622 14.242C74.3462 13.99 74.4862 13.752 74.7102 13.542C74.9202 13.332 75.2142 13.164 75.5922 13.024C75.9702 12.898 76.4602 12.828 77.0622 12.828C77.3422 12.828 77.5802 12.842 77.8042 12.842C78.0282 12.842 78.2242 12.856 78.4202 12.856C78.6022 12.87 78.7842 12.884 78.9662 12.884C79.1482 12.898 79.3442 12.912 79.5682 12.912V12.324C79.5682 11.792 79.4142 11.414 79.1062 11.19C78.7982 10.966 78.3082 10.84 77.6082 10.84C77.3002 10.84 77.0202 10.868 76.7962 10.896C76.5582 10.938 76.3622 11.008 76.1942 11.12C76.0262 11.232 75.9002 11.372 75.8022 11.554C75.6902 11.736 75.6202 11.96 75.5782 12.24H74.3882C74.4442 11.778 74.5562 11.386 74.7242 11.078C74.8922 10.77 75.1022 10.518 75.3682 10.322C75.6342 10.14 75.9562 10 76.3342 9.916C76.6982 9.832 77.1322 9.79 77.6082 9.79C78.6022 9.79 79.3862 9.986 79.9462 10.378C80.5062 10.77 80.8002 11.428 80.8002 12.324V17H79.5682V15.838H79.4282C79.2042 16.314 78.8542 16.664 78.3782 16.888C77.9022 17.112 77.3702 17.21 76.7822 17.21ZM77.1882 16.16C77.4682 16.16 77.7342 16.146 78.0142 16.104C78.2942 16.062 78.5462 15.978 78.7702 15.866C78.9942 15.754 79.1762 15.586 79.3162 15.376C79.4562 15.166 79.5402 14.886 79.5682 14.55V13.822C79.1762 13.808 78.7982 13.794 78.4622 13.78C78.1262 13.78 77.8182 13.766 77.5382 13.766C77.0622 13.766 76.6702 13.808 76.3902 13.864C76.1102 13.934 75.8862 14.018 75.7462 14.13C75.5922 14.242 75.4942 14.382 75.4522 14.522C75.3962 14.662 75.3822 14.816 75.3822 14.97C75.3822 15.432 75.5222 15.74 75.8162 15.908C76.1102 16.076 76.5722 16.16 77.1882 16.16ZM89.2062 13.962H83.3962C83.3962 14.41 83.4662 14.788 83.5782 15.068C83.6902 15.348 83.8582 15.572 84.0682 15.74C84.2782 15.908 84.5302 16.02 84.8242 16.076C85.1182 16.132 85.4402 16.16 85.8042 16.16C86.0842 16.16 86.3362 16.146 86.5882 16.104C86.8262 16.076 87.0362 16.006 87.2322 15.908C87.4282 15.824 87.5822 15.698 87.7222 15.53C87.8482 15.362 87.9322 15.152 87.9882 14.886H89.2062C89.1362 15.32 89.0102 15.684 88.8142 15.978C88.6182 16.286 88.3802 16.524 88.0862 16.706C87.7922 16.888 87.4562 17.014 87.0782 17.098C86.6862 17.182 86.2662 17.21 85.8042 17.21C85.2302 17.21 84.7262 17.154 84.2782 17.028C83.8302 16.916 83.4382 16.706 83.1302 16.426C82.8222 16.146 82.5842 15.768 82.4162 15.292C82.2482 14.83 82.1642 14.242 82.1642 13.542C82.1642 12.828 82.2482 12.226 82.4162 11.75C82.5842 11.274 82.8222 10.882 83.1302 10.588C83.4382 10.308 83.8162 10.098 84.2642 9.972C84.7122 9.86 85.2162 9.79 85.7762 9.79C86.8402 9.79 87.6802 10.056 88.2962 10.588C88.8982 11.12 89.2062 11.932 89.2062 13.024V13.962ZM85.7762 10.84C85.4402 10.84 85.1462 10.868 84.8662 10.924C84.5862 10.98 84.3342 11.092 84.1242 11.246C83.9142 11.4 83.7462 11.61 83.6202 11.89C83.4942 12.17 83.4242 12.52 83.4102 12.968H87.9602C87.9602 12.548 87.9042 12.212 87.7922 11.932C87.6802 11.652 87.5402 11.442 87.3442 11.274C87.1482 11.12 86.9242 11.008 86.6582 10.938C86.3922 10.882 86.0982 10.84 85.7762 10.84ZM96.0823 10V11.05H93.5343V17H92.3023V11.05H89.7543V10H96.0823ZM103.534 14.718C103.464 15.194 103.338 15.586 103.142 15.894C102.946 16.216 102.708 16.468 102.414 16.664C102.12 16.86 101.784 17 101.406 17.084C101.014 17.168 100.594 17.21 100.132 17.21C99.5583 17.21 99.0543 17.154 98.6063 17.028C98.1583 16.916 97.7663 16.706 97.4583 16.426C97.1503 16.146 96.9123 15.768 96.7443 15.292C96.5763 14.83 96.4923 14.242 96.4923 13.542C96.4923 12.828 96.5763 12.226 96.7443 11.75C96.9123 11.274 97.1503 10.882 97.4583 10.588C97.7663 10.308 98.1583 10.098 98.6063 9.972C99.0543 9.86 99.5583 9.79 100.132 9.79C100.58 9.79 100.986 9.832 101.378 9.916C101.756 10 102.092 10.14 102.372 10.322C102.652 10.518 102.89 10.77 103.086 11.078C103.282 11.386 103.408 11.778 103.492 12.24H102.26C102.204 11.96 102.106 11.736 101.98 11.554C101.84 11.372 101.686 11.232 101.504 11.12C101.308 11.008 101.098 10.938 100.874 10.896C100.65 10.868 100.398 10.84 100.132 10.84C99.7543 10.84 99.4183 10.882 99.1243 10.952C98.8163 11.022 98.5643 11.148 98.3683 11.344C98.1583 11.54 98.0043 11.82 97.8923 12.17C97.7803 12.534 97.7243 12.982 97.7243 13.542C97.7243 14.088 97.7803 14.536 97.8923 14.872C98.0043 15.208 98.1583 15.474 98.3683 15.67C98.5643 15.866 98.8163 15.992 99.1243 16.062C99.4183 16.132 99.7543 16.16 100.132 16.16C100.412 16.16 100.664 16.146 100.916 16.104C101.154 16.062 101.364 15.992 101.56 15.88C101.742 15.768 101.896 15.628 102.036 15.432C102.162 15.25 102.26 15.012 102.316 14.718H103.534ZM109.766 14.494H107.428L105.86 17H104.404L106.196 14.382C105.706 14.242 105.342 13.99 105.104 13.598C104.852 13.206 104.74 12.744 104.74 12.212C104.74 11.904 104.782 11.624 104.866 11.344C104.95 11.078 105.076 10.84 105.272 10.644C105.468 10.448 105.72 10.294 106.028 10.182C106.336 10.07 106.714 10 107.162 10H110.998V17H109.766V14.494ZM105.958 12.212C105.958 12.548 106.028 12.828 106.182 13.08C106.322 13.332 106.602 13.444 107.008 13.444H109.766V11.05H107.26C106.98 11.05 106.756 11.078 106.588 11.134C106.42 11.19 106.28 11.274 106.196 11.372C106.098 11.484 106.028 11.61 106 11.75C105.972 11.89 105.958 12.044 105.958 12.212Z" fill="#171717"></path>
    <path d="M49.366 26.854C49.366 28.156 49.086 29.108 48.526 29.71C47.966 30.312 47.126 30.606 45.992 30.606H42.66V33H40.756V23.34H45.964C46.552 23.34 47.07 23.41 47.504 23.536C47.924 23.676 48.274 23.872 48.554 24.152C48.834 24.432 49.03 24.796 49.17 25.244C49.296 25.692 49.366 26.224 49.366 26.854ZM42.66 24.978V28.968H45.67C46.258 28.968 46.692 28.814 46.986 28.506C47.28 28.198 47.434 27.666 47.434 26.882C47.434 26.504 47.392 26.196 47.336 25.944C47.28 25.706 47.182 25.51 47.042 25.37C46.902 25.23 46.706 25.118 46.482 25.062C46.258 25.006 45.978 24.978 45.642 24.978H42.66ZM52.5237 33L53.7697 30.802L49.5977 23.34H51.8797L54.8057 28.954L57.4797 23.34H59.6077L54.7077 33H52.5237ZM62.4329 27.204C62.4329 28.296 62.3769 29.22 62.2929 29.948C62.1949 30.69 62.0409 31.292 61.8449 31.74C61.6489 32.188 61.3829 32.51 61.0469 32.706C60.7109 32.902 60.3189 33 59.8429 33H59.2829V31.334C59.5629 31.334 59.7869 31.278 59.9689 31.138C60.1369 30.998 60.2769 30.76 60.3889 30.424C60.4869 30.088 60.5569 29.612 60.5989 29.024C60.6269 28.436 60.6549 27.694 60.6549 26.784V23.34H68.2569V33H66.3389V25.048H62.4329V27.204ZM74.696 33.21C73.828 33.21 73.086 33.14 72.456 32.972C71.812 32.818 71.294 32.552 70.874 32.16C70.454 31.782 70.132 31.264 69.922 30.62C69.712 29.976 69.614 29.164 69.614 28.184C69.614 27.176 69.726 26.336 69.95 25.678C70.174 25.034 70.496 24.516 70.93 24.138C71.35 23.76 71.882 23.494 72.512 23.354C73.142 23.214 73.87 23.13 74.696 23.13C75.508 23.13 76.222 23.214 76.866 23.354C77.496 23.494 78.028 23.76 78.462 24.138C78.882 24.516 79.218 25.034 79.442 25.678C79.666 26.336 79.778 27.176 79.778 28.184C79.778 29.164 79.666 29.976 79.456 30.62C79.246 31.264 78.938 31.782 78.518 32.16C78.098 32.552 77.566 32.818 76.936 32.972C76.292 33.14 75.55 33.21 74.696 33.21ZM74.696 31.53C75.228 31.53 75.704 31.502 76.096 31.418C76.488 31.334 76.824 31.18 77.076 30.942C77.328 30.704 77.524 30.368 77.65 29.92C77.776 29.486 77.846 28.912 77.846 28.184C77.846 27.442 77.776 26.854 77.65 26.406C77.524 25.958 77.328 25.622 77.076 25.384C76.81 25.146 76.474 24.992 76.082 24.922C75.69 24.852 75.228 24.81 74.696 24.81C74.15 24.81 73.674 24.852 73.282 24.922C72.89 24.992 72.554 25.146 72.302 25.37C72.036 25.608 71.84 25.944 71.714 26.392C71.588 26.84 71.532 27.442 71.532 28.184C71.532 28.912 71.588 29.486 71.714 29.92C71.84 30.368 72.036 30.704 72.302 30.942C72.554 31.18 72.89 31.334 73.282 31.418C73.674 31.502 74.15 31.53 74.696 31.53ZM83.0467 27.33H88.1847V23.34H90.0887V33H88.1847V29.038H83.0467V33H81.1427V23.34H83.0467V27.33ZM96.5437 33.21C95.6757 33.21 94.9337 33.14 94.3037 32.972C93.6597 32.818 93.1417 32.552 92.7217 32.16C92.3017 31.782 91.9797 31.264 91.7697 30.62C91.5597 29.976 91.4617 29.164 91.4617 28.184C91.4617 27.176 91.5737 26.336 91.7977 25.678C92.0217 25.034 92.3437 24.516 92.7777 24.138C93.1977 23.76 93.7297 23.494 94.3597 23.354C94.9897 23.214 95.7177 23.13 96.5437 23.13C97.3557 23.13 98.0697 23.214 98.7137 23.354C99.3437 23.494 99.8757 23.76 100.31 24.138C100.73 24.516 101.066 25.034 101.29 25.678C101.514 26.336 101.626 27.176 101.626 28.184C101.626 29.164 101.514 29.976 101.304 30.62C101.094 31.264 100.786 31.782 100.366 32.16C99.9457 32.552 99.4137 32.818 98.7837 32.972C98.1397 33.14 97.3977 33.21 96.5437 33.21ZM96.5437 31.53C97.0757 31.53 97.5517 31.502 97.9437 31.418C98.3357 31.334 98.6717 31.18 98.9237 30.942C99.1757 30.704 99.3717 30.368 99.4977 29.92C99.6237 29.486 99.6937 28.912 99.6937 28.184C99.6937 27.442 99.6237 26.854 99.4977 26.406C99.3717 25.958 99.1757 25.622 98.9237 25.384C98.6577 25.146 98.3217 24.992 97.9297 24.922C97.5377 24.852 97.0757 24.81 96.5437 24.81C95.9977 24.81 95.5217 24.852 95.1297 24.922C94.7377 24.992 94.4017 25.146 94.1497 25.37C93.8837 25.608 93.6877 25.944 93.5617 26.392C93.4357 26.84 93.3797 27.442 93.3797 28.184C93.3797 28.912 93.4357 29.486 93.5617 29.92C93.6877 30.368 93.8837 30.704 94.1497 30.942C94.4017 31.18 94.7377 31.334 95.1297 31.418C95.5217 31.502 95.9977 31.53 96.5437 31.53ZM104.894 26.294V33H102.99V23.34H104.446L108.38 27.722L112.258 23.34H113.7V33H111.796V26.322L108.352 30.046L104.894 26.294Z" fill="#171717"></path>
</svg>

                                        </div>

                                        <div class="product-itm__dop-attr">
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">вес</div>
                                                <div class="product-itm__dop-attr__itm__val">35,2 кг</div>
                                            </div>
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">площадь</div>
                                                <div class="product-itm__dop-attr__itm__val">80&nbsp;м<sup>2</sup></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">пог. метр</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/like.svg" class="product-itm-label__ico svg replaced-svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 8L7.375 3L9.0625 4.11111V6.88889H12.4375L13 8L11.5938 13H6.8125L5.125 12.4444H4V8ZM5.125 11.3333H5.30756L6.99506 11.8889H10.7387L11.8002 8.11453L11.7422 8H7.9375V4.70576L7.68702 4.54083L5.125 8.33642V11.3333Z" fill="#F5333F"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.8 7.27273H3.2V11.7273H3.8V7.27273ZM2 6V13H5V6H2Z" fill="#F5333F"></path>
</svg>
                                        <span class="product-itm-label__text">рекомендуем</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--dark">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">уп.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--green">
                                        <span class="product-itm-label__text">новинка</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--discount">
                                        <img alt="" class="svg" src="../img/ico/receipt-tax.svg">
                                        <span class="product-itm-label__text">уцененный</span>
                                    </span>

                                    <span class="product-itm-label product-itm-label--main product-itm-label--promo">
                                        <img alt="" class="svg" src="../img/ico/actions.svg">
                                        <span class="product-itm-label__text">акция</span>
                                    </span>

                                    <span class="product-itm-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="product-itm-label__ico svg star star--full  replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                        <span class="product-itm-label__text">хит сезона</span>
                                    </span>

                                </div>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                                <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="pack">шт.</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price">986 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div><div class="owl-item" style="width: 279.438px; margin-right: 24px;"><div class="product-itm @@class" data-num="@@num">
                            <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                            <a class="product-itm-head" href="/">
                                <div class="product-itm-images init" data-page="NaN">
                                    <div class="product-itm-images-stage">

                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/cat.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/decor-preview.jpg">
                                        </div>
                                        <div class="product-itm-images__itm">
                                            <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                        </div>

                                    </div>
                                <div class="product-itm-images-dots"><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span><span class="product-itm-dot"></span></div></div>

                                <div class="product-itm-label-list">
                                    <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                    <span class="product-itm-label product-itm-label--dark product-itm-label--main">
                                        <span class="product-itm-label__text">—&nbsp;35%</span>
                                    </span>

                                </div>

                                <span class="product-itm-buy-type">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/roll-ico.svg" class="svg replaced-svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45314 1L17.1487 1.77651L23 9.22236L20.0298 17.1793L12.8589 19.9479L5.53686 17.121L4.6695 9.80151L8.20285 5.24611L14.3819 4.83227L18.5321 8.72368L17.1236 14.0065L12.8323 15.7948L8.79596 13.9025V10.1021H10.9821V12.5674L12.8856 13.4598L15.2765 12.4634L16.0954 9.39209L13.5634 7.01794L9.34782 7.30028L6.94139 10.4028L7.55897 15.6144L12.8589 17.6607L18.31 15.5561L20.5372 9.58959L15.9939 3.80814L9.09753 3.1923L4.5086 6.57306L3.18617 10.448V15.0198L5.13511 18.0654L9.12917 20.8742H21.7686V23H8.42149L3.50589 19.5432L1 15.6271V10.1044L2.64746 5.27715L8.45314 1Z" fill="#171717"></path>
</svg>
                                </span>

                            </a>
                            <div class="product-itm-body">
                                <div class="product-itm__sku">Арт. 169000000000001170</div>
                                <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                                <div class="star-line">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--full svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/star-half.svg" class="star star--empty svg replaced-svg">
    <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="url(#paint0_linear_6388_53053)"></path>
    <g clip-path="url(#clip0_6388_53053)">
        <path d="M8 0L10.2571 4.89337L15.6085 5.52786L11.6521 9.18663L12.7023 14.4721L8 11.84L3.29772 14.4721L4.34794 9.18663L0.391548 5.52786L5.7429 4.89337L8 0Z" fill="#CACDD2"></path>
    </g>
    <defs>
        <linearGradient id="paint0_linear_6388_53053" x1="5.56874" y1="16.476" x2="10.4116" y2="-0.47583" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFCF3C"></stop>
            <stop offset="1" stop-color="#FFD500"></stop>
        </linearGradient>
        <clipPath id="clip0_6388_53053">
            <rect width="8" height="16" fill="white" transform="translate(8)"></rect>
        </clipPath>
    </defs>
</svg>

                                    <div class="star-line__count">34</div>
                                </div>
                                <div class="product-itm__sep"></div>
                                <div class="product-itm__desc">
                                    <div class="product-itm__desc__text">

                                        <p>вес (кг): 5.3</p>
                                        <p>тип клея: однокомпонентный</p>
                                        <p>назначение: для внутренних работ</p>
                                        <p>время засыхания: до&nbsp;60 мин.</p>
                                        <p>основа клея: водно-дисперсионный</p>

                                    </div>

                                    <div class="product-itm__desc__dop">
                                        <div class="product-itm-buy-type-long">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="40" viewBox="0 0 124 40" fill="none" data-src="../img/ico/roll-buy.svg" class="svg replaced-svg">
    <rect width="124" height="40" rx="2" fill="white"></rect>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4531 9L25.1487 9.77651L31 17.2224L28.0298 25.1793L20.8589 27.9479L13.5369 25.121L12.6695 17.8015L16.2028 13.2461L22.3819 12.8323L26.5321 16.7237L25.1236 22.0065L20.8323 23.7948L16.796 21.9025V18.1021H18.9821V20.5674L20.8856 21.4598L23.2765 20.4634L24.0954 17.3921L21.5634 15.0179L17.3478 15.3003L14.9414 18.4028L15.559 23.6144L20.8589 25.6607L26.31 23.5561L28.5372 17.5896L23.9939 11.8081L17.0975 11.1923L12.5086 14.5731L11.1862 18.448V23.0198L13.1351 26.0654L17.1292 28.8742H29.7686V31H16.4215L11.5059 27.5432L9 23.6271V18.1044L10.6475 13.2772L16.4531 9Z" fill="#171717"></path>
    <path d="M40.812 10H47.322V17H46.09V11.05H42.044V17H40.812V10ZM52.8248 17.21C52.2368 17.21 51.7188 17.112 51.2848 16.888C50.8508 16.664 50.5288 16.314 50.3188 15.838H50.1788V19.52H48.9468V10H50.1788V11.162H50.3188C50.5288 10.686 50.8508 10.35 51.2848 10.126C51.7188 9.902 52.2368 9.79 52.8248 9.79C53.3288 9.79 53.7768 9.846 54.1688 9.958C54.5608 10.07 54.8828 10.252 55.1628 10.532C55.4288 10.812 55.6388 11.19 55.7788 11.666C55.9188 12.142 56.0028 12.758 56.0028 13.5C56.0028 14.256 55.9188 14.872 55.7788 15.348C55.6388 15.824 55.4288 16.202 55.1628 16.482C54.8828 16.762 54.5608 16.944 54.1688 17.056C53.7768 17.168 53.3288 17.21 52.8248 17.21ZM52.3628 10.84C52.0828 10.84 51.8028 10.868 51.5508 10.91C51.2848 10.952 51.0468 11.036 50.8508 11.162C50.6548 11.288 50.4868 11.456 50.3608 11.68C50.2348 11.904 50.1788 12.198 50.1788 12.562V14.438C50.1788 14.802 50.2348 15.096 50.3608 15.32C50.4868 15.544 50.6548 15.726 50.8508 15.852C51.0468 15.978 51.2848 16.062 51.5508 16.104C51.8028 16.146 52.0828 16.16 52.3628 16.16C52.7968 16.16 53.1748 16.132 53.4828 16.076C53.7908 16.02 54.0288 15.908 54.2248 15.712C54.4208 15.53 54.5608 15.264 54.6448 14.914C54.7288 14.564 54.7848 14.088 54.7848 13.5C54.7848 12.912 54.7288 12.45 54.6448 12.1C54.5608 11.75 54.4208 11.484 54.2248 11.288C54.0288 11.106 53.7908 10.98 53.4828 10.924C53.1748 10.868 52.7968 10.84 52.3628 10.84ZM60.812 16.16C61.176 16.16 61.512 16.132 61.82 16.062C62.114 15.992 62.366 15.866 62.576 15.67C62.786 15.474 62.954 15.208 63.066 14.872C63.178 14.536 63.234 14.088 63.234 13.542C63.234 12.982 63.178 12.534 63.066 12.184C62.954 11.834 62.786 11.554 62.576 11.358C62.366 11.162 62.114 11.022 61.82 10.952C61.512 10.882 61.176 10.84 60.812 10.84C60.434 10.84 60.098 10.882 59.804 10.952C59.496 11.022 59.244 11.148 59.048 11.344C58.838 11.54 58.684 11.82 58.572 12.17C58.46 12.534 58.404 12.982 58.404 13.542C58.404 14.088 58.46 14.536 58.572 14.872C58.684 15.208 58.838 15.474 59.048 15.67C59.244 15.866 59.496 15.992 59.804 16.062C60.098 16.132 60.434 16.16 60.812 16.16ZM60.812 9.79C61.372 9.79 61.89 9.86 62.338 9.972C62.786 10.098 63.178 10.308 63.486 10.588C63.794 10.882 64.032 11.274 64.2 11.75C64.368 12.226 64.452 12.828 64.452 13.542C64.452 14.242 64.368 14.83 64.2 15.292C64.032 15.768 63.794 16.146 63.486 16.426C63.178 16.706 62.786 16.916 62.338 17.028C61.89 17.154 61.372 17.21 60.812 17.21C60.238 17.21 59.734 17.154 59.286 17.028C58.838 16.916 58.446 16.706 58.138 16.426C57.83 16.146 57.592 15.768 57.424 15.292C57.256 14.83 57.172 14.242 57.172 13.542C57.172 12.828 57.256 12.226 57.424 11.75C57.592 11.274 57.83 10.882 58.138 10.588C58.446 10.308 58.838 10.098 59.286 9.972C59.734 9.86 60.238 9.79 60.812 9.79ZM66.6045 10H72.3445V15.95H73.5065V19.1H72.2745V17H66.2265V19.1H64.9945V15.95H65.7505C65.9325 15.852 66.0725 15.684 66.1845 15.432C66.2965 15.194 66.3805 14.9 66.4505 14.564C66.5065 14.228 66.5485 13.864 66.5765 13.444C66.5905 13.038 66.6045 12.618 66.6045 12.184V10ZM67.7945 12.352C67.7945 13.276 67.7245 14.018 67.6125 14.592C67.5005 15.18 67.3465 15.628 67.1645 15.95H71.1125V11.05H67.7945V12.352ZM76.7822 17.21C76.3902 17.21 76.0402 17.182 75.7182 17.098C75.3962 17.014 75.1162 16.888 74.8922 16.706C74.6542 16.538 74.4722 16.3 74.3462 16.02C74.2062 15.74 74.1502 15.39 74.1502 14.984C74.1502 14.746 74.1782 14.494 74.2622 14.242C74.3462 13.99 74.4862 13.752 74.7102 13.542C74.9202 13.332 75.2142 13.164 75.5922 13.024C75.9702 12.898 76.4602 12.828 77.0622 12.828C77.3422 12.828 77.5802 12.842 77.8042 12.842C78.0282 12.842 78.2242 12.856 78.4202 12.856C78.6022 12.87 78.7842 12.884 78.9662 12.884C79.1482 12.898 79.3442 12.912 79.5682 12.912V12.324C79.5682 11.792 79.4142 11.414 79.1062 11.19C78.7982 10.966 78.3082 10.84 77.6082 10.84C77.3002 10.84 77.0202 10.868 76.7962 10.896C76.5582 10.938 76.3622 11.008 76.1942 11.12C76.0262 11.232 75.9002 11.372 75.8022 11.554C75.6902 11.736 75.6202 11.96 75.5782 12.24H74.3882C74.4442 11.778 74.5562 11.386 74.7242 11.078C74.8922 10.77 75.1022 10.518 75.3682 10.322C75.6342 10.14 75.9562 10 76.3342 9.916C76.6982 9.832 77.1322 9.79 77.6082 9.79C78.6022 9.79 79.3862 9.986 79.9462 10.378C80.5062 10.77 80.8002 11.428 80.8002 12.324V17H79.5682V15.838H79.4282C79.2042 16.314 78.8542 16.664 78.3782 16.888C77.9022 17.112 77.3702 17.21 76.7822 17.21ZM77.1882 16.16C77.4682 16.16 77.7342 16.146 78.0142 16.104C78.2942 16.062 78.5462 15.978 78.7702 15.866C78.9942 15.754 79.1762 15.586 79.3162 15.376C79.4562 15.166 79.5402 14.886 79.5682 14.55V13.822C79.1762 13.808 78.7982 13.794 78.4622 13.78C78.1262 13.78 77.8182 13.766 77.5382 13.766C77.0622 13.766 76.6702 13.808 76.3902 13.864C76.1102 13.934 75.8862 14.018 75.7462 14.13C75.5922 14.242 75.4942 14.382 75.4522 14.522C75.3962 14.662 75.3822 14.816 75.3822 14.97C75.3822 15.432 75.5222 15.74 75.8162 15.908C76.1102 16.076 76.5722 16.16 77.1882 16.16ZM89.2062 13.962H83.3962C83.3962 14.41 83.4662 14.788 83.5782 15.068C83.6902 15.348 83.8582 15.572 84.0682 15.74C84.2782 15.908 84.5302 16.02 84.8242 16.076C85.1182 16.132 85.4402 16.16 85.8042 16.16C86.0842 16.16 86.3362 16.146 86.5882 16.104C86.8262 16.076 87.0362 16.006 87.2322 15.908C87.4282 15.824 87.5822 15.698 87.7222 15.53C87.8482 15.362 87.9322 15.152 87.9882 14.886H89.2062C89.1362 15.32 89.0102 15.684 88.8142 15.978C88.6182 16.286 88.3802 16.524 88.0862 16.706C87.7922 16.888 87.4562 17.014 87.0782 17.098C86.6862 17.182 86.2662 17.21 85.8042 17.21C85.2302 17.21 84.7262 17.154 84.2782 17.028C83.8302 16.916 83.4382 16.706 83.1302 16.426C82.8222 16.146 82.5842 15.768 82.4162 15.292C82.2482 14.83 82.1642 14.242 82.1642 13.542C82.1642 12.828 82.2482 12.226 82.4162 11.75C82.5842 11.274 82.8222 10.882 83.1302 10.588C83.4382 10.308 83.8162 10.098 84.2642 9.972C84.7122 9.86 85.2162 9.79 85.7762 9.79C86.8402 9.79 87.6802 10.056 88.2962 10.588C88.8982 11.12 89.2062 11.932 89.2062 13.024V13.962ZM85.7762 10.84C85.4402 10.84 85.1462 10.868 84.8662 10.924C84.5862 10.98 84.3342 11.092 84.1242 11.246C83.9142 11.4 83.7462 11.61 83.6202 11.89C83.4942 12.17 83.4242 12.52 83.4102 12.968H87.9602C87.9602 12.548 87.9042 12.212 87.7922 11.932C87.6802 11.652 87.5402 11.442 87.3442 11.274C87.1482 11.12 86.9242 11.008 86.6582 10.938C86.3922 10.882 86.0982 10.84 85.7762 10.84ZM96.0823 10V11.05H93.5343V17H92.3023V11.05H89.7543V10H96.0823ZM103.534 14.718C103.464 15.194 103.338 15.586 103.142 15.894C102.946 16.216 102.708 16.468 102.414 16.664C102.12 16.86 101.784 17 101.406 17.084C101.014 17.168 100.594 17.21 100.132 17.21C99.5583 17.21 99.0543 17.154 98.6063 17.028C98.1583 16.916 97.7663 16.706 97.4583 16.426C97.1503 16.146 96.9123 15.768 96.7443 15.292C96.5763 14.83 96.4923 14.242 96.4923 13.542C96.4923 12.828 96.5763 12.226 96.7443 11.75C96.9123 11.274 97.1503 10.882 97.4583 10.588C97.7663 10.308 98.1583 10.098 98.6063 9.972C99.0543 9.86 99.5583 9.79 100.132 9.79C100.58 9.79 100.986 9.832 101.378 9.916C101.756 10 102.092 10.14 102.372 10.322C102.652 10.518 102.89 10.77 103.086 11.078C103.282 11.386 103.408 11.778 103.492 12.24H102.26C102.204 11.96 102.106 11.736 101.98 11.554C101.84 11.372 101.686 11.232 101.504 11.12C101.308 11.008 101.098 10.938 100.874 10.896C100.65 10.868 100.398 10.84 100.132 10.84C99.7543 10.84 99.4183 10.882 99.1243 10.952C98.8163 11.022 98.5643 11.148 98.3683 11.344C98.1583 11.54 98.0043 11.82 97.8923 12.17C97.7803 12.534 97.7243 12.982 97.7243 13.542C97.7243 14.088 97.7803 14.536 97.8923 14.872C98.0043 15.208 98.1583 15.474 98.3683 15.67C98.5643 15.866 98.8163 15.992 99.1243 16.062C99.4183 16.132 99.7543 16.16 100.132 16.16C100.412 16.16 100.664 16.146 100.916 16.104C101.154 16.062 101.364 15.992 101.56 15.88C101.742 15.768 101.896 15.628 102.036 15.432C102.162 15.25 102.26 15.012 102.316 14.718H103.534ZM109.766 14.494H107.428L105.86 17H104.404L106.196 14.382C105.706 14.242 105.342 13.99 105.104 13.598C104.852 13.206 104.74 12.744 104.74 12.212C104.74 11.904 104.782 11.624 104.866 11.344C104.95 11.078 105.076 10.84 105.272 10.644C105.468 10.448 105.72 10.294 106.028 10.182C106.336 10.07 106.714 10 107.162 10H110.998V17H109.766V14.494ZM105.958 12.212C105.958 12.548 106.028 12.828 106.182 13.08C106.322 13.332 106.602 13.444 107.008 13.444H109.766V11.05H107.26C106.98 11.05 106.756 11.078 106.588 11.134C106.42 11.19 106.28 11.274 106.196 11.372C106.098 11.484 106.028 11.61 106 11.75C105.972 11.89 105.958 12.044 105.958 12.212Z" fill="#171717"></path>
    <path d="M49.366 26.854C49.366 28.156 49.086 29.108 48.526 29.71C47.966 30.312 47.126 30.606 45.992 30.606H42.66V33H40.756V23.34H45.964C46.552 23.34 47.07 23.41 47.504 23.536C47.924 23.676 48.274 23.872 48.554 24.152C48.834 24.432 49.03 24.796 49.17 25.244C49.296 25.692 49.366 26.224 49.366 26.854ZM42.66 24.978V28.968H45.67C46.258 28.968 46.692 28.814 46.986 28.506C47.28 28.198 47.434 27.666 47.434 26.882C47.434 26.504 47.392 26.196 47.336 25.944C47.28 25.706 47.182 25.51 47.042 25.37C46.902 25.23 46.706 25.118 46.482 25.062C46.258 25.006 45.978 24.978 45.642 24.978H42.66ZM52.5237 33L53.7697 30.802L49.5977 23.34H51.8797L54.8057 28.954L57.4797 23.34H59.6077L54.7077 33H52.5237ZM62.4329 27.204C62.4329 28.296 62.3769 29.22 62.2929 29.948C62.1949 30.69 62.0409 31.292 61.8449 31.74C61.6489 32.188 61.3829 32.51 61.0469 32.706C60.7109 32.902 60.3189 33 59.8429 33H59.2829V31.334C59.5629 31.334 59.7869 31.278 59.9689 31.138C60.1369 30.998 60.2769 30.76 60.3889 30.424C60.4869 30.088 60.5569 29.612 60.5989 29.024C60.6269 28.436 60.6549 27.694 60.6549 26.784V23.34H68.2569V33H66.3389V25.048H62.4329V27.204ZM74.696 33.21C73.828 33.21 73.086 33.14 72.456 32.972C71.812 32.818 71.294 32.552 70.874 32.16C70.454 31.782 70.132 31.264 69.922 30.62C69.712 29.976 69.614 29.164 69.614 28.184C69.614 27.176 69.726 26.336 69.95 25.678C70.174 25.034 70.496 24.516 70.93 24.138C71.35 23.76 71.882 23.494 72.512 23.354C73.142 23.214 73.87 23.13 74.696 23.13C75.508 23.13 76.222 23.214 76.866 23.354C77.496 23.494 78.028 23.76 78.462 24.138C78.882 24.516 79.218 25.034 79.442 25.678C79.666 26.336 79.778 27.176 79.778 28.184C79.778 29.164 79.666 29.976 79.456 30.62C79.246 31.264 78.938 31.782 78.518 32.16C78.098 32.552 77.566 32.818 76.936 32.972C76.292 33.14 75.55 33.21 74.696 33.21ZM74.696 31.53C75.228 31.53 75.704 31.502 76.096 31.418C76.488 31.334 76.824 31.18 77.076 30.942C77.328 30.704 77.524 30.368 77.65 29.92C77.776 29.486 77.846 28.912 77.846 28.184C77.846 27.442 77.776 26.854 77.65 26.406C77.524 25.958 77.328 25.622 77.076 25.384C76.81 25.146 76.474 24.992 76.082 24.922C75.69 24.852 75.228 24.81 74.696 24.81C74.15 24.81 73.674 24.852 73.282 24.922C72.89 24.992 72.554 25.146 72.302 25.37C72.036 25.608 71.84 25.944 71.714 26.392C71.588 26.84 71.532 27.442 71.532 28.184C71.532 28.912 71.588 29.486 71.714 29.92C71.84 30.368 72.036 30.704 72.302 30.942C72.554 31.18 72.89 31.334 73.282 31.418C73.674 31.502 74.15 31.53 74.696 31.53ZM83.0467 27.33H88.1847V23.34H90.0887V33H88.1847V29.038H83.0467V33H81.1427V23.34H83.0467V27.33ZM96.5437 33.21C95.6757 33.21 94.9337 33.14 94.3037 32.972C93.6597 32.818 93.1417 32.552 92.7217 32.16C92.3017 31.782 91.9797 31.264 91.7697 30.62C91.5597 29.976 91.4617 29.164 91.4617 28.184C91.4617 27.176 91.5737 26.336 91.7977 25.678C92.0217 25.034 92.3437 24.516 92.7777 24.138C93.1977 23.76 93.7297 23.494 94.3597 23.354C94.9897 23.214 95.7177 23.13 96.5437 23.13C97.3557 23.13 98.0697 23.214 98.7137 23.354C99.3437 23.494 99.8757 23.76 100.31 24.138C100.73 24.516 101.066 25.034 101.29 25.678C101.514 26.336 101.626 27.176 101.626 28.184C101.626 29.164 101.514 29.976 101.304 30.62C101.094 31.264 100.786 31.782 100.366 32.16C99.9457 32.552 99.4137 32.818 98.7837 32.972C98.1397 33.14 97.3977 33.21 96.5437 33.21ZM96.5437 31.53C97.0757 31.53 97.5517 31.502 97.9437 31.418C98.3357 31.334 98.6717 31.18 98.9237 30.942C99.1757 30.704 99.3717 30.368 99.4977 29.92C99.6237 29.486 99.6937 28.912 99.6937 28.184C99.6937 27.442 99.6237 26.854 99.4977 26.406C99.3717 25.958 99.1757 25.622 98.9237 25.384C98.6577 25.146 98.3217 24.992 97.9297 24.922C97.5377 24.852 97.0757 24.81 96.5437 24.81C95.9977 24.81 95.5217 24.852 95.1297 24.922C94.7377 24.992 94.4017 25.146 94.1497 25.37C93.8837 25.608 93.6877 25.944 93.5617 26.392C93.4357 26.84 93.3797 27.442 93.3797 28.184C93.3797 28.912 93.4357 29.486 93.5617 29.92C93.6877 30.368 93.8837 30.704 94.1497 30.942C94.4017 31.18 94.7377 31.334 95.1297 31.418C95.5217 31.502 95.9977 31.53 96.5437 31.53ZM104.894 26.294V33H102.99V23.34H104.446L108.38 27.722L112.258 23.34H113.7V33H111.796V26.322L108.352 30.046L104.894 26.294Z" fill="#171717"></path>
</svg>

                                        </div>

                                        <div class="product-itm__dop-attr">
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">вес</div>
                                                <div class="product-itm__dop-attr__itm__val">35,2 кг</div>
                                            </div>
                                            <div class="product-itm__dop-attr__itm">
                                                <div class="product-itm__dop-attr__itm__name">площадь</div>
                                                <div class="product-itm__dop-attr__itm__val">80&nbsp;м<sup>2</sup></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="price-block">
                                    <div class="price-block-head">
                                        <span>Цена за</span>
                                        <div class="price-type">
                                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                                            <div class="price-type-val" data-type="pack">пог. метр</div>
                                        </div>
                                    </div>
                                    <div class="price-block-val">
                                        <div class="price-block-val__itm active" data-type="m2">
                                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                        </div>
                                        <div class="price-block-val__itm" data-type="pack">
                                            <span class="price price--old">3 590 ₽</span> <span class="price">2 186 ₽</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-itm__btn">
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В&nbsp;корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>

                                    <button aria-label="Сравнить" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/solve.svg" class="svg replaced-svg">
    <rect x="3" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="18" y="7" width="2" height="14" fill="#4E5359"></rect>
    <rect x="8" y="3" width="2" height="18" fill="#4E5359"></rect>
    <rect x="13" y="11" width="2" height="10" fill="#4E5359"></rect>
</svg>
                                    </button>
                                    <button aria-label="В избранное" class="product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="--fill: #4E5359;" data-src="../img/ico/heart.svg" class="svg replaced-svg">
    <path d="M22.6207 9.36842L12 20.5481L1.37931 9.36842L7 3.45191L11.275 7.95191L12 8.71506L12.725 7.95191L17 3.45191L22.6207 9.36842Z" stroke="var(--fill)" stroke-width="2"></path>
</svg>
                                    </button>
                                </div>

                            </div>
                        </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                </section>

        <section class="section-margin js-scroll-section" id="catalog-review">
            <h3 class="title-margin">Отзывы</h3>

            <div class="catalog-review">
                <div class="catalog-review__rating">
                    <div class="review-rating">
                        <div class="review-rating__num h2">4.9</div>
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star svg" src="../img/ico/star-half.svg">
                    </div>
                    <a class="btn catalog-review__rating__btn" href="#">Написать отзыв</a>
                    <div class="review-filter">

                        <label class="review-filter-itm">
                            <span class="check_box">
                                <input class="js-checkbox" type="checkbox">
                                <span class="check_box__item"></span>
                            </span>

                            <span class="review-filter-itm__num">5</span>
                            <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                            <span class="review-filter-itm__progress">
                                <span class="review-filter-itm__progress__bar" style="width: 80%"></span>
                            </span> <span class="review-filter-itm__count">(81)</span>
                        </label>

                        <label class="review-filter-itm">
                            <span class="check_box">
                                <input class="js-checkbox" type="checkbox">
                                <span class="check_box__item"></span>
                            </span>

                            <span class="review-filter-itm__num">4</span>
                            <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                            <span class="review-filter-itm__progress">
                                <span class="review-filter-itm__progress__bar" style="width: 20%"></span>
                            </span> <span class="review-filter-itm__count">(13)</span>
                        </label>

                        <label class="review-filter-itm review-filter-itm--disabled">
                            <span class="check_box">
                                <input class="js-checkbox" type="checkbox">
                                <span class="check_box__item"></span>
                            </span>

                            <span class="review-filter-itm__num">3</span>
                            <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">
                            <span class="review-filter-itm__progress">
                                <span class="review-filter-itm__progress__bar"></span>
                            </span> <span class="review-filter-itm__count">(0)</span>
                        </label>

                        <label class="review-filter-itm review-filter-itm--disabled">
                            <span class="check_box">
                                <input class="js-checkbox" type="checkbox">
                                <span class="check_box__item"></span>
                            </span>

                            <span class="review-filter-itm__num">2</span>
                            <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">
                            <span class="review-filter-itm__progress">
                                <span class="review-filter-itm__progress__bar"></span>
                            </span> <span class="review-filter-itm__count">(0)</span>
                        </label>

                        <label class="review-filter-itm review-filter-itm--disabled">
                            <span class="check_box">
                                <input class="js-checkbox" type="checkbox">
                                <span class="check_box__item"></span>
                            </span>

                            <span class="review-filter-itm__num">1</span>
                            <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">
                            <span class="review-filter-itm__progress">
                                <span class="review-filter-itm__progress__bar"></span>
                            </span> <span class="review-filter-itm__count">(0)</span>
                        </label>

                    </div>
                </div>

                <div class="catalog-review__content">

                    <div class="review-detail-head">
                        <h4>Все отзывы</h4>

                        <select class="js-select" name="">
                            <option value="">Сначала полезные</option>
                            <option value="">Сначала новые</option>
                            <option value="">Сначала старые</option>
                        </select>
                    </div>

                    <div class="catalog-review-list">
                        <div class="review-itm">
                            <div class="review-itm-user">
                                <div class="review-itm-user__ava">
                                    <img alt="" class="fill-img" loading="lazy" src="../img/tmp/ava.jpg">
                                </div>
                                <div class="review-itm-user__name">Владимир</div>
                            </div>

                            <div class="user-rating">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star svg" src="../img/ico/star-half.svg">

                                <div class="user-rating__text">Рекомендует</div>
                            </div>

                            <div class="review-itm__info">
                                <div class="review-itm__info__itm">12 мая 2023</div>
                                <div class="review-itm__info__itm">Москва</div>
                            </div>

                            <div class="review-itm__text">

                                <div class="review-itm__text__block">
                                    <div class="review-itm__text__block__title">Комментарий:</div>
                                    <p>Обычный не дорогой ламинат, в специализированном магазине такой стоил бы на порядок дороже.</p>
                                </div>
                                <div class="review-itm__text__block">
                                    <div class="review-itm__text__block__title">Достоинства:</div>
                                    <p>Легко укладывать одному, приятный на ощупь, приятный цвет, цвет скрывает пыль, не прихотливый в уборке, фаска дает приятный визульный эффект настоящей доски.</p>
                                </div>
                                <div class="review-itm__text__block">
                                    <div class="review-itm__text__block__title">Недостатки:</div>
                                    <p>Ламинация иногда скалывается на торцах, но это если переусердствовать в подбивании ламината при укладке (на 24 квадрата получил 2 скола при подбивании). Ронял молоток с высоты ~60см поверх уложенного ламината скола не появилось может быть повезло, может реально такой прочный.</p>
                                </div>

                            </div>

                            <div class="review-itm__photo">

                                <a class="review-itm__photo__itm" data-fancybox="" href="../img/tmp/blog.jpg">
                                    <img alt="" class="fill-img" src="../img/tmp/blog.jpg">
                                </a>
                                <a class="review-itm__photo__itm" data-fancybox="" href="../img/tmp/cat.jpg">
                                    <img alt="" class="fill-img" src="../img/tmp/cat.jpg">
                                </a>

                                <a class="review-itm__photo__itm" data-fancybox="" href="../img/tmp/blog.jpg">
                                    <img alt="" class="fill-img" src="../img/tmp/blog.jpg">
                                </a>
                                <a class="review-itm__photo__itm" data-fancybox="" href="../img/tmp/cat.jpg">
                                    <img alt="" class="fill-img" src="../img/tmp/cat.jpg">
                                </a>

                                <a class="review-itm__photo__itm" data-fancybox="" href="../img/tmp/blog.jpg">
                                    <img alt="" class="fill-img" src="../img/tmp/blog.jpg">
                                </a>
                                <a class="review-itm__photo__itm" data-fancybox="" href="../img/tmp/cat.jpg">
                                    <img alt="" class="fill-img" src="../img/tmp/cat.jpg">
                                </a>

                            </div>

                            <div class="rate-action">
                                <button aria-label="like" class="rate-action-btn" onclick="this.classList.toggle('active')">
                                    <span>128</span>
                                    <img alt="" class="svg" src="../img/ico/like.svg">
                                </button>
                                <button aria-label="dislike" class="rate-action-btn rate-action-btn--dislike" onclick="this.classList.toggle('active')">
                                    <span>128</span>
                                    <img alt="" class="svg" src="../img/ico/like.svg">
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="catalog-review__foot">
                        <button class="btn btn--line">Показать все отзывы</button>

                        <a class="arrow-top js-anchor" href="#catalog-review">
                            <img alt="" class="svg" src="../img/ico/arrow.svg">
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <section class="section-margin js-scroll-section" id="catalog-doc">
            <h3 class="title-margin">Документы</h3>
            <div class="doc-list">

                <a class="doc-list-itm" href="/">
                    <span class="doc-list-itm__ico">
                        <img alt="" class="svg" src="../img/ico/docs.svg">
                    </span> <span class="doc-list-itm__name">ТТХ ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
                </a>
                <a class="doc-list-itm" href="/">
                    <span class="doc-list-itm__ico">
                        <img alt="" class="svg" src="../img/ico/docs.svg">
                    </span>
                    <span class="doc-list-itm__name">Инструкция по укладке (замковое покрытие) ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
                </a>

                <a class="doc-list-itm" href="/">
                    <span class="doc-list-itm__ico">
                        <img alt="" class="svg" src="../img/ico/docs.svg">
                    </span> <span class="doc-list-itm__name">ТТХ ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
                </a>
                <a class="doc-list-itm" href="/">
                    <span class="doc-list-itm__ico">
                        <img alt="" class="svg" src="../img/ico/docs.svg">
                    </span>
                    <span class="doc-list-itm__name">Инструкция по укладке (замковое покрытие) ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
                </a>

                <a class="doc-list-itm" href="/">
                    <span class="doc-list-itm__ico">
                        <img alt="" class="svg" src="../img/ico/docs.svg">
                    </span> <span class="doc-list-itm__name">ТТХ ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
                </a>
                <a class="doc-list-itm" href="/">
                    <span class="doc-list-itm__ico">
                        <img alt="" class="svg" src="../img/ico/docs.svg">
                    </span>
                    <span class="doc-list-itm__name">Инструкция по укладке (замковое покрытие) ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
                </a>

                <a class="doc-list-itm" href="/">
                    <span class="doc-list-itm__ico">
                        <img alt="" class="svg" src="../img/ico/docs.svg">
                    </span> <span class="doc-list-itm__name">ТТХ ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
                </a>
                <a class="doc-list-itm" href="/">
                    <span class="doc-list-itm__ico">
                        <img alt="" class="svg" src="../img/ico/docs.svg">
                    </span>
                    <span class="doc-list-itm__name">Инструкция по укладке (замковое покрытие) ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
                </a>

                <a class="doc-list-itm" href="/">
                    <span class="doc-list-itm__ico">
                        <img alt="" class="svg" src="../img/ico/docs.svg">
                    </span> <span class="doc-list-itm__name">ТТХ ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
                </a>
                <a class="doc-list-itm" href="/">
                    <span class="doc-list-itm__ico">
                        <img alt="" class="svg" src="../img/ico/docs.svg">
                    </span>
                    <span class="doc-list-itm__name">Инструкция по укладке (замковое покрытие) ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
                </a>

            </div>
        </section>

    </div>

    <div class="fly-btn">

        <a href="/" class="fly-btn-itm">
            <!-- <img src="../img/ico/actions.svg" alt="" class="fly-btn-itm__ico"> -->
            <span class="fly-btn-itm__text">Акция</span>
        </a>

        <a href="/" class="fly-btn-itm fly-btn-itm--sale">
            <img src="../img/ico/sale.svg" alt="" class="fly-btn-itm__ico">
            <span class="fly-btn-itm__text">Распродажа</span>
        </a>

        <a href="/" class="fly-btn-itm fly-btn-itm--discount">
            <!-- <img src="../img/ico/receipt-tax.svg" alt="" class="fly-btn-itm__ico"> -->
            <span class="fly-btn-itm__text">Уцененные товары</span>
        </a>

    </div>

    <div class="modal modal-calc show-area" id="modal-calc">
        <div class="modal-fade js-close-modal"></div>
        <div class="modal-calc-content">
            <div class="modal-close js-close-modal">
                <div class="cross"></div>
            </div>

            <div class="modal-calc-content-inner">

                <p class="h2 modal-calc-title">Калькулятор материалов</p>

                <div class="calc-list">
                    <div class="calc-list-itm">
                        <div class="calc-list-itm__img">
                            <img alt="" loading="lazy" src="../img/tmp/decor-small.jpg">
                        </div>
                        <div class="calc-list-itm__text">
                            <div class="calc-list-itm__sku">Арт. 8197646</div>
                            <div class="calc-list-itm__title h4">Кварцвиниловая ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic Granite</div>
                        </div>
                        <div class="calc-list-itm__price">
                            <div class="calc-list-price">986 ₽/м<sup>2</sup></div>
                            <div class="calc-list-price calc-list-price--small">2998 ₽/уп.</div>
                        </div>
                    </div>
                </div>

                <form action="" class="form-calc js-form-calc">
                    <input type="hidden" name="price" value="986">
                    <div class="form-calc-head">
                        <div class="h3">Параметры помещения</div>
                        <div data-show-type="size">
                            <div class="btn btn--line js-change-calc-type" data-type="area">Указать площадь</div>
                        </div>
                        <div data-show-type="area">
                            <div class="btn btn--line js-change-calc-type" data-type="size">Указать размеры</div>
                        </div>
                    </div>

                    <div data-show-type="size">
                        <div class="calc-cols">
                            <label class="input ">
                                <span class="input-field">
                                    <input placeholder=" " type="number" value="" name="width">
                                    <span class="input-label">Длина, м2</span>
                                </span>
                                <div class="input-hint" style="	"></div>

                            </label>

                            <label class="input ">
                                <span class="input-field">
                                    <input placeholder=" " type="number" value="" name="height">
                                    <span class="input-label">Ширина, м2</span>
                                </span>
                                <div class="input-hint" style="	"></div>

                            </label>
                        </div>
                    </div>

                    <div data-show-type="area">
                        <label class="input ">
                            <span class="input-field">
                                <input placeholder=" " type="number" value="" name="area">
                                <span class="input-label">Площадь, м2</span>
                            </span>
                            <div class="input-hint" style="	"></div>

                        </label>
                    </div>

                    <div class="form-calc-head">
                        <div class="h3">Направление укладки</div>
                    </div>

                    <div class="calc-cols">

                        <label class="calc-cart">
                            <input name="type" type="radio" value="Горизонтальное"> <span class="calc-cart__border"></span> <span class="calc-cart__ico">
                                <img alt=" " class="svg" src="../img/calc-type1.svg">
                            </span>

                            <span class="calc-cart__name">Горизонтальное</span>
                        </label>

                        <label class="calc-cart">
                            <input name="type" type="radio" value="Диагональное"> <span class="calc-cart__border"></span> <span class="calc-cart__ico">
                                <img alt=" " class="svg" src="../img/calc-type2.svg">
                            </span>

                            <span class="calc-cart__name">Диагональное</span>
                        </label>

                    </div>

                    <button class="btn">Рассчитать количество</button>
                </form>

                <div class="calc-result">

                    <div class="form-calc-head">
                        <div class="h3">Параметры помещения</div>
                        <div class="btn btn--line js-calc-back">Изменить параметры</div>
                    </div>

                    <div data-show-type="size">
                        <div class="form-calc-attr">
                            <div class="form-calc-attr__itm">
                                <b>Длина:</b> <span class="js-calc-width-val"></span>
                            </div>
                            <div class="form-calc-attr__itm">
                                <b>Ширина:</b> <span class="js-calc-height-val"></span>
                            </div>
                            <div class="form-calc-attr__itm">
                                <b>Направление укладки:</b> <span class="js-calc-type-val"></span>
                            </div>
                        </div>
                    </div>

                    <div data-show-type="area">
                        <div class="form-calc-attr">
                            <div class="form-calc-attr__itm">
                                <b>Площадь:</b> <span class="js-calc-area-val"></span>
                            </div>
                            <div class="form-calc-attr__itm">
                                <b>Направление укладки:</b> <span class="js-calc-type-val"></span>
                            </div>
                        </div>
                    </div>

                    <div class="calc-result-table">
                        <p class="h3 calc-result-table__title">Расчёт</p>

                        <div class="calc-result-grid">
                            <div class="calc-result-grid__th">
                                <p class="h4">Поверхность</p>
                            </div>
                            <div class="calc-result-grid__th">
                                <p class="h4">Площадь</p>
                            </div>
                            <div class="calc-result-grid__th"></div>

                            <div class="calc-result-grid__itm">Пол</div>
                            <div class="calc-result-grid__itm">32 м²</div>
                            <div class="calc-result-grid__itm"></div>

                            <div class="calc-result-grid__total">Итого</div>
                            <div class="calc-result-grid__total">32 м²</div>
                            <div class="calc-result-grid__total">
                                <div class="calc-result-table-total">
                                    <div class="add-cart-counter">
                                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                        <input aria-label="Количество" class="add-cart-counter__input" type="text" value="1">
                                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                    </div>

                                    <div class="h4 js-calc-price-val">29 614, 80 ₽</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="calc-result-table__foot">
                        <button class="btn">В корзину</button>

                        <div class="calc-result-table__foot__price">
                            <div class="calc-result-table__foot__price__desc">Сумма:</div>
                            <div class="price">29 614, 80 ₽</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!--footer begin-->
    </div>
</template>

<script>
import store from "../store/index.js"
import axios from "axios"

export default {
    data() {
        return {
            timeout: 0,

            product: {},
            itemInCart: {
                quantity: 0
            },

            isLoading: true,
            
            storage_counter: '',

            selected_var: '',
        }
    },
    methods: {
        getCookie(name) {
            const value = document.cookie
            const parts = value.split(name)
            if (parts.length === 2) {
                return parts.pop().split(';').shift()
            }
        },
        async fetchData() {

            try {               
                const response = await axios.get(`http://localhost:8000/api/product/${this.$route.params.slug}`, { params: {

                }})
                this.product = response.data
                this.isLoading = false


                this.calc_selected_variant()
                this.calc_in_storage_indicator()
            } catch(err) {
                
            } finally {
                this.checkInCart()
            }

        },
        async addToCart(event) {
            
            try {          
                const csrfToken = this.getCookie('XSRF-TOKEN=')

                let quantity = 0

                quantity = await new Promise((resolve, reject) => {
                    setTimeout(() => {
                        resolve(document.getElementById('quantity_selector').value)
                    }, 0)
                })

                console.log(quantity)
                

                const payload = {
                    product_id: this.selected_var,
                    quantity: quantity
                }
                
                

                
                const response = await axios.post(`http://localhost:8000/api/add-to-cart`, payload, {
                    withCredentials: true,
                    headers: {
                        'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
                    }
                })
        
                
                store.state.cart.products_payload = response.data.products_payload
                

            } catch(err) {
                console.log(err)
            } finally {
                this.checkInCart()
            }

            
            
             
        },

        /**
         * order type boolean
         *      true = asc
         *      false = desc
         */
        changeQuantity() {
            clearTimeout(this.timeout)
            this.timeout = setTimeout(() => {
                this.addToCart(event)
            }, 1000)
        },

        priceSwitch(event, var_id) {
            // console.log(event.currentTarget.getAttribute('data-type'))
            // console.log(this.selected_var)
            this.selected_var = var_id
        },
        calc_selected_variant() {
            for(let i of this.product.variants) {
                if(i.is_primary_variant == true) {
                    this.selected_var = i.id
                }
            }
        },
        calc_in_storage_indicator() {
            // switch(product.instorage) {
            //     case(
            // }
           
            const instor = this.product.instorage
            if(instor <= 20) {
                this.storage_counter = 'stock-1'
            } else if(instor > 20 && instor < 50) {
                this.storage_counter = 'stock-2'
            } else {
                this.storage_counter = 'stock-3'
            }
        },
        
        checkInCart() {
            const list = JSON.parse(localStorage.getItem('basket')).products_payload

            if(list == '') {
                return
            }

            for(let i of list) {
                
                if(this.$route.params.slug == i.payload.parent_product.slug) {
                    this.itemInCart.quantity = i.quantity
                }
            }
            
        }
    },
    mounted() {
        this.fetchData()

        
    }

}
</script>

<style>
.loading {
    width: 100%;
    height: 1000px;
    background-color:#CACDD2;
}
</style>