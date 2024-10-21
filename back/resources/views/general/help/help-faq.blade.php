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
            <a class="head-nav-itm" href="/help-info.html">
                <span class="head-nav-itm__text">Техинфо</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm" href="/help-support.html">
                <span class="head-nav-itm__text">Поддержка</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm active" href="/help-faq.html">
                <span class="head-nav-itm__text">Вопросы</span>
            </a>
        </li>
    </ul>

    <div class="help-faq show-aside">

        <div class="help-faq-aside">

            <div class="help-faq-aside-fade js-help-aside-close"></div>

            <div class="help-faq-aside-content">

                <div class="help-faq-action">
                    <a class="help-faq-action__btn help-faq-action__btn--hide" href="#">
                        <img alt="" class="svg" src="./img/ico/arrow.svg">
                    </a>
                    <a class="help-faq-action__btn help-faq-action__btn--show" href="#">
                        <img alt="" class="svg" src="./img/ico/burger-dot.svg">
                    </a>
                </div>

                <div class="help-faq-aside-content-hide">

                    <div class="help-faq-action-close js-help-aside-close">
                        <div class="cross"></div>
                    </div>

                    <label class="input">
                        <input class="js-faq-search" placeholder="Вопросы о доставке" type="text">
                    </label>
                    <!--	Тут наверное нужно сделать подгрузку ajax	-->
                    <ul class="help-faq-aside-list">
                        <li>
                            <a href="">Вопросы о наличии товара</a>
                        </li>
                        <li>
                            <a href="">Вопросы об оплате</a>
                        </li>
                        <li>
                            <a href="help-faq-question.html">Задать свой вопрос</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="help-faq-body">
            <div class="h2 title-normal help-faq-body__title">
                <span>Вопросы о доставке</span>
                <div class="help-faq-menu-btn js-help-aside-open">
                    <img src="./img/ico/burger-dot.svg" alt="" class="svg">
                </div>
            </div>

            <div class="help-faq-list">

                <div class="accordion js-accordion">
                    <div class="accordion__head js-accordion-head">
                        <div class="accordion__head__text">
                            <div class="accordion__head__name">Выполняется ли подъем в квартиру?</div>
                        </div>
                        <img alt="" class="svg accordion__head__arrow arrow" src="./img/ico/caret-down.svg">
                    </div>

                    <div class="accordion__body accordion__body--fill accordion__body--padding js-accordion-body">
                        <p>Стоимость доставки зависит от объема и зоны доставки более подрабную информацию можно найти в разделе доставка</p>
                    </div>
                </div>

                <div class="accordion js-accordion">
                    <div class="accordion__head js-accordion-head">
                        <div class="accordion__head__text">
                            <div class="accordion__head__name">Как осуществляется доставка в регионы?</div>
                        </div>
                        <img alt="" class="svg accordion__head__arrow arrow" src="./img/ico/caret-down.svg">
                    </div>

                    <div class="accordion__body accordion__body--fill accordion__body--padding js-accordion-body">
                        <p>Стоимость доставки зависит от объема и зоны доставки более подрабную информацию можно найти в разделе доставка</p>
                    </div>
                </div>

                <div class="accordion js-accordion">
                    <div class="accordion__head js-accordion-head">
                        <div class="accordion__head__text">
                            <div class="accordion__head__name">Выполняется ли подъем в квартиру?</div>
                        </div>
                        <img alt="" class="svg accordion__head__arrow arrow" src="./img/ico/caret-down.svg">
                    </div>

                    <div class="accordion__body accordion__body--fill accordion__body--padding js-accordion-body">
                        <p>Стоимость доставки зависит от объема и зоны доставки более подрабную информацию можно найти в разделе доставка</p>
                    </div>
                </div>

                <div class="accordion js-accordion">
                    <div class="accordion__head js-accordion-head">
                        <div class="accordion__head__text">
                            <div class="accordion__head__name">Как осуществляется доставка в регионы?</div>
                        </div>
                        <img alt="" class="svg accordion__head__arrow arrow" src="./img/ico/caret-down.svg">
                    </div>

                    <div class="accordion__body accordion__body--fill accordion__body--padding js-accordion-body">
                        <p>Стоимость доставки зависит от объема и зоны доставки более подрабную информацию можно найти в разделе доставка</p>
                    </div>
                </div>

                <div class="accordion js-accordion">
                    <div class="accordion__head js-accordion-head">
                        <div class="accordion__head__text">
                            <div class="accordion__head__name">Выполняется ли подъем в квартиру?</div>
                        </div>
                        <img alt="" class="svg accordion__head__arrow arrow" src="./img/ico/caret-down.svg">
                    </div>

                    <div class="accordion__body accordion__body--fill accordion__body--padding js-accordion-body">
                        <p>Стоимость доставки зависит от объема и зоны доставки более подрабную информацию можно найти в разделе доставка</p>
                    </div>
                </div>

                <div class="accordion js-accordion">
                    <div class="accordion__head js-accordion-head">
                        <div class="accordion__head__text">
                            <div class="accordion__head__name">Как осуществляется доставка в регионы?</div>
                        </div>
                        <img alt="" class="svg accordion__head__arrow arrow" src="./img/ico/caret-down.svg">
                    </div>

                    <div class="accordion__body accordion__body--fill accordion__body--padding js-accordion-body">
                        <p>Стоимость доставки зависит от объема и зоны доставки более подрабную информацию можно найти в разделе доставка</p>
                    </div>
                </div>

                <div class="accordion js-accordion">
                    <div class="accordion__head js-accordion-head">
                        <div class="accordion__head__text">
                            <div class="accordion__head__name">Выполняется ли подъем в квартиру?</div>
                        </div>
                        <img alt="" class="svg accordion__head__arrow arrow" src="./img/ico/caret-down.svg">
                    </div>

                    <div class="accordion__body accordion__body--fill accordion__body--padding js-accordion-body">
                        <p>Стоимость доставки зависит от объема и зоны доставки более подрабную информацию можно найти в разделе доставка</p>
                    </div>
                </div>

                <div class="accordion js-accordion">
                    <div class="accordion__head js-accordion-head">
                        <div class="accordion__head__text">
                            <div class="accordion__head__name">Как осуществляется доставка в регионы?</div>
                        </div>
                        <img alt="" class="svg accordion__head__arrow arrow" src="./img/ico/caret-down.svg">
                    </div>

                    <div class="accordion__body accordion__body--fill accordion__body--padding js-accordion-body">
                        <p>Стоимость доставки зависит от объема и зоны доставки более подрабную информацию можно найти в разделе доставка</p>
                    </div>
                </div>

                <div class="accordion js-accordion">
                    <div class="accordion__head js-accordion-head">
                        <div class="accordion__head__text">
                            <div class="accordion__head__name">Выполняется ли подъем в квартиру?</div>
                        </div>
                        <img alt="" class="svg accordion__head__arrow arrow" src="./img/ico/caret-down.svg">
                    </div>

                    <div class="accordion__body accordion__body--fill accordion__body--padding js-accordion-body">
                        <p>Стоимость доставки зависит от объема и зоны доставки более подрабную информацию можно найти в разделе доставка</p>
                    </div>
                </div>

                <div class="accordion js-accordion">
                    <div class="accordion__head js-accordion-head">
                        <div class="accordion__head__text">
                            <div class="accordion__head__name">Как осуществляется доставка в регионы?</div>
                        </div>
                        <img alt="" class="svg accordion__head__arrow arrow" src="./img/ico/caret-down.svg">
                    </div>

                    <div class="accordion__body accordion__body--fill accordion__body--padding js-accordion-body">
                        <p>Стоимость доставки зависит от объема и зоны доставки более подрабную информацию можно найти в разделе доставка</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

</div>

@endsection