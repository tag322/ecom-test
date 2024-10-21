@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content js-view-parent" id="promotion-detail">

    <div class="breadcrumb-with-title">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/">Каталог</a></li>
            <li><span>Ламинат</span></li>
        </ul>

        <a href="/" class="breadcrumb-back">
            <img src="./img/ico/arrow.svg" alt="" class="svg">
        </a>

        <h1 class="h2 title-small">Маленький размер — большая выгода</h1>
    </div>

    <div class="date-line">
        <img alt="" class="svg" src="./img/ico/date-small.svg">
        <div class="date-line__text">Дата акции:</div>
        <div class="date-line__val">29.09.2023</div>
    </div>

    <div class="promo-detail-cart promo-detail-cart--dark">
        <div class="promo-detail-cart__img">
            <img alt="" class="fill-img" loading="lazy" src="./img/tmp/promo-detail.jpg">
        </div>
        <div class="promo-detail-cart__body">
            <div class="promo-detail-cart__title">Маленький размер — большая выгода</div>
            <div class="promo-detail-cart__sep"></div>
            <div class="promo-detail-cart__desc">Рады предложить удивительный клеевой кварц-винил в формате Craft по выгодным ценам!</div>
            <div class="promo-detail-cart__logo">
                <img alt="" src="./img/logo-FF-small.svg">
            </div>
        </div>
    </div>

    <div class="promo-detail-text text-format c-d-gray">
        <p>Для клиентов онлайн-сервиса VKVADRATE появилась возможность приобрести клеевую кварц-виниловую плитку FineFloor в формате Craft с выгодой до 700 рублей* за квадратный метр!</p>
        <h4>Акционный прайс</h4>
        <p>FineFloor Craft Small Plank: 2700 рублей ➜ 2160 рублей<br /> FineFloor Craft Short Plank: 2175 рублей ➜ 1740 рублей</p>
        <h4>О материале</h4>
        <p>Craft — это уникальные форматы плашек постоянных коллекций FineFloor Wood, Stone и Rich с клеевым типом монтажа, которые абсолютно точно имитируют штучный паркет в двух размерах Short и Small.</p>
        <p>
            Обычный размер плашки — 1320×196 мм.<br /> FineFloor Craft Short Plank — 632×158 мм.<br /> FineFloor Craft Small Plank — 261×65 мм.<br /> С FineFloor Craft у вас есть мощный инструмент для творчества и реализации самых смелых замыслов в любых помещениях!
        </p>
        <p>* — акция действует до конца остатков материала</p>
    </div>

    <div class="catalog-filter-info">
        <a class="btn js-open-modal catalog-filter-info__mobile" href="#modal-catalog-filter">Фильтры</a>
        <div class="catalog-filter-info__count">Найдено 836 товаров</div>
        <div class="catalog-filter-info__action">

            <div class="catalog-filter-info__view">
                <a class="catalog-filter-info__btn js-change-catalog-view active" data-catalog-view="grid" href="">
                    <img alt="" class="svg" src="./img/ico/grid.svg">
                </a>

                <a class="catalog-filter-info__btn js-change-catalog-view" data-catalog-view="list" href="">
                    <img alt="" class="svg" src="./img/ico/list.svg">
                </a>
            </div>

        </div>
    </div>

    <div class="product-grid-4">

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

    </div>

    <div class="catalog-filter-main-foot">
        <div class="catalog-filter-main-foot__pagination">
            <div class="pagination">
                <a class="pagination-arrow pagination-arrow--left" href="">
                    <img alt="" class="svg" src="./img/ico/arrow.svg">
                </a>
                <a class="pagination-itm" href="">1</a>
                <a class="pagination-itm active" href="">2</a>
                <a class="pagination-itm" href="">3</a>
                <span class="pagination-sep">…</span>
                <a class="pagination-itm" href="">64</a>
                <a class="pagination-arrow" href="">
                    <img alt="" class="svg" src="./img/ico/arrow.svg">
                </a>
            </div>
        </div>
        <div class="catalog-filter-main-foot__action">
            <button class="btn btn--line">Показать ещё</button>

            <a class="arrow-top js-anchor" href="#promotion-detail">
                <img alt="" class="svg" src="./img/ico/arrow.svg">
            </a>
        </div>
    </div>

</div>

</div>

@endsection