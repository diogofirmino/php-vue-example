import axios from 'axios';

export default {
state: {
    items: [],
    featuredItem: null,
    itemsSort: null,
    loading: false,
},
getters: {
    items: state => state.items,
    featuredItem: state => state.items.find(item => item.uuid === state.featuredItem),
    activeSorting: state => state.itemsSort,
    isLoading: state => state.loading,
},
mutations: {
    LOAD_ITEMS(state, { items, sort }) {
        state.items = items;
        state.itemsSort = sort;
    },
    OPEN_MODAL(state, itemUuid) {
        state.featuredItem = itemUuid;
    },
    CLOSE_MODAL(state) {
        state.featuredItem = null;
    },
    SET_LOADING(state) {
        state.loading = true;
    },
    UNSET_LOADING(state) {
        state.loading = false;
    },
},
actions: {
    async loadItems({ commit }, sortByPrice = 'ASC') {
        commit('SET_LOADING');

        try {
            const { data } = await axios.get(`/api/cart?sort=${sortByPrice}`);

            commit('LOAD_ITEMS', { items: data.cart, sort: data.meta.sort });
        } catch (e) {
            console.log(e);
        }

        commit('UNSET_LOADING');
    },
    openDetailsModal({ commit }, itemUuid) {
        commit('OPEN_MODAL', itemUuid);
    },
    closeDetailsModal({ commit }) {
        commit('CLOSE_MODAL');
    },
    sortByPrice({ commit }, direction) {
        commit('ORDER_ITEMS_BY_PRICE', direction);
    },
},
}
