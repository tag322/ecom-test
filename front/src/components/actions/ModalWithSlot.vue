<template>
    <div class="modal active" id="modal-basket-remove">
        <div class="modal-fade js-close-modal" @click="$emit('modalclose')"></div>
        <div class="modal-content">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {

        }
    },
    mounted() {
        document.body.style.overflow = 'hidden'
    },
    unmounted() {
        document.body.style.removeProperty('overflow');
    }
}

</script>

<style scoped>
#modal-basket-remove .modal-content {
    width: auto;
    padding: 2.5rem 2rem 2rem;
}
</style>