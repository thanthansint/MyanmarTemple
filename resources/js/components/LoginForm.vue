<template>
    <form>
        <input v-model="name" placeholder="Enter Your Name">
        <input v-model="email" placeholder="Enter Your Email">
        <input v-model="password" placeholder="Enter Your Password">
        <button v-on:click="login">Login</button>
    </form>
</template>
<script>
export default {
    name: 'LoginForm',

    methods: {
        login: function() {
             this.$emit('loginEvent', this.name, this.email, this.password);
        }
    }
}
</script>
<style scoped>

</style>
