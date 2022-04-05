import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import HomePage from './components/pages/HomePage.vue';
import ContactPage from './components/pages/ContactPage.vue';

const router = new VueRouter({
mode: 'history', 
routes: [
    {path: '/', component: HomePage},
    {path: '/contacts', component: ContactPage},
]
});

export default router;
