import Vue from 'vue';
import VueResource from 'vue-resource';
Vue.use(VueResource);
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import store from './store/'; // vuex 数据存储所需对象
import routes from './routes';    // 路由配置文件
// 实例化路由
const router = new VueRouter({
    routes
});
// 实例化 Vue
var vm = new Vue({
    store,
    router
}).$mount('#app');