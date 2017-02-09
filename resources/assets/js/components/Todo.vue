<style>

</style>
<template>
        <tr>
            <td>{{index + from }}</td>
            <td>
            <template v-if="!editing">
                <!--@dbclick double click to edit-->
                <span @dbclick="edit">{{todo.name}}</span>
            </template>
                <!--@keyup press key esc to close edit and press enter key to save-->
                <input v-model="todo.name" v-sho="editing" @keyup.esc="unedit" @keyup.enter="save">
                <!--icon edit-->
                <i class="fa fa-fw fa-edit" v-show="!editing" @click="edit"></i>
                <!--icon save-->
                <i class="fa fa-fw fa-save" @click="save" v-show="editing"></i>
                <!--icon close-->
                <i class="fa fa-fw fa-close" v-show="editing" @click="unedit"></i>
            </td>
            <td>{{todo.priority}}</td>
            <td>{{todo.done}}</td>
            <td>
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
            </td>
            <td><span class="badge bg-red">55%</span></td>
            <td>
            <span class="btn btn-md btn-info">
                <i class="fa fa-fw fa-edit" @click="edittodo"></i>
            </span>
                <span class="btn btn-md btn-danger">
                <i class="fa fa-fw fa-trash" @click="deletetodo(index)"></i>
            </span>
            </td>
        </tr>
</template>
<script>

export default {
    props: ['todo','index','from'],

    data() {
        return {
            editing: false
        }
    },
    created() {
        console.log('Component todolist created.');
    },
    methods: {
        hello: function() {
            console.log('hello!!!');
        },
        edit: function() {
            this.editing=true;
        },
        unedit: function() {
            this.editing=false;
        },
        save: function() {
            this.editing=false;
        },
        edittodo: function() {
            console.log('TODO editing');
        },
        deletetodo: function(index) {
            console.log('Deleting todo');
            this.$emit('todo-deleted',index);
        },
    }
}

</script>
