
import { createApp } from 'vue/dist/vue.esm-bundler.js'

import Messenger from './components/messages/Messenger.vue'
import ChatList from './components/messages/ChatList.vue'

 createApp({
    data(){
        return{
            conversation:null,
            userId:userId,
            csrfToken: csrf_token


        }
    },
    methods:{
        moment(time) {
            return moment(time).fromNow();
        },
    }
 })
 .component('Messenger',Messenger)
 .component('ChatList',ChatList)
 .mount("#chat-app")

