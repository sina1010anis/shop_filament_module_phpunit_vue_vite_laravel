<template>
    <div class="col-12 box-slider slider m-0 p-0 overflow-hidden">
        <div>
            <img src="/storage/img_core/index_page.jpeg" alt="Slider" class="w-100 h-100">
        </div>
        <div class="carousel-item active">
            <img src="/storage/img_core/index_page.jpeg" alt="Slider" class="w-100 h-100">
        </div>
        <div class="carousel-item active">
            <img src="/storage/img_core/index_page.jpeg" alt="Slider" class="w-100 h-100">
        </div>
    </div>

</template>

<script>
import 'slick-carousel/slick/slick.js'
import 'slick-carousel/slick/slick-theme.css'
import 'slick-carousel/slick/slick.css'
import $ from 'jquery'
export default {
    name: 'SeliderVue',
    mounted(){
        $('.slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        })
    }
}
</script>
