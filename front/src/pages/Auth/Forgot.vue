<template>
    <div class="form-block">
        <span>Восстановление пароля</span>
        <form action="" mathod="POST" @submit.prevent="submit">
            <label for="email">Введите email</label>
            <input name="email" type="email" required autocomplete="off" v-model="email"></input>
            <button type="submit" class="btn">Отправить запрос на воостановление</button>
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
            email: ''
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
            try {
                await axios.get('http://localhost:8000/sanctum/csrf-cookie', {withXSRFToken: true})           
            } catch(err) {
                
            }
            
                const csrfToken = this.getCookie('XSRF-TOKEN=')

                const payload = {
                    email: this.email
                }

            try {
                await axios.post('http://localhost:8000/forgot-password', payload, {
                    headers: {
                        'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
                    }
                })
            } catch(err) {

            }
                
        }
    },
    created() {
        axios.defaults.withCredentials = true
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