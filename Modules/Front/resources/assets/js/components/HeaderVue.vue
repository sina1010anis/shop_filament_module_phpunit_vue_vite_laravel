<template>
    <header>
        <div class="box-cart rounded-3 shadow border row overflow-hidden m-0 p-0" style="display: none;">
            <div class="col-12 p-2 toper-cart-1 d-flex justify-content-center align-items-center">
                <span class="my-font-IYB my-f-15 my-color-b-800">سبد خرید</span>
            </div>
            <div class="col-12 p-2 border-t border-b toper-cart-2">
                <div class="w-100 h-100 overflow-y-scroll">
                    <slot name="item_cards"></slot>
                </div>
            </div>
            <slot name="desc_card"></slot>
        </div>
        <div class="row d-none d-md-flex shadow">

            <div class="col-1 d-flex justify-content-start align-items-center ">
                <i @click="open_cart" v-if="auth" class="bi bi-cart my-f-19 my-color-b-900 my-pointer"></i>
                <span v-if="auth" class="m-1 my-f-13 text-center my-font-IYB my-color-b-100 show-number-cart">{{ total_number }}</span>
            </div>
            <div class="col-10 d-flex justify-content-start align-items-center" dir="rtl">
                <slot name="menus"></slot>
            </div>
            <div class="col-1 d-flex justify-content-center align-items-center p-1">
                <div class="back_logo ">
                    <a href="/">
                        <img src="/storage/img_core/logo.png" class="w-100 h-100" alt="logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 slid-menus mt-2 shadow">
                <div class="col-12 row  rounded-3 p-2 m-0 shadow">
                    <div class="col-10 row">
                        <div class="col-10 my-pos-rel">
                            <div class="my-obj-center" style="width: 200px;height: 200px;">
                                <img v-if="img_menu != null" :src="img_menu" class="w-100 h-100" alt="">
                                <img v-else src="/storage/img_core/logo.png" class="w-100 h-100" alt="">
                            </div>
                        </div>
                        <div class="col-2" dir="rtl">
                            <div v-for="(s_menu, index) in sub_menus" @key="index" class="mt-3">
                                <a :href="'/category/menu/'+s_menu.slug" @mouseover="get_data_s_menu(s_menu.src)" class="my-color-b-700 me-2 my-f-11 my-font-ISL d-block"><i class="bi bi-caret-left px-2"></i>{{ s_menu.name }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 border-start" dir="rtl">
                        <div v-for="(menu, index) in menus_slid" @key="index" class="mt-3">
                            <b><a @mouseover="get_data_menu(menu.id, menu.src)"  :href="'/category/'+menu.slug" class="my-color-b-700 me-2 my-f-11 my-font-ISL" :id="menu.id"><i class="bi bi-caret-left px-2"></i>{{ menu.name }}</a></b>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row d-flex d-md-none shadow">
            <div class="col-12 d-flex justify-content-center align-items-center order-1 my-3" dir="rtl">
                <slot name="menus_mobile"></slot>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center p-1 order-0">
                <div class="back_logo ">
                    <a href="/">
                        <img src="/storage/img_core/logo.png" class="w-100 h-100" alt="logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="d-md-none slid-menus-mobile col-12 mt-2 shadow">
            <div class="col-12 p-2 bg-white w-100">
                <slot name="item_menu_mobile"></slot>
            </div>
        </div>
    </header>
</template>

<script>
import $ from 'jquery'
import axios from 'axios';

export default {
    name: 'HeaderVue',
    data:()=>({
        sub_menus:null,
        img_menu:null
    }),
    props:{
        menus_slid:Object
    },
    methods:{
        get_data_menu(id, src){
            this.img_menu = src
            axios.post('/get/data/menu', {id:id}).then((res)=>{
                console.log(res.data);
                this.sub_menus = res.data
            })
        },
        over_mous(){
            this.sub_menus = null
            this.img_menu = null
        },
        get_data_s_menu(src){
            this.img_menu = src
        },
        open_cart(){
            $('.box-cart').stop().slideToggle()
        }
    },
    props:{
        auth: Boolean,
        total_number: String
    }
}
</script>
