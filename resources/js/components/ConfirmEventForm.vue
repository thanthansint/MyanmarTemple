<template>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6 center-align"><p class="confirm-text">Are you sure to delete?</p></div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6  center-align">
                <span><div v-on:click="yes" class="blue darken-4 white-text btn-small butt-corner">YES</div></span>
                <span><div v-on:click="no" class="blue darken-4 white-text btn-small butt-corner">NO</div></span>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'ConfirmEventForm',
    props: {
        id: String
    },
    data: function() {
        return {
            deleteid: this.id
        }
    },
    methods: {
        yes: function() {
            axios.post("/deleteEvent", {
                id: this.deleteid
            })
            .then(
                response => {
                    console.log(response.data.message);
                    if (response.data.message == 'Delte Success') {
                        window.location = "/main";
                        console.log("Delete Success");
                    } else {
                        window.location = "/main";
                        console.log("Delete Fail");
                    }
                })
            .catch( error => {
                    console.log(error.response);
                    window.location = "/main";
                });
        },
        no: function() {
            window.location = "/main";
        }
    }
}
</script>
<style lang="scss">
.confirm-text {
    font-size: 20px;
    padding-top: 50px;
}
.butt-corner {
    border: 1px solid red;
    border-radius: 8px;
}
</style>
