@extends("layouts.main_layout")

@section("content")

<div class="main">

            <div class="content about-page">

                <ul class="head-nav">
                    <li>
                        <a class="head-nav-itm" href="/contacts.html">
                            <span class="head-nav-itm__text">Контакты</span>
                        </a>
                    </li>
                    <li>
                        <a class="head-nav-itm active" href="/about.html">
                            <span class="head-nav-itm__text">О компании</span>
                        </a>
                    </li>
                    <li>
                        <a class="head-nav-itm" href="/documents.html">
                            <span class="head-nav-itm__text">Документы</span>
                        </a>
                    </li>
                </ul>

                <a class="video-hero section-margin-big" data-fancybox="video" href="https://www.youtube.com/watch?v=wNKu4g580iI">
                    <img alt="" class="video-hero__poster fill-img" src="./img/tmp/blog-detail.jpg">

                    <span class="video-play">
                        <img alt="" class="svg" src="./img/ico/play.svg">
                    </span>
                </a>

                <section class="about-info section-margin-big">
                    <h2 class="h1">Мы счастливы, делиться своими знаниями и помогать воплощать в жизнь интерьер мечты </h2>
                    <div class="about-info__img">
                        <img alt="" class="" src="./img/ico/stas/stas-about.svg">
                    </div>
                </section>

                <section class="about-achievement section-margin-big">
                    <h2 class="about-title h1">Наши достижения</h2>

                    <div class="about-achievement-grid">

                        <div class="about-achievement-grid__col">

                            <div class="about-achievement-grid__itm">
                                <div class="about-achievement-grid__itm__num h1">5730</div>
                                <div class="about-achievement-grid__itm__text">Объектов укомплектовано нашими специалистами</div>
                            </div>

                            <div class="about-achievement-grid__itm">
                                <div class="about-achievement-grid__itm__num h1">17 лет</div>
                                <div class="about-achievement-grid__itm__text">И это мы тоже считаем достижением</div>
                            </div>

                            <div class="about-achievement-grid__itm big">
                                <img alt="" class="about-achievement-grid__itm__img" loading="lazy" src="https://dummyimage.com/580x240">
                                <div class="about-achievement-grid__itm__num h1">16 088 384 м<sup>2</sup></div>
                                <div class="about-achievement-grid__itm__text">Площадей в эксплуатации с использованием наших продуктов</div>
                            </div>

                        </div>

                        <div class="about-achievement-grid__col">

                            <div class="about-achievement-grid__itm">
                                <div class="about-achievement-grid__itm__num h1">2386+</div>
                                <div class="about-achievement-grid__itm__text">Партнеров постоянно пользуются услугами наших экспертов</div>
                            </div>

                            <div class="about-achievement-grid__itm">
                                <div class="about-achievement-grid__itm__num h1">17 лет</div>
                                <div class="about-achievement-grid__itm__text">И это мы тоже считаем достижением</div>
                            </div>

                            <div class="about-achievement-grid__itm big">
                                <img alt="" class="about-achievement-grid__itm__img" loading="lazy" src="https://dummyimage.com/580x240">
                                <div class="about-achievement-grid__itm__num h1">16 088 384 м<sup>2</sup></div>
                                <div class="about-achievement-grid__itm__text">Площадей в эксплуатации с использованием наших продуктов</div>
                            </div>

                        </div>

                    </div>
                </section>

                <section class="about-history section-margin-big">
                    <h2 class="about-title h1">Наши достижения</h2>
                    <picture>
                        <source media="(max-width: 799px)" srcset="./img/about/story-mobile.svg">
                        <img alt="" src="./img/about/story.svg">
                    </picture>
                </section>

                <section class="section-margin-big">
                    <h2 class="about-title h1">Ценности вквадрате</h2>

                    <div class="about-achievement-3">
                        <div class="about-achievement-grid__itm">
                            <div class="about-achievement-grid__itm__num h2">Цель</div>
                            <div class="about-achievement-grid__itm__text">Делиться своими знаниями и помогать воплощать в жизнь интерьер мечты</div>
                        </div>

                        <div class="about-achievement-grid__itm">
                            <div class="about-achievement-grid__itm__num h2">Миссия</div>
                            <div class="about-achievement-grid__itm__text">Помогать клиентам в решении любых вопросов, связанных с напольной и околонапольной тематикой.</div>
                        </div>

                        <div class="about-achievement-grid__itm">
                            <div class="about-achievement-grid__itm__num h2">Задача</div>
                            <div class="about-achievement-grid__itm__text">Предлагать лучшие и доступные продуктовые решения под конкретные задачи клиентов</div>
                        </div>
                    </div>

                </section>

                <section class="section-margin-big">
                    <h2 class="about-title h1">Наши преимущества</h2>

                    <div class="about-advantages-grid">

                        <div class="about-advantages-grid__itm">
                            <div class="about-advantages-grid__itm__title h2">Широкий ассортимент</div>
                            <div class="about-advantages-grid__itm__desc">Ассортимент строится вокруг современных трендов и способствует подбору оптимального решения для любого проекта</div>
                        </div>

                        <div class="about-advantages-grid__img">
                            <img alt="" class="fill-img" src="./img/tmp/banner-bg.jpg" loading="lazy">
                        </div>

                        <div class="about-advantages-grid__itm">
                            <div class="about-advantages-grid__itm__title h2">Качественные материалы</div>
                            <div class="about-advantages-grid__itm__desc">Ассортимент строится вокруг современных трендов и способствует подбору оптимального решения для любого проекта</div>
                        </div>

                    </div>

                    <div class="about-advantages-grid">

                        <div class="about-advantages-grid__img">
                            <img alt="" class="fill-img" src="https://dummyimage.com/650x450" loading="lazy">
                        </div>

                        <div class="about-advantages-grid__itm">
                            <div class="about-advantages-grid__itm__title h2">Отличный сервис</div>
                            <div class="about-advantages-grid__itm__desc">Ассортимент строится вокруг современных трендов и способствует подбору оптимального решения для любого проекта</div>
                        </div>

                        <div class="about-advantages-grid__itm">
                            <div class="about-advantages-grid__itm__title h2">Качественные материалы</div>
                            <div class="about-advantages-grid__itm__desc">Ассортимент строится вокруг современных трендов и способствует подбору оптимального решения для любого проекта</div>
                        </div>

                    </div>

                </section>

            </div>

        </div>

@endsection