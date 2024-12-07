<template>
    <div class="form-block">
        <span class="h4">Оплата</span>
        <form action="" mathod="POST" @submit.prevent="submit(); $emit('makeorder')" >
            <label for="amount">Сумма платежа</label>
            <input name="amount" type="text" required autocomplete="off" :value="amount + ' ₽'" readonly></input>
            <label for="email">Ваш email для уведомлений {{isAuth ? '(по умолчанию используется тот, который вы указали при регистрации)' : ''}}</label>
            <input name="email" type="text" required autocomplete="off" v-model="email"></input>
            <!-- <label for="description">Описание</label>
            <textarea name="description" type="text" required autocomplete="off" v-model="description"></textarea> -->
            <button type="submit" class="btn">Оплатить</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios'
import store from "../../store/index.js"

export default {
    props: {
        amount: Number,
        order: Object
    },  
    data() {
        return {
            user: {},

            // amount: 0,
            email: '',
            message: '',
        }
    },
    methods: {
        async submit() {
            const payload = {
                user_id: this.user.id,
                email: this.email,
                amount: this.amount,
                message: this.message,
                order_id: this.order.id
            }

            const link = await axios.post(`${process.env.VUE_APP_BACKEND_URL}/payments/create`, payload, {
                headers: {
                    'X-XSRF-TOKEN': decodeURIComponent(this.getCookie('XSRF-TOKEN='))
                },
                withCredentials: true
            })

            window.location.replace(link.data)
        },
        getUserInfo() {
            this.user = store.state.user
            if(this.user != null && Object.keys(this.user).length > 0) {
                this.email = this.user.email
            }
        }
        
    },
    computed: {
        isAuth() {
            return localStorage.getItem('isAuth') == 'true'
        }
    },
    mounted() {
        this.getUserInfo()
    },
    watch: {
        order() {
            console.log(1)
            console.log(this.order.id)
        }
    }
}
</script>

<style scoped>
input {
    border-radius: .25rem;
    border: 1px solid var(--FF-L-Grey);
    background: rgb(243, 243, 243);
    padding: 1rem 1rem;
    height: 2.5rem;
    width: 100%;
    padding-right: 4rem;
    display:block;
    margin-bottom: 10px;
    margin-top: 10px;
}
form {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    /* margin-right: 2rem; */
    
}
span {
    margin-bottom: 10px;
    display:block;
    font-weight: 500;
}
label {
    display:block;
    margin-bottom: 5px;
}
button {
    font-weight: 500;
    display:block;
    margin-bottom: 10px;
}
</style>
