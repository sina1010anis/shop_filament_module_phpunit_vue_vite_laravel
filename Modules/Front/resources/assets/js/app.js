import {createApp} from 'vue/dist/vue.esm-bundler';
import HelloWorld from "./components/HelloWorld.vue";
import HeaderVue from "./components/HeaderVue.vue";
import SliderVue from "./components/SliderVue.vue";
import ToperVue from "./components/ToperVue.vue";
import ProductVue from "./components/ProductVue.vue";
import BannerVue from "./components/BannerVue.vue";
import FooterVue from "./components/FooterVue.vue";
import MenuVue from "./components/MenuVue.vue";
import ShowProductVue from "./components/ShowProductVue.vue";
import SubMenuVue from "./components/SubMenuVue.vue";
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-icons/font/bootstrap-icons.css'
import $ from 'jquery'
import axios from 'axios';

const app = createApp({
    data:()=>({
        infoApp : '(Laravel 11) (Vue 3)',
        status_vote_product:true
    }),
    methods:{
        show_menu_pc(){
            $('.slid-menus').stop().slideToggle()
        },

        show_menu_mobile(){
            $('.slid-menus-mobile').stop().slideToggle()
        },
        send_vote(number, product_id){
            axios.post('/save/vote/'+product_id, {number:number}).then((res)=>{
                this.status_vote_product = false
                setTimeout(()=>{
                    $('.box-vote').fadeOut()
                }, 3000)
            }).catch(()=>{

            })
        },
        delete_product_card(mode, id){
            axios.post('/delete/product/card', {mode:mode, id:id}).then((res)=>{
                alert('then')
            })
        }

    },
    components:{
        HelloWorld:HelloWorld,
        HeaderVue:HeaderVue,
        SliderVue:SliderVue,
        ToperVue:ToperVue,
        ProductVue:ProductVue,
        BannerVue:BannerVue,
        FooterVue:FooterVue,
        ShowProductVue:ShowProductVue,
        MenuVue:MenuVue,
        SubMenuVue:SubMenuVue,
    },
    mounted(){
        setTimeout(()=>{
            $('.msg-rdirect').fadeToggle()
        },4500)
    }
})

app.mount('#app')
