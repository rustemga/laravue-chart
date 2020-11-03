<template>
    <div>
        <h1 class="text-gray-500 text-3xl">Prop Component</h1>
        <p v-for="user in users">Name: {{user.name}}</p>
        <p>{{usersNames}}</p>
    </div>
</template>

<script>
    export default {
        props: [
            'users'
        ],
        computed: {
            usersNames(){
                return this.users[1].name
            }
        }
    }
</script>
