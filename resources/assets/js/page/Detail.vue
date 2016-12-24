<template>
    <div>
        <h3>新闻详情</h3>
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td width="20%">ID</td>
                    <td>{{ detail.id }}</td>
                </tr>
                <tr>
                    <td width="20%">标题</td>
                    <td>{{ detail.title }}</td>
                </tr>
                <tr>
                    <td width="20%">创建时间</td>
                    <td>{{ detail.created_at }}</td>
                </tr>
                <tr>
                    <td width="20%">内容</td>
                    <td>{{ detail.content }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import { mapState, mapActions } from 'vuex';
export default({
    computed: mapState({
        detail: state => state.news.detail
    }),
    created() {
        // 获取路由参数id
        // js 中用 this.$route 获取当前路由，用 this.$router 获路由对象，全部路由信息
        // 在模板中用 $router  和 $router 直接调用
        var id = this.$route.params.id;
        this.GETDETAIL(id);
    },
    methods: {
        ...mapActions([
            'GETDETAIL'
        ])
    }
});
</script>