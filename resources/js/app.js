import './bootstrap';



import {createApp} from 'vue/dist/vue.esm-bundler';
import HelloWorld from "./components/HelloWorld.vue";
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-icons/font/bootstrap-icons.css'
import $ from 'jquery'
import axios from 'axios';



const app = createApp({
    data:()=>({
        infoApp : '(Laravel 10.43) (Vue 3)'
    }),
    components:{
        HelloWorld:HelloWorld
    },
    methods: {
        btn_send(btn) {

            axios.post('/reverb', {btn:btn})

        }
    },
    
})

app.mount('#app')
