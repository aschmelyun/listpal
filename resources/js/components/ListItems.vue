<template>
    <div class="list-items">
        <checklist-item v-for="item in checklistItems" :key="item.id" :item="item" @checked="handleItemChecked"></checklist-item>
    </div>
</template>
<script>
    import ChecklistItem from './ChecklistItem';
    export default {
        props: ['items', 'hash'],
        data() {
            return {
                checklistItems: this.items
            }
        },
        components: {
            'checklist-item': ChecklistItem
        },
        mounted() {
            let channel = 'checklist-' + this.hash;
            console.log(channel);

            Echo.channel(channel)
                .listen('.item.checked', (e) => {
                    this.checklistItems = e.checklist.items;
                });

            Echo.channel(channel)
                .listen('.item.added', (e) => {
                    this.checklistItems = e.checklist.items;
                });
        },
        methods: {
            handleItemChecked(itemId) {
                let itemIndex = this.checklistItems.findIndex(item => item.id === itemId);
                let item = this.checklistItems[itemIndex];

                axios.post('/api/' + this.hash + '/' + item.id, {
                    is_complete: item.is_complete ? 0 : 1
                })
                    .then((response) => {
                        console.log('axios response', response);
                    })
                    .catch((error) => {
                        console.error(error);
                    });
            }
        },
        computed: {
            showNewItem() {
                return this.$parent.showNewItem;
            }
        }
    }
</script>