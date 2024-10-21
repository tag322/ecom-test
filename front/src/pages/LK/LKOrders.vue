<template>    
    <div class="order-container">
        <order-history v-for="order in orders" :order="order"></order-history>
    </div>
    
</template>



<script>
import axios from 'axios';

import OrderHistory from '../../components/actions/OrderHistory'

export default {
    data() {
        return {
            orders: [],
        }
    },
    components: {
        OrderHistory
    },
    methods: {
        async getOrders() {
            try {
                const response = await axios.get(`${process.env.VUE_APP_BACKEND_URL}/get_user_orders`, {

                    withCredentials: true 
                })

                for(let order of response.data) {
                    order.basket = JSON.parse(order.basket)
                    this.orders.push(order)
                }

            } catch(err) {
                if(err.response.status == 401) {
                    this.$router.push('/login')
                } else if(err.response.status == 403) {
                    this.$router.back()
                }
                
            }
        },
    },
    mounted() {
        this.getOrders()
    },
}
</script>

<style scoped>
.order-container {
    width: 50%;
    margin: auto;
    margin-top: 30px;
    border: 1px solid var(--FF-L-Grey);
    padding: 1rem;
}
</style>