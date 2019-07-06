<template>
    <div class="checklist-item" :class="{'is-active': item.is_complete}" @click="handleItemChecked">
        <span class="check"></span>
        <h4 class="item-title" v-text="item.item"></h4>
    </div>
</template>
<script>
    export default {
        props: ['item'],
        methods: {
            handleItemChecked() {
                this.item.is_complete = this.item.is_complete ? 0 : 1;
                this.$emit('checked', this.item.id);
            }
        }
    }
</script>