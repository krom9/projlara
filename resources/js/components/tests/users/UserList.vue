<template>
    <div class="dropdown-menu" aria-labelledby="dropdown02">
        <a v-for="user in userlist" :key="item.id"
            class="dropdown-item" :href=`users/${user.id}/edit`
        >{{ user.name }}</a>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                userlist: [],
            }
        },
        methods: {
            getUsers() {
                axios.get('/api/users')
                .then(r => this.userlist = r.data)
            }
        },
        created() {
            this.getUsers();
        }
    }
</script>

<style scoped>

</style>
