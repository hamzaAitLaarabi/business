require('./bootstrap');

import { createApp } from 'vue';
import index from './component/index.vue'

createApp({
    components: {
        index
    }
})
.mount('#app');