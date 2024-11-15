<template>

<div class="main">

<div class="content">

    <div class="breadcrumb-with-title">

        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/">Каталог</a></li>
            <li><span>Ламинат</span></li>
        </ul>

        <a href="/" class="breadcrumb-back">
            <img src="../img/ico/arrow.svg" alt="" class="svg">
        </a>

        <h1 class="title-normal">Личный кабинет</h1>

    </div>

    <div class="lk-main-grid">
        <aside class="lk-aside">
            <nav class="lk-nav">
                <ul>
                    <li>
                        <a href="/lk-v2.html" class="active">Мой кабинет</a>
                    </li>
                    <li>
                        <a href="/lk-personal.html">Личные данные</a>
                    </li>
                    <li>
                        <a href="/lk/orders">История заказов</a>
                    </li>
                    <li>
                        <a href="/lk-profile-list.html">Профили заказов</a>
                    </li>
                    <li>
                        <a href="/lk-subscribe.html">Подписки</a>
                    </li>
                    <li>
                        <a href="/lk-fav.html">Избранные товары</a>
                    </li>
                    <li>
                        <a href='#' @click.preventDefault="logout">Выйти</a>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="lk-main-content">

            <div class="lk-user">

                <a href="/lk-personal.html" class="lk-user-head">
                    <div class="lk-user-head-val">
                        <div class="lk-user__desc">Личные данные бля</div>
                        <h3 class="lk-user__name" v-if="userData !== undefined">{{userData.name}}</h3>
                    </div>
                    <div class="lk-user-head__arrow">
                        <img alt="" class="svg" src="../img/ico/arrow.svg">
                    </div>
                </a>

                <div class="lk-user-foot">
                    <a class="lk-user-foot__email" href="mailto:ke@lesqa.ru" v-if="userData !== undefined">{{userData.email}}</a>
                    <a class="lk-user-foot__link" href="/reset-password-authenticated">Сменить пароль</a>
                </div>

            </div>

            <div class="lk-grid-nav">

                <a class="lk-grid-nav-itm" href="">
                    <img alt="" class="lk-grid-nav-itm__ico svg" src="../img/ico/heart.svg">
                    <h4 class="lk-grid-nav-itm__name">Избранное</h4>
                    <span class="lk-grid-nav-itm__desc">Нет товаров</span>
                </a>

                <a class="lk-grid-nav-itm" href="">
                    <img alt="" class="lk-grid-nav-itm__ico svg" src="../img/ico/basket-full.svg">
                    <h4 class="lk-grid-nav-itm__name">Заказы</h4>
                    <span class="lk-grid-nav-itm__desc">Нет заказов</span>
                </a>

                <a class="lk-grid-nav-itm" href="">
                    <img alt="" class="lk-grid-nav-itm__ico svg" src="../img/ico/mail.svg">
                    <h4 class="lk-grid-nav-itm__name">Подписки</h4>
                    <span class="lk-grid-nav-itm__desc">Рассылки и товары</span>
                </a>

                <a class="lk-grid-nav-itm" href="">
                    <img alt="" class="lk-grid-nav-itm__ico svg" src="../img/ico/user.svg">
                    <h4 class="lk-grid-nav-itm__name">Профиль</h4>
                    <span class="lk-grid-nav-itm__desc">Нет профилей</span>
                </a>

                <a class="lk-grid-nav-itm" href="">
                    <img alt="" class="lk-grid-nav-itm__ico svg" src="../img/ico/info-round.svg">
                    <h4 class="lk-grid-nav-itm__name">Профиль</h4>
                    <span class="lk-grid-nav-itm__desc">Нет профилей</span>
                </a>

            </div>

            <div class="lk-section-product-list">
                <h3 class="title-normal">Вам может понравиться</h3>

                <div class="product-slider-lk">

                    <div class="product-itm @@class" data-num="@@num">
                        <a aria-label="Детальная страница товара" class="product-itm__link" href="/"></a>
                        <a class="product-itm-head" href="/">
                            <div class="product-itm-images">
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
                            </div>

                            <div class="product-itm-label-list">
                                <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                <span class="product-itm-label">
                                    <img alt="" class="product-itm-label__ico svg" src="../img/ico/like.svg">
                                    <span class="product-itm-label__text">рекомендуем</span>
                                </span>

                                <span class="product-itm-label product-itm-label--main product-itm-label--green">
                                    <span class="product-itm-label__text">новинка</span>
                                </span>

                                <span class="product-itm-label product-itm-label--dark">
                                    <span class="product-itm-label__text">— 35%</span>
                                </span>

                            </div>

                        </a>
                        <div class="product-itm-body">
                            <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                            <div class="star-line">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">

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
                                    <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                    <div class="add-cart-counter">
                                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                        <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                    </div>
                                </div>

                                <button aria-label="Сравнить" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/solve.svg">
                                </button>
                                <button aria-label="В избранное" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/heart.svg">
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
                                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                    </div>

                                </div>
                            </div>

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
                                    <img alt="" class="product-itm-label__ico svg star star--full " src="../img/ico/star-half.svg">
                                    <span class="product-itm-label__text">хит сезона</span>
                                </span>

                            </div>

                        </a>
                        <div class="product-itm-body">
                            <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                            <div class="star-line">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">

                                <div class="star-line__count">34</div>
                            </div>
                            <div class="product-itm__sep"></div>
                            <div class="product-itm__desc">
                                <div class="product-itm__desc__text">

                                    <p>вес (кг): 5.3</p>
                                    <p>тип клея: однокомпонентный</p>
                                    <p>назначение: для внутренних работ</p>
                                    <p>время засыхания: до 60 мин.</p>
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
                                    <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                    <div class="add-cart-counter">
                                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                        <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                    </div>
                                </div>

                                <button aria-label="Сравнить" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/solve.svg">
                                </button>
                                <button aria-label="В избранное" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/heart.svg">
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
                            </div>

                            <div class="product-itm-label-list">
                                <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                <span class="product-itm-label product-itm-label--dark product-itm-label--main">
                                    <span class="product-itm-label__text">— 35%</span>
                                </span>

                            </div>

                            <span class="product-itm-buy-type">
                                <img alt="" class="svg" src="../img/ico/roll.svg">
                            </span>

                        </a>
                        <div class="product-itm-body">
                            <div class="product-itm__sku">Арт. 169000000000001170</div>
                            <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                            <div class="star-line">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">

                                <div class="star-line__count">34</div>
                            </div>
                            <div class="product-itm__sep"></div>
                            <div class="product-itm__desc">
                                <div class="product-itm__desc__text">

                                    <p>вес (кг): 5.3</p>
                                    <p>тип клея: однокомпонентный</p>
                                    <p>назначение: для внутренних работ</p>
                                    <p>время засыхания: до 60 мин.</p>
                                    <p>основа клея: водно-дисперсионный</p>

                                </div>

                                <div class="product-itm__desc__dop">
                                    <div class="product-itm-buy-type-long">

                                        <img alt="" class="svg" src="../img/ico/roll-buy.svg">

                                    </div>

                                    <div class="product-itm__dop-attr">
                                        <div class="product-itm__dop-attr__itm">
                                            <div class="product-itm__dop-attr__itm__name">вес</div>
                                            <div class="product-itm__dop-attr__itm__val">35,2 кг</div>
                                        </div>
                                        <div class="product-itm__dop-attr__itm">
                                            <div class="product-itm__dop-attr__itm__name">площадь</div>
                                            <div class="product-itm__dop-attr__itm__val">80 м<sup>2</sup></div>
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
                                    <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                    <div class="add-cart-counter">
                                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                        <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                    </div>
                                </div>

                                <button aria-label="Сравнить" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/solve.svg">
                                </button>
                                <button aria-label="В избранное" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/heart.svg">
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
                                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                    </div>
                                    <div class="product-itm-images__itm">
                                        <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                                    </div>
                                    <div class="product-itm-images__itm">
                                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                    </div>

                                </div>
                            </div>

                            <div class="product-itm-label-list">
                                <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                <span class="product-itm-label">
                                    <img alt="" class="product-itm-label__ico svg" src="../img/ico/like.svg">
                                    <span class="product-itm-label__text">рекомендуем</span>
                                </span>

                                <span class="product-itm-label product-itm-label--main product-itm-label--green">
                                    <span class="product-itm-label__text">новинка</span>
                                </span>

                                <span class="product-itm-label product-itm-label--dark">
                                    <span class="product-itm-label__text">— 35%</span>
                                </span>

                            </div>

                        </a>
                        <div class="product-itm-body">
                            <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                            <div class="star-line">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">

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
                                    <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                    <div class="add-cart-counter">
                                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                        <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                    </div>
                                </div>

                                <button aria-label="Сравнить" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/solve.svg">
                                </button>
                                <button aria-label="В избранное" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/heart.svg">
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
                                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                    </div>

                                </div>
                            </div>

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
                                    <img alt="" class="product-itm-label__ico svg star star--full " src="../img/ico/star-half.svg">
                                    <span class="product-itm-label__text">хит сезона</span>
                                </span>

                            </div>

                        </a>
                        <div class="product-itm-body">
                            <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                            <div class="star-line">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">

                                <div class="star-line__count">34</div>
                            </div>
                            <div class="product-itm__sep"></div>
                            <div class="product-itm__desc">
                                <div class="product-itm__desc__text">

                                    <p>вес (кг): 5.3</p>
                                    <p>тип клея: однокомпонентный</p>
                                    <p>назначение: для внутренних работ</p>
                                    <p>время засыхания: до 60 мин.</p>
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
                                    <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                    <div class="add-cart-counter">
                                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                        <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                    </div>
                                </div>

                                <button aria-label="Сравнить" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/solve.svg">
                                </button>
                                <button aria-label="В избранное" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/heart.svg">
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
                            </div>

                            <div class="product-itm-label-list">
                                <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                <span class="product-itm-label product-itm-label--dark product-itm-label--main">
                                    <span class="product-itm-label__text">— 35%</span>
                                </span>

                            </div>

                            <span class="product-itm-buy-type">
                                <img alt="" class="svg" src="../img/ico/roll.svg">
                            </span>

                        </a>
                        <div class="product-itm-body">
                            <div class="product-itm__sku">Арт. 169000000000001170</div>
                            <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                            <div class="star-line">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">

                                <div class="star-line__count">34</div>
                            </div>
                            <div class="product-itm__sep"></div>
                            <div class="product-itm__desc">
                                <div class="product-itm__desc__text">

                                    <p>вес (кг): 5.3</p>
                                    <p>тип клея: однокомпонентный</p>
                                    <p>назначение: для внутренних работ</p>
                                    <p>время засыхания: до 60 мин.</p>
                                    <p>основа клея: водно-дисперсионный</p>

                                </div>

                                <div class="product-itm__desc__dop">
                                    <div class="product-itm-buy-type-long">

                                        <img alt="" class="svg" src="../img/ico/roll-buy.svg">

                                    </div>

                                    <div class="product-itm__dop-attr">
                                        <div class="product-itm__dop-attr__itm">
                                            <div class="product-itm__dop-attr__itm__name">вес</div>
                                            <div class="product-itm__dop-attr__itm__val">35,2 кг</div>
                                        </div>
                                        <div class="product-itm__dop-attr__itm">
                                            <div class="product-itm__dop-attr__itm__name">площадь</div>
                                            <div class="product-itm__dop-attr__itm__val">80 м<sup>2</sup></div>
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
                                    <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                    <div class="add-cart-counter">
                                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                        <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                    </div>
                                </div>

                                <button aria-label="Сравнить" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/solve.svg">
                                </button>
                                <button aria-label="В избранное" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/heart.svg">
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
                                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                                    </div>
                                    <div class="product-itm-images__itm">
                                        <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                                    </div>
                                    <div class="product-itm-images__itm">
                                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                    </div>

                                </div>
                            </div>

                            <div class="product-itm-label-list">
                                <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                <span class="product-itm-label">
                                    <img alt="" class="product-itm-label__ico svg" src="../img/ico/like.svg">
                                    <span class="product-itm-label__text">рекомендуем</span>
                                </span>

                                <span class="product-itm-label product-itm-label--main product-itm-label--green">
                                    <span class="product-itm-label__text">новинка</span>
                                </span>

                                <span class="product-itm-label product-itm-label--dark">
                                    <span class="product-itm-label__text">— 35%</span>
                                </span>

                            </div>

                        </a>
                        <div class="product-itm-body">
                            <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">Go4Cork OPTIMAL</h5>
                            <div class="star-line">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">

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
                                    <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                    <div class="add-cart-counter">
                                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                        <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                    </div>
                                </div>

                                <button aria-label="Сравнить" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/solve.svg">
                                </button>
                                <button aria-label="В избранное" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/heart.svg">
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
                                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                                    </div>

                                </div>
                            </div>

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
                                    <img alt="" class="product-itm-label__ico svg star star--full " src="../img/ico/star-half.svg">
                                    <span class="product-itm-label__text">хит сезона</span>
                                </span>

                            </div>

                        </a>
                        <div class="product-itm-body">
                            <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
                            <h5 class="product-itm__name">Go4Cork OPTIMAL пробковая подложка</h5>
                            <div class="star-line">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">

                                <div class="star-line__count">34</div>
                            </div>
                            <div class="product-itm__sep"></div>
                            <div class="product-itm__desc">
                                <div class="product-itm__desc__text">

                                    <p>вес (кг): 5.3</p>
                                    <p>тип клея: однокомпонентный</p>
                                    <p>назначение: для внутренних работ</p>
                                    <p>время засыхания: до 60 мин.</p>
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
                                    <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                    <div class="add-cart-counter">
                                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                        <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                    </div>
                                </div>

                                <button aria-label="Сравнить" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/solve.svg">
                                </button>
                                <button aria-label="В избранное" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/heart.svg">
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
                            </div>

                            <div class="product-itm-label-list">
                                <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->

                                <span class="product-itm-label product-itm-label--dark product-itm-label--main">
                                    <span class="product-itm-label__text">— 35%</span>
                                </span>

                            </div>

                            <span class="product-itm-buy-type">
                                <img alt="" class="svg" src="../img/ico/roll.svg">
                            </span>

                        </a>
                        <div class="product-itm-body">
                            <div class="product-itm__sku">Арт. 169000000000001170</div>
                            <h5 class="product-itm__name">ARBITON LM60 заглушка правая для плинтуса 77 Песчаный дуб</h5>
                            <div class="star-line">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">

                                <div class="star-line__count">34</div>
                            </div>
                            <div class="product-itm__sep"></div>
                            <div class="product-itm__desc">
                                <div class="product-itm__desc__text">

                                    <p>вес (кг): 5.3</p>
                                    <p>тип клея: однокомпонентный</p>
                                    <p>назначение: для внутренних работ</p>
                                    <p>время засыхания: до 60 мин.</p>
                                    <p>основа клея: водно-дисперсионный</p>

                                </div>

                                <div class="product-itm__desc__dop">
                                    <div class="product-itm-buy-type-long">

                                        <img alt="" class="svg" src="../img/ico/roll-buy.svg">

                                    </div>

                                    <div class="product-itm__dop-attr">
                                        <div class="product-itm__dop-attr__itm">
                                            <div class="product-itm__dop-attr__itm__name">вес</div>
                                            <div class="product-itm__dop-attr__itm__val">35,2 кг</div>
                                        </div>
                                        <div class="product-itm__dop-attr__itm">
                                            <div class="product-itm__dop-attr__itm__name">площадь</div>
                                            <div class="product-itm__dop-attr__itm__val">80 м<sup>2</sup></div>
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
                                    <button class="btn js-add-cart" aria-label="В корзину">В корзину</button>

                                    <div class="add-cart-counter">
                                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                        <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                                    </div>
                                </div>

                                <button aria-label="Сравнить" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/solve.svg">
                                </button>
                                <button aria-label="В избранное" class="product-btn">
                                    <img alt="" class="svg" src="../img/ico/heart.svg">
                                </button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>

</div>
</template>

<script>
import axios from "axios"
import store from '../store/index'

export default {
    data() {
        return {
            user: {},

            
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
        async checkUser() {
            try {         
                
                const response = await axios.get(`http://localhost:8000/api/user`, { params: {
                                     
                },
                withCredentials: true
                })
                if(response) {
                    this.user = response.data
                    console.log('successful auth')
                }
            } catch(err) {
                console.log(err)
                this.$router.push('/login')
            } finally {
                
                
            }
        },
        async logout() {        
                const csrfToken = this.getCookie('XSRF-TOKEN')
                
                    try {
                        const response = await axios.post(`http://localhost:8000/logout`, {aboba: 'aboba'}, {
                        headers: {
                            'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
                        },
                        withCredentials: true
                    })
                    } catch(err) {
                        console.log(err)
                    } finally {
                        this.$router.push('/login')
                    }
                    
            
        }
    },
    created() {

    },
    mounted() {
        this.user = store.state.user
    },
    computed: {
        userData() {
            return store.state.user
        }
    },
    watch: {
        '$store.state.isAuth': function() {
            if(store.state.isAuth == false) {
                this.$router.push('/login')
            }
        }
    }
}
</script>

<style>

</style>