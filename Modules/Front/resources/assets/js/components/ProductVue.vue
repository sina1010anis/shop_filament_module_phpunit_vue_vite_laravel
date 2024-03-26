<template>
    <div class="col-12 row m-0 p-2 my-3 overflow-hidden">
        <div class="col-2 d-none d-md-flex justify-content-center align-items-center p-2 order-1">
            <div>
                <img :src="'/storage/index/'+image" alt="image box prioduct" width="250px">
            </div>
        </div>
        <div class="col-12 my-f-15 my-font-ISL my-color-b-700 text-center my-2">{{ title }}</div>
        <div class="col-12 col-md-10 p-2 order-0 multiple-items m-0 p-0 overflow-hidden">
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
    </div>
</template>

<script>
import 'slick-carousel/slick/slick.js'
import 'slick-carousel/slick/slick-theme.css'
import 'slick-carousel/slick/slick.css'
import $ from 'jquery'
export default {
    name: 'ProductVue',
    methods: {
        test_app() {
            alert('test')
        }
    },mounted(){
        $('.multiple-items').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 6,
  responsive: [
    {
      breakpoint: 1320,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },

    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

    },
    props:{
        title:String,
        products:Object,
        image:String
    }
}
</script>
