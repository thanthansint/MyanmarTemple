<template>
    <form @submit="checkForm">
        <p v-if="errors.length">
            <b>Please correct the following error(s):</b>
            <ul>
                <li v-for="error in errors" :key="error">{{ error }}</li>
            </ul>
        </p>
        <p><input v-model="name" placeholder="Name"></p>
        <p><input v-model="email" placeholder="Email"></p>
        <p><input v-model="password" placeholder="Password" type="password"></p>
        <span><button v-on:click="loginClick" class="blue darken-4 white-text btn-small">Login</button></span>
        <span><button v-on:click="backClick" class="blue darken-4 white-text btn-small">Back</button></span>
    </form>
</template>
<script>
export default {
    name: 'LoginForm',
    data: function() {
        return {
            name: '',
            email: '',
            password: '',
            errors: []
        }
    },
    methods: {
        checkForm: function (e) {
            if (this.name && this.eamil && this.password) {
                return true;
            }

            this.errors = [];

            if (!this.name) {
                this.errors.push('Name required.');
            }
            if (!this.email) {
                this.errors.push('Email required.');
            }
            if (!this.password) {
                this.errors.push('Password required.');
            }

            e.preventDefault();
        },
        loginClick: function() {
            this.$emit('loginEvent', this.name, this.email, this.password);
        },
        backClick: function() {
            window.location = "/";
        }
    }
}
</script>
<style scoped>

</style>
