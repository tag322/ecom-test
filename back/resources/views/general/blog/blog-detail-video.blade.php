@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content">

    <div class="breadcrumb-with-title">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/">Каталог</a></li>
            <li><span>Ламинат</span></li>
        </ul>

        <a href="/" class="breadcrumb-back">
            <img src="./img/ico/arrow.svg" alt="" class="svg">
        </a>

        <h1 class="h2">Инженерный кварц-винил, или виниловый ламинат: что такое SPC и где его применять</h1>
    </div>

    <div class="blog-info-line">

        <div class="blog-info-line__itm">
            <img alt=" " class="blog-info-line__itm__ico svg" src="./img/ico/date-small.svg">
            <div class="blog-info-line__itm__name">Дата публикации: <b>10.10.2023</b></div>
        </div>

        <div class="blog-info-line__itm">
            <img alt=" " class="blog-info-line__itm__ico svg" src="./img/ico/refresh.svg">
            <div class="blog-info-line__itm__name">Дата обновления: <b>06.12.2023</b></div>
        </div>

        <div class="blog-info-line__itm">
            <img alt=" " class="blog-info-line__itm__ico svg" src="./img/ico/time.svg">
            <div class="blog-info-line__itm__name">Время чтения: <b>10 минут</b></div>
        </div>

        <div class="blog-info-line__itm">
            <img alt=" " class="blog-info-line__itm__ico svg" src="./img/ico/eye.svg">
            <div class="blog-info-line__itm__name">Просмотрено: <b>604</b></div>
        </div>

    </div>

    <div class="blog-author-line">

        <div class="blog-author">
            <div class="blog-author__ava">
                <img alt="" class="fill-img" src="./img/tmp/person.jpg">
            </div>
            <div class="blog-author__body">
                <div class="blog-author__name">Алексей Пышницкий</div>
                <div class="blog-author__desc">Технический специалист FineFloor Group</div>
            </div>
        </div>

        <div class="blog-author-line__text">Знает всё о напольных покрытиях. Эксперт в кварц-виниле и ламинате. Может произвести монтаж даже с закрытыми глазами — на предварительно подготовленное основание!</div>

    </div>

    <div class="blog-main blog-main--video">

        <div class="help-faq-body text-format blog-content">
            <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen frameborder="0" src="https://www.youtube.com/embed/wNKu4g580iI?si=kprl1905_wId5moC" title="YouTube video player"></iframe>

            <p>Есть покупатели, которые считают, что ламинат вредит здоровью.</p>
            <p>Например, существует миф, что он выделяет формальдегид — едкий и опасный газ, который при длительном воздействии провоцирует развитие заболеваний дыхательной системы.</p>
            <p>На самом деле ламинат не выделяет формальдегид. Это такое же безопасное покрытие, как натуральная древесина.</p>
            <p>В этом видео мы это докажем.</p>
        </div>

        <div class="blog-content-share">
            <div class="share-block">
                <div class="share-block-link__list">
                    <script src="https://yastatic.net/share2/share.js"></script>
                    <div class="ya-share2" data-curtain data-limit="0" data-more-button-type="short" data-services="vkontakte,telegram,whatsapp"></div>
                </div>
                <div class="share-block-link">
                    <img alt="" class="svg" src="../img/ico/share.svg">
                    <span>Поделиться</span>
                </div>

            </div>
        </div>

    </div>

    <div class="blog-relative">
        <h3 class="title-normal">Товары из видео</h3>

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
    </div>

</div>

</div>

@endsection