<template>
    <button class="btn btn-info" @click="test_app">test ('Front')</button>

</template>

<script>
export default {
    name: 'HelloWorld',
    methods: {
        test_app() {
            alert('test')
        }
    },
}
</script>
