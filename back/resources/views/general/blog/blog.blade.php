@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content blog-page">

    <div class="breadcrumb-with-title">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/">Каталог</a></li>
            <li><span>Ламинат</span></li>
        </ul>

        <a href="/" class="breadcrumb-back">
            <img src="./img/ico/arrow.svg" alt="" class="svg">
        </a>

        <h1>Блог</h1>
    </div>

    <div class="blog-head">

        <ul class="catalog-nav">
            <li>
                <a class="catalog-nav-itm active" href="">Статьи</a>
            </li>
            <li>
                <a class="catalog-nav-itm" href="">Видео</a>
            </li>
            <li>
                <a class="catalog-nav-itm" href="">Подкасты</a>
            </li>
            <li class="blog-sort-btn-mobile">
                <a class="js-open-modal-mobile" href="#modal-blog-sort">
                    <img alt="" src="./img/ico/sorting.svg">
                </a>
            </li>
        </ul>

        <select class="js-select">
            <option value="1">Сначала полезные</option>
            <option value="2">Сначала безполезные</option>
        </select>

    </div>

    <ul class="quick-filter-list title-normal">

        <li>
            <a class="quick-filter-itm" href="">как укладывать ламинат?</a>
        </li>
        <li>
            <a class="quick-filter-itm" href="">как выбрать линолеум?</a>
        </li>
        <li>
            <a class="quick-filter-itm" href="">чем опасно напольное покрытие?</a>
        </li>

    </ul>

    <div class="blog-page-grid">

        <a class="blog-itm" href="/blog-detail.html">

            <span class="blog-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/blog.jpg">
            </span>

            <span class="blog-itm__info">

                <span class="blog-itm__info__left">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/date-small.svg" class="svg">
                        <span>15.01.2024</span>
                    </span>

                </span>

                <span class="blog-itm__info__right">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/eye-small.svg" class="svg">
                        <span>150</span>
                    </span>

                </span>

            </span>

            <span class="blog-itm__name">Влагостойкость кварц-виниловой плитки Fine Floor</span>

        </a>

        <a class="blog-itm" href="/blog-detail.html">

            <span class="blog-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/blog.jpg">
            </span>

            <span class="blog-itm__info">

                <span class="blog-itm__info__left">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/date-small.svg" class="svg">
                        <span>15.01.2024</span>
                    </span>

                </span>

                <span class="blog-itm__info__right">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/eye-small.svg" class="svg">
                        <span>150</span>
                    </span>

                </span>

            </span>

            <span class="blog-itm__name">Влагостойкость кварц-виниловой плитки Fine Floor</span>

        </a>

        <a class="blog-itm" href="/blog-detail.html">

            <span class="blog-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/blog.jpg">
            </span>

            <span class="blog-itm__info">

                <span class="blog-itm__info__left">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/date-small.svg" class="svg">
                        <span>15.01.2024</span>
                    </span>

                </span>

                <span class="blog-itm__info__right">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/eye-small.svg" class="svg">
                        <span>150</span>
                    </span>

                </span>

            </span>

            <span class="blog-itm__name">Влагостойкость кварц-виниловой плитки Fine Floor</span>

        </a>

        <a class="blog-itm" href="/blog-detail.html">

            <span class="blog-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/blog.jpg">
            </span>

            <span class="blog-itm__info">

                <span class="blog-itm__info__left">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/date-small.svg" class="svg">
                        <span>15.01.2024</span>
                    </span>

                </span>

                <span class="blog-itm__info__right">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/eye-small.svg" class="svg">
                        <span>150</span>
                    </span>

                </span>

            </span>

            <span class="blog-itm__name">Влагостойкость кварц-виниловой плитки Fine Floor</span>

        </a>

        <a class="blog-itm" href="/blog-detail.html">

            <span class="blog-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/blog.jpg">
            </span>

            <span class="blog-itm__info">

                <span class="blog-itm__info__left">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/date-small.svg" class="svg">
                        <span>15.01.2024</span>
                    </span>

                </span>

                <span class="blog-itm__info__right">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/eye-small.svg" class="svg">
                        <span>150</span>
                    </span>

                </span>

            </span>

            <span class="blog-itm__name">Влагостойкость кварц-виниловой плитки Fine Floor</span>

        </a>

        <a class="blog-itm" href="/blog-detail.html">

            <span class="blog-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/blog.jpg">
            </span>

            <span class="blog-itm__info">

                <span class="blog-itm__info__left">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/date-small.svg" class="svg">
                        <span>15.01.2024</span>
                    </span>

                </span>

                <span class="blog-itm__info__right">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/eye-small.svg" class="svg">
                        <span>150</span>
                    </span>

                </span>

            </span>

            <span class="blog-itm__name">Влагостойкость кварц-виниловой плитки Fine Floor</span>

        </a>

        <a class="blog-itm" href="/blog-detail.html">

            <span class="blog-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/blog.jpg">
            </span>

            <span class="blog-itm__info">

                <span class="blog-itm__info__left">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/date-small.svg" class="svg">
                        <span>15.01.2024</span>
                    </span>

                </span>

                <span class="blog-itm__info__right">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/eye-small.svg" class="svg">
                        <span>150</span>
                    </span>

                </span>

            </span>

            <span class="blog-itm__name">Влагостойкость кварц-виниловой плитки Fine Floor</span>

        </a>

        <a class="blog-itm" href="/blog-detail.html">

            <span class="blog-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/blog.jpg">
            </span>

            <span class="blog-itm__info">

                <span class="blog-itm__info__left">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/date-small.svg" class="svg">
                        <span>15.01.2024</span>
                    </span>

                </span>

                <span class="blog-itm__info__right">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/eye-small.svg" class="svg">
                        <span>150</span>
                    </span>

                </span>

            </span>

            <span class="blog-itm__name">Влагостойкость кварц-виниловой плитки Fine Floor</span>

        </a>

        <a class="blog-itm" href="/blog-detail.html">

            <span class="blog-itm__img">
                <img alt="" class="fill-img" loading="lazy" src="./img/tmp/blog.jpg">
            </span>

            <span class="blog-itm__info">

                <span class="blog-itm__info__left">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/date-small.svg" class="svg">
                        <span>15.01.2024</span>
                    </span>

                </span>

                <span class="blog-itm__info__right">

                    <span class="blog-itm__info__itm">
                        <img alt="" src="./img/ico/eye-small.svg" class="svg">
                        <span>150</span>
                    </span>

                </span>

            </span>

            <span class="blog-itm__name">Влагостойкость кварц-виниловой плитки Fine Floor</span>

        </a>

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

<div class="modal-mobile" id="modal-blog-sort">
    <div class="modal-mobile-fade js-close-modal-mobile"></div>
    <div class="modal-mobile-content">
        <div class="modal-mobile__close js-close-modal-mobile">
            <div class="cross"></div>
        </div>

        <label class="checkbox-input"><input checked class="js-radio" name="sort" placeholder="Сначала полезные" type="radio"></label>
        <label class="checkbox-input"><input class="js-radio" name="sort" placeholder="Сначала новые" type="radio"></label>
        <label class="checkbox-input"><input class="js-radio" name="sort" placeholder="Сначала старые" type="radio"></label>
    </div>
</div>

</div>

@endsection