<template>
    <div class="checklist-item" :class="{'is-active': locallyChecked}" @click="handleItemChecked">
        <span class="check"></span>
        <div class="flex-1 d-flex">
            <h4 class="item-title" v-text="item.item"></h4>
        </div>
        <a href="#" class="trash" @click.prevent.stop="handleItemDeleted"></a>
    </div>
</template>
<script>
    export default {
        props: ['item'],
        data() {
            return {
                locallyChecked: !!this.item.is_complete
            }
        },
        methods: {
            handleItemChecked() {
                this.locallyChecked = !this.locallyChecked;
                this.$emit('checked', this.item.id);
            },
            handleItemDeleted() {
                this.$emit('deleted', this.item.id);
            }
        },
        watch: {
            item() {
                this.locallyChecked = !!this.item.is_complete;
            }
        }
    }
</script>