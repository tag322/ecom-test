@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content page-margin">

    <h1 class="title-margin">Корзина</h1>

    <form action="" class="basket-grid">
        <div class="basket-grid-content">
            <div class="basket-head">
                <input class="js-checkbox js-basket-select-all" placeholder="Выбрать всё" type="checkbox">

                <a class="btn btn--line disabled js-open-modal js-basket-remove-all-btn" href="#modal-basket-remove">Удалить выбранное</a>
            </div>

            <div class="basket-list">

                <div class="basket-itm">
                    <div class="basket-itm__check">
                        <input class="js-checkbox" placeholder="" type="checkbox">
                    </div>
                    <div class="basket-itm__img">
                        <img alt="" class="fill-img" src="./img/tmp/decor-small.jpg">
                    </div>
                    <div class="basket-itm__content">
                        <div class="basket-itm__content__left">
                            <div class="basket-itm__sku">Арт. 18705033</div>
                            <a href="promotion-detail.html" class="basket-itm__name h5">Кварцвиниловая ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic Granite</a>
                            <div class="basket-itm__sep"></div>
                            <div class="basket-itm__remove js-basket-remove">
                                <img alt="" class="svg" src="./img/ico/trash.svg">
                                <span class="basket-itm__remove__text">удалить</span>
                            </div>
                        </div>
                        <div class="basket-itm__content__right">
                            <p class="basket-price">42 155,68 ₽</p>
                            <p class="basket-price basket-price--small">10 538,92₽/уп.</p>

                            <div class="add-cart-counter basket-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="basket-itm">
                    <div class="basket-itm__check">
                        <input class="js-checkbox" placeholder="" type="checkbox">
                    </div>
                    <div class="basket-itm__img">
                        <img alt="" class="fill-img" src="./img/tmp/decor-small.jpg">
                    </div>
                    <div class="basket-itm__content">
                        <div class="basket-itm__content__left">
                            <div class="basket-itm__sku">Арт. 18705033</div>
                            <a href="promotion-detail.html" class="basket-itm__name h5">Кварцвиниловая ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic Granite</a>
                            <div class="basket-itm__sep"></div>
                            <div class="basket-itm__remove js-basket-remove">
                                <img alt="" class="svg" src="./img/ico/trash.svg">
                                <span class="basket-itm__remove__text">удалить</span>
                            </div>
                        </div>
                        <div class="basket-itm__content__right">
                            <p class="basket-price">42 155,68 ₽</p>
                            <p class="basket-price basket-price--small">10 538,92₽/уп.</p>

                            <div class="add-cart-counter basket-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="basket-itm">
                    <div class="basket-itm__check">
                        <input class="js-checkbox" placeholder="" type="checkbox">
                    </div>
                    <div class="basket-itm__img">
                        <img alt="" class="fill-img" src="./img/tmp/decor-small.jpg">
                    </div>
                    <div class="basket-itm__content">
                        <div class="basket-itm__content__left">
                            <div class="basket-itm__sku">Арт. 18705033</div>
                            <a href="promotion-detail.html" class="basket-itm__name h5">Кварцвиниловая ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic Granite</a>
                            <div class="basket-itm__sep"></div>
                            <div class="basket-itm__remove js-basket-remove">
                                <img alt="" class="svg" src="./img/ico/trash.svg">
                                <span class="basket-itm__remove__text">удалить</span>
                            </div>
                        </div>
                        <div class="basket-itm__content__right">
                            <p class="basket-price">42 155,68 ₽</p>
                            <p class="basket-price basket-price--small">10 538,92₽/уп.</p>

                            <div class="add-cart-counter basket-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="basket-itm">
                    <div class="basket-itm__check">
                        <input class="js-checkbox" placeholder="" type="checkbox">
                    </div>
                    <div class="basket-itm__img">
                        <img alt="" class="fill-img" src="./img/tmp/decor-small.jpg">
                    </div>
                    <div class="basket-itm__content">
                        <div class="basket-itm__content__left">
                            <div class="basket-itm__sku">Арт. 18705033</div>
                            <a href="promotion-detail.html" class="basket-itm__name h5">Кварцвиниловая ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic Granite</a>
                            <div class="basket-itm__sep"></div>
                            <div class="basket-itm__remove js-basket-remove">
                                <img alt="" class="svg" src="./img/ico/trash.svg">
                                <span class="basket-itm__remove__text">удалить</span>
                            </div>
                        </div>
                        <div class="basket-itm__content__right">
                            <p class="basket-price">42 155,68 ₽</p>
                            <p class="basket-price basket-price--small">10 538,92₽/уп.</p>

                            <div class="add-cart-counter basket-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="basket-itm">
                    <div class="basket-itm__check">
                        <input class="js-checkbox" placeholder="" type="checkbox">
                    </div>
                    <div class="basket-itm__img">
                        <img alt="" class="fill-img" src="./img/tmp/decor-small.jpg">
                    </div>
                    <div class="basket-itm__content">
                        <div class="basket-itm__content__left">
                            <div class="basket-itm__sku">Арт. 18705033</div>
                            <a href="promotion-detail.html" class="basket-itm__name h5">Кварцвиниловая ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic Granite</a>
                            <div class="basket-itm__sep"></div>
                            <div class="basket-itm__remove js-basket-remove">
                                <img alt="" class="svg" src="./img/ico/trash.svg">
                                <span class="basket-itm__remove__text">удалить</span>
                            </div>
                        </div>
                        <div class="basket-itm__content__right">
                            <p class="basket-price">42 155,68 ₽</p>
                            <p class="basket-price basket-price--small">10 538,92₽/уп.</p>

                            <div class="add-cart-counter basket-counter">
                                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus"></div>
                                <input type="text" value="1" class="add-cart-counter__input" aria-label="Количество">
                                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus"></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="basket-total-card">
            <div class="basket-total-card__title h2">
                <div>Итого:</div>
                <div>560 201,76</div>
            </div>
            <div class="basket-total-attr">
                <div class="basket-total-attr__name">Общий вес:</div>
                <div class="basket-total-attr__val">481,8 кг</div>
            </div>
            <div class="basket-total-attr">
                <div class="basket-total-attr__name">53 товара:</div>
                <div class="basket-total-attr__val">559 701,76 ₽</div>
            </div>
            <div class="basket-total-attr">
                <div class="basket-total-attr__name">Доставка:</div>
                <div class="basket-total-attr__val">500 ₽</div>
            </div>

            <label class="promocode">
                <!--
    События onclick для имитации, потом их можно удалить
    класс success - промокод введен успешно
    error - такого промокода не существует
    -->
                <span class="promocode__error-text">Такого промокода нет</span>

                <input class="" placeholder="Есть промокод?" type="text">

                <img alt="" class="svg promocode__ico promocode__error" src="./img/ico/cross.svg">
                <img alt="" class="svg promocode__ico promocode__success" src="./img/ico/check.svg">

                <span class="promocode__action promocode__arrow" onclick="$('.promocode').addClass('error')">
                    <img alt="" class="svg" src="./img/ico/arrow.svg">
                </span>
                <span class="promocode__action promocode__edit js-promocode-test-edit" onclick="$('.promocode').removeClass('error success')">
                    <img alt="" class="svg" src="./img/ico/edit.svg">
                </span>

            </label>

            <button class="btn btn--large basket-btn">Оформить заказ</button>

            <div class="basket-btn-desc">
                Дата и стоимость доставки определяются при оформлении заказа
            </div>
        </div>
    </form>

</div>

<div class="modal" id="modal-basket-remove">
    <div class="modal-fade js-close-modal"></div>
    <div class="modal-content">
        <div class="h4">Удалить выбранные товары</div>
        <div>
            Вы точно хотите удалить выбранные товары?<br>
            Отменить данное действие будет невозможно.
        </div>
        <div class="modal-city-btns">
            <a class="btn btn--line js-close-modal">Отменить</a>
            <div class="btn js-basket-remove-all js-close-modal">Да, удалить</div>
        </div>
    </div>
</div>

</div>

@endsection