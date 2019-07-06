<template>
    <div class="checklist-item" :class="{'is-active': locallyChecked}" @click="handleItemChecked">
        <span class="check"></span>
        <h4 class="item-title" v-text="item.item"></h4>
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
            }
        }
    }
</script>