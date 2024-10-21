<template>
<div class="main">

    <div class="content page-margin">

        <h1 class="title-margin" @click="test">Корзина</h1>

        <form action="" class="basket-grid">
            <div class="basket-grid-content" >
                <div class="basket-head" v-if="basket != null">
                    <input class="js-checkbox js-basket-select-all" placeholder="Выбрать всё" type="checkbox">

                    <a  class="btn btn--line disabled js-open-modal js-basket-remove-all-btn" href="#modal-basket-remove">Удалить выбранное</a>

                    <!-- {{selectedItems}} -->

                </div>
<!-- 
                <test @click="console.log(testobj)" :prop="testobj"></test>
                {{ testobj }} -->

                <div class="basket-list" >

                <basket-item :selectedItems="selectedItems" @checked="selectedItemsChange" @itemDelete="itemDelete" @fulfilled="requestPending = false; message = 'Изменения сохранены'; messageType='green'" @changeProd="changeProd" v-if="basket != null" v-for="product in basket.products_payload" :product="product"></basket-item>    
                    <div class="h2 basket-empty" v-else>Здесь пока пусто</div>
                    
                </div>
                
            </div>
            <div class="basket-total-card">
                <div class="basket-total-card__title h2">
                    <div>Итого:</div>
                    <div>{{cartInfo.totalPrice}}</div>
                    
                </div>
                <div class="basket-total-attr">
                    <div class="basket-total-attr__name">Общий вес:</div>
                    <div class="basket-total-attr__val">481,8 кг</div>
                </div>
                <div class="basket-total-attr">
                    <div class="basket-total-attr__name">
    {{cartInfo.itemsCount+ " " + (cartInfo.itemsCount % 10 >= 5 || cartInfo.itemsCount % 10 == 0 ? 'товаров' : cartInfo.itemsCount % 10 >= 2 ? 'товара' : 'товар')}}
                    </div>
                    <div class="basket-total-attr__val">{{cartInfo.totalPrice}} ₽</div>
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

                    <img alt="" class="svg promocode__ico promocode__error" src="../../img/ico/cross.svg">
                    <img alt="" class="svg promocode__ico promocode__success" src="../../img/ico/check.svg">

                    <span class="promocode__action promocode__arrow" onclick="$('.promocode').addClass('error')">
                        <img alt="" class="svg" src="../../img/ico/arrow.svg">
                    </span>
                    <span class="promocode__action promocode__edit js-promocode-test-edit" onclick="$('.promocode').removeClass('error success')">
                        <img alt="" class="svg" src="../../img/ico/edit.svg">
                    </span>

                </label>

                <button class="btn btn--large basket-btn" @click.prevent="makeOrderCheck">Оформить заказ</button>

                <div class="basket-btn-desc">
                    Дата и стоимость доставки определяются при оформлении заказа
                </div>
                <div v-if="message != '' && messageType == 'green'" class="alert alert-success">{{message}}</div>
                <div v-else-if="message != '' && messageType == 'yellow'" class="alert alert-warning">{{message}}</div>

            </div>
        </form>

    </div>

    <div class="modal" id="modal-basket-remove">
        <div class="modal-fade js-close-modal"></div>
        <div class="modal-content">
            <div class="h4">Удалить выбранные товары</div>
            <div>
                Вы точно хотите удалить выбранные товары?<br>
                Отменить данное действие будет невозможно.
            </div>
            <div class="modal-city-btns">
                <a class="btn btn--line js-close-modal">Отменить</a>
                <div class="btn js-basket-remove-all js-close-modal" @click="itemDelete(selectedItems)">Да, удалить</div>
            </div>
        </div>
    </div>

    <confirmation-modal v-if="modalShow"
        :text="{
            question: 'Подтверждение заказа.',
            questionDesc: 'У вас уже имеется необработанный заказ, точно хотите создать ещё один?',
            accept: 'Да',
            decline: 'Нет'
        }"
        @accept="modalShow=false; makeOrder()"
        @decline="modalShow=false"
    ></confirmation-modal>

    <modal-with-slot v-if="paymentModalShow" @modalclose="paymentModalShow = false">
        <payment-form :amount="cartInfo.totalPrice" :order="order"></payment-form>
    </modal-with-slot>

    <modal-with-slot v-if="loadingModalShow" @modalclose="loadingModalShow = false">
        <loader></loader>
    </modal-with-slot>

</div>
</template>

<script>
import axios from "axios"
import store from "../../store/index.js"

import BasketItem from "../../components/basket/BasketItem"
import Test from "../../components/Test"
import ConfirmationModal from "../../components/actions/ConfirmationModal"
import ModalWithSlot from '../../components/actions/ModalWithSlot'
import PaymentForm from '../../components/actions/PaymentForm'
import Loader from '../../components/someshit/Loader'


