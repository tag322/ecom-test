@extends("layouts.main_layout")

@section("content")

<div class="main">

<div class="content">

    <ul class="head-nav">
        <li>
            <a class="head-nav-itm" href="/contacts.html">
                <span class="head-nav-itm__text">Контакты</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm" href="/about.html">
                <span class="head-nav-itm__text">О компании</span>
            </a>
        </li>
        <li>
            <a class="head-nav-itm active" href="/documents.html">
                <span class="head-nav-itm__text">Документы</span>
            </a>
        </li>
    </ul>

    <div class="table-scroll">
        <table class="document-table">
            <tr>
                <th>Наименования документа</th>
                <th>Дата обновления</th>
                <th>Документ</th>
            </tr>

            <tr>
                <td>Реквизиты</td>
                <td>30.09.2022</td>
                <td>
                    <a class="text-link" href="">Открыть</a>
                </td>
            </tr>

            <tr>
                <td>Согласие на обработку персональных данных</td>
                <td>06.07.2022</td>
                <td>
                    <a class="text-link" href="">Открыть</a>
                </td>
            </tr>

            <tr>
                <td>Реквизиты</td>
                <td>30.09.2022</td>
                <td>
                    <a class="text-link" href="">Открыть</a>
                </td>
            </tr>

            <tr>
                <td>Согласие на обработку персональных данных</td>
                <td>06.07.2022</td>
                <td>
                    <a class="text-link" href="">Открыть</a>
                </td>
            </tr>

        </table>
    </div>

</div>

</div>

@endsection