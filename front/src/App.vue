<template>
<div class="app">
<html lang="ru">

<head>
    
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Vkvadrate — Каталог</title>
    <meta content="All inclusive - Каталог" name="description">

</head>

<body>
    <div class="wrapper">

<main-header></main-header>

<router-view></router-view>

        <!--footer begin-->
<main-footer></main-footer>

        <div class="modal" id="modal-city">
            <div class="modal-fade js-close-modal"></div>
            <div class="modal-content">
                <div class="modal-city-title">
                    
                    Ваше местоположение <b>Санкт-Петербург?</b>
                </div>
                <div class="modal-city-btns">
                    <a class="btn btn--line js-open-modal js-close-modal" href="#modal-city-full">Нет, изменить</a>
                    <div class="btn js-close-modal">Да, спасибо</div>
                </div>
            </div>
        </div>

        <div class="modal modal--small" id="modal-callback">
            <div class="modal-fade js-close-modal"></div>
            <div class="modal-content">
                <div class="modal-close js-close-modal">
                    <div class="cross"></div>
                </div>
                <form action="" class="js-form-validate">
                    <label class="input required">
                        <span class="input-field">
                            <input placeholder=" " type="text" value="" name="width">
                            <span class="input-label">Имя</span>
                        </span>
                        <div class="input-hint" style="	"></div>

                    </label>

                    <label class="input required">
                        <span class="input-field">
                            <input placeholder=" " type="tel" value="" name="width">
                            <span class="input-label">Ваш номер для связи</span>
                        </span>
                        <div class="input-hint" style="	"></div>

                    </label>

                    <div class="help-support__policy required">
                        <input class="js-checkbox required" placeholder="Нажимая кнопку, я даю согласие на обработку персональных данных, в&nbsp;соответствии с Политикой конфиденциальности." type="checkbox">
                    </div>

                    <button class="btn w100 js-form-validate-btn">Оставить заявку</button>
                </form>
            </div>
        </div>

        <div class="modal" id="modal-city-full">
            <div class="modal-fade js-close-modal"></div>
            <div class="modal-content">
                <div class="modal-close js-close-modal">
                    <div class="cross"></div>
                </div>

                <p class="h2">Выберите город</p>
                <input type="text" name="search-city" class="search-city js-city-search" placeholder="Ваш город...">

                <ul class="modal-city-list">
                    <li>
                        <a href="">Санкт-Петербург</a>
                    </li>
                    <li>
                        <a href="">Москва, МО</a>
                    </li>
                    <li>
                        <a href="">Архангельск</a>
                    </li>
                    <li>
                        <a href="">Барнаул</a>
                    </li>
                    <li>
                        <a href="">Белгород</a>
                    </li>
                    <li>
                        <a href="">Владивосток</a>
                    </li>
                    <li>
                        <a href="">Владикавказ</a>
                    </li>
                    <li>
                        <a href="">Волгоград</a>
                    </li>
                    <li>
                        <a href="">Воронеж</a>
                    </li>
                    <li>
                        <a href="">Екатеринбург</a>
                    </li>
                    <li>
                        <a href="">Иваново</a>
                    </li>
                    <li>
                        <a href="">Ижевск</a>
                    </li>
                    <li>
                        <a href="">Иркутск</a>
                    </li>
                    <li>
                        <a href="">Казань</a>
                    </li>
                    <li>
                        <a href="">Калининград</a>
                    </li>
                    <li>
                        <a href="">Калуга</a>
                    </li>
                    <li>
                        <a href="">Кемерово</a>
                    </li>
                    <li>
                        <a href="">Киров</a>
                    </li>
                    <li>
                        <a href="">Клин</a>
                    </li>
                    <li>
                        <a href="">Кострома</a>
                    </li>
                    <li>
                        <a href="">Краснодар</a>
                    </li>
                    <li>
                        <a href="">Красноярск</a>
                    </li>
                    <li>
                        <a href="">Курск</a>
                    </li>
                    <li>
                        <a href="">Липецк</a>
                    </li>
                    <li>
                        <a href="">Набережные Челны</a>
                    </li>
                    <li>
                        <a href="">Наро-Фоминск</a>
                    </li>
                    <li>
                        <a href="">Нижний Новогород</a>
                    </li>
                    <li>
                        <a href="">Новокузнецк</a>
                    </li>
                    <li>
                        <a href="">Новороссийск</a>
                    </li>
                    <li>
                        <a href="">Новосибирск</a>
                    </li>
                    <li>
                        <a href="">Омск</a>
                    </li>
                    <li>
                        <a href="">Оренбург</a>
                    </li>
                    <li>
                        <a href="">Пенза</a>
                    </li>
                    <li>
                        <a href="">Пермь</a>
                    </li>
                    <li>
                        <a href="">Петрозаводск</a>
                    </li>
                    <li>
                        <a href="">Псков</a>
                    </li>
                    <li>
                        <a href="">Ростов-на-Дону</a>
                    </li>
                    <li>
                        <a href="">Рязань</a>
                    </li>
                    <li>
                        <a href="">Самара</a>
                    </li>
                    <li>
                        <a href="">Саранск</a>
                    </li>
                    <li>
                        <a href="">Саратов</a>
                    </li>
                    <li>
                        <a href="">Смоленск</a>
                    </li>
                    <li>
                        <a href="">Ставрополь</a>
                    </li>
                    <li>
                        <a href="">Сургут</a>
                    </li>
                    <li>
                        <a href="">Тверь</a>
                    </li>
                    <li>
                        <a href="">Тольятти</a>
                    </li>
                    <li>
                        <a href="">Тула</a>
                    </li>
                    <li>
                        <a href="">Тюмень</a>
                    </li>
                    <li>
                        <a href="">Ульяновск</a>
                    </li>
                    <li>
                        <a href="">Уфа</a>
                    </li>
                    <li>
                        <a href="">Хабаровск</a>
                    </li>
                    <li>
                        <a href="">Челябинск</a>
                    </li>
                    <li>
                        <a href="">Череповец</a>
                    </li>
                    <li>
                        <a href="">Ярославль</a>
                    </li>
                </ul>

            </div>
        </div>

    </div>

