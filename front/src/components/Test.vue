<template>
    <div>TEST</div>
</template>

<script>
export default {
    props: {
        prop: Object
    },
    methods: {
        aboba() {
            this.prop.arr = [1,2,3]
        }
    }
}
</script>

<style>

</style>