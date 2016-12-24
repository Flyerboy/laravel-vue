export default[
    { path: '', redirect: '/index' },
    { path: '/index', component: require('./page/App.vue') },
    { path: '/list', component: require('./page/List.vue') },
    { path: '/detail/:id', component: require('./page/Detail.vue') }
];