<template>
    <div class="checklist-item" @click="handleItemChecked">
        <span class="check" :class="{'is-active': item.is_complete}"></span>
        <h4 class="item-title" v-text="item.item"></h4>
    </div>
</template>
<script>
    export default {
        props: ['item'],
        methods: {
            handleItemChecked() {
                this.$emit('checked', this.item.id);
            }
        }
    }
</script>