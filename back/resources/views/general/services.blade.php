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

        <h1 class="title-normal">Услуги</h1>
    </div>

    <div class="services-grid">

        <a href="" class="services-grid-itm">
            <div class="services-grid-itm__head">
                <h2 class="h2">Доставка</h2>
                <p class="btn btn--small" href="">Подробнее</p>
            </div>
            <img alt="" class="services-grid-itm__img" src="./img/ico/services-delivery.svg">
        </a>

        <a href="" class="services-grid-itm">
            <div class="services-grid-itm__head">
                <h2 class="h2">Укладка напольных покрытий</h2>
                <p class="btn btn--small" href="">Подробнее</p>
            </div>
            <img alt="" class="services-grid-itm__img" src="./img/ico/services-floor.svg">
        </a>

    </div>

</div>

</div>

@endsection