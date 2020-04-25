<template>
    <div>
        <p>Admin Login</p>
        <LoginForm @loginEvent="myLoginEvent"/>
    </div>
</template>
<script>
import LoginForm from './LoginForm.vue'
export default {
    name: 'LoginAdmin',

    components: {
        LoginForm: LoginForm
    },
    methods: {
        myLoginEvent: function(name, email, password){
            axios.get("/loginAdmin", {
                name: this.name,
                email: this.email,
                password: this.password
            })
            .then(
                response => {
                    console.log(response.message);
                })
            .catch( error => {
                    console.log(error.response);
                });
        }
    }
}
</script>
<style scoped>

</style>