export default {
    components: {
        BasketItem, Test, ConfirmationModal, ModalWithSlot, PaymentForm, Loader
    },
    data() {
        return {
            testobj: {alo: '1', arr: [1,2]},

            cartInfo: {
                totalPrice: 0,
                itemsCount: 0
            },
            basket: {},

            message: '',
            requestPending: false,

            selectedItems: [],

            modalShow: false,
            paymentModalShow: false,
            loadingModalShow: false,

            order: {}
        }
    },
    methods: {
        getCookie(name) {
            const value = document.cookie
            const parts = value.split(name)
            if (parts.length === 2) {
                return parts.pop().split(';').shift()
            }
        },

        quantityChange(product) {
            for(let i of this.basket.products_payload) {
                if(i.product_id == product.product_id) {
                    i = product
                }
            }
            localStorage.setItem('basket', JSON.stringify(this.basket))
        },

        async makeOrderCheck() {
            try {
                const resp = await axios.post(`${process.env.VUE_APP_BACKEND_URL}/make-order-check`, {basket: localStorage.getItem('basket')}, {
                    headers: {
                    'X-XSRF-TOKEN': decodeURIComponent(this.getCookie('XSRF-TOKEN='))
                    },
                    withCredentials: true
                })
                console.log(resp)
                if(resp.data == 'exists') {
                    console.log(1)
                    this.modalShow = true
                } else {
                    this.makeOrder()
                }

            } catch(err) {
                console.log(err )
            }
        },

        async makeOrder() {
            try {
                this.loadingModalShow = true

                const response = await axios.post(`${process.env.VUE_APP_BACKEND_URL}/make-order`, {basket: localStorage.getItem('basket')}, {
                    headers: {
                    'X-XSRF-TOKEN': decodeURIComponent(this.getCookie('XSRF-TOKEN='))
                    },
                    withCredentials: true
                })

                this.order = response.data

                this.loadingModalShow = false

                this.paymentModalShow = true
            } catch(err) {
                console.log(err )
            }

            
        },

        async itemDelete(product_id) {

            if(typeof product_id != 'object') {
                product_id = [parseInt(product_id, 10)]
            } 

            const payload = {
                product_id: product_id
            }  

            const array = this.basket.products_payload

            //if user non-auth we just updating localstorage
            for(let i in array) {
                for(let product of product_id) {
                    if(array[i].product_id == product) {
                        console.log(product)           
                        array.splice(i, 1)                             
                    }
                }
            }

            this.basket.products_payload = array
            localStorage.setItem('basket', JSON.stringify(this.basket))
            
            
            if(localStorage.getItem('isAuth') == 'false') {
                this.selectedItems = []
                return
            }
        
                 
                
            try {
                axios.post('http://localhost:8000/api/delete-from-cart', payload, {
                    withCredentials: true,
                    headers: {
                    'X-XSRF-TOKEN': decodeURIComponent(this.getCookie('XSRF-TOKEN='))
                    },
                })
            } catch(err) {
                console.log(err)
            }
            this.selectedItems = []


            store.state.cart_items_count = this.basket.products_payload.length

        },

        calcSum() {
           
            const cart = JSON.parse(localStorage.getItem('basket'))

            if(!cart) {
                return
            }
           
            var result = cart.products_payload.reduce(function(result, value)  {              
                result['price'] += parseInt(value.payload.price * value.quantity, 10)
                result['quantity'] += parseInt(value.quantity)

                return result

            }, {'price': 0, 'quantity': 0})

            
            this.cartInfo.totalPrice = result.price
            this.cartInfo.itemsCount = result.quantity

        },

        changeProd() {
            this.messageType = 'yellow'
            this.message = 'Идет сохранение. Не покидайте сайт.'
            this.requestPending = true

            localStorage.setItem('basket', JSON.stringify(this.basket))
            console.log(this.basket)

            this.calcSum()
        },
        
        parseBasket() {
            this.basket = JSON.parse(localStorage.getItem('basket'))
        },

        preventLeave(event) {
            console.log(this.requestPending)
            var confirmationMessage = this.requestPending ? 'aboba' : '';

            (event || window.event).returnValue = confirmationMessage;
            return confirmationMessage; 
        },

        selectedItemsChange(event) {

            const index = this.selectedItems.indexOf(parseInt(event.target.value, 10)) 

            if(index != -1) {
                this.selectedItems.splice(index, 1)
            } else {
                this.selectedItems.push(parseInt(event.target.value, 10))
            }

        },


        test(data) {
            console.log(process.env.VUE_APP_BACKEND_URL)
        }
    },
    created() {

        this.parseBasket(),
        
        this.calcSum()
        
        window.addEventListener("beforeunload", this.preventLeave); 
    },
    watch: {
        basket() {
        }
    }
}
</script>

<style>
.basket-empty {
    text-align: center;
    color: #CACDD2;
    margin-top: 100px;
}
.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}
.alert {
    margin-top: 1rem;
    position: relative;
    padding: .75rem 1.25rem;
    
    border: 1px solid transparent;
    border-radius: .25rem;
}
.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
}
</style>