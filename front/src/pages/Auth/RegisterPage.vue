<template>
    <div class="form-block">
        <span>Регистрация</span>
        <form action="" mathod="POST" @submit.prevent="submit" >
            <label for="email">Введите имя</label>
            <input name="name" type="text" required autocomplete="off" v-model="name"></input>
            <label for="email">Введите email</label>
            <input name="email" type="email" required autocomplete="off" v-model="email"></input>
            <label for="password">Введите пароль</label>
            <input name="password" type="text" required autocomplete="off" v-model="password"></input>
            <label for="password">Подвердите пароль</label>
            <input name="password_confirmation" type="text" required autocomplete="off" v-model="password_confirmation"></input>
            <button type="submit" class="btn">Зарегестрироваться</button>
        </form>
        <a class="btn" href="/login">Авторизация</a>
    </div>
</template>

<script>
import axios from "axios";


export default {
    data() {
        return {
            name: '',
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
            // try {
            //     axios.get('http://localhost:8000/sanctum/csrf-cookie', {withXSRFToken: true})
            //         const csrfToken = this.getCookie('XSRF-TOKEN=')

            //         const payload = {
            //             name: this.name,
            //             email: this.email,
            //             password: this.password,
            //             password_confirmation: this.password_confirmation
            //         }

            //     await axios.post('http://localhost:8000/register', payload, {
            //             headers: {
            //                 'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
            //             },
            //             withCredentials: true
            //         }).then((res) => {})
            //             .catch((err) => {})
            //             .then(() => {this.$router.push('/lk')})  // this dogshit double then used to call function after request completed
               
            // } catch {
            //     console.log(err)
            // } finally {
            //     this.$router.push('/lk')
            // }
            

            try {
                var success = true
                await axios.get('http://localhost:8000/sanctum/csrf-cookie', {withXSRFToken: true})
                const csrfToken = this.getCookie('XSRF-TOKEN=')

                const payload = {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation
                }

                try {
                    const attempt = await axios.post('http://localhost:8000/register', payload, {
                        headers: {
                            'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
                        },
                        withCredentials: true
                    })
                } catch(err) {
                    if(err) {
                        success = false
                        console.log(err)
                    }
                } 

                if(success) {
                    this.$router.push('/lk')
                }
                        

                
                // .then((res) => {})
                // .catch((err) => {if(err) {
                //     console.log('err')
                // }})
                // .then(() => {                    
                //     console.log('success')
                // })
                
            
            } catch(err) {
                 
            } finally {
                
            }
        }

    },
    created() {
        axios.defaults.withCredentials = true
    },
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
</style>