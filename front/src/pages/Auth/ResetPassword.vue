<template>
    <div class="form-block">
        <span>Восстановление</span>
        <form action="" mathod="POST" @submit.prevent="submit">
            <label for="email">Введите email, на который была отпралвена ссылка</label>
            <input name="email" type="text" required autocomplete="off" v-model="email"></input>
            <label for="password">Введите новый пароль</label>
            <input name="password" type="text" required autocomplete="off" v-model="password"></input>
            <label for="password_confirmation">Подтвердите пароль</label>
            <input name="password_confirmation" type="text" required autocomplete="off" v-model="password_confirmation"></input>
            <button type="submit" class="btn">Сбросить пароль</button>
        </form>
        <a class="btn" href="/register">Нет аккаунта? Зарегестрируйтесь</a>
        <a class="btn" href="/login">Авторизация</a>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            token: '',
            email: '',
            password: '',
            password_confirmation: ''
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
        async submit() {
            const payload = {
                token: this.token,
                password: this.password,
                email: this.email,
                password_confirmation: this.password_confirmation
            }

            const csrfToken = this.getCookie('XSRF-TOKEN=')

            try {
                await axios.post('http://localhost:8000/reset-password', payload, {
                        withCredentials: true,
                        headers: {
                            'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
                        }
                    })
            } catch(err) {

            }
        },
        acquireToken() {
            this.token = this.$route.query.token
        }
    },
    mounted() {
        this.acquireToken()
    }
}
</script>

<style scoped>
input {
    border-radius: .25rem;
    border: 1px solid var(--FF-L-Grey);
    background: rgb(243, 243, 243);
    padding: 0 1rem;
    height: 2.5rem;
    width: 100%;
    padding-right: 4rem;
    display:block;
    margin-bottom: 10px;
}
form {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin-right: 2rem;
    
}
.form-block {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    width: 600px;
    margin-top: 100px;
    margin-bottom: 100px;
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
.btn {
    margin-right: 10px;
}
</style>