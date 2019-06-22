require('./bootstrap');

window.Vue = require('vue');

Vue.component('list-items', require('./components/ListItems.vue').default);
Vue.component('new-item', require('./components/NewItem.vue').default);

const app = new Vue({
    el: '#app',
    data() {
        return {
            showNewItem: false
        }
    },
    methods: {
        handleSaveNewItem(newItem) {
            axios.post('/api/' + hash + '/create', {
                item: newItem
            })
                .then((response) => {
                    console.log('axios response', response);
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        handleCloseNewItem(newItem) {
            axios.post('/api/' + hash + '/create', {
                item: newItem
            })
                .then((response) => {
                    this.showNewItem = false;
                    console.log('axios response', response);
                })
                .catch((error) => {
                    console.error(error);
                });
        }
    }
});
