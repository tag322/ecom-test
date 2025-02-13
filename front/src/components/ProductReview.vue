<template>
    <div class="catalog-review-list">
        <div class="review-itm">
            <div class="review-itm-user">
                <div class="review-itm-user__ava">
                    <img alt="" class="fill-img" loading="lazy" src="../img/tmp/ava.jpg">
                </div>
                <div class="review-itm-user__name">{{ review.user.name }}</div>
            </div>

            <div class="user-rating">
                <div class="star-container-review">
                    <span class="star1" v-for="item in 5" :key="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                        </svg>
                     </span>
                <div class="star-container-colored" :style="{width: tempRatingWidthReview}">
                    <span class="star-review-colored" v-for="item in 5" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </span>
                </div>
            </div>

                <div class="user-rating__text">{{review.grade > 2.5 ? 'Рекомендует' : 'Не рекомендует'}}</div>
            </div>

            <div class="review-itm__info">
                <div class="review-itm__info__itm">12 мая 2023</div>
                <div class="review-itm__info__itm">Москва</div>
            </div>

            <div class="review-itm__text">

                <div class="review-itm__text__block">
                    <div class="review-itm__text__block__title">Комментарий:</div>
                    <p>{{ review.review_commentary }}</p>
                </div>
                <div class="review-itm__text__block">
                    <div class="review-itm__text__block__title">Достоинства:</div>
                    <p>{{ review.review_pros }}</p>
                </div>
                <div class="review-itm__text__block">
                    <div class="review-itm__text__block__title">Недостатки:</div>
                    <p>{{ review.review_cons }}</p>
                </div>

            </div>

            <div class="review-itm__photo" v-if="review.images_urls">

                <a class="review-itm__photo__itm" data-fancybox="" href="" v-for="image in review.images_urls">
                    <img alt="" class="fill-img" :src="`/${image}`">
                </a>
        

            </div>

            <!-- onclick="this.classList.toggle('active')" -->
            <div class="rate-action">
                <button aria-label="like" :class="{'rate-action-btn': true, 'active': user_reacted}" @click.capture="rateReview">
                    <span>{{review.ratings.likes}}</span>
                    <img alt="" class="svg" src="../img/ico/like.svg">
                </button>
                <button aria-label="dislike" :class="{'rate-action-btn rate-action-btn--dislike': true, 'active': user_reacted === false}" @click.capture="rateReview">
                    <span>{{review.ratings.dislikes}}</span>
                    <img alt="" class="svg" src="../img/ico/like.svg">
                </button>
                <Transition name="rating-message">
                    <div style="display: flex; align-items: center;" v-if="rating_message">
                        {{rating_message}}
                    </div>
                </Transition>    
            </div>
            

        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    props: {
        review: Object
    },
    data() {
        return {
            tempRatingWidthReview: '0%',
            rating_message: null,

            user_reacted: null,
        }
    },
    methods: {
        calcRating() {
            this.tempRatingWidthReview = this.review.grade * 20 + '%'
            
            if(this.review.user_rated != undefined) {
                this.user_reacted = this.review.user_rated
            }
        },
        async rateReview(event) {

            const eventcurr = event.currentTarget

            try {
                const payload = {
                    'product_id': this.review.product_id,
                    'is_like': event.currentTarget.getAttribute('aria-label') == 'like',
                    'review_id': this.review.id,
                    'keyword': event.currentTarget.classList.contains('active') ? 'delete' : null
                }

                if(this.user_reacted != null) {
                    if(payload.is_like != this.user_reacted) {
                        payload.is_like ? (this.review.ratings.likes++, this.review.ratings.dislikes--) : (this.review.ratings.likes--, this.review.ratings.dislikes++)
                        this.user_reacted = payload.is_like
                    } else {
                        payload.is_like ? this.review.ratings.likes-- : this.review.ratings.dislikes--
                        this.user_reacted = null
                    }
                } else {
                    payload.is_like ? this.review.ratings.likes++ : this.review.ratings.dislikes++
                    this.user_reacted = payload.is_like
                }

                clearTimeout(this.timeout)

                

                const response = await axios.post(`${process.env.VUE_APP_BACKEND_URL}/product/rate_review/${this.review.id}`, payload, {
                    headers: {
                        'X-XSRF-TOKEN': decodeURIComponent(this.getCookie('XSRF-TOKEN='))
                    },
                    withCredentials: true
                })

                
            } catch(err) {
                console.log(err)

                if(err.response.status === 403) {
                    eventcurr.classList.toggle('active')

                    this.rating_message = 'Для оценки нужно авторизоваться'

                    setTimeout(() => {
                        this.rating_message = null
                    }, 1500)

                    if(eventcurr.getAttribute('aria-label') == 'like') {
                        this.review.ratings.likes--
                    } else {
                        this.review.ratings.dislikes--
                    }
                }
            }

        }
    },
    mounted() {
        this.calcRating()
    }
}
</script>

<style>
.rating-message-enter-active,
.rating-message-leave-active {
  transition: opacity 0.5s ease;
}

.rating-message-enter-from,
.rating-message-leave-to {
  opacity: 0;
}

.star-container-review {
    position: relative;
    
}
</style>