<template>
    <div class="list-items">
        <section class="section incomplete">
            <div class="section-header">
                <h4 class="section-title">Incomplete</h4>
                <span class="amount" v-text="incompleteItems.length + ' items'"></span>
            </div>
            <div class="section-body">
                <checklist-item v-for="item in incompleteItems" :key="item.id" :item="item" @checked="handleItemChecked"></checklist-item>
            </div>
        </section>
        <section class="section complete">
            <div class="section-header">
                <h4 class="section-title">Completed</h4>
                <span class="amount" v-text="completeItems.length + ' items'"></span>
            </div>
            <div class="section-body">
                <checklist-item v-for="item in completeItems" :key="item.id" :item="item" @checked="handleItemChecked"></checklist-item>
            </div>
        </section>
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
            incompleteItems() {
                let incompleteItems = this.checklistItems.filter(item => !item.is_complete);

                return incompleteItems ? incompleteItems : [];
            },
            completeItems() {
                let completeItems = this.checklistItems.filter(item => item.is_complete);

                return completeItems ? completeItems : [];
            },
            showNewItem() {
                return this.$parent.showNewItem;
            }
        }
    }
</script>