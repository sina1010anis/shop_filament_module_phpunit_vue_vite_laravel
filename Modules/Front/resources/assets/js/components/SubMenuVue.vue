<template>
    <button class="btn btn-info" @click="test_app">test ('Front')</button>

</template>

<script>
export default {
    name: 'SubMenuVue',
    methods: {
        test_app() {
            alert('test')
        }
    },
}
</script>
