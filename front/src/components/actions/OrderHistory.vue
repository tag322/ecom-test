<template>
    
    <div class="basket-itm" >
        <!-- <div class="basket-itm__check">
        <label class="check_box">
            <input v-model="model" :value="order.id" class="js-checkbox" type="checkbox">
            <span class="check_box__item"></span>
            <span class="check_box__text"></span>
        </label>
        </div>
        <div class="basket-itm__img">
            <img alt="" class="fill-img" src="../../img/tmp/decor-small.jpg">
        </div> -->
        <div class="basket-itm__content">
            <div class="basket-itm__content__left">
                <div class="basket-itm__name h5">Заказ №{{ order.id }}</div>
                
                <div class="basket-itm__remove js-basket-remove">
                    <span class="basket-itm__remove__text" @click="modalShow = true">Показать</span>
                </div>
                
            </div>
            <div class="basket-itm__content__right">
                <p class="basket-price">{{totalSum}} ₽</p>
                <div>Статус:
                <div>{{  order.transaction != undefined && order.transaction.status == 'SUCCEEDED' ? 'Оплачено' : 'Не оплачено' }}</div>
                </div>
            </div>
        </div>
    </div>

    

    <modal-with-slot v-if="modalShow" @modalclose="modalShow=false">
        <order-item v-for="product in order.basket.products_payload" :product="product"></order-item>
    </modal-with-slot>
</template>

<script>
import ModalWithSlot from '../../components/actions/ModalWithSlot'
import OrderItem from '../../components/Order/OrderItem'

export default {
data() {
    return {
        modalShow: false,


    }
},
components: {
    ModalWithSlot, OrderItem
},
props: {
    order: Object,

    modelValue: {
        type: Object,
        required: false
    }
},
methods: {

},
computed: {
    isAuth() {
        
        return this.order.user_id !== null
    },

    totalSum() {
        return this.order.basket.products_payload.reduce( (sum, curr) => {
            // console.log(curr.payload.price)
            
            return sum += parseInt(curr.payload.price, 10)
        }, 0)
    },

    model: {
        get() { return this.modelValue },
        set(newValue) { this.$emit('update:modelValue', newValue) }
    },

},
mounted() {
    // console.log(this.order)
}
}
</script>

<style scoped>

.basket-itm__remove__text {
    display: contents;
}

.basket-itm {
    display: grid;
    grid-template-columns: 100%;
    gap: 1rem;
    padding: 1.5rem 1rem;
    border-bottom: 1px solid var(--FF-L-Grey);
}

@media (max-width:1100px){
        .basket-itm__remove {
        position: absolute;
        right: unset;
        top: 3rem;
    }
}

</style>