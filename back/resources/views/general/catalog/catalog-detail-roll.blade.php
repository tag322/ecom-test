@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content">
    <ul class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li><a href="/">Каталог</a></li>
        <li><span>Ламинат</span></li>
    </ul>

    <a href="/" class="breadcrumb-back">
        <img src="./img/ico/arrow.svg" alt="" class="svg">
    </a>

    <div class="catalog-main catalog-main-roll section-small-margin">

        <input name="price-m2" type="hidden" value="986"> <!--	Цена за квадратный метр	-->
        <input name="m2-in-roll" type="hidden" value="10"><!--	Количество квадратных метров в рулоне	-->
        <input name="buy-type" type="hidden" value="roll"><!--	Говорит что мы продаем не на отрез а рулонами, и округление идет в большую сторону	-->

        <div class="catalog-main__left">
            <div class="catalog-slider">
                <div class="catalog-slider__preview">

                    <div class="catalog-slider__preview__img" data-image-detail="./img/tmp/banner-bg.jpg">
                        <picture>
                            <!--	Картинка для мобилы в более высоком разрешении -->
                            <source media="all and (max-width: 900px)" srcset="./img/tmp/banner-bg.jpg">
                            <!--	Картинка для десктопа (превью) в более высоком разрешении -->
                            <img alt="" class="" loading="lazy" src="./img/tmp/banner-bg.jpg">
                        </picture>
                    </div>
                    <div class="catalog-slider__preview__img" data-image-detail="./img/tmp/blog.jpg">
                        <img alt="" class="" loading="lazy" src="./img/tmp/blog.jpg">
                    </div>
                    <div class="catalog-slider__preview__img" data-image-detail="./img/tmp/cat.jpg">
                        <img alt="" class="" loading="lazy" src="./img/tmp/cat.jpg">
                    </div>
                    <div class="catalog-slider__preview__img" data-image-detail="./img/tmp/product.jpg">
                        <img alt="" class="" loading="lazy" src="./img/tmp/product.jpg">
                    </div>
                    <div class="catalog-slider__preview__img" data-image-detail="./img/tmp/banner-bg.jpg">
                        <img alt="" class="" loading="lazy" src="./img/tmp/banner-bg.jpg">
                    </div>
                    <div class="catalog-slider__preview__img" data-image-detail="./img/tmp/blog.jpg">
                        <img alt="" class="" loading="lazy" src="./img/tmp/blog.jpg">
                    </div>
                    <div class="catalog-slider__preview__img" data-image-detail="./img/tmp/cat.jpg">
                        <img alt="" class="" loading="lazy" src="./img/tmp/cat.jpg">
                    </div>

                </div>
                <div class="catalog-slider__img">
                    <img class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                </div>
            </div>
        </div>
        <div class="catalog-info">
            <div class="catalog-info-head">
                <div class="catalog-info__sku">Артикул: L-BMH-191-2,5</div>
                <h1 class="catalog-info__title">Линолеум PROFI MASTER HAVANNA OAK 1</h1>

                <div class="roll-width">
                    <div class="roll-width__title">Ширина рулона (м):</div>
                    <div class="radio-list">

                        <div class="radio-list-itm">
                            <input disabled name="roll-width" type="radio" value="1.5">
                            <a class="radio-list-itm__name" href="">1,5 м</a>
                        </div>

                        <div class="radio-list-itm">
                            <input name="roll-width" type="radio" value="2.0">
                            <a class="radio-list-itm__name" href="">2,0 м</a>
                        </div>

                        <div class="radio-list-itm">
                            <input checked name="roll-width" type="radio" value="2.5">
                            <a class="radio-list-itm__name" href="">2,5 м</a>
                        </div>

                        <div class="radio-list-itm">
                            <input name="roll-width" type="radio" value="3.0">
                            <a class="radio-list-itm__name" href="">3,0 м</a>
                        </div>

                    </div>
                </div>

                <div class="price-block">
                    <div class="price-block-head">
                        <span>Цена за</span>
                        <div class="price-type">
                            <div class="price-type-val active" data-type="m2">м<sup>2</sup></div>
                            <div class="price-type-val" data-type="roll">рулон</div>

                            <img alt="" class="price-type__label" src="./img/ico/roll-buy.svg">
                        </div>
                    </div>
                    <div class="price-block-val">
                        <div class="price-block-val__itm active" data-type="m2">
                            <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                        </div>
                        <div class="price-block-val__itm" data-type="roll">
                            <span class="price price--old">3 590 ₽</span> <span class="price">1 972 ₽</span>
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
                    <div class="product-stock__line stock-1">
                        <span></span> <span></span> <span></span>
                    </div>
                </div>

                <div class="product-count-desc">сейчас на складе 3522 м²</div>

                <div class="product-itm__btn">
                    <button aria-label="Сравнить" class="product-btn">
                        <img alt="" class="svg" src="./img/ico/solve.svg">
                    </button>
                    <button aria-label="В избранное" class="product-btn">
                        <img alt="" class="svg" src="./img/ico/heart.svg">
                    </button>
                </div>

                <div class="catalog-info__btns js-catalog-roll-btns">
                    <div class="add-cart-btn">
                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                        <div class="add-cart-counter">
                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                        </div>
                    </div>
                </div>

                <div class="roll-calc-wrap">
                    <div class="roll-calc roll-calc--v2">

                        <div class="roll-calc__left">

                            <div class="roll-calc-img">
                                <img alt="" class="svg" src="./img/ico/roll-finished.svg">
                                <div class="roll-calc-img__right-text">
                                    <span class="js-roll-width">2,5</span> м
                                </div>
                            </div>
                            <div class="roll-calc__square">Площадь = <span class="js-m2-in-roll">10</span> м<sup>2</sup></div>
                        </div>

                        <div class="roll-calc__left">

                            <div class="roll-calc-img">
                                <img alt="" class="svg" src="./img/ico/roll-finished.svg">
                                <div class="roll-calc-img__right-text">
                                    <b>x<span class="js-roll-count">2</span></b>
                                </div>
                            </div>
                            <div class="roll-calc__square">Площадь = <span class="js-catalog-m2-total">200</span> м<sup>2</sup></div>
                        </div>

                        <div class="roll-calc__right">
                            <div class="roll-calc__cut">рулон — 230₽/ м2</div>
                            <div class="roll-calc__total">Итого = <span class="js-catalog-price-total">4 500</span> ₽</div>
                        </div>
                    </div>
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
            <img alt="" loading="lazy" src="./img/tmp/decor-preview.jpg">
        </div>
    </section>

    <section class="section-small-margin">
        <h3 class="title-normal">Все декоры коллекции</h3>

        <div class="collection-list">

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
                </div>
            </a>

            <a class="collection-list-itm" href="/">
                <div class="collection-list-itm__hover">
                    <div class="collection-list-itm__hover__img">
                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-detail.jpg">
                    </div>
                    <div class="collection-list-itm__hover__name">FF-1321 Дуб Меранти</div>
                </div>
                <div class="collection-list-itm__img">
                    <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-small.jpg">
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
            <img alt="" class="catalog-nav-product__img" loading="lazy" src="./img/tmp/banner-bg.jpg">
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
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                        <div class="catalog-char-line">
                            <div class="catalog-char-line__name">
                                <span>Вид покрытия</span>
                                <div class="tooltip">
                                    <div class="tooltip__ico">
                                        <img alt="" class="svg" src="./img/ico/help.svg">
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
                                <img alt="" class="catalog-char-line__val__ico" src="./img/ico/flag-ru.svg">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="show-more-btn"><span class="text-more">Открыть полностью</span><span class="text-lese">Закрыть</span></div>
        </div>
    </section>

    <section class="section-margin js-scroll-section" id="catalog-buy">
        <h3 class="title-margin">С этим товаром покупают</h3>

        <div class="product-slider">

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label">
                        <img alt="" class="product-itm-label__ico svg" src="./img/ico/like.svg">
                        <span class="product-itm-label__text">рекомендуем</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--green">
                        <span class="product-itm-label__text">новинка</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--dark">
                        <span class="product-itm-label__text">— 35%</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. 169000000000001170</div>
                    <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label">
                        <img alt="" class="product-itm-label__ico svg" src="./img/ico/like.svg">
                        <span class="product-itm-label__text">рекомендуем</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--green">
                        <span class="product-itm-label__text">новинка</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--dark">
                        <span class="product-itm-label__text">— 35%</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. 169000000000001170</div>
                    <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label">
                        <img alt="" class="product-itm-label__ico svg" src="./img/ico/like.svg">
                        <span class="product-itm-label__text">рекомендуем</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--green">
                        <span class="product-itm-label__text">новинка</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--dark">
                        <span class="product-itm-label__text">— 35%</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. 169000000000001170</div>
                    <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="section-margin js-scroll-section" id="catalog-related">
        <h3 class="title-margin">Похожие товары</h3>

        <div class="product-slider">

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label">
                        <img alt="" class="product-itm-label__ico svg" src="./img/ico/like.svg">
                        <span class="product-itm-label__text">рекомендуем</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--green">
                        <span class="product-itm-label__text">новинка</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--dark">
                        <span class="product-itm-label__text">— 35%</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. 169000000000001170</div>
                    <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label">
                        <img alt="" class="product-itm-label__ico svg" src="./img/ico/like.svg">
                        <span class="product-itm-label__text">рекомендуем</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--green">
                        <span class="product-itm-label__text">новинка</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--dark">
                        <span class="product-itm-label__text">— 35%</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. 169000000000001170</div>
                    <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label">
                        <img alt="" class="product-itm-label__ico svg" src="./img/ico/like.svg">
                        <span class="product-itm-label__text">рекомендуем</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--green">
                        <span class="product-itm-label__text">новинка</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                    <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

            <div class="product-itm @@class" data-num="@@num">
                <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                <a class="product-itm-head" href="/">
                    <div class="product-itm-images">
                        <div class="product-itm-images-stage">

                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/cat.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/decor-preview.jpg">
                            </div>
                            <div class="product-itm-images__itm">
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                            </div>

                        </div>
                    </div>

                    <span class="product-itm-label product-itm-label--dark">
                        <span class="product-itm-label__text">— 35%</span>
                    </span>

                </a>
                <div class="product-itm-body">
                    <div class="product-itm__sku">Арт. 169000000000001170</div>
                    <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star svg" src="./img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="./img/ico/star-half.svg">

                        <div class="star-line__count">34</div>
                    </div>
                    <div class="product-itm__sep"></div>
                    <div class="product-itm__desc">

                        <p>вес (кг): 5.3</p>
                        <p>тип клея: однокомпонентный</p>
                        <p>назначение: для внутренних работ</p>
                        <p>время засыхания: до 60 мин.</p>
                        <p>основа клея: водно-дисперсионный</p>

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
                            <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                            <div class="add-cart-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>
                        </div>

                        <button aria-label="Сравнить" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/solve.svg">
                        </button>
                        <button aria-label="В избранное" class="product-btn">
                            <img alt="" class="svg" src="./img/ico/heart.svg">
                        </button>
                    </div>

                </div>
            </div>

        </div>
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
                                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/ava.jpg">
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

                            <a class="review-itm__photo__itm" data-fancybox="" href="./img/tmp/blog.jpg">
                                <img alt="" class="fill-img" src="./img/tmp/blog.jpg">
                            </a>
                            <a class="review-itm__photo__itm" data-fancybox="" href="./img/tmp/cat.jpg">
                                <img alt="" class="fill-img" src="./img/tmp/cat.jpg">
                            </a>

                            <a class="review-itm__photo__itm" data-fancybox="" href="./img/tmp/blog.jpg">
                                <img alt="" class="fill-img" src="./img/tmp/blog.jpg">
                            </a>
                            <a class="review-itm__photo__itm" data-fancybox="" href="./img/tmp/cat.jpg">
                                <img alt="" class="fill-img" src="./img/tmp/cat.jpg">
                            </a>

                            <a class="review-itm__photo__itm" data-fancybox="" href="./img/tmp/blog.jpg">
                                <img alt="" class="fill-img" src="./img/tmp/blog.jpg">
                            </a>
                            <a class="review-itm__photo__itm" data-fancybox="" href="./img/tmp/cat.jpg">
                                <img alt="" class="fill-img" src="./img/tmp/cat.jpg">
                            </a>

                        </div>

                        <div class="rate-action">
                            <button aria-label="like" class="rate-action-btn" onclick="this.classList.toggle('active')">
                                <span>128</span>
                                <img alt="" class="svg" src="./img/ico/like.svg">
                            </button>
                            <button aria-label="dislike" class="rate-action-btn rate-action-btn--dislike" onclick="this.classList.toggle('active')">
                                <span>128</span>
                                <img alt="" class="svg" src="./img/ico/like.svg">
                            </button>
                        </div>

                    </div>
                </div>

                <div class="catalog-review__foot">
                    <button class="btn btn--line">Показать все отзывы</button>

                    <a class="arrow-top js-anchor" href="#catalog-review">
                        <img alt="" class="svg" src="./img/ico/arrow.svg">
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
                    <img alt="" class="svg" src="./img/ico/docs.svg">
                </span> <span class="doc-list-itm__name">ТТХ ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
            </a>
            <a class="doc-list-itm" href="/">
                <span class="doc-list-itm__ico">
                    <img alt="" class="svg" src="./img/ico/docs.svg">
                </span>
                <span class="doc-list-itm__name">Инструкция по укладке (замковое покрытие) ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
            </a>

            <a class="doc-list-itm" href="/">
                <span class="doc-list-itm__ico">
                    <img alt="" class="svg" src="./img/ico/docs.svg">
                </span> <span class="doc-list-itm__name">ТТХ ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
            </a>
            <a class="doc-list-itm" href="/">
                <span class="doc-list-itm__ico">
                    <img alt="" class="svg" src="./img/ico/docs.svg">
                </span>
                <span class="doc-list-itm__name">Инструкция по укладке (замковое покрытие) ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
            </a>

            <a class="doc-list-itm" href="/">
                <span class="doc-list-itm__ico">
                    <img alt="" class="svg" src="./img/ico/docs.svg">
                </span> <span class="doc-list-itm__name">ТТХ ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
            </a>
            <a class="doc-list-itm" href="/">
                <span class="doc-list-itm__ico">
                    <img alt="" class="svg" src="./img/ico/docs.svg">
                </span>
                <span class="doc-list-itm__name">Инструкция по укладке (замковое покрытие) ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
            </a>

            <a class="doc-list-itm" href="/">
                <span class="doc-list-itm__ico">
                    <img alt="" class="svg" src="./img/ico/docs.svg">
                </span> <span class="doc-list-itm__name">ТТХ ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
            </a>
            <a class="doc-list-itm" href="/">
                <span class="doc-list-itm__ico">
                    <img alt="" class="svg" src="./img/ico/docs.svg">
                </span>
                <span class="doc-list-itm__name">Инструкция по укладке (замковое покрытие) ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
            </a>

            <a class="doc-list-itm" href="/">
                <span class="doc-list-itm__ico">
                    <img alt="" class="svg" src="./img/ico/docs.svg">
                </span> <span class="doc-list-itm__name">ТТХ ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
            </a>
            <a class="doc-list-itm" href="/">
                <span class="doc-list-itm__ico">
                    <img alt="" class="svg" src="./img/ico/docs.svg">
                </span>
                <span class="doc-list-itm__name">Инструкция по укладке (замковое покрытие) ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic</span>
            </a>

        </div>
    </section>

</div>

<div class="fly-btn">

    <a href="/" class="fly-btn-itm">
        <img src="./img/ico/actions.svg" alt="" class="fly-btn-itm__ico">
        <span class="fly-btn-itm__text">Акция</span>
    </a>

    <a href="/" class="fly-btn-itm fly-btn-itm--sale">
        <img src="./img/ico/sale.svg" alt="" class="fly-btn-itm__ico">
        <span class="fly-btn-itm__text">Распродажа</span>
    </a>

    <a href="/" class="fly-btn-itm fly-btn-itm--discount">
        <img src="./img/ico/receipt-tax.svg" alt="" class="fly-btn-itm__ico">
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
                        <img alt="" loading="lazy" src="./img/tmp/decor-small.jpg">
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
                <input name="price" type="hidden" value="986">
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
                            <img alt=" " class="svg" src="./img/calc-type1.svg">
                        </span>

                        <span class="calc-cart__name">Горизонтальное</span>
                    </label>

                    <label class="calc-cart">
                        <input name="type" type="radio" value="Диагональное"> <span class="calc-cart__border"></span> <span class="calc-cart__ico">
                            <img alt=" " class="svg" src="./img/calc-type2.svg">
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

@endsection