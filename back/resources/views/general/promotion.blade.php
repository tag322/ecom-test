@extends("layouts.main_layout")

@section("content")

<div class="main">

<section class="content section-margin">

    <ul class="promotion-nav">

        <li>
            <a class="promotion-nav-itm path-fill active-actions" href="/">
                <img alt="" class="svg" src="./img/ico/actions.svg">
                <span class="promotion-nav-itm__text">Акции</span>
            </a>
        </li>

        <li>
            <a class="promotion-nav-itm path-fill" href="/">
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

    <div class="promo-page-grid">

        <a href="promotion-detail.html" class="promo-grid-itm promo-grid-itm--dark">
            <div class="promo-grid-itm__logo">
                <img alt="" src="./img/logo-FF.svg">
            </div>

            <div class="promo-grid-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
            </div>
            <div class="promo-grid-itm__content">
                <h3 class="h2 promo-grid-itm__content__title">Маленький размер — большая выгода</h3>

                <div class="promo-grid-itm__content__desc">Рады предложить удивительный клеевой кварц-винил в формате Craft по выгодным ценам!</div>

                <div class="promo-grid-itm__content__discount">Скидка до 50%</div>
            </div>
        </a>

        <a href="promotion-detail.html" class="promo-grid-itm">
            <div class="promo-grid-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/450x450">
            </div>
            <div class="promo-grid-itm__content">
                <h3 class="h2 promo-grid-itm__content__title">Склеиваем<br> цены</h3>

                <div class="promo-grid-itm__content__desc">Скидка на клеевые составы ARDEX</div>

                <div class="promo-grid-itm__content__discount">Скидка до 30%</div>
            </div>
        </a>

        <a href="promotion-detail.html" class="promo-grid-itm promo-grid-itm--brown-light">
            <div class="promo-grid-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/banner-bg.jpg">
            </div>
            <div class="promo-grid-itm__content">
                <h3 class="h2 promo-grid-itm__content__title">Бельгийские каникулы</h3>

                <div class="promo-grid-itm__content__desc">Скидка распространяется только на покрытия бренда Moduleo</div>

                <div class="promo-grid-itm__content__discount">Скидка 10%</div>
            </div>
        </a>

        <a href="promotion-detail.html" class="promo-grid-itm promo-grid-itm--green">
            <div class="promo-grid-itm__logo">
                <img alt="" src="./img/logo-ARDEX.svg">
            </div>

            <div class="promo-grid-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/450x450">
            </div>
            <div class="promo-grid-itm__content">
                <h3 class="h2 promo-grid-itm__content__title">Склеиваем<br> цены</h3>

                <div class="promo-grid-itm__content__desc">Скидка на клеевые составы ARDEX</div>

                <div class="promo-grid-itm__content__discount">Скидка до 30%</div>
            </div>
        </a>

    </div>
</section>

</div>

@endsection