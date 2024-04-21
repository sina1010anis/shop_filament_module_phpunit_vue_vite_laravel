<template>
    <div  class="col-12 w-100 h-auto rounded-3 overflow-hidden my-2">
        <a v-if="image.mode == 1" :href="image.link">
            <img :src="'/storage'+image.src" class="w-100 h-100" :alt="image.name">
        </a>
        <img v-else :src="'/storage'+image.src" class="w-100 h-100" :alt="image.name">
    </div>
</template>

<script>
export default {
    name: 'BannerVue',
    methods: {
        test_app() {
            alert('test')
        }
    },
    props:{
        image:String
    }
}
</script>
