<template>
    <h1 class="my-color-g my-font-IYM my-4 text-center">سانسوریا</h1>
    <hr class="my-color-g mb-0">
    <div class="d-flex justify-content-center align-content-center my-3">
        <span class="mx-0 rounded-2 mx-md-3 my-font-IYM my-f-12 my-pointer my-color-g sort-menu p-2">گرانترین</span>
        <span class="mx-0 rounded-2 mx-md-3 my-font-IYM my-f-12 my-pointer my-color-g sort-menu p-2">ارزانترین</span>
        <span class="mx-0 rounded-2 mx-md-3 my-font-IYM my-f-12 my-pointer my-color-g sort-menu p-2">پرفروشترین</span>
        <span class="mx-0 rounded-2 mx-md-3 my-font-IYM my-f-12 my-pointer my-color-g sort-menu p-2">پر بازدیدترین</span>
        <span class="mx-0 rounded-2 mx-md-3 my-font-IYM my-f-12 my-pointer my-color-g sort-menu p-2">جدیدترین </span>
    </div>

    <hr class="my-color-g">

    <div class="d-flex flex-wrap p-3 bg-white justify-content-center">

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


</template>

<script>
export default {
    name: 'SubMenuVue',
    methods: {
        test_app() {
            console.log(this.products);
        }
    },
    props:{
        products:Object
    }
}
</script>
