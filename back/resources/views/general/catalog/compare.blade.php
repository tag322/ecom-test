@extends("layouts.main_layout")

@section("content")


<div class="main">

<div class="content compare-page" id="compare-page">

    <div class="breadcrumb-with-title">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/">Каталог</a></li>
            <li><span>Ламинат</span></li>
        </ul>

        <a href="/" class="breadcrumb-back">
            <img src="./img/ico/arrow.svg" alt="" class="svg">
        </a>

        <div class="head-title title-normal">
            <h1 class="h2">Сравнение товаров</h1>

            <a class="text-ico" href="">
                <img alt="" class="svg" src="./img/ico/trash.svg">
                <span class="text-ico__name">Очистить сравнение</span>
            </a>

        </div>
    </div>

    <ul class="compare-nav">
        <li>
            <a class="compare-nav-itm" href="">Напольные покрытия: 4</a>
        </li>
        <li>
            <a class="compare-nav-itm active" href="">Еще какие-то покрытия: 6</a>
        </li>
    </ul>

    <div class="compare-body">
        <div class="compare-grid">
            <div class="compare-grid-aside">
                <ul class="compare-grid-options">
                    <li>
                        <input checked class="js-radio js-compare-diff-type-input" name="compare-type" placeholder="Все характеристики" type="radio" value="all">
                    </li>
                    <li>
                        <input class="js-radio js-compare-diff-type-input" name="compare-type" placeholder="Показать различия" type="radio" value="diff">
                    </li>
                </ul>
            </div>
            <div class="compare-grid-main">
                <div class="compare-products js-compare-move">

                    <div class="product-itm js-compare-move-itm" data-num="1">
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
                            <div class="product-itm__sku">№ 1 Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">№ 1 Go4Cork OPTIMAL</h5>
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

                    <div class="product-itm js-compare-move-itm" data-num="2">
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
                            <div class="product-itm__sku">№ 2 Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">№ 2 Go4Cork OPTIMAL пробковая подложка</h5>
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

                    <div class="product-itm js-compare-move-itm" data-num="3">
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
                            <div class="product-itm__sku">№ 3 Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">№ 3 Go4Cork OPTIMAL</h5>
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

                    <div class="product-itm js-compare-move-itm" data-num="4">
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
                            <div class="product-itm__sku">№ 4 Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">№ 4 Go4Cork OPTIMAL пробковая подложка</h5>
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

                    <div class="product-itm js-compare-move-itm" data-num="5">
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
                            <div class="product-itm__sku">№ 5 Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">№ 5 Go4Cork OPTIMAL</h5>
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

                    <div class="product-itm js-compare-move-itm" data-num="6">
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
                            <div class="product-itm__sku">№ 6 Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">№ 6 Go4Cork OPTIMAL пробковая подложка</h5>
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

                <div class="compare-grid-nav-mobile">
                    <div class="compare-grid-nav-mobile__product">
                        <div class="compare-grid-nav-mobile__product__btn js-compare-left-prev">
                            <img alt="" class="svg" src="./img/ico/arrow.svg">
                        </div>
                        <div class="compare-grid-nav-mobile__product__count">
                            <span class="js-compare-num-left">1</span>/6
                        </div>
                        <div class="compare-grid-nav-mobile__product__btn js-compare-left-next">
                            <img alt="" class="svg" src="./img/ico/arrow.svg">
                        </div>
                    </div>
                    <div class="compare-grid-nav-mobile__product">
                        <div class="compare-grid-nav-mobile__product__btn js-compare-right-prev">
                            <img alt="" class="svg" src="./img/ico/arrow.svg">
                        </div>
                        <div class="compare-grid-nav-mobile__product__count">
                            <span class="js-compare-num-right">2</span>/6
                        </div>
                        <div class="compare-grid-nav-mobile__product__btn js-compare-right-next">
                            <img alt="" class="svg" src="./img/ico/arrow.svg">
                        </div>
                    </div>
                </div>

                <div class="compare-grid-nav">
                    <div class="compare-grid-nav__btn js-compare-prev">
                        <img alt="" class="svg" src="./img/ico/arrow.svg">
                    </div>
                    <div class="compare-grid-nav__btn js-compare-next">
                        <img alt="" class="svg" src="./img/ico/arrow.svg">
                    </div>
                </div>

            </div>

        </div>

        <div class="js-compare-fixed-start"></div>
        <div class="compare-fixed-head">
            <div class="content">
                <div class="compare-grid">
                    <div class="compare-grid-aside">
                        <ul class="compare-grid-options">
                            <li>
                                <label class="radio_box checked">
                                    <input checked="" class="js-radio js-compare-diff-type-input" name="compare-type-fixed" placeholder="Все характеристики" type="radio" value="all"><span class="radio_box__item"></span><span class="radio_box__text">Все характеристики</span>
                                </label>
                            </li>
                            <li>
                                <label class="radio_box">
                                    <input class="js-radio js-compare-diff-type-input" name="compare-type-fixed" placeholder="Показать различия" type="radio" value="diff"><span class="radio_box__item"></span><span class="radio_box__text">Показать различия</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="compare-grid-main">

                        <div class="compare-products js-compare-move">

                            <div class="fixed-head-product js-compare-move-itm">
                                <div class="fixed-head-product__head">
                                    <div class="fixed-head-product__img">
                                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                                    </div>
                                    <div class="fixed-head-product__name">№ 0 Go4Cork OPTIMAL</div>
                                </div>
                                <div class="fixed-head-product__actions">
                                    <div class="price-block-val__itm active" data-type="m2">
                                        <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed-head-product js-compare-move-itm">
                                <div class="fixed-head-product__head">
                                    <div class="fixed-head-product__img">
                                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                                    </div>
                                    <div class="fixed-head-product__name">№ 0 Go4Cork OPTIMAL пробковая подложка</div>
                                </div>
                                <div class="fixed-head-product__actions">
                                    <div class="price-block-val__itm active" data-type="m2">
                                        <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed-head-product js-compare-move-itm">
                                <div class="fixed-head-product__head">
                                    <div class="fixed-head-product__img">
                                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                                    </div>
                                    <div class="fixed-head-product__name">№ 1 Go4Cork OPTIMAL</div>
                                </div>
                                <div class="fixed-head-product__actions">
                                    <div class="price-block-val__itm active" data-type="m2">
                                        <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed-head-product js-compare-move-itm">
                                <div class="fixed-head-product__head">
                                    <div class="fixed-head-product__img">
                                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                                    </div>
                                    <div class="fixed-head-product__name">№ 1 Go4Cork OPTIMAL пробковая подложка</div>
                                </div>
                                <div class="fixed-head-product__actions">
                                    <div class="price-block-val__itm active" data-type="m2">
                                        <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed-head-product js-compare-move-itm">
                                <div class="fixed-head-product__head">
                                    <div class="fixed-head-product__img">
                                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                                    </div>
                                    <div class="fixed-head-product__name">№ 2 Go4Cork OPTIMAL</div>
                                </div>
                                <div class="fixed-head-product__actions">
                                    <div class="price-block-val__itm active" data-type="m2">
                                        <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed-head-product js-compare-move-itm">
                                <div class="fixed-head-product__head">
                                    <div class="fixed-head-product__img">
                                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                                    </div>
                                    <div class="fixed-head-product__name">№ 2 Go4Cork OPTIMAL пробковая подложка</div>
                                </div>
                                <div class="fixed-head-product__actions">
                                    <div class="price-block-val__itm active" data-type="m2">
                                        <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed-head-product js-compare-move-itm">
                                <div class="fixed-head-product__head">
                                    <div class="fixed-head-product__img">
                                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                                    </div>
                                    <div class="fixed-head-product__name">№ 3 Go4Cork OPTIMAL</div>
                                </div>
                                <div class="fixed-head-product__actions">
                                    <div class="price-block-val__itm active" data-type="m2">
                                        <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed-head-product js-compare-move-itm">
                                <div class="fixed-head-product__head">
                                    <div class="fixed-head-product__img">
                                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                                    </div>
                                    <div class="fixed-head-product__name">№ 3 Go4Cork OPTIMAL пробковая подложка</div>
                                </div>
                                <div class="fixed-head-product__actions">
                                    <div class="price-block-val__itm active" data-type="m2">
                                        <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed-head-product js-compare-move-itm">
                                <div class="fixed-head-product__head">
                                    <div class="fixed-head-product__img">
                                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/product.jpg">
                                    </div>
                                    <div class="fixed-head-product__name">№ 4 Go4Cork OPTIMAL</div>
                                </div>
                                <div class="fixed-head-product__actions">
                                    <div class="price-block-val__itm active" data-type="m2">
                                        <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed-head-product js-compare-move-itm">
                                <div class="fixed-head-product__head">
                                    <div class="fixed-head-product__img">
                                        <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
                                    </div>
                                    <div class="fixed-head-product__name">№ 4 Go4Cork OPTIMAL пробковая подложка</div>
                                </div>
                                <div class="fixed-head-product__actions">
                                    <div class="price-block-val__itm active" data-type="m2">
                                        <span class="price price--old">1 590 ₽</span> <span class="price">986 ₽</span>
                                    </div>
                                    <div class="add-cart-btn">
                                        <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                        <div class="add-cart-counter">
                                            <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                            <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                            <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="compare-grid-nav-mobile">
                            <div class="compare-grid-nav-mobile__product">
                                <div class="compare-grid-nav-mobile__product__btn js-compare-left-prev">
                                    <img alt="" class="svg" src="./img/ico/arrow.svg">
                                </div>
                                <div class="compare-grid-nav-mobile__product__count">
                                    <span class="js-compare-num-left">1</span>/6
                                </div>
                                <div class="compare-grid-nav-mobile__product__btn js-compare-left-next">
                                    <img alt="" class="svg" src="./img/ico/arrow.svg">
                                </div>
                            </div>
                            <div class="compare-grid-nav-mobile__product">
                                <div class="compare-grid-nav-mobile__product__btn js-compare-right-prev">
                                    <img alt="" class="svg" src="./img/ico/arrow.svg">
                                </div>
                                <div class="compare-grid-nav-mobile__product__count">
                                    <span class="js-compare-num-right">2</span>/6
                                </div>
                                <div class="compare-grid-nav-mobile__product__btn js-compare-right-next">
                                    <img alt="" class="svg" src="./img/ico/arrow.svg">
                                </div>
                            </div>
                        </div>

                        <div class="compare-grid-nav">
                            <div class="compare-grid-nav__btn js-compare-prev">
                                <img alt="" class="svg" src="./img/ico/arrow.svg">
                            </div>
                            <div class="compare-grid-nav__btn js-compare-next">
                                <img alt="" class="svg" src="./img/ico/arrow.svg">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="compare-diff-mobile">
            <input type="checkbox" class="js-checkbox-switcher js-compare-diff-type-check" placeholder="Показать различия">
        </div>

        <div class="compare-grid compare-grid--th">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Рейтинг</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">
                    </div>
                    <div class="compare-grid-td__text">86 отзывов</div>
                </div>
                <div class="compare-grid-td js-compare-move-itm">
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star svg" src="../img/ico/star-half.svg">
                    </div>
                    <div class="compare-grid-td__text">44 отзывов</div>
                </div>

                <div class="compare-grid-td js-compare-move-itm">
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">
                    </div>
                    <div class="compare-grid-td__text">86 отзывов</div>
                </div>
                <div class="compare-grid-td js-compare-move-itm">
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star svg" src="../img/ico/star-half.svg">
                    </div>
                    <div class="compare-grid-td__text">44 отзывов</div>
                </div>

                <div class="compare-grid-td js-compare-move-itm">
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">
                    </div>
                    <div class="compare-grid-td__text">86 отзывов</div>
                </div>
                <div class="compare-grid-td js-compare-move-itm">
                    <div class="star-line">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                        <img alt="" class="star star svg" src="../img/ico/star-half.svg">
                    </div>
                    <div class="compare-grid-td__text">44 отзывов</div>
                </div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Тип укладки</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">Замковый 0</div>
                <div class="compare-grid-td js-compare-move-itm">Клеевой 0</div>

                <div class="compare-grid-td js-compare-move-itm">Замковый 0</div>
                <div class="compare-grid-td js-compare-move-itm">Клеевой 0</div>

                <div class="compare-grid-td js-compare-move-itm">Замковый 0</div>
                <div class="compare-grid-td js-compare-move-itm">Клеевой 0</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">м<sup class="square">2</sup> в упаковке</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">2.153</div>
                <div class="compare-grid-td js-compare-move-itm">6</div>

                <div class="compare-grid-td js-compare-move-itm">2.153</div>
                <div class="compare-grid-td js-compare-move-itm">6</div>

                <div class="compare-grid-td js-compare-move-itm">2.153</div>
                <div class="compare-grid-td js-compare-move-itm">6</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Длина плитки</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1292.00 мм</div>

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1292.00 мм</div>

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1292.00 мм</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Ширина плитки</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Вес упаковки</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">15.000 кг</div>
                <div class="compare-grid-td js-compare-move-itm">19.000 кг</div>

                <div class="compare-grid-td js-compare-move-itm">15.000 кг</div>
                <div class="compare-grid-td js-compare-move-itm">19.000 кг</div>

                <div class="compare-grid-td js-compare-move-itm">15.000 кг</div>
                <div class="compare-grid-td js-compare-move-itm">19.000 кг</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Штук в упаковке</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">19</div>
                <div class="compare-grid-td js-compare-move-itm">19</div>

                <div class="compare-grid-td js-compare-move-itm">19</div>
                <div class="compare-grid-td js-compare-move-itm">19</div>

                <div class="compare-grid-td js-compare-move-itm">19</div>
                <div class="compare-grid-td js-compare-move-itm">19</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Тип укладки</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">Замковый 1</div>
                <div class="compare-grid-td js-compare-move-itm">Клеевой 1</div>

                <div class="compare-grid-td js-compare-move-itm">Замковый 1</div>
                <div class="compare-grid-td js-compare-move-itm">Клеевой 1</div>

                <div class="compare-grid-td js-compare-move-itm">Замковый 1</div>
                <div class="compare-grid-td js-compare-move-itm">Клеевой 1</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">м<sup class="square">2</sup> в упаковке</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">2.153</div>
                <div class="compare-grid-td js-compare-move-itm">6</div>

                <div class="compare-grid-td js-compare-move-itm">2.153</div>
                <div class="compare-grid-td js-compare-move-itm">6</div>

                <div class="compare-grid-td js-compare-move-itm">2.153</div>
                <div class="compare-grid-td js-compare-move-itm">6</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Длина плитки</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1292.00 мм</div>

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1292.00 мм</div>

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1292.00 мм</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Ширина плитки</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>

                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>
                <div class="compare-grid-td js-compare-move-itm">1380.00 мм</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Вес упаковки</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">15.000 кг</div>
                <div class="compare-grid-td js-compare-move-itm">19.000 кг</div>

                <div class="compare-grid-td js-compare-move-itm">15.000 кг</div>
                <div class="compare-grid-td js-compare-move-itm">19.000 кг</div>

                <div class="compare-grid-td js-compare-move-itm">15.000 кг</div>
                <div class="compare-grid-td js-compare-move-itm">19.000 кг</div>

            </div>
        </div>

        <div class="compare-grid compare-grid--line">
            <div class="compare-grid-aside compare-grid-aside--center">
                <div class="compare-grid-aside__attr-title">Штук в упаковке</div>
            </div>
            <div class="compare-grid-main compare-grid__tr-body js-compare-move">

                <div class="compare-grid-td js-compare-move-itm">19</div>
                <div class="compare-grid-td js-compare-move-itm">19</div>

                <div class="compare-grid-td js-compare-move-itm">19</div>
                <div class="compare-grid-td js-compare-move-itm">19</div>

                <div class="compare-grid-td js-compare-move-itm">19</div>
                <div class="compare-grid-td js-compare-move-itm">19</div>

            </div>
        </div>

    </div>

    <div class="compare-foot">
        <a class="arrow-top js-anchor" href="#compare-page">
            <img alt="" class="svg" src="./img/ico/arrow.svg">
        </a>
    </div>

</div>

</div>

@endsection