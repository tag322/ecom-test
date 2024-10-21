@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content">

    <ul class="head-nav">
        <li>
            <a class="head-nav-itm" href="/help-pay.html">
                <span class="head-nav-itm__text">Оплата</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm" href="/help-return.html">
                <span class="head-nav-itm__text">Возврат и гарантия</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm active" href="/help-info.html">
                <span class="head-nav-itm__text">Техинфо</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm" href="/help-support.html">
                <span class="head-nav-itm__text">Поддержка</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm" href="/help-faq.html">
                <span class="head-nav-itm__text">Вопросы</span>
            </a>
        </li>
    </ul>

    <div class="content-small">
        <div class="texinfo">
            <h4 class="texinfo-head">Наименования документа</h4>

            <a class="texinfo-itm" href="/help-info-detail.html">
                <div class="texinfo-itm__name">Кварц-виниловые покрытия (LVT)</div>
                <p class="texinfo-itm__link">Открыть</p>
            </a>

            <a class="texinfo-itm" href="/help-info-detail.html">
                <div class="texinfo-itm__name">SPC ламинат</div>
                <p class="texinfo-itm__link">Открыть</p>
            </a>

            <a class="texinfo-itm" href="/help-info-detail.html">
                <div class="texinfo-itm__name">Ламинат</div>
                <p class="texinfo-itm__link">Открыть</p>
            </a>

            <a class="texinfo-itm" href="/help-info-detail.html">
                <div class="texinfo-itm__name">Линолеум</div>
                <p class="texinfo-itm__link">Открыть</p>
            </a>

        </div>
    </div>

</div>

</div>

@endsection