<template>
    <div class="new-item">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 offset-md-3">
                    <div class="row has-margin">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="item" name="item" ref="itemInput" placeholder="My new task" v-model="newItem">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="button button-primary" @click="handleSaveAddNew">Save + Add New</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="button button-secondary" @click="handleSaveClose">Save + Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                newItem: ''
            }
        },
        mounted() {
            this.$refs.itemInput.focus();
        },
        methods: {
            handleSaveAddNew() {
                this.$emit('saved', this.newItem);
                this.newItem = '';
            },
            handleSaveClose() {
                this.$emit('closed', this.newItem);
                this.newItem = '';
            }
        }
    }
</script>