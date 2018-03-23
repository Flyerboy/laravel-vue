<template>
    <div class="panel panel-default">
        <div class="panel-heading">新闻推荐
            <router-link to="/list" class="pull-right">更多</router-link>
        </div>
        <ul class="list-group">
            <li class="list-group-item"
                v-for="row in recommend">
                <router-link :to="{path:'/detail/' + row.id}">
                    {{ row.title }}
                </router-link>
                <span class="pull-right">{{ row.created }}</span>
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
        this.getNewsRecommend();
    },
    methods: {
        // 映射 vuex 对象上的方法
        ...mapActions([
            'getNewsRecommend'
        ])
    }
});
</script>