<template>
    <div>
        <h3>首页推荐</h3>
        <ul class="list-group">
            <li class="list-group-item"
                v-for="row in recommend">
                <router-link :to="{path:'/detail/' + row.id}">
                    {{ row.title }}
                </router-link>
                <li class="list-group-item">
                    <router-link to="/list">更多</router-link>
                </li>
            </li>
        </ul>
    </div>
</template>
<script>
import { mapState, mapActions } from 'vuex';
export default({
    // 映射 vuex 上面的属性
    computed: mapState({
        recommend: state => state.news.recommend
    }),
    created() {
        // 获取推荐列表
        this.GETRECOMMEND();
    },
    methods: {
        // 映射 vuex 对象上的方法
        ...mapActions([
            'GETRECOMMEND'
        ])
    }
});
</script>