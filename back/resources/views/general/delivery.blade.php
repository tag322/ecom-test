@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content">

    <ul class="head-nav">
        <li>
            <a class="head-nav-itm path-fill active" href="{{route('delivery')}}">
                <img alt="" class="svg" src="./img/ico/delivery.svg">
                <span class="head-nav-itm__text">Доставка</span>
            </a>
        </li>

        <li>
            <a class="head-nav-itm path-fill" href="{{route('delivery_rules')}}">
                <img alt="" class="svg" src="./img/ico/info.svg">
                <span class="head-nav-itm__text">Правила доставки</span>
            </a>
        </li>
    </ul>

    <div class="delivery-content content-small">

        <div class="accordion js-accordion">
            <div class="accordion__head js-accordion-head">
                <div class="accordion__head__text">
                    <div class="accordion__head__name">Санкт-Петербург и Ленинградская обл.</div>
                    <div class="accordion__head__desc">Доставляем товар по городу и до 50 км за пределами КАД</div>
                </div>
                <img alt="" class="svg accordion__head__arrow" src="./img/ico/plus.svg">
            </div>

            <div class="accordion__body js-accordion-body">
                <h4>Стандартная доставка</h4>
                <div class="table-scroll">
                    <table>
                        <thead>
                            <tr>
                                <th>Объем</th>
                                <th>Зона 1<br> (в пределах КАД)</th>
                                <th>Зона 2 <br> (до 20 км от КАД)</th>
                                <th>Зона 3 <br> (до 50 км от КАД)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img alt="" class="delivery-car" loading="lazy" src="./img/ico/delivery-car1.svg">
                                </td>
                                <td>899 руб</td>
                                <td>1299 руб</td>
                                <td>2199 руб</td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="" class="delivery-car" loading="lazy" src="./img/ico/delivery-car2.svg">
                                </td>
                                <td>899 руб</td>
                                <td>1299 руб</td>
                                <td>2199 руб</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="delivery-map-grid">
                    <div class="delivery-map-grid__content">
                        <ul>
                            <li>Стоимость доставки свыше 1.5 т рассчитывается оператором</li>
                            <li>Стоимость доставки свыше 50 км от КАД рассчитывается оператором</li>
                            <li>В стоимость доставки не входит разгрузка и подъем товара</li>
                        </ul>
                        <h4>Доставка ко времени</h4>
                        <ul>
                            <li>Стоимость доставки зависти от веса, габаритов и адреса получения заказа</li>
                            <li>Стоимость рассчитывается при оформлении заказа</li>
                            <li>В стоимость доставки входит разгрузка и подъем товара</li>
                        </ul>
                        <h4>Самовывоз</h4>
                        <p>Вы можете самостоятельно и бесплатно забрать товар со склада по адресу: <br> Санкт-Петербург, Коломяжский проспект д. 10Э
                            <br> по рабочим дням с 12-00 до 17-00.
                        </p>
                    </div>
                    <div class="delivery-map-grid__itm">
                        <iframe frameborder="0" height="400" loading="lazy" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aeeb3f7541143cfe6ae54ad845a4d68580a50655682b97f50e860d39958b490be&amp;source=constructor" width="100%"></iframe>

                        <a class="btn btn--line w100" href="https://yandex.ru/maps/?um=constructor%3Aeeb3f7541143cfe6ae54ad845a4d68580a50655682b97f50e860d39958b490be&source=constructorLink" target="_blank">Открыть в Яндекс картах</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion js-accordion">
            <div class="accordion__head js-accordion-head">
                <div class="accordion__head__text">
                    <div class="accordion__head__name">Санкт-Петербург и Ленинградская обл.</div>
                    <div class="accordion__head__desc">Доставляем товар по городу и до 50 км за пределами КАД</div>
                </div>
                <img alt="" class="svg accordion__head__arrow" src="./img/ico/plus.svg">
            </div>

            <div class="accordion__body js-accordion-body">
                <h4>Стандартная доставка</h4>
                <div class="table-scroll">
                    <table>
                        <thead>
                            <tr>
                                <th>Объем</th>
                                <th>Зона 1<br> (в пределах КАД)</th>
                                <th>Зона 2 <br> (до 20 км от КАД)</th>
                                <th>Зона 3 <br> (до 50 км от КАД)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img alt="" class="delivery-car" loading="lazy" src="./img/ico/delivery-car1.svg">
                                </td>
                                <td>899 руб</td>
                                <td>1299 руб</td>
                                <td>2199 руб</td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="" class="delivery-car" loading="lazy" src="./img/ico/delivery-car2.svg">
                                </td>
                                <td>899 руб</td>
                                <td>1299 руб</td>
                                <td>2199 руб</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="delivery-map-grid">
                    <div class="delivery-map-grid__content">
                        <ul>
                            <li>Стоимость доставки свыше 1.5 т рассчитывается оператором</li>
                            <li>Стоимость доставки свыше 50 км от КАД рассчитывается оператором</li>
                            <li>В стоимость доставки не входит разгрузка и подъем товара</li>
                        </ul>
                        <h4>Доставка ко времени</h4>
                        <ul>
                            <li>Стоимость доставки зависти от веса, габаритов и адреса получения заказа</li>
                            <li>Стоимость рассчитывается при оформлении заказа</li>
                            <li>В стоимость доставки входит разгрузка и подъем товара</li>
                        </ul>
                        <h4>Самовывоз</h4>
                        <p>Вы можете самостоятельно и бесплатно забрать товар со склада по адресу: <br> Санкт-Петербург, Коломяжский проспект д. 10Э
                            <br> по рабочим дням с 12-00 до 17-00.
                        </p>
                    </div>
                    <div class="delivery-map-grid__itm">
                        <iframe frameborder="0" height="400" loading="lazy" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aeeb3f7541143cfe6ae54ad845a4d68580a50655682b97f50e860d39958b490be&amp;source=constructor" width="100%"></iframe>

                        <a class="btn btn--line w100" href="https://yandex.ru/maps/?um=constructor%3Aeeb3f7541143cfe6ae54ad845a4d68580a50655682b97f50e860d39958b490be&source=constructorLink" target="_blank">Открыть в Яндекс картах</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion js-accordion">
            <div class="accordion__head js-accordion-head">
                <div class="accordion__head__text">
                    <div class="accordion__head__name">Санкт-Петербург и Ленинградская обл.</div>
                    <div class="accordion__head__desc">Доставляем товар по городу и до 50 км за пределами КАД</div>
                </div>
                <img alt="" class="svg accordion__head__arrow" src="./img/ico/plus.svg">
            </div>

            <div class="accordion__body js-accordion-body">
                <h4>Стандартная доставка</h4>
                <div class="table-scroll">
                    <table>
                        <thead>
                            <tr>
                                <th>Объем</th>
                                <th>Зона 1<br> (в пределах КАД)</th>
                                <th>Зона 2 <br> (до 20 км от КАД)</th>
                                <th>Зона 3 <br> (до 50 км от КАД)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img alt="" class="delivery-car" loading="lazy" src="./img/ico/delivery-car1.svg">
                                </td>
                                <td>899 руб</td>
                                <td>1299 руб</td>
                                <td>2199 руб</td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="" class="delivery-car" loading="lazy" src="./img/ico/delivery-car2.svg">
                                </td>
                                <td>899 руб</td>
                                <td>1299 руб</td>
                                <td>2199 руб</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="delivery-map-grid">
                    <div class="delivery-map-grid__content">
                        <ul>
                            <li>Стоимость доставки свыше 1.5 т рассчитывается оператором</li>
                            <li>Стоимость доставки свыше 50 км от КАД рассчитывается оператором</li>
                            <li>В стоимость доставки не входит разгрузка и подъем товара</li>
                        </ul>
                        <h4>Доставка ко времени</h4>
                        <ul>
                            <li>Стоимость доставки зависти от веса, габаритов и адреса получения заказа</li>
                            <li>Стоимость рассчитывается при оформлении заказа</li>
                            <li>В стоимость доставки входит разгрузка и подъем товара</li>
                        </ul>
                        <h4>Самовывоз</h4>
                        <p>Вы можете самостоятельно и бесплатно забрать товар со склада по адресу: <br> Санкт-Петербург, Коломяжский проспект д. 10Э
                            <br> по рабочим дням с 12-00 до 17-00.
                        </p>
                    </div>
                    <div class="delivery-map-grid__itm">
                        <iframe frameborder="0" height="400" loading="lazy" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aeeb3f7541143cfe6ae54ad845a4d68580a50655682b97f50e860d39958b490be&amp;source=constructor" width="100%"></iframe>

                        <a class="btn btn--line w100" href="https://yandex.ru/maps/?um=constructor%3Aeeb3f7541143cfe6ae54ad845a4d68580a50655682b97f50e860d39958b490be&source=constructorLink" target="_blank">Открыть в Яндекс картах</a>
                    </div>
                </div>
            </div>
        </div>

        <img alt="" class="stas-delivery" src="./img/ico/stas/stas-delivery.svg">

    </div>

</div>

</div>

@endsection