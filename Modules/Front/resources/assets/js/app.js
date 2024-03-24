import {createApp} from 'vue/dist/vue.esm-bundler';
import HelloWorld from "./components/HelloWorld.vue";
import HeaderVue from "./components/HeaderVue.vue";
import SliderVue from "./components/SliderVue.vue";
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-icons/font/bootstrap-icons.css'
import $ from 'jquery'
import axios from 'axios';

const app = createApp({
    data:()=>({
        infoApp : '(Laravel 11) (Vue 3)'
    }),
    methods:{
        show_menu_pc(){
            $('.slid-menus').stop().slideToggle()
        }
    },
    components:{
        HelloWorld:HelloWorld,
        HeaderVue:HeaderVue,
        SliderVue:SliderVue,
    }
})

app.mount('#app')
