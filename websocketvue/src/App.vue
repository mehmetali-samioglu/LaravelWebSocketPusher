<template>
  <ul>
    <li v-for="message in messages" :key="message">
        {{message}}
    </li>
  </ul>
</template>

<script>

export default {
    name: 'App',
    components: {
    },
        data() {
            return {
                messages:[]
            }
        },
    mounted() {
        window.Echo.channel('notification-channel')
            .listen('NotificationEvent' ,(e)=>{
                this.messages.push(e.gelen_mesaj)
            });
    },
    }
    </script>

<style>
    #app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
    }
</style>
