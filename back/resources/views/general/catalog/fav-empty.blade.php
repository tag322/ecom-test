@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content js-view-parent" id="page-fav">

    <div class="breadcrumb-with-title">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/">Каталог</a></li>
            <li><span>Ламинат</span></li>
        </ul>

        <a href="/" class="breadcrumb-back">
            <img src="./img/ico/arrow.svg" alt="" class="svg">
        </a>

        <h1 class="h2 title-small">Избранное</h1>
    </div>

    <div class="fav-empty">
        <img alt="" class="fav-empty__img" src="./img/ico/stas/stas-basket.svg">
        <p class="h2 fav-empty__title">В избранном пока нет товаров</p>
        <div class="fav-empty__desc">Жмите на сердечко в карточке понравившегося товара.<br />
            Тогда он появится на этой странице, если цена измениться — мы вам сообщим.</div>
        <a href="/catalog.html" class="btn">Перейти в каталог</a>
    </div>

</div>

</div>

@endsection