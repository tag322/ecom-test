<template>    
    <div class="order-container">
        <a class="btn" href="" @click.prevent="deleteOrders">Удалить выбранное ({{ selected.length }})</a>
        <div :class="{deleted: true, animate: showDeleteAct}" @transitionend="showDeleteAct=false">Удалено</div>
        <order v-model="selected" v-for="order in orders" :order="order"></order>
    </div>
    
</template>



<script>
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';
import axios from 'axios';

import Order from '../../components/actions/Order'

export default {
    data() {
        return {
            orders: [],

            selected: [],

            showDeleteAct: false,
        }
    },
    components: {
        Order
    },
    methods: {
        async getOrders() {
            try {
                const response = await axios.get(`${process.env.VUE_APP_BACKEND_URL}/get-orders`, {
                    headers: {
                        'X-XSRF-TOKEN': decodeURIComponent(this.getCookie('XSRF-TOKEN='))
                    },
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

        async deleteOrders() {
            this.orders = this.orders.filter((order) => {
                return !this.selected.includes(order.id)
            })

            const payload = {
                ids: this.selected
            }

            this.showDeleteAct = true
            this.selected = []

            try {
                const resp = await axios.post(`${process.env.VUE_APP_BACKEND_URL}/delete_orders`, payload, {
                    withCredentials:true,
                    headers: {
                        'X-XSRF-TOKEN': decodeURIComponent(this.getCookie('XSRF-TOKEN='))
                    }
                })
                console.log(resp)
            } catch(err) {
                console.log(err)
            }

        },

        async test() {
            try {
                axios.get(`${process.env.VUE_APP_BACKEND_URL}/test`, {
                    withCredentials: true
                })
            } catch(err) {
                console.log(err)
            }
        }
    },
    mounted() {
        console.log(1)


        this.getOrders()

        window.Pusher = Pusher;

        window.Echo = new Echo({
            broadcaster: 'reverb',
            key: process.env.VUE_APP_REVERB_APP_KEY,
            wsHost: process.env.VUE_APP_REVERB_HOST,
            wsPort: process.env.VUE_APP_REVERB_PORT ?? 80,
            wssPort: process.env.VUE_APP_REVERB_PORT ?? 443,
            forceTLS: (process.env.VUE_APP_REVERB_SCHEME ?? 'https') === 'https',
            enabledTransports: ['ws', 'wss'],

            // authEndpoint: process.env.VUE_APP_BACKEND_URL_NON_API + 'broadcasting/auth',
            authorizer: (channel, options) => ({
                authorize: (socketId, callback) => {
                    axios.post(process.env.VUE_APP_BACKEND_URL_NON_API+'broadcasting/auth', {
                        socket_id: socketId,
                        channel_name: channel.name,
                    }, {
                        withCredentials: true,
                        
                    })
                        .then(response => {
                            callback(false, response.data);
                        })
                        .catch(error => {
                            console.log(error)
                        });
                },
            }),
        });


        window.Echo.private('orders-channel')
            .listen('OrderCreated', (e) => {
                e.order.basket = JSON.parse(e.order.basket)

                e.order.user = e.user
                delete e.user
                this.orders.push(e.order);
                console.log(this.orders)
        });

        window.Echo.private('payments-status-channel')
            .listen('PaymentStatusChange', (e) => {

                this.orders.forEach(function(obj) {
                    
                    if(obj.id == e.order_id) {
                        
                        obj.transaction = {}
                        obj.transaction.status = 'SUCCEEDED'
                    }
                })

        });
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

.btn {
    margin-right: 10px;
}

.deleted {
    display: inline-flex;
    opacity: 0;
    transition: opacity 1.5s ease-in-out 0s;

}

.deleted.animate {

    opacity: 1;

}
</style>