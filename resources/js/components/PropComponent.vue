<template>
    <div>
        <hr>
        <h1 class="text-gray-500 text-3xl">Prop Component for Users</h1>
        <hr>
        <ul>
            <UserListItemComponent
            v-for="user in users"
            v-bind:key="user.id"
            v-bind:user = 'user'/>
        </ul>
        <hr>
        <p>Вывод из метода usersNames: {{usersNames}}</p>
    </div>
</template>

<script>
    import UserListItemComponent from "./UserListItemComponent";
    export default {
        components: {UserListItemComponent},
        props: [
            'users'
        ],
        /**
         *Поле mounted выполняется после того как приложение смонтировано.
         * */
        mounted() {
            this.usersShow();
        },
        /**
         * Методы в поле methods надо вызывать, сами посебе они не сработают.
         * На пример можно вызвать в поле mounted
         **/
        methods:{
            usersShow(){
                console.log(this.users);
            }
        },
        /**
         * computed методы можно использовать как свойства
         */
        computed: {
            usersNames(){
                return this.users[1].name
            }
        }
    }
</script>
