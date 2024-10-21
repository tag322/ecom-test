<template>
    <div class="basket-itm">
        <div class="basket-itm__img">
            <img alt="" class="fill-img" src="../../img/tmp/decor-small.jpg">
        </div>
        <div class="basket-itm__content">
            <div class="basket-itm__content__left">
                <div class="basket-itm__sku">Арт. 18705033</div>
                <a href="promotion-detail.html" class="basket-itm__name h5">{{product.payload.parent_product.title}} {{ product.quantity }} шт.</a>
                <div class="basket-itm__sep"></div>
                <!-- <div class="basket-itm__remove js-basket-remove">
                    <img alt="" class="svg" src="../../img/ico/trash.svg">
                    <span @click="$emit('itemDelete', product.product_id)" class="basket-itm__remove__text">удалить</span>
                </div> -->
            </div>
            <div class="basket-itm__content__right">

                <div @click="test" class="basket-itm__discount">— 35%</div>
                <div class="basket-itm__sep"></div>

                <p class="basket-price">{{product.payload.price * product.quantity}} ₽</p>
                <p class="basket-price basket-price--small">{{product.payload.price}}₽/уп.</p>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        product: Object
    },  
    data() {
        return {

        }
    },
    mounted() {
        // console.log(this.product)
    }
}
</script>

<style scoped>
/* .basket-itm__img {
    width: 100px;
    height: 100%;
} */
.basket-itm__content__right {
    text-align: right;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}
.basket-itm {
    display: grid;
    grid-template-columns: 7rem 25rem 1fr;
    gap: 1rem;
    padding: 1.5rem 1rem;
    border-bottom: 1px solid var(--FF-L-Grey);
}
</style>