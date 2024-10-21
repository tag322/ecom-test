<template>
    <div class="modal active" id="modal-basket-remove">
        <div class="modal-fade js-close-modal"></div>
        <div class="modal-content">
            <div class="h4">{{ text.question }}</div>
            <div>
                {{ text.questionDesc }}
            </div>
            <div class="modal-city-btns">
                <a class="btn btn--line js-close-modal" @click="$emit('decline')"> {{ text.decline }}</a>
                <div class="btn js-basket-remove-all js-close-modal" @click="$emit('accept')"> {{ text.accept }}</div>
            </div>
        </div>
    </div>

    <!-- <div class="modal active" id="modal-basket-remove">
                <div class="modal-fade js-close-modal"></div>
                <div class="modal-content">
                    <div class="h4">Удалить выбранные товары</div>
                    <div>
                        Вы&nbsp;точно хотите удалить выбранные товары?<br>
                        Отменить данное действие будет невозможно.
                    </div>
                    <div class="modal-city-btns">
                        <a class="btn btn--line js-close-modal">Отменить</a>
                        <div class="btn js-basket-remove-all js-close-modal">Да, удалить</div>
                    </div>
                </div>
            </div> -->
</template>

<script>
export default {
    data() {
        return {

        }
    },
    methods: {
        
    },
    props: {
        text: Object
    }
}
</script>

<style>

</style>