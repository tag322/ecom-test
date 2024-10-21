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

        <h1 class="title-normal">Отзыв о товаре</h1>

    </div>

    <div class="review-page">

        <div class="review-head">
            <img alt="" class="review-head__img" src="./img/tmp/product.jpg">
            <h4 class="review-head__name">Кварцвиниловая ПВХ плитка (LVT) Forbo EFFEKTA STANDART Classic Granite</h4>
            <div class="review-head__price">
                <span class="price price--old">1 590 ₽</span><br> <span class="price">986 ₽</span>
            </div>
        </div>

        <h3 class="review-page-title">Общая оценка</h3>

        <div class="review-page-stars">
            <div class="star-line">
                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">
            </div>
        </div>

        <div class="review-add-head">
            <h3>Отзыв</h3>
            <div class="review-add-head__desc">
                <div class="tooltip">
                    <div class="tooltip__ico">
                        <img alt="" class="svg" src="./img/ico/help-light.svg">
                    </div>
                    <div class="tooltip__content">
                        <b>О чем написать в отзыве?</b>
                        <ul>
                            <li>Почему вам понравился или не понравился товар</li>
                            <li>Соответствует ли он заявленным характеристикам</li>
                            <li>Стоит ли товар своих денег</li>
                            <li>Столкнулись ли вы с проблемами при эксплуатации</li>
                        </ul>
                        <div class="tooltip__content__arrow"></div>
                    </div>
                </div>
                <span>Что написать?</span>
            </div>
        </div>

        <form action="" class="review-add-form js-form-validate">

            <label class="input input--textarea required js-input-limit">
                <div class="input-field">
                    <textarea data-limit="1500" name="" placeholder=" "></textarea>
                    <div class="input-label">Общее впечатления</div>
                    <div class="input-hint" style="	"></div>
                </div>

                <span class="input-limit"><span class="js-input-limit-num">0</span> / 1500</span>

            </label>

            <label class="input required js-input-limit">
                <span class="input-field">
                    <input data-limit="1500" placeholder=" " type="text" value="" name="">
                    <span class="input-label">Достоинства</span>
                </span>
                <div class="input-hint" style="	"></div>

                <span class="input-limit"><span class="js-input-limit-num">0</span> / 1500</span>

            </label>

            <label class="input required js-input-limit">
                <span class="input-field">
                    <input data-limit="1500" placeholder=" " type="text" value="" name="">
                    <span class="input-label">Недостатки</span>
                </span>
                <div class="input-hint" style="	"></div>

                <span class="input-limit"><span class="js-input-limit-num">0</span> / 1500</span>

            </label>

            <h3 class="review-add-form-title">Рекомендуете этот товар?</h3>

            <div class="radio-list-column required">

                <div class="radio-list-itm">
                    <input class="js-radio" name="recommendation" placeholder="Да, рекомендую" type="radio">
                </div>
                <div class="radio-list-itm">
                    <input class="js-radio" name="recommendation" placeholder="Нет, не рекомендую" type="radio">
                </div>

            </div>

            <h3 class="review-add-form-title">Фотографии товара</h3>

            <div class="js-file required">
                <label class="upload-btn">
                    <input accept="image/jpeg, image/jpg" multiple type="file" />

                    <span class="upload-btn__img">
                        <img alt="" class="svg" src="./img/ico/add-media.svg">
                    </span> Для загрузки файла нажмите на иконку или перетащите его в это поле
                </label>
                <div class="upload-btn-desc">*Вы можете загрузить до 15 фото формата jpg или jpeg. Максимальный размер файла — 10 Мб.</div>

                <div class="file-list js-file-list"></div>

            </div>

            <h3 class="review-add-form-title">Сроки использования</h3>

            <div class="radio-list-column required">

                <div class="radio-list-itm">
                    <input class="js-radio" name="terms" placeholder="Меньше месяца" type="radio">
                </div>
                <div class="radio-list-itm">
                    <input class="js-radio" name="terms" placeholder="От месяца до полугода" type="radio">
                </div>
                <div class="radio-list-itm">
                    <input class="js-radio" name="terms" placeholder="От полугода до года" type="radio">
                </div>
                <div class="radio-list-itm">
                    <input class="js-radio" name="terms" placeholder="Больше года" type="radio">
                </div>

            </div>

            <h3 class="review-add-form-title">Ваши данные</h3>

            <label class="input required">
                <span class="input-field">
                    <input placeholder=" " type="text" value="" name="">
                    <span class="input-label">Имя</span>
                </span>
                <div class="input-hint" style="	"></div>

            </label>

            <label class="input required">
                <span class="input-field">
                    <input placeholder=" " type="email" value="" name="">
                    <span class="input-label">Почта</span>
                </span>
                <div class="input-hint" style="	"></div>

            </label>

            <button class="btn js-form-validate-btn">Отправить</button>

            <div class="form-bottom-text">
                *Нажимая кнопку «Отправить», я соглашаюсь с условиями
                <a href="">политики конфиденциальности</a> и
                <a href="">пользовательского соглашения</a>, а также соглашаюсь на безвозмездную передачу фото, видеофайлов и права на их демонстрацию компании ООО «Вквадрате»
            </div>

        </form>

    </div>

</div>

</div>

@endsection