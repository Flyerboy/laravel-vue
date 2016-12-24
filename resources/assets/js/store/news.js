import api from '../api';
export default{
    state: {
        recommend: [],  // 存储推荐列表
        lists: [],  // 存储列表
        detail: {}  // 存储详情
    },
    mutations: {
        // 注意，这里可以设置 state 属性，但是不能异步调用，异步操作写到 actions 中
        SETRECOMMEND(state, recommend) {
            state.recommend = recommend;
        },
        SETLISTS(state, lists) {
            state.lists = lists;
        },
        SETDETAIL(state, detail) {
            state.detail = detail;
        }
    },
    actions: {
        GETDETAIL({commit}, id) {
            // 获取详情，并调用 mutations 设置 detail
            api.getNewsDetail(id).then(function(res) {
                commit('SETDETAIL', res.data);
                document.body.scrollTop = 0;
            });
        },
        GETRECOMMEND({commit}) {
            // 获取推荐，并调用 mutations 设置 recommend
            api.getNewsRecommend().then(function(res) {
                commit('SETRECOMMEND', res.data);
            });
        },
        GETLISTS({commit}) {
            // 获取列表，并调用 mutations 设置 lists
            api.getNewsLists().then(function(res) {
                commit('SETLISTS', res.data);
            });
        }
    }
}