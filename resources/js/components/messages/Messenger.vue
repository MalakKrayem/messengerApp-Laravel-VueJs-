<template>
    <main class="main is-visible" data-dropzone-area="">
        <div class="container h-100">

            <div class="d-flex flex-column h-100 position-relative">
                <!-- Chat: Header -->
                <ChatHeader :conversation="conversation" />

                <!-- Chat: Content -->
                <ChatContent :conversation="conversation" />

                <!-- Chat: Footer -->
                <ChatFooter :conversation="conversation" />
            </div>

        </div>
    </main>
</template>

<script>

import ChatHeader from './ChatHeader.vue'
import ChatContent from './ChatContent.vue'
import ChatFooter from './ChatFooter.vue'
export default{
    name: 'Messenger',
    components: {
        ChatHeader,
        ChatContent,
        ChatFooter
    },
    props:[
        "conversation","messages"
    ],


}
</script>