require('./bootstrap');

window.Vue = require('vue');

Vue.component('list-items', require('./components/ListItems.vue').default);
Vue.component('new-item', require('./components/NewItem.vue').default);

const app = new Vue({
    el: '#app',
    data() {
        return {
            showNewItem: false,
            disableButtons: false
        }
    },
    mounted() {
        let blurred = false;
        window.onblur = function() { blurred = true; };
        window.onfocus = function() { blurred && (location.reload()); };
    },
    methods: {
        handleSaveNewItem(newItem) {
            this.disableButtons = true;
            axios.post('/api/' + hash + '/create', {
                item: newItem
            })
                .then((response) => {
                    this.disableButtons = false;
                })
                .catch((error) => {
                    console.error(error);
                    this.disableButtons = false;
                });
        },
        handleCloseNewItem(newItem) {
            this.disableButtons = true;
            axios.post('/api/' + hash + '/create', {
                item: newItem
            })
                .then((response) => {
                    this.disableButtons = false;
                    this.showNewItem = false;
                })
                .catch((error) => {
                    console.error(error);
                    this.disableButtons = false;
                });
        }
    }
});
