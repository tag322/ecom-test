<template>


<div class="basket-itm">
    <div class="basket-itm__check">
        <label class="check_box">
            <input :checked="selectedItems.includes(product.product_id)" class="js-checkbox" placeholder type="checkbox" :value="product.product_id" @change="suka">
            <span class="check_box__item"></span>
        </label>    
    </div>
    <div class="basket-itm__img">
        <img alt="" class="fill-img" src="../../img/tmp/decor-small.jpg">
    </div>
    <div class="basket-itm__content">
        <div class="basket-itm__content__left">
            <div class="basket-itm__sku">Арт. 18705033</div>
            <a href="promotion-detail.html" class="basket-itm__name h5">{{product.payload.parent_product.title}}</a>
            <div class="basket-itm__sep"></div>
            <div class="basket-itm__remove js-basket-remove">
                <img alt="" class="svg" src="../../img/ico/trash.svg">
                <span @click="$emit('itemDelete', product.product_id)" class="basket-itm__remove__text">удалить</span>
            </div>
        </div>
        <div class="basket-itm__content__right">

            <div @click="test" class="basket-itm__discount">— 35%</div>
            <div class="basket-itm__sep"></div>

            <p class="basket-price">{{product.payload.price * product.quantity}} ₽</p>
            <p class="basket-price basket-price--small">{{product.payload.price}}₽/уп.</p>

            <div class="add-cart-counter basket-counter">
                <div class="add-cart-counter__btn js-counter-btn" data-direction="minus" @click="changeQuantity($event, product)"></div>
                <input type="text" :value="product.quantity" class="add-cart-counter__input" aria-label="Количество" id="quantity-selector">
                <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus" @click="changeQuantity($event, product)"></div>
            </div>

        </div>
    </div>
</div>


</template>

<script>
import store from "../../store/index.js"
import axios from 'axios'

export default {
    props: {
        product: Object,
        selectedItems: Object

  
    },
    data() {
        return {
            basket: {},

            
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
        

        parseBasket() {
            this.basket = JSON.parse(localStorage.getItem('basket'))
        },
        changeQuantity(event, product) {
            
            setTimeout(() => {
                this.product.quantity = parseInt(event.target.parentNode.querySelector('#quantity-selector').value, 10)
                this.$emit('changeProd', this.product)
            }, 0)

            clearTimeout(this.timeout)
            
            
            this.timeout = setTimeout(() => {
                this.basketUpdate()
            }, 1000)
          
        },
        async basketUpdate() {
            if(localStorage.getItem('isAuth') == 'false') {

                this.$emit('fulfilled')
                return

            }

            const csrfToken = this.getCookie('XSRF-TOKEN=')

            const payload = {
                product_id: this.product.product_id,
                quantity: this.product.quantity
            }

            try {
                await axios.post('http://localhost:8000/api/update-cart', payload, 
                {
                    headers: {
                    'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
                    },
                    withCredentials: true
                
                })
            } catch(err) {
                console.log(err)
            } finally {
                this.$emit('fulfilled')
            }
        },
        
        suka(event) {
            this.$emit('checked', event)
        },

        async test() {
            setTimeout(() => {
                console.log('aboba')
            }, 1000)
        }
    },
    computed: {
        model: {
            get() {
                console.log(this.product.id)
                return this.product.id
            },
            set(value) {
                console.log(value)
                this.$emit("input", value);
            }
        }
    },
    mounted() {
        // this.$emit('pricechange', this.product.payload.price * this.product.quantity)
        this.parseBasket()
       
    },

}
</script>

<style>

</style>