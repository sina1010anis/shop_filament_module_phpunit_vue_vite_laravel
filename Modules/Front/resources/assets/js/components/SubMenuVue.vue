<template>
    <h1 class="my-color-g my-font-IYM my-4 text-center">سانسوریا</h1>
    <hr class="my-color-g mb-0">
    <div class="d-flex justify-content-center align-content-center my-3">
        <span @click="sort_producrt('up_price')" class="mx-0 rounded-2 mx-md-3 my-font-IYM my-f-12 my-pointer my-color-g sort-menu p-2">گرانترین</span>
        <span @click="sort_producrt('dawn_price')" class="mx-0 rounded-2 mx-md-3 my-font-IYM my-f-12 my-pointer my-color-g sort-menu p-2">ارزانترین</span>
        <span @click="sort_producrt('up_buy')" class="mx-0 rounded-2 mx-md-3 my-font-IYM my-f-12 my-pointer my-color-g sort-menu p-2">پرفروشترین</span>
        <span @click="sort_producrt('up_view')" class="mx-0 rounded-2 mx-md-3 my-font-IYM my-f-12 my-pointer my-color-g sort-menu p-2">پر بازدیدترین</span>
        <span @click="sort_producrt('up_new')" class="mx-0 rounded-2 mx-md-3 my-font-IYM my-f-12 my-pointer my-color-g sort-menu p-2">جدیدترین </span>
    </div>

    <hr class="my-color-g">

    <div v-if="temp_product == null" class="d-flex flex-wrap p-3 bg-white justify-content-center">

        <div class="box-product m-2 p-2" v-for="(product, index) in products" @key="index">
                <a :href="'/product/'+product.slug">
                    <div class="w-100 h-100 p-2 rounded-3 overflow-hidden border">
                        <div class="w-100" style="height: 200px;">
                            <img :src="product.index_image" class="w-100 h-100" :alt="product.name" loading="lazy">
                        </div>
                        <div>
                            <h6 class="mt-3 my-color-b-800 text-center my-font-ISL">{{ product.name }}</h6>
                            <p class="my-f-11 mt-2 my-font-ISL my-color-b-800 text-center">{{ product.price }} تومان</p>
                        </div>
                    </div>
                </a>
            </div>

    </div>

    <div v-else class="d-flex flex-wrap p-3 bg-white justify-content-center">
        <div class="box-product m-2 p-2" v-for="(product, index) in products" @key="index">
                <a :href="'/product/'+product.slug">
                    <div class="w-100 h-100 p-2 rounded-3 overflow-hidden border">
                        <div class="w-100" style="height: 200px;">
                            <img :src="product.index_image" class="w-100 h-100" :alt="product.name" loading="lazy">
                        </div>
                        <div>
                            <h6 class="mt-3 my-color-b-800 text-center my-font-ISL">{{ product.name }}</h6>
                            <p class="my-f-11 mt-2 my-font-ISL my-color-b-800 text-center">{{ product.price }} تومان</p>
                        </div>
                    </div>
                </a>
        </div>
    </div>
<hr>

</template>

<script>
export default {
    name: 'SubMenuVue',
    data:()=>({
        temp_product:null
    }),
    methods: {
        test_app() {
            console.log(this.products);
        },
        sort_producrt (mode) {

            if (this.temp_product == null) {
                this.temp_product = this.products
            }

            if (mode == 'up_price') {

                this.sort_by_up_price()

            } if (mode == 'dawn_price') {

                this.sort_by_dawn_price()

            } if (mode == 'up_view') {

                this.sort_by_up_view()

            } if (mode == 'up_buy') {

                this.sort_by_up_buy()

            } if (mode == 'up_new') {

                this.sort_by_up_new()

            }


        },
        sort_by_up_price(){

            const a = this.temp_product.sort(function(a, b) {

                return b.price - a.price;

            });
            console.log(a);
            this.temp_product = null
            this.temp_product = a


        },

        sort_by_dawn_price(){

            const a = this.temp_product.sort(function(a, b) {

                return a.price - b.price;

            });
            console.log(a);
            this.temp_product = null
            this.temp_product = a

        },

        sort_by_up_buy(){

            const a = this.temp_product.sort(function(a, b) {

                return b.buy - a.buy;

            });
            console.log(a);
            this.temp_product = null
            this.temp_product = a

        },

        sort_by_up_view(){
            const a = this.temp_product.sort(function(a, b) {

                return b.view - a.view;

            });
            console.log(a);
            this.temp_product = null
            this.temp_product = a
        },

        sort_by_up_new(){
            const a = this.temp_product.sort(function(a, b) {

                return b.id - a.id;

            });
            console.log(a);
            this.temp_product = null
            this.temp_product = a
        },
    },

    props:{
        products:Object
    }
}
</script>
