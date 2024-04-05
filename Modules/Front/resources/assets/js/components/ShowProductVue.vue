<template>
    <div class="col-12 my-3 border border-end-0 border-start-0 border-top-0 bg-white">
        <nav class="my-font-ISL my-f-15 my-color-b-800" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">گیاه طبیعی</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ product.name }}</li>
            </ol>
        </nav>
    </div>
    <div style="display: none;" class="alert-new-card">
        <div  class="alert  alert-success d-flex justify-content-between align-items-center" dir="rtl" role="alert">
            <strong class="my-font-IYL my-f-14"> محصول به سبد خرید شما اضافه شد</strong>
            <b><i @click="cls_alert" class="bi bi-x-lg my-f-15 my-pointer"></i></b>
        </div>
    </div>
    <div class="row col-12 m-0 p-0">
        <div class="col-12 col-md-6 bg-white border border-start-0 border-bottom-0 border-top-0 p-3">
            <div class="d-flex justify-content-center align-items-center my-3">
                <img src="/storage/products/1.jpg" style="max-width: 500px;width: 100%;" alt="">
            </div>
            <div class="d-flex overflow-x-scroll">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
                <img src="/storage/products/1.jpg" class="m-2 my-pointer" style="max-width: 100px;width: 100%;"  alt="">
            </div>
        </div>
        <div class="col-12 col-md-6 bg-white p-4" dir="rtl">
            <h6 class="my-font-IYB my-color-b-800">نام محصول : </h6>
            <h4 class="my-font-IYL my-color-b-900 mt-3 me-2">{{ product.name }}</h4>
            <div class="mt-4 d-flex">
                <span style="position: relative; bottom: -1px;" class="my-font-IYL my-color-b-800 my-f-13">محبوبیت</span>
                <div class="mx-2">
                    <i class="bi bi-star mx-1" style="color: #cbc600;"></i>
                    <i class="bi bi-star mx-1" style="color: #cbc600;"></i>
                    <i class="bi bi-star mx-1" style="color: #cbc600;"></i>
                    <i class="bi bi-star mx-1" style="color: #cbc600;"></i>
                    <i class="bi bi-star mx-1" style="color: #cbc600;"></i>
                </div>
            </div>
            <p class="my-font-IYB my-4" style="font-size: 40px;color: #00ab00;"><b>{{ product.price }} تومان</b></p>
            <div class="my-font-IYL my-color-b-800 my-f-13">نوع نگهداری : <span style="color: #00ab00;"><b>{{ product.keeping }}</b></span></div>
            <div class="my-font-IYL my-color-b-800 my-f-13 mt-2 pt-0">محل رویش: <span style="color: #00ab00;"><b>{{ product.location }}</b></span></div>
            <div class="my-font-IYL my-color-b-800 my-f-13 mt-2 pt-0"> نور : <span style="color: #00ab00;"><b>{{ product.light }}</b></span></div>
            <hr class="my-5">
            <p class="my-font-IYL my-f-14 my-color-b-800" style="line-height: 25px;">{{ product.smal_body }}</p>
            <div v-if="auth">
                <div>
                    <span class="my-font-IYM my-f-13">انتخاب سایز گلدان </span>
                    <div class="d-flex">
                        <div v-for="(price, index) in product_price" @key="index">
                            <div @click="select_size(price.id, price.model)" class="border rounded my-f-13 my-color-b-800 my-font-IYB p-3 my-pointer m-2">
                                {{ price.model }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div v-if="auth">
                <div v-if="id_size_product == null" class="my-4 d-flex justify-content-between">
                    <span class="my-font-IYB my-f-14 text-danger">! لطفا یک سایز گلدان انتخاب کنید</span>
                    <span class="shadow my-btn-bl py-2 rounded px-4 my-font-IYM my-not my-select-none" disabled>اضافه به سبد خرید</span>
                </div>

                <div v-else-if="id_size_product != null" class="my-4 d-flex justify-content-between">
                    <span class="my-font-IYB my-f-14 text-success">سایز انتخاب شده : {{ name_product_size }}</span>
                    <span @click="send_card" class="my-pointer my-select-none shadow my-btn-g py-2 rounded px-4 my-font-IYM">اضافه به سبد خرید</span>
                </div>
            </div>
            <div v-else>
                <div class="alert alert-danger text-center my-font-IYM my-f-13 " role="alert">
                    برای خرید <a href="/login">وارد</a> وب سایت شوید
                </div>
            </div>

            <div class="d-flex justify-content-around flex-md-row flex-column align-items-center">
                <div class="my-2 my-md-3">
                    <span class="my-f-12 my-font-IYB mx-2  my-color-b-500" style="position: relative; bottom: 9px;">ارسال رایگان در شهر</span>
                    <i class="bi bi-truck " style="font-size: 30px;color: #00ab00;"></i>
                </div>
                <div class="my-2 my-md-3">
                    <span class="my-f-12 my-font-IYB mx-2  my-color-b-500" style="position: relative; bottom: 9px;">مرجوع کالا 72 ساعت</span>
                    <i class="bi bi-clock " style="font-size: 30px;color: #00ab00;"></i>
                </div>
                <div class="my-2 my-md-3">
                    <span class="my-f-12 my-font-IYB mx-2  my-color-b-500" style="position: relative; bottom: 9px;">پرداخت ایمن</span>
                    <i class="bi bi-credit-card " style="font-size: 30px;color: #00ab00;"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row col-12 m-0 p-0">
        <div class="col-12 p-2 d-flex justify-content-evenly align-items-center">
            <span class="mx-2 my-pointer my-f-15 my-font-IYM my-color-b-900 py-4 px-2 item-rev" @click="item_menu_rev">بازبینی</span>
            <span class="mx-2 my-pointer my-f-15 my-font-IYM my-color-b-900 py-4 px-2 item-desc select-item-desc" @click="item_menu_desc">توضیحات</span>
            <span class="mx-2 my-pointer my-f-15 my-font-IYM my-color-b-900 py-4 px-2 item-comment" @click="item_menu_comment">کامنت ها</span>
        </div>

        <div class="col-12 desc-big" dir="rtl">
            <span class="my-f-13 p-2 my-color-b-600 my-font-IYB" style="line-height: 35px;">{{ product.big_body }}</span>
        </div>

        <div class="col-12 rev-big" style="display: none;" dir="rtl">
            <span class="my-f-13 p-2 my-color-b-600 my-font-IYB" style="line-height: 35px;"><slot name="review"></slot></span>

        </div>

        <div class="col-12 comments" style="display: none;" dir="rtl">
            <div>
                    <div class="container my-5 py-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="card text-dark">
                                    <div class="card-body p-4">
                                        <h4 class="mb-2 my-font-IYB my-f-16 ">نظر های این محصول</h4>
                                        <p class="fw-light mb-4 pb-2 my-font-IYL me-2 my-f-13">بر اساس جدیدترین نظرات</p>

                                        <div class="d-flex flex-start my-3 border p-3 rounded-3">
                                            <img class="rounded-circle shadow-1-strong me-3"src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"                                height="60" />
                                            <div>
                                                <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                                                <div class="d-flex align-items-center mb-3">
                                                    <p class="mb-0">
                                                        March 07, 2021<span class="badge bg-primary">Pending</span>
                                                    </p>
                                                    <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                                                </div>
                                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text eversince the 1500s, when an unknown printer took a galley of type andscrambled it.                                </p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-start my-3 border p-3 rounded-3">
                                            <img class="rounded-circle shadow-1-strong me-3"src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"                                height="60" />
                                            <div>
                                                <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                                                <div class="d-flex align-items-center mb-3">
                                                    <p class="mb-0">
                                                        March 07, 2021<span class="badge bg-primary">Pending</span>
                                                    </p>
                                                    <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                                                </div>
                                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text eversince the 1500s, when an unknown printer took a galley of type andscrambled it.                                </p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-start my-3 border p-3 rounded-3">
                                            <img class="rounded-circle shadow-1-strong me-3"src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"                                height="60" />
                                            <div>
                                                <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                                                <div class="d-flex align-items-center mb-3">
                                                    <p class="mb-0">
                                                        March 07, 2021<span class="badge bg-primary">Pending</span>
                                                    </p>
                                                    <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                                                </div>
                                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text eversince the 1500s, when an unknown printer took a galley of type andscrambled it.                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
</template>

<script>
import axios from 'axios'
import $ from 'jquery'
export default {
    name: 'ShowProductVue',
    data:()=>({
        id_size_product:null,
        name_product_size:null,
        status_card:false,
    }),
    methods: {
        send_card(){
            axios.post('/send/card/product', {product_id:this.id_size_product}).then((res)=>{
                $('.alert-new-card').stop().fadeIn()
            }).catch((res)=>{
                console.log(res.data);
            })
        },
        cls_alert () {

            $('.alert-new-card').stop().fadeOut()

        },
        select_size(id, model){
            this.id_size_product = id
            this.name_product_size = model
        },
        test_app() {
            alert('test')
        },
        item_menu_rev(){
            $(".item-desc").removeClass("select-item-desc")
            $(".item-rev").addClass("select-item-desc")
            $(".item-comment").removeClass("select-item-desc")

            $('.desc-big').stop().slideUp()
            $('.rev-big').stop().slideDown()
            $('.comments').stop().slideUp()
        },
        item_menu_comment(){
            $(".item-desc").removeClass("select-item-desc")
            $(".item-rev").removeClass("select-item-desc")
            $(".item-comment").addClass("select-item-desc")

            $('.desc-big').stop().slideUp()
            $('.rev-big').stop().slideUp()
            $('.comments').stop().slideDown()
        },
        item_menu_desc(){
            $(".item-desc").addClass("select-item-desc")
            $(".item-rev").removeClass("select-item-desc")
            $(".item-comment").removeClass("select-item-desc")

            $('.desc-big').stop().slideDown()
            $('.rev-big').stop().slideUp()
            $('.comments').stop().slideUp()
        }
    },
    props:{
        product:Object,
        product_price:Object,
        auth:Boolean,
    }
}
</script>
