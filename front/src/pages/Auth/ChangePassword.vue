<template>
    <div class="form-block">
        <span>Смена пароля</span>
        <form action="" mathod="POST" @submit.prevent="submit" >
            <label for="">Текущий пароль <small for="old_password" v-if="inputErrors.old_password != ''" class="alert-red-text">{{ inputErrors.old_password }}</small></label>
            <div class="input-block">
                <input name="old_password" :type="hide_old_password ? 'text' : 'password'" required autocomplete="off" v-model="old_password" :class="{'alert-red-block': inputErrors.old_password != '', }"></input>
                <div @click="hide_old_password ? hide_old_password=false : hide_old_password=true" class="hide-password">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="base-0-2-84" ie-style="">
                        <path v-if="hide_old_password" fill-rule="evenodd" d="M8 1.488c-5.302 0-8 5.21-8 6.512 0 1.302 2.791 6.512 8 6.512S16 9.302 16 8c0-1.302-2.698-6.512-8-6.512zm0 10.233A3.731 3.731 0 014.279 8 3.731 3.731 0 018 4.279 3.731 3.731 0 0111.721 8 3.731 3.731 0 018 11.721zM8 6c1.143 0 2 .953 2 2 0 1.143-.952 2-2 2-1.143 0-2-.952-2-2 0-1.142.857-2 2-2z"></path>
                        <path v-else fill-rule="evenodd" d="M11.949 2.578L13.527 1A1.041 1.041 0 1115 2.473L2.473 15A1.041 1.041 0 111 13.527l1.409-1.409C.823 10.566 0 8.707 0 8c0-1.302 2.698-6.512 8-6.512 1.536 0 2.853.437 3.949 1.09zm2.573 2.314C15.505 6.167 16 7.442 16 8c0 1.302-2.791 6.512-8 6.512a7.452 7.452 0 01-2.626-.472l2.331-2.331a3.731 3.731 0 004.004-4.004l2.813-2.813zm-4.735-.153A3.688 3.688 0 008 4.279 3.731 3.731 0 004.279 8c0 .647.167 1.256.46 1.787l1.319-1.318A1.931 1.931 0 016 8c0-1.143.857-2 2-2 .163 0 .321.019.471.056l1.316-1.317z"></path>
                    </svg>
                </div>  
            </div>

            <label for="new_password">Новый пароль <small for="old_password" v-if="inputErrors.new_password != ''" class="alert-red-text">{{ inputErrors.new_password }}</small></label>
            <div class="input-block">
                <input name="new_password" :type="hide_new_password ? 'text' : 'password'" required autocomplete="off" v-model="new_password" :class="{'alert-red-block': inputErrors.new_password != ''}"></input>

                <div @click="hide_new_password ? hide_new_password=false : hide_new_password=true" class="hide-password">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="base-0-2-84" ie-style="">
                        <path v-if="hide_new_password" fill-rule="evenodd" d="M8 1.488c-5.302 0-8 5.21-8 6.512 0 1.302 2.791 6.512 8 6.512S16 9.302 16 8c0-1.302-2.698-6.512-8-6.512zm0 10.233A3.731 3.731 0 014.279 8 3.731 3.731 0 018 4.279 3.731 3.731 0 0111.721 8 3.731 3.731 0 018 11.721zM8 6c1.143 0 2 .953 2 2 0 1.143-.952 2-2 2-1.143 0-2-.952-2-2 0-1.142.857-2 2-2z"></path>
                        <path v-else fill-rule="evenodd" d="M11.949 2.578L13.527 1A1.041 1.041 0 1115 2.473L2.473 15A1.041 1.041 0 111 13.527l1.409-1.409C.823 10.566 0 8.707 0 8c0-1.302 2.698-6.512 8-6.512 1.536 0 2.853.437 3.949 1.09zm2.573 2.314C15.505 6.167 16 7.442 16 8c0 1.302-2.791 6.512-8 6.512a7.452 7.452 0 01-2.626-.472l2.331-2.331a3.731 3.731 0 004.004-4.004l2.813-2.813zm-4.735-.153A3.688 3.688 0 008 4.279 3.731 3.731 0 004.279 8c0 .647.167 1.256.46 1.787l1.319-1.318A1.931 1.931 0 016 8c0-1.143.857-2 2-2 .163 0 .321.019.471.056l1.316-1.317z"></path>
                    </svg>
                </div> 
            </div>

            <label for="new_password_confirmation">Повторите пароль <small for="old_password" v-if="inputErrors.new_password != ''" class="alert-red-text">{{ inputErrors.new_password }}</small></label>
            <div class="input-block">
                <input name="new_password_confirmation" :type="hide_new_password ? 'text' : 'password'" required autocomplete="off" v-model="new_password_confirmation" :class="{'alert-red-block': inputErrors.new_password != ''}"></input>

                <div @click="hide_new_password ? hide_new_password=false : hide_new_password=true" class="hide-password">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="base-0-2-84" ie-style="">
                        <path v-if="hide_new_password" fill-rule="evenodd" d="M8 1.488c-5.302 0-8 5.21-8 6.512 0 1.302 2.791 6.512 8 6.512S16 9.302 16 8c0-1.302-2.698-6.512-8-6.512zm0 10.233A3.731 3.731 0 014.279 8 3.731 3.731 0 018 4.279 3.731 3.731 0 0111.721 8 3.731 3.731 0 018 11.721zM8 6c1.143 0 2 .953 2 2 0 1.143-.952 2-2 2-1.143 0-2-.952-2-2 0-1.142.857-2 2-2z"></path>
                        <path v-else fill-rule="evenodd" d="M11.949 2.578L13.527 1A1.041 1.041 0 1115 2.473L2.473 15A1.041 1.041 0 111 13.527l1.409-1.409C.823 10.566 0 8.707 0 8c0-1.302 2.698-6.512 8-6.512 1.536 0 2.853.437 3.949 1.09zm2.573 2.314C15.505 6.167 16 7.442 16 8c0 1.302-2.791 6.512-8 6.512a7.452 7.452 0 01-2.626-.472l2.331-2.331a3.731 3.731 0 004.004-4.004l2.813-2.813zm-4.735-.153A3.688 3.688 0 008 4.279 3.731 3.731 0 004.279 8c0 .647.167 1.256.46 1.787l1.319-1.318A1.931 1.931 0 016 8c0-1.143.857-2 2-2 .163 0 .321.019.471.056l1.316-1.317z"></path>
                    </svg>
                </div> 
            </div>
            <button type="submit" class="btn" @click.prevent="changePassword">Поменять пароль</button>
            
        </form>
        <a class="btn" href="/lk">Назад</a>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            old_password: '',
            new_password: '',
            new_password_confirmation: '',

            isNewPasswordsValid: false,

            timeout: null,

            inputErrors: {
                old_password: '',
                new_password: '',
                new_password_confirmation: '',
            },

            hide_old_password: false,
            hide_new_password: false,
        }
    }, 
    methods: {
       

        async changePassword() {
            let scope = this

            Object.keys(this.inputErrors).forEach(function(val, index) {
                scope.inputErrors[val] = ''
            })



            if(!this.checkPasswords()) {
                return
            }
            const payload = {
                old_password: this.old_password,
                new_password: this.new_password,
                new_password_confirmation: this.new_password_confirmation,
            }

            try {
            const response =await axios.post(`${process.env.VUE_APP_BACKEND_URL_NON_API}change-password`, payload, {
                headers: {
                    'X-XSRF-TOKEN': decodeURIComponent(this.getCookie('XSRF-TOKEN='))
                },
                withCredentials: true
            })

            if(response.data.type === 'error') {
                switch(response.data.message) {
                    case 'invalidOldPassword':
                        this.inputErrors.old_password = 'Текущий пароль неверен'
                        break
                }
            }
            } catch(err) {
                console.log(err)
                switch(err.response.data.message) {
                    case 'The new password field must be at least 8 characters.':
                        this.inputErrors.new_password = 'Новый пароль должен состоять как минимум из 8 символов'
                        this.inputErrors.new_password_confirmation = 'Новый пароль должен состоять как минимум из 8 символов'
                }
            }
        },
        checkPasswords() {
            var flag = true

            if(this.new_password !== this.new_password_confirmation || this.new_password === '' || this.new_password_confirmation === '') {
                this.inputErrors.new_password = 'Пароли не совпадают'
                this.inputErrors.new_password_confirmation = 'Пароли не совпадают'

                flag = false
            }

            if(this.old_password == '') {
                this.inputErrors.old_password = 'Заполните это поле'
                flag = false
            }

            return flag
        }
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
.alert-red-block {
    border-color: var(--V2);
    background-color: #f3e7e7;
}
.alert-red-text {
    color: var(--V2);
}
.hide-password {
    top: 0;
    right: 12px;
    cursor: pointer;
    height: 100%;
    position: absolute;
    vertical-align: middle;

    user-select: none; /* standard syntax */
    -webkit-user-select: none; /* webkit (safari, chrome) browsers */
    -moz-user-select: none; /* mozilla browsers */
    -khtml-user-select: none; /* webkit (konqueror) browsers */
    -ms-user-select: none; /* IE10+ */
}
.hide-password::after {
    width: 0;
    height: 100%;
    content: "";
    display: inline-block;
    overflow: hidden;
    vertical-align: middle;
}
svg {
    vertical-align: middle;

}
.test {
    height: 100px;
}
.input-block {
    position: relative;
}

</style>