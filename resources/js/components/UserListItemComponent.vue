<template>

    <li>{{user.name}}------{{user.email}}</li>
</template>
<script>
    export default {
        props: [
            'user'
        ]
    }
</script>
