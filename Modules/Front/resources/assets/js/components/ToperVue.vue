<template>
    <div class="col-12 d-flex d-md-none justify-content-evenly flex-column align-items-center p-2 my-3">

        <div v-for="(menu, index) in menu_1" @key="index" class="box-toper mt-4 shadow ">
            <a :href="menu.slug">
                <div class="back_box_toper w-100 h-75 my-pos-rel">
                    <img :src="menu.src" :alt="menu.name" class="w-78 h-75  my-obj-center">
                </div>
                <div class="back_box_toper w-100 h-25 my-pos-rel">
                    <h4 class="my-obj-center my-color-b-800 my-font-IYB">{{ menu.name }}</h4>
                </div>
            </a>
        </div>
        <div v-for="(menu2, index) in menu_2" @key="index" class="box-toper mt-4 shadow ">
            <a :href="menu2.slug">
                <div class="back_box_toper w-100 h-75 my-pos-rel">
                    <img :src="menu2.src" :alt="menu2.name" class="w-78 h-75  my-obj-center">
                </div>
                <div class="back_box_toper w-100 h-25 my-pos-rel">
                    <h4 class="my-obj-center my-color-b-800 my-font-IYB">{{ menu2.name }}</h4>
                </div>
            </a>
        </div>

    </div>
    <div class="col-12 d-none d-md-flex justify-content-evenly align-items-center p-2 my-3">

        <div v-for="(menu, index) in menu_1" @key="index" class="box-toper mt-2 shadow ">
            <a :href="menu.slug">
                <div class="back_box_toper w-100 h-75 my-pos-rel">
                    <img :src="menu.src" :alt="menu.name" class="w-78 h-75  my-obj-center">
                </div>
                <div class="back_box_toper w-100 h-25 my-pos-rel">
                    <h4 class="my-obj-center my-color-b-800 my-font-IYB">{{ menu.name }}</h4>
                </div>
            </a>
        </div>
        <div v-for="(menu2, index) in menu_2" @key="index" class="box-toper mt-2 shadow ">
            <a :href="menu2.slug">
                <div class="back_box_toper w-100 h-75 my-pos-rel">
                    <img :src="menu2.src" :alt="menu2.name" class="w-78 h-75  my-obj-center">
                </div>
                <div class="back_box_toper w-100 h-25 my-pos-rel">
                    <h4 class="my-obj-center my-color-b-800 my-font-IYB">{{ menu2.name }}</h4>
                </div>
            </a>
        </div>

    </div>
</template>

<script>
export default {
    name: 'ToperVue',
    methods: {
        test_app() {
            alert('test')
        }
    },
    props:{
        menu_1:Object,
        menu_2:Object
    }
}
</script>
