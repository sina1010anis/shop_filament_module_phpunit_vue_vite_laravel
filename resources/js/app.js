import './bootstrap';



import {createApp} from 'vue/dist/vue.esm-bundler';
import HelloWorld from "./components/HelloWorld.vue";
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-icons/font/bootstrap-icons.css'
import $ from 'jquery'
import axios from 'axios';



const app = createApp({
    data:()=>({
        infoApp : '(Laravel 10.43) (Vue 3)',
        Danger : 0,
        Info : 0,
        Warning : 0,
        Success : 0,
    }),
    components:{
        HelloWorld:HelloWorld
    },
    methods: {
        btn_send(btn) {

            axios.post('/reverb', {btn:btn})

        }
    },
    created(){
        window.Echo.channel('message').listen('Message', (e)=>{
            document.getElementById(e.mode_btn).innerText++
        })
    }
})

app.mount('#app')
