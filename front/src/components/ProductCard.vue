<template>
    <div class="product-itm @@class" data-num="@@num">
 
        <a aria-label="Детальная страница товара" class="product-itm__link" :href="`/product/${product.slug}`"></a>
        <a class="product-itm-head" :href="`/product/${product.slug}`">
            <div class="product-itm-images">
                <div class="product-itm-images-stage">

                    <div class="product-itm-images__itm">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/product.jpg">
                    </div>
                    <div class="product-itm-images__itm">
                        <img alt="" class="fill-img" loading="lazy" src="https://dummyimage.com/400x400">
                    </div>
                    <div class="product-itm-images__itm">
                        <img alt="" class="fill-img" loading="lazy" src="../img/tmp/banner-bg.jpg">
                    </div>

                </div>
            </div>

            <div class="product-itm-label-list">
                <!--	product-itm-label--main	указывается у основного тэга, который будет показываться в мобиле -->
                <span class="product-itm-label">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" data-src="../img/ico/like.svg" class="product-itm-label__ico svg replaced-svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4 8L7.375 3L9.0625 4.11111V6.88889H12.4375L13 8L11.5938 13H6.8125L5.125 12.4444H4V8ZM5.125 11.3333H5.30756L6.99506 11.8889H10.7387L11.8002 8.11453L11.7422 8H7.9375V4.70576L7.68702 4.54083L5.125 8.33642V11.3333Z" fill="#F5333F"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.8 7.27273H3.2V11.7273H3.8V7.27273ZM2 6V13H5V6H2Z" fill="#F5333F"></path>
                    </svg>
                    <span class="product-itm-label__text">рекомендуем</span>
                </span>
                <span class="product-itm-label product-itm-label--dark">
                    <span class="product-itm-label__text">—&nbsp;35%</span>
                </span>
            </div>

        </a>
        <div class="product-itm-body">
            <div class="product-itm__sku">Арт. GO4CORK OPTIMAL 1000</div>
            <h5 class="product-itm__name">{{product.title}}</h5>
            <div class="star-line">
                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                <img alt="" class="star star--full svg" src="../img/ico/star-half.svg">
                <img alt="" class="star svg" src="../img/ico/star-half.svg">
                <img alt="" class="star star--empty svg" src="../img/ico/star-half.svg">

                <div class="star-line__count">34</div>
            </div>
            <div class="product-itm__sep"></div>
            <div class="product-itm__desc">

                <p>вес (кг): 5.3</p>

            </div>
            <div class="price-block">
                <div class="price-block-head">
                    <span>Цена за {{ product.inBasketQuantity }}</span>
                    <div class="price-type">
                        <div v-for="variant in product.variants" :class="'price-type-val ' + (variant.is_primary_variant == true ? 'active' : '')" data-type="m2" @click="checktext($event); aboba()" :var-id="variant.id">{{ variant.title }}</div>
                    </div>
                </div>
                <div class="price-block-val">
                    <div v-for="variant in priceArr">
                        
                        
                        <div v-if="selected_variant == variant[0] && !product.specs.includes('discounted')" :class="{'price-block-val__itm': true, 'active': variant[0] == selected_variant ? true : false}" data-type="m2">
                            <span class="price">{{variant[1]}} ₽</span>
                        </div>

                        <div v-else-if="product.specs.includes('discounted') && selected_variant == variant[0]" :class="{'price-block-val__itm': true, 'active': variant[0] == selected_variant ? true : false}" data-type="m2">
                            <span class="price price--old">{{ variant[1] }} ₽</span> <span class="price">{{ Number(variant[1] / 100 * (100-variant[2])).toFixed(2) }} ₽</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-itm__btn">
                <div :class="{'add-cart-btn': true, 'show-counter': product.inBasketInfo.findIndex((el) => el.variant_id == selected_variant) != -1}">
                    <button class="btn js-add-cart" aria-label="В корзину" @click="addToCart">В корзину</button>




                    <div class="add-cart-counter" >
                        <div class="add-cart-counter__btn js-counter-btn" data-direction="minus" @click="addToCart();"></div>
                        <input type="text" :value="selectedQuantity" class="add-cart-counter__input" :id="'quantity_selector'+product.id" aria-label="Количество" @input="addToCart();">
                        <div class="add-cart-counter__btn plus js-counter-btn" data-direction="plus" @click="addToCart();"></div>
                    </div>
                </div>

                <button aria-label="Сравнить" class="product-btn">
                    <img alt="" class="svg" src="../img/ico/solve.svg">
                </button>x
                <button aria-label="В избранное" class="product-btn">
                    <img alt="" class="svg" src="../img/ico/heart.svg">
                </button>
            </div>

        </div>
    </div>
</template>

<script>
import { toRaw } from "vue";
import store from "../store/index"


export default {
    props: {
        
        product: {
            type: Object,
            required: true
        },
        test: {
            type: Number,
            required: false
        }
    },
    data() {
        return {
            selected_variant: null,

            specs: [],
            priceArr: [],
        }
    }, 
    methods: {
        getPrice() {
            var priceArr = []
            this.product.variants.forEach((iter) => {
                priceArr.push([iter.id, iter.price, iter.discount !== null ? iter.discount.discount_percent : null,  iter.is_primary_variant])




                // if(iter.is_primary_variant == true) {
                //     priceArr.push(Number(iter.price))
                //     if(iter.discount !== null) {
                //         priceArr.push((iter.price / 100 * (100 - iter.discount.discount_percent)).toFixed(2))
                //     }
                // }
            })
            
            this.priceArr = priceArr

            this.selected_variant = this.product.variants[0].id

            // this.$emit('passprice', this.priceArr.length == 1 ? this.priceArr[0] : this.priceArr[1])
        },
        checktext(event) {

            this.selected_variant = event.target.getAttribute('var-id')
        },
        aboba() {
            // console.log(toRaw(this.priceArr))
        },
        async addToCart(event) {

            try {         
                const csrfToken = this.getCookie('XSRF-TOKEN=')

                let quantity = 0

                quantity = await new Promise((resolve, reject) => {
                    setTimeout(() => {
                        resolve(document.getElementById('quantity_selector'+this.product.id).value)
                    }, 0)
                })
            
                const payload = {
                    product_id: this.selected_variant,
                    quantity: Number(quantity)
                }

                let response = await new Promise((resolve, reject) => {
                    clearTimeout(this.timeout)
                    
                    this.timeout = setTimeout(() => {
                        const response = this.$http.post(`http://localhost:8000/api/add-to-cart`, payload, {
                        withCredentials: true,
                        headers: {
                            'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
                        }
                        })
                        resolve(response)
                    }, 1000)
                })

                
                
                
                
                // store.state.cart.products_payload = response.data.products_payloa
                         
                

            } catch(err) {
                console.log(err)
            } finally {
                
            }
           
            
        },
    },
    computed: {
        number() {
            return this.product.inBasketInfo
        },
        selectedQuantity() {
            // console.log(this.selected_variant)
            // console.log(this.product)

            const index = this.product.inBasketInfo.find((el) => el.variant_id == this.selected_variant)

            if(index != undefined) {
                return index.quantity
            } else {
                return false
            }

        }
    },
    mounted() {
        this.getPrice()

    },
    watch: {
        product() {
            // console.log(this.product.inBasketInfo)
        },
        selected_variant() {
            // console.log(this.priceArr)
            
        },
        test(newVal, oldVal) {
            console.log(newVal)
        }
    }
}
</script>

<style>

</style>