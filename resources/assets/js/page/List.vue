<template>
    <div>
        <h3>列表信息</h3>
        <ul class="list-group">
            <li class="list-group-item"
                v-for="row in lists">
                <router-link :to="{path:'/detail/' + row.id}">
                    {{ row.title }}
                </router-link>
            </li>
        </ul>
    </div>
</template>
<script>
import { mapState, mapActions } from 'vuex';
export default({
    computed: mapState({
        lists: state => state.news.lists
    }),
    created() {
        this.GETLISTS();
    },
    methods: {
        ...mapActions([
            'GETLISTS'
        ])
    }
});
</script>