@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content">

    <ul class="promotion-nav">

        <li>
            <a class="promotion-nav-itm path-fill" href="/">
                <img alt="" class="svg" src="./img/ico/actions.svg">
                <span class="promotion-nav-itm__text">Акции</span>
            </a>
        </li>

        <li>
            <a class="promotion-nav-itm path-fill  active-sale" href="/">
                <img alt="" class="svg" src="./img/ico/sale.svg">
                <span class="promotion-nav-itm__text">Распродажи</span>
            </a>
        </li>

        <li>
            <a class="promotion-nav-itm path-stroke" href="/">
                <img alt="" class="svg" src="./img/ico/receipt-tax.svg">
                <span class="promotion-nav-itm__text">Уцененные товары</span>
            </a>
        </li>

    </ul>

    <div class="catalog js-view-parent" id="catalog-block">
        <form class="catalog-filter">

            <div class="catalog-filter-head">
                <img alt="" class="svg" src="./img/ico/filter.svg">
                <div class="catalog-filter-head__title h4">Фильтры</div>
            </div>

            <div class="catalog-filter-accordion js-accordion">
                <div class="catalog-filter-accordion__head js-accordion-head">
                    <div class="catalog-filter-accordion__head__name">Категории</div>
                    <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                    <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                    <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
                </div>

                <div class="catalog-filter-accordion__body js-accordion-body">
                    <ul class="filter-list">
                        <li>
                        <li>
                            <label class="filter-itm check_box">
                                <input type="checkbox" name="@@input-name" class="js-checkbox">
                                <span class="check_box__item"></span>

                                <span class="filter-itm__color">
                                    <img src="./img/color-icons/bej.svg" alt="" loading="lazy">
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
                                    <img src="./img/color-icons/black.svg" alt="" loading="lazy">
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
                                    <img src="./img/color-icons/blue.svg" alt="" loading="lazy">
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
                                    <img src="./img/color-icons/brown.svg" alt="" loading="lazy">
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
                    <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                    <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                    <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
                </div>

                <div class="catalog-filter-accordion__body js-accordion-body">
                    <ul class="filter-list">
                        <li>
                        <li>
                            <label class="filter-itm check_box">
                                <input type="checkbox" name="@@input-name" class="js-checkbox">
                                <span class="check_box__item"></span>

                                <span class="filter-itm__color">
                                    <img src="./img/color-icons/bej.svg" alt="" loading="lazy">
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
                                    <img src="./img/color-icons/black.svg" alt="" loading="lazy">
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
                                    <img src="./img/color-icons/blue.svg" alt="" loading="lazy">
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
                                    <img src="./img/color-icons/brown.svg" alt="" loading="lazy">
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
                    <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                    <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                    <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
                </div>

                <div class="catalog-filter-accordion__body js-accordion-body">
                    <ul class="filter-list">
                        <li>
                        <li>
                            <label class="filter-itm check_box">
                                <input type="checkbox" name="@@input-name" class="js-checkbox">
                                <span class="check_box__item"></span>

                                <span class="filter-itm__color">
                                    <img src="./img/color-icons/bej.svg" alt="" loading="lazy">
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
                                    <img src="./img/color-icons/black.svg" alt="" loading="lazy">
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
                                    <img src="./img/color-icons/blue.svg" alt="" loading="lazy">
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
                                    <img src="./img/color-icons/brown.svg" alt="" loading="lazy">
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

            <div class="catalog-filter-product">

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

                    <a class="arrow-top js-anchor" href="#catalog-block">
                        <img alt="" class="svg" src="./img/ico/arrow.svg">
                    </a>
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
                    <img alt="" class="svg" src="./img/ico/filter.svg">
                    <span>Все фильтры</span>
                </div>

                <label class="modal-facet-filter-search">
                    <input class="js-search-modal-filter" placeholder="Поиск по фильтрам" type="text">
                    <img alt="" class="svg modal-facet-filter-search-ico" src="./img/ico/search.svg">
                </label>
            </div>

            <div class="modal-filter-list">

                <div class="modal-filter-list__col">

                    <div class="catalog-filter-accordion js-accordion">
                        <div class="catalog-filter-accordion__head js-accordion-head">
                            <div class="catalog-filter-accordion__head__name">Категории</div>
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
                        </div>

                        <div class="catalog-filter-accordion__body js-accordion-body">
                            <ul class="filter-list">
                                <li>
                                <li>
                                    <label class="filter-itm check_box">
                                        <input type="checkbox" name="@@input-name" class="js-checkbox">
                                        <span class="check_box__item"></span>

                                        <span class="filter-itm__color">
                                            <img src="./img/color-icons/bej.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/black.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/blue.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/brown.svg" alt="" loading="lazy">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
                        </div>

                        <div class="catalog-filter-accordion__body js-accordion-body">
                            <ul class="filter-list">
                                <li>
                                <li>
                                    <label class="filter-itm check_box">
                                        <input type="checkbox" name="@@input-name" class="js-checkbox">
                                        <span class="check_box__item"></span>

                                        <span class="filter-itm__color">
                                            <img src="./img/color-icons/bej.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/black.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/blue.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/brown.svg" alt="" loading="lazy">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
                        </div>

                        <div class="catalog-filter-accordion__body js-accordion-body">
                            <ul class="filter-list">
                                <li>
                                <li>
                                    <label class="filter-itm check_box">
                                        <input type="checkbox" name="@@input-name" class="js-checkbox">
                                        <span class="check_box__item"></span>

                                        <span class="filter-itm__color">
                                            <img src="./img/color-icons/bej.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/black.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/blue.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/brown.svg" alt="" loading="lazy">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
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
                            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="./img/ico/caret-down.svg">
                        </div>

                        <div class="catalog-filter-accordion__body js-accordion-body">
                            <ul class="filter-list">
                                <li>
                                <li>
                                    <label class="filter-itm check_box">
                                        <input type="checkbox" name="@@input-name" class="js-checkbox">
                                        <span class="check_box__item"></span>

                                        <span class="filter-itm__color">
                                            <img src="./img/color-icons/bej.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/black.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/blue.svg" alt="" loading="lazy">
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
                                            <img src="./img/color-icons/brown.svg" alt="" loading="lazy">
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

</div>

@endsection