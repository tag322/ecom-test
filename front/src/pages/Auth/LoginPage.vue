<template>
    <div class="form-block">
        <span>Авторизация</span>
        <form action="" mathod="POST" @submit.prevent="submit">
            <label for="email">Введите email</label>
            <input name="email" type="email" required autocomplete="off" v-model="email"></input>
            <label for="password">Введите пароль</label>
            <input name="password" type="text" required autocomplete="off" v-model="password"></input>
            <button type="submit" class="btn">Войти</button>
        </form>
        <a class="btn" href="/register">Нет аккаунта? Зарегестрируйтесь</a>
        <a class="btn" href="/forgot-password">Восстановить пароль</a>
        <div v-if="messages.length > 0" v-for="message in messages" class="alert alert-danger">{{message.message}}</div>

        <div class="auth-services">
			    <div class="auth-services__title">Войти с помощью</div>


                <div class="bx-authform-social">
                    <ul>
                        <li @click="google_oauth">
                            
                            <a id="bx_socserv_icon_GoogleOAuth" class="google bx-authform-social-icon" href="javascript:void(0)" title="Google">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                </svg>
                            </a>
                        </li>
                        <!-- <li>
                            <a id="bx_socserv_icon_MailRu2" class="mailru2 bx-authform-social-icon" href="javascript:void(0)"  title="Mail.Ru"></a>
                            </li>
                        <li>
                            <a id="bx_socserv_icon_YandexOAuth" class="yandex bx-authform-social-icon" href="javascript:void(0)" title="Яндекс"></a>
                            </li>
                        <li>
                            <a id="bx_socserv_icon_VKontakte" class="vkontakte bx-authform-social-icon" href="javascript:void(0)" title="ВКонтакте"></a>
                            </li> -->
                    </ul>
                </div>

			</div>

    </div>
            
    
    <!-- <a @click="google_oauth">google oauth</a><br>
    <a @click="googleCheckOauth">google check oauth</a> -->


    <confirmation-modal v-if="modalShow"
        :text="{
            question: 'Добавление товаров в корзину',
            questionDesc: 'У вас есть товары в корзине. Хотите, чтобы эти товары добавились в корзину вашего аккаунта?',
            accept: 'Да',
            decline: 'Нет'
        }"
        @accept="modalShow=false; pushToCart();"
        @decline="modalShow=false; $router.push('lk');"
    ></confirmation-modal>

</template>

<script>
import axios from "axios";
import store from "../../store/index.js"
import ConfirmationModal from "../../components/actions/ConfirmationModal"

export default {
    components: {
        ConfirmationModal
    },
    data() {
        return {
            messages: [],

            modalShow: false,

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
                    const response = await axios.post('http://localhost:8000/login', payload, {
                        headers: {
                            'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
                        },
                        withCredentials: true
                    })
                } catch(err) {
                    if(err) {
                        success = false
                        console.log(err)
                        store.commit('setMessage', 'Данные введены неверно')
                    }

                    this.messages.push({
                        message: store.getters.getMessage,
                        type: 'red'
                    })
                } 

                if(success) {
                    if(localStorage.getItem('basket')) {
                        
                        this.modalShow = true
                        
                    } else {
                        this.$router.push('/lk')
                    }
                }
                        

                
                // .then((res) => {})
                // .catch((err) => {if(err) {
                //     console.log('err')
                // }})
                // .then(() => {                    
                //     console.log('success')
                // })
                
            
            } catch(err) {
                console.log(err)
                
            } finally {
                
            }
            
        },

        pushToCart() {
            
            console.log('pushtocart')

            const payload = {
                basket: JSON.parse(localStorage.getItem('basket'))
            }

            const csrfToken = this.getCookie('XSRF-TOKEN=')

            try {
                axios.post('http://localhost:8000/api/push-to-cart', payload, {
                    headers: {
                        'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
                    },
                    withCredentials: true
                })
            } catch(err) {
                console.log(err)
            } finally { 
                this.$router.push('lk')
            }
        
        },

        async google_oauth() {
            try {
                const response = await axios.get(`${process.env.VUE_APP_BACKEND_URL_NON_API}auth/google`)

                window.location.replace(response.data)
            } catch(err) {
                console.log(err)
            }
        },

        async googleCheckOauth() {
            const token = this.getCookie('token=')
            
            try {
                // const response = await axios.get(`https://www.googleapis.com/auth/userinfo.profile?access_token=${token}`, {
                //     headers: {
                //         'Access-Control-Allow-Methods': 'http://localhost:3000',
                //         'Access-Control-Allow-Methods': 'GET, POST, PATCH, PUT, DELETE, OPTIONS',
                //         'Access-Control-Allow-Headers': 'Origin, Content-Type, X-Auth-Token'
                //     },
                //     withCredentials: true
                // })

                const csrfToken = this.getCookie('XSRF-TOKEN=')

                const response = await axios.post(`${process.env.VUE_APP_BACKEND_URL_NON_API}auth/google/checkuser`, {token: token}, {
                    withCredentials: true,
                    headers: {
                        'X-XSRF-TOKEN': decodeURIComponent(csrfToken)
                    }
                })

                console.log(response)
            } catch(err) {
                console.log(err)
            }
        }
        
    },
    created() {
        axios.defaults.withCredentials = true
    },
    computed: {
        isLocalStorageBasket() {
            if(localStorage.getItem('storage')) {
                return true
            } else {
                return false
            }
        }
    }
}
</script>

<style scoped>

.auth-services__title {
    text-align: left;
    font-size: var(--fs-presmall);
    color: var(--FF-D-Grey);
    margin-bottom: 1rem;
    margin-top: 1.5rem;
}

.auth-services {
    margin-top: 1.5rem;
}

div.bx-authform-social ul li a.bx-authform-social-icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: .25rem;
    background: var(--FF-SL-Grey);
    height: 2.5rem;
    width: 100%;
    -webkit-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
}

div.bx-authform-social ul {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: (minmax(0, 1fr))[4];
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 1rem;
}

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
    /* margin-right: 2rem; */
    
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
.alert-danger {  
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}
.alert {
    width: 600px;

    margin-top: 1rem;
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
}
</style>