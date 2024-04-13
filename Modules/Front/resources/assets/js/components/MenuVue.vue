<template>
    <div class="row">
        <div class="d-flex flex-wrap justify-content-evenly align-items-center">
            <div v-for="(item, index) in item_menu" @key="index" class="box-menu my-3 shadow rounded-2 border p-1">
                <a class="w-100 h-100 d-flex align-items-center flex-column" :href="'/category/menu/'+item.slug">
                        <img :src="item.src" class="w-75 " :alt="item.name">
                    <span class="my-font-IYB my-f-13 my-color-b-800 my-3">{{ item.name }}</span>
                </a>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: 'MenuVue',
    methods: {
        test_app() {
            alert('test')
        }
    },
    props:{
        item_menu:Object
    }
}
</script>
