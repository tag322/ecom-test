<template>
    <div class="form-block">
        <span class="h4">Ваш отзыв</span>
        <form action="" mathod="POST" @submit.prevent="submit(); $emit('makeorder')" >
            <label for="review_commentary">Комментарий</label>
            <textarea name="review_commentary" v-model="review_commentary" required></textarea>
            <label for="review_pros">Преимущества</label>
            <textarea name="review_pros" v-model="review_pros" required></textarea>
            <label for="review_cons">Недостатки</label>
            <textarea name="review_cons" v-model="review_cons" required></textarea>
            <a class="btn" style="" @click="addPhoto">Приложить фото
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16" style="margin-left: 15px">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z"/>
                </svg>
            </a>
            <input @change="onChange" type="file" multiple class="hidden-input" accept=".pdf,.jpg,.jpeg,.png" ref="image" name="image" />
            <div class="preview-container">
                <div v-for="image in images" :key="image.name" class="preview-card">
                    <img class="preview-img"  :src="generateURL(image)"/>
                    <div class="image-name">
                        
                        <p>
                            {{ image.name }} |
                        </p>
                        {{ (image.size * Math.pow(2, -20)).toString().substring(0,3) + 'МБ' }}
                    </div>
                    <div>
                        <button
                        class="ml-2"
                        type="button"
                        @click="remove(files.indexOf(file))"
                        title="Убрать файл"
                        >
                            <b>×</b>
                        </button>
                    </div>
                </div>
            </div>
            <!-- <image-dragn-drop></image-dragn-drop> -->
            <star-rating @changerating="grade = $event"></star-rating>


            <hr style="border-top: 1px solid #4E5359;"></hr>

            
            <div>
                <button type="submit" class="btn" style="float: center; display: inline">Отправить</button>
                <Transition name="error-message">
                    <div v-if="error_message != ''" style="display: inline; margin-left: 5px;">{{ error_message }}</div>
                </Transition>
            </div>
                
        </form>
    </div>
</template>

<script>
import axios from 'axios'
import store from "../../store/index.js"
import StarRating from './StarRating.vue';
import ImageDragnDrop from './ImageDragnDrop.vue';

export default {
    components: {
        StarRating, ImageDragnDrop
    },
    props: {
        productid: Number
    },  
    data() {
        return {
            error_message: '',

            grade: 0,
            review_commentary: '',
            review_pros: '',
            review_cons: '',
            images: []
        }
    },
    methods: {
        async submit() {

            const payload = {
                product_id: this.productid,
                grade: this.grade,
                review_commentary: this.review_commentary,
                review_pros: this.review_pros,
                review_cons: this.review_cons,
                images: this.images
            }
            try {
                const response = await axios.post(`${process.env.VUE_APP_BACKEND_URL}/product/${this.productid}/add_review`, payload, {
                    headers: {
                        'X-XSRF-TOKEN': decodeURIComponent(this.getCookie('XSRF-TOKEN=')),
                        'Content-Type': 'multipart/form-data'
                    },
                    withCredentials: true
                })

                this.$emit('modalclose')
            } catch(err) {
                if(err.response.data.message == 'The "" file does not exist or is not readable.') {
                    this.error_message = 'Размер загружаемого файла не должен превышать 2мб'
                }

                setTimeout(() => {
                    this.error_message = null
                }, 5500)
            }
            

        },
        addPhoto() {
            document.querySelector('.hidden-input').click()
        },
        onChange() {
            console.log(1)
            this.images.push(...this.$refs.image.files);
            console.log(this.images)
        },
        generateURL(file) {
            let fileSrc = URL.createObjectURL(file);
            setTimeout(() => {
                URL.revokeObjectURL(fileSrc);
            }, 1000);
            return fileSrc;
        },
    },
    computed: {

    },
    mounted() {

    },
    watch: {

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
    display:inline;
    margin-top: 5px;

    display: inline-flex;
    align-items: center;
}
.form-block {
    width: 500px;
}
textarea {
   resize: none;
   width: 100%;
   border: 2px solid rgb(235, 235, 235);
   height: 8em;
   border-radius: 5px;
}
.hidden-input {
    display: none;
}

.preview-card {
    display: flex;
    border: 2px solid rgb(235, 235, 235);
    padding: 5px;
    margin-top: 5px;
    border-radius: 5px;
    margin-bottom: 5px;
    width: auto;
}
.preview-img {
    width: 100px;
    height: 100px;
}
.image-name {
    margin: 5px;
    height: 90px;
    line-height: 90px;
}
.image-name p{
    line-height: 18px;
    vertical-align: middle;
    display: inline-block;
}
.preview-container {
    display: flex;
    flex-direction: column;
    align-items: baseline;
}

.error-message-enter-active,
.error-message-leave-active {
  transition: opacity 0.5s ease;
}

.error-message-enter-from,
.error-message-leave-to {
  opacity: 0;
}

</style>
