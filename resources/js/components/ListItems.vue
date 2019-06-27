<template>
    <div class="list-items">
        <checklist-item v-for="item in incompleteItems" :key="item.id" :item="item" @checked="handleItemChecked"></checklist-item>
        <checklist-item v-for="item in completeItems" :key="item.id" :item="item" @checked="handleItemChecked"></checklist-item>
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
                this.checklistItems[itemIndex].is_complete = item.is_complete ? 0 : 1;

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
            },
            incompleteItems() {
                return this.checklistItems.filter(item => !item.is_complete);
            },
            completeItems() {
                return this.checklistItems.filter(item => item.is_complete);
            }
        }
    }
</script>