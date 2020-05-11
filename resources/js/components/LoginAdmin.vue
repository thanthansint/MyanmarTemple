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
            axios.post("/loginProcess", {
                name: name,
                email: email,
                password: password
            })
            .then(
                response => {
                    console.log(response.data.message);
                    this.$cookie.set('adminCookie', 'than', 1);

                    if (response.data.message == 'Successfully Login') {

                        window.location = "/adminHome";
                        console.log("login work");
                    } else {
                        window.location = "/"
                        console.log("login fail");
                    }
                })
            .catch( error => {
                    console.log(error.response);
                    window.location = "/"
                });
        }
    }
}
</script>
<style scoped>

</style>