</body>

</html>

</div>



</template>

<script>
import MainFooter from "./components/ui/MainFooter"
import MainHeader from "./components/ui/MainHeader"
import axios from "axios"
import store from "./store/index.js"

export default {
    components: {
        MainHeader, MainFooter
    },
    methods: {
        async checkauth() {
            try {
                const response = await axios.get('http://localhost:8000/api/check-auth', {
                    withCredentials: true
                })


                localStorage.setItem('isAuth', response.data.isAuth)
                localStorage.setItem('AuthName', response.data.user.name)


                if(response.data.isAuth == true) {
                    store.state.user = response.data.user
                } else {
                    this.$router.push('/login')
                }

            } catch(err) {
                console.log(err)
                this.$router.push('/login')

            }
        },
        async getCart() {
            try {
                const response = await this.$http.get(`http://localhost:8000/api/get-cart`, {withCredentials:true})
                if(Object.keys(response.data).length > 0) {
                    
                    store.state.cart = response.data
                // } else if(localStorage.getItem('basket')) {
                //     const basket = JSON.parse(localStorage.getItem('basket'))
                    
                //     store.state.cart = basket
                //     // localStorage.removeItem('basket')       
                } else {
                    // store.state.cart_items_count = 0
                    store.state.cart = {}

                }
                if(response.data) {
                    localStorage.setItem('basket', JSON.stringify(response.data))                
                }
            } catch(err) {
                console.log(err)
            } finally {
                
            }
        },
    },
    mounted() {
        
        // this.checkauth(),
        // this.getCart()
    },
    watch:{
        $route (to, from){

                this.checkauth()
                this.getCart()
            
                
        }
    } 
  }
</script>

<style>
@import 'css/style1.2.css';

</style>
